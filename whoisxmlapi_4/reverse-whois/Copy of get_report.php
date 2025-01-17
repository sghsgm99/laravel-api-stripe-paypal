<?php
require_once(__DIR__ ."/../CONFIG.php");
if(isset($V2)) require_once dirname(__FILE__) . "/../reverse-whois-v2/config.php";
  else if(isset($V1)){ 
  	require_once dirname(__FILE__) . "/../reverse-whois-v1/config.php";
  }
else require_once dirname(__FILE__) . "/config.php";
require_once(__DIR__ ."/../util.php");
require_once(__DIR__ ."/../users/whois_server.inc");
require_once(__DIR__ ."/../httputil.php");
require_once(__DIR__ ."/../models/report.php");
require_once(__DIR__ ."/../models/report_util.php");
require_once(__DIR__ ."/../util/base_conversion.php");

function output_json_error($obj){
  echo json_encode($obj);
}
function get_num_tokens($str, $delim){
  return count(explode($delim, $str));
}
function get_report_price($options){
  return $options['num_domains'] * 10;  
}


$report_id = $_REQUEST['report_id'];
if(empty($report_id)){
  output_json_error(array("error"=>"report_id is missing."));
  exit;
}
my_session_start();
$username = false;
if(isset($_SESSION['myuser'])){
   $user = $_SESSION['myuser'];

   if($user){
    
     $username = $user->username;
   }
}
if(!$username){
  output_json_error(array("error"=>"you must login to view your whois reports."));
  exit;
}



$page = $_GET['page']; // get the requested page 
$limit = $_GET['rows']; // get how many rows we want to have into the grid 
$sidx = $_GET['sidx']; // get index row - i.e. user click to sort 
$sord = $_GET['sord']; // get the direction 
if(!$sidx) $sidx = 'id'; 
if(!$limit)$limit=10;

// connect to the database 
if(!connect_to_whoisserver_db())return;

//if ($page > $total_pages) 
//  $page=$total_pages; 
$start = $limit*$page - $limit; 
if($start<0)$start=0;
$report_util = new report_util();
$report = $report_util->get_report_by_id(StringUtil::dehash_dn($report_id));
if($report === false){
  output_json_error(array("error"=>"Failed to get report ".$report_util->error));
  exit;
}

$whois_record_path =  'reverse-whois/whois_record.php';
$report_id = StringUtil::hash_dn($report->report_id);
//print_r($report);

if($report->search_type == 2){
  $index = 0;   
   $max = min($start+$limit, count($report->domain_names)-1);
   for($i=$start;$i<=$max;$i++){
      $domain_name = $report->domain_names[$i];
      $encoded_domain = StringUtil::hash_dn($domain_name); 
      //$crc=sprintf("%u",crc32($domain_name));
      $crc = base_base2dec(substr(md5(strtolower($domain_name)),0,15), 16, 10);
      connect_to_whoiscrawler_index_db();
      $sub_query="select * from whois_history_index where domain_id = $crc order by audit_updated_date desc";
     // echo "$domain_name, $crc<br/>";
      $sub_result = mysql_query($sub_query) or die("Couldn t execute query.".mysql_error() . " <br/>query:$sub_query");
        
      $response->rows[$index]['id']=$i; 
      $whois_records = array($whois_records = "<a href=\"".
            build_url($whois_record_path, array('d'=>$encoded_domain, 'c'=>1,  'r'=>$report_id)) 
                                                            
            . "\" class=\"whois_record\">" . "Current" . '</a>');
      while($row = mysql_fetch_array($sub_result, MYSQL_ASSOC)){
          $whois_records[] = "<a href=\"".
            build_url($whois_record_path, array('d'=>$encoded_domain, 'w'=>$row['audit_updated_date'], 'r'=>$report_id)) 
                                                               
                                                         
            . "\" class=\"whois_record\">" . date('m/d/Y',$row['audit_updated_date']) . '</a>';
      }
   
            
      $response->rows[$i]['cell']=array($domain_name, implode(' ',$whois_records)); 
      
   }
}
else{
   $index = 0;   
   $max = min($start+$limit, count($report->domain_names)-1);
   for($i=$start;$i<=$max;$i++){
      $domain_name = $report->domain_names[$i];
      $encoded_domain = StringUtil::hash_dn($domain_name); 
      
      $response->rows[$index]['id']=$i; 
      $whois_records = "<a href=\"".
            build_url($whois_record_path, array('d'=>$encoded_domain, 'c'=>1,  'r'=>$report_id)) 
                                                            
            . "\" class=\"whois_record\">" . 'Current' . '</a>';
            
      $response->rows[$index++]['cell']=array($domain_name, $whois_records); 
      
   }
}


$response->page = $page; 

$response->records = count($report->domain_names); 
$response->total = ceil($response->records/$limit); 
echo json_encode($response); 
 
?>
