<?php 
require_once __DIR__ . "/config_util.php";

$WHOIS_CURRENT_INDEX="@WHOIS_CURRENT_INDEX@";
$WHOIS_HISTORY_INDEX="@WHOIS_HISTORY_INDEX@";
$MAX_DOMAIN_SEARCH_MATCH = 10000;
$MAX_SEARCH_CUTOFF = 10000;
$SHOW_QUERY_TIME = 1;
$SNIPPET_INDEX="@SNIPPET_INDEX@";

$DBUSER = "@WHOIS_CRAWLER_INDEX_DBUSER@";
$DBPASS = "@WHOIS_CRAWLER_INDEX_DBPASS@";
$DBHOST = "@WHOIS_CRAWLER_INDEX_DBHOST@";
$DB="@WHOIS_CRAWLER_INDEX_DB@";

$RW_WHOISAPI_DB     = "@RW_WHOISAPI_DB@";
$RW_WHOISAPI_DBUSER = "@RW_WHOISAPI_DBUSER@";
$RW_WHOISAPI_DBPASS = "@RW_WHOISAPI_DBPASS@";
$RW_WHOISAPI_DBHOST = "@RW_WHOISAPI_DBHOST@";




$RW_WHOISCRAWLER_DB     = "@RW_WHOISCRAWLER_DB@";
$RW_WHOISCRAWLER_DBUSER = "@RW_WHOISCRAWLER_DBUSER@";
$RW_WHOISCRAWLER_DBPASS = "@RW_WHOISCRAWLER_DBPASS@";
$RW_WHOISCRAWLER_DBHOST = "@RW_WHOISCRAWLER_DBHOST@";

$RW_WHOISCRAWLER_UPDATE1_DB     = "@RW_WHOISCRAWLER_UPDATE1_DB@";
$RW_WHOISCRAWLER_UPDATE1_DBUSER = "@RW_WHOISCRAWLER_UPDATE1_DBUSER@";
$RW_WHOISCRAWLER_UPDATE1_DBPASS = "@RW_WHOISCRAWLER_UPDATE1_DBPASS@";
$RW_WHOISCRAWLER_UPDATE1_DBHOST = "@RW_WHOISCRAWLER_UPDATE1_DBHOST@";

$RW_WHOISCRAWLER_UPDATE2_DB     = "@RW_WHOISCRAWLER_UPDATE2_DB@";
$RW_WHOISCRAWLER_UPDATE2_DBUSER = "@RW_WHOISCRAWLER_UPDATE2_DBUSER@";
$RW_WHOISCRAWLER_UPDATE2_DBPASS = "@RW_WHOISCRAWLER_UPDATE2_DBPASS@";
$RW_WHOISCRAWLER_UPDATE2_DBHOST = "@RW_WHOISCRAWLER_UPDATE2_DBHOST@";

$RW_WHOISCRAWLER_UPDATE3_DB     = "@RW_WHOISCRAWLER_UPDATE3_DB@";
$RW_WHOISCRAWLER_UPDATE3_DBUSER = "@RW_WHOISCRAWLER_UPDATE3_DBUSER@";
$RW_WHOISCRAWLER_UPDATE3_DBPASS = "@RW_WHOISCRAWLER_UPDATE3_DBPASS@";
$RW_WHOISCRAWLER_UPDATE3_DBHOST = "@RW_WHOISCRAWLER_UPDATE3_DBHOST@";

$RW_WHOISCRAWLER_SPECIAL_UPDATE1_DB     = "@RW_WHOISCRAWLER_SPECIAL_UPDATE1_DB@";
$RW_WHOISCRAWLER_SPECIAL_UPDATE1_DBUSER = "@RW_WHOISCRAWLER_SPECIAL_UPDATE1_DBUSER@";
$RW_WHOISCRAWLER_SPECIAL_UPDATE1_DBPASS = "@RW_WHOISCRAWLER_SPECIAL_UPDATE1_DBPASS@";
$RW_WHOISCRAWLER_SPECIAL_UPDATE1_DBHOST = "@RW_WHOISCRAWLER_SPECIAL_UPDATE1_DBHOST@";

$RW_WHOISCRAWLER_V1_DB    = "@RW_WHOISCRAWLER_V1_DB@";  
$RW_WHOISCRAWLER_V1_DBUSER = "@RW_WHOISCRAWLER_V1_DBUSER@";
$RW_WHOISCRAWLER_V1_DBPASS = "@RW_WHOISCRAWLER_V1_DBPASS@";
$RW_WHOISCRAWLER_V1_DBHOST = "@RW_WHOISCRAWLER_V1_DBHOST@";

$RW_WHOIS_API_DB2_DB    = "@RW_WHOIS_API_DB2_DB@"; 
$RW_WHOIS_API_DB2_DBUSER = "@RW_WHOIS_API_DB2_DBUSER@";
$RW_WHOIS_API_DB2_DBPASS = "@RW_WHOIS_API_DB2_DBPASS@";
$RW_WHOIS_API_DB2_DBHOST = "@RW_WHOIS_API_DB2_DBHOST@";

$RW_WHOISCRAWLER_CODERO2_DB    = "@RW_WHOISCRAWLER_CODERO2_DB@";
$RW_WHOISCRAWLER_CODERO2_DBUSER = "@RW_WHOISCRAWLER_CODERO2_DBUSER@";
$RW_WHOISCRAWLER_CODERO2_DBPASS = "@RW_WHOISCRAWLER_CODERO2_DBPASS@";
$RW_WHOISCRAWLER_CODERO2_DBHOST = "@RW_WHOISCRAWLER_CODERO2_DBHOST@";

$RW_WHOISCRAWLER_CA_V1_DB = "@RW_WHOISCRAWLER_CA_V1_DB@";
$RW_WHOISCRAWLER_CA_V1_DBUSER = "@RW_WHOISCRAWLER_CA_V1_DBUSER@";
$RW_WHOISCRAWLER_CA_V1_DBPASS = "@RW_WHOISCRAWLER_CA_V1_DBPASS@";
$RW_WHOISCRAWLER_CA_V1_DBHOST = "@RW_WHOISCRAWLER_CA_V1_DBHOST@";

$RW_WHOISCRAWLER_DE_V1_DB = "@RW_WHOISCRAWLER_DE_V1_DB@";
$RW_WHOISCRAWLER_DE_V1_DBUSER = "@RW_WHOISCRAWLER_DE_V1_DBUSER@";
$RW_WHOISCRAWLER_DE_V1_DBPASS = "@RW_WHOISCRAWLER_DE_V1_DBPASS@";
$RW_WHOISCRAWLER_DE_V1_DBHOST = "@RW_WHOISCRAWLER_DE_V1_DBHOST@";

$RW_WHOISCRAWLER_FR_V1_DB = "@RW_WHOISCRAWLER_FR_V1_DB@";
$RW_WHOISCRAWLER_FR_V1_DBUSER = "@RW_WHOISCRAWLER_FR_V1_DBUSER@";
$RW_WHOISCRAWLER_FR_V1_DBPASS = "@RW_WHOISCRAWLER_FR_V1_DBPASS@";
$RW_WHOISCRAWLER_FR_V1_DBHOST = "@RW_WHOISCRAWLER_FR_V1_DBHOST@";

$RW_WHOISCRAWLER_IE_V1_DB = "@RW_WHOISCRAWLER_IE_V1_DB@";
$RW_WHOISCRAWLER_IE_V1_DBUSER = "@RW_WHOISCRAWLER_IE_V1_DBUSER@";
$RW_WHOISCRAWLER_IE_V1_DBPASS = "@RW_WHOISCRAWLER_IE_V1_DBPASS@";
$RW_WHOISCRAWLER_IE_V1_DBHOST = "@RW_WHOISCRAWLER_IE_V1_DBHOST@";

$RW_WHOISCRAWLER_IN_V1_DB = "@RW_WHOISCRAWLER_IN_V1_DB@";
$RW_WHOISCRAWLER_IN_V1_DBUSER = "@RW_WHOISCRAWLER_IN_V1_DBUSER@";
$RW_WHOISCRAWLER_IN_V1_DBPASS = "@RW_WHOISCRAWLER_IN_V1_DBPASS@";
$RW_WHOISCRAWLER_IN_V1_DBHOST = "@RW_WHOISCRAWLER_IN_V1_DBHOST@";

$RW_WHOISCRAWLER_UK_V1_DB = "@RW_WHOISCRAWLER_UK_V1_DB@";
$RW_WHOISCRAWLER_UK_V1_DBUSER = "@RW_WHOISCRAWLER_UK_V1_DBUSER@";
$RW_WHOISCRAWLER_UK_V1_DBPASS = "@RW_WHOISCRAWLER_UK_V1_DBPASS@";
$RW_WHOISCRAWLER_UK_V1_DBHOST = "@RW_WHOISCRAWLER_UK_V1_DBHOST@";

$RW_WHOISCRAWLER_UK_V2_DB = "@RW_WHOISCRAWLER_UK_V2_DB@";
$RW_WHOISCRAWLER_UK_V2_DBUSER = "@RW_WHOISCRAWLER_UK_V2_DBUSER@";
$RW_WHOISCRAWLER_UK_V2_DBPASS = "@RW_WHOISCRAWLER_UK_V2_DBPASS@";
$RW_WHOISCRAWLER_UK_V2_DBHOST = "@RW_WHOISCRAWLER_UK_V2_DBHOST@";


$RW_WHOISCRAWLER_V3_DBUSER ="@RW_WHOISCRAWLER_V3_DBUSER@";
$RW_WHOISCRAWLER_V3_DBPASS ="@RW_WHOISCRAWLER_V3_DBPASS@";
$RW_WHOISCRAWLER_V3_DBHOST ="@RW_WHOISCRAWLER_V3_DBHOST@";

$RW_WHOISCRAWLER_V3_COM_DB = "@RW_WHOISCRAWLER_V3_COM_DB@";
$RW_WHOISCRAWLER_V3_NET_DB = "@RW_WHOISCRAWLER_V3_NET_DB@";
$RW_WHOISCRAWLER_V3_ORG_DB = "@RW_WHOISCRAWLER_V3_ORG_DB@";
$RW_WHOISCRAWLER_V3_INFO_DB = "@RW_WHOISCRAWLER_V3_INFO_DB@";
$RW_WHOISCRAWLER_V3_US_DB = "@RW_WHOISCRAWLER_V3_US_DB@";
$RW_WHOISCRAWLER_V3_BIZ_DB = "@RW_WHOISCRAWLER_V3_BIZ_DB@";
$RW_WHOISCRAWLER_V3_MOBI_DB = "@RW_WHOISCRAWLER_V3_MOBI_DB@";
$RW_WHOISCRAWLER_V3_PRO_DB = "@RW_WHOISCRAWLER_V3_PRO_DB@";
$RW_WHOISCRAWLER_V3_COOP_DB = "@RW_WHOISCRAWLER_V3_COOP_DB@";


$RW_WHOISCRAWLER_V4_DBUSER ="@RW_WHOISCRAWLER_V4_DBUSER@";
$RW_WHOISCRAWLER_V4_DBPASS ="@RW_WHOISCRAWLER_V4_DBPASS@";
$RW_WHOISCRAWLER_V4_DBHOST ="@RW_WHOISCRAWLER_V4_DBHOST@";

$RW_WHOISCRAWLER_V4_COM_DB = "@RW_WHOISCRAWLER_V4_COM_DB@";
$RW_WHOISCRAWLER_V4_NET_DB = "@RW_WHOISCRAWLER_V4_NET_DB@";
$RW_WHOISCRAWLER_V4_ORG_DB = "@RW_WHOISCRAWLER_V4_ORG_DB@";
$RW_WHOISCRAWLER_V4_INFO_DB = "@RW_WHOISCRAWLER_V4_INFO_DB@";
$RW_WHOISCRAWLER_V4_US_DB = "@RW_WHOISCRAWLER_V4_US_DB@";
$RW_WHOISCRAWLER_V4_BIZ_DB = "@RW_WHOISCRAWLER_V4_BIZ_DB@";
$RW_WHOISCRAWLER_V4_MOBI_DB = "@RW_WHOISCRAWLER_V4_MOBI_DB@";
$RW_WHOISCRAWLER_V4_PRO_DB = "@RW_WHOISCRAWLER_V4_PRO_DB@";
$RW_WHOISCRAWLER_V4_COOP_DB = "@RW_WHOISCRAWLER_V4_COOP_DB@";


$RW_WHOISCRAWLER_DBS = array('0'=>db_param_struct($RW_WHOISCRAWLER_DB, $RW_WHOISCRAWLER_DBUSER, $RW_WHOISCRAWLER_DBPASS,$RW_WHOISCRAWLER_DBHOST), //db v2 
							'2000000000'=>db_param_struct($RW_WHOISCRAWLER_V1_DB, $RW_WHOISCRAWLER_V1_DBUSER, $RW_WHOISCRAWLER_V1_DBPASS,$RW_WHOISCRAWLER_V1_DBHOST), //db v1, not available in both index and database, resurrect it someday
							 
							'3000000000'=>db_param_struct($RW_WHOISCRAWLER_UPDATE1_DB, $RW_WHOISCRAWLER_UPDATE1_DBUSER, $RW_WHOISCRAWLER_UPDATE1_DBPASS,$RW_WHOISCRAWLER_UPDATE1_DBHOST),
							'3100000000'=>db_param_struct($RW_WHOISCRAWLER_UPDATE2_DB, $RW_WHOISCRAWLER_UPDATE2_DBUSER, $RW_WHOISCRAWLER_UPDATE2_DBPASS,$RW_WHOISCRAWLER_UPDATE2_DBHOST),
							'3200000000'=>db_param_struct($RW_WHOISCRAWLER_UPDATE3_DB, $RW_WHOISCRAWLER_UPDATE3_DBUSER, $RW_WHOISCRAWLER_UPDATE3_DBPASS,$RW_WHOISCRAWLER_UPDATE3_DBHOST), //updated daily from newly registered domains with whois
						
							'4000000000'=>db_param_struct($RW_WHOISCRAWLER_SPECIAL_UPDATE1_DB, $RW_WHOISCRAWLER_SPECIAL_UPDATE1_DBUSER, $RW_WHOISCRAWLER_SPECIAL_UPDATE1_DBPASS, $RW_WHOISCRAWLER_SPECIAL_UPDATE1_DBHOST), //special one time update that is no longer updated
							
							'5000000000'=>db_param_struct($RW_WHOIS_API_DB2_DB, $RW_WHOIS_API_DB2_DBUSER, $RW_WHOIS_API_DB2_DBPASS, $RW_WHOIS_API_DB2_DBHOST), //old data, availble in index but not in database
							 
							'5200000000'=>db_param_struct($RW_WHOISCRAWLER_CODERO2_DB, $RW_WHOISCRAWLER_CODERO2_DBUSER, $RW_WHOISCRAWLER_CODERO2_DBPASS, $RW_WHOISCRAWLER_CODERO2_DBHOST), //index updated weekly from whoisxmlapi production db on codero2
							 
							'8000000000'=>db_param_struct($RW_WHOISCRAWLER_CA_V1_DB, $RW_WHOISCRAWLER_CA_V1_DBUSER, $RW_WHOISCRAWLER_CA_V1_DBPASS, $RW_WHOISCRAWLER_CA_V1_DBHOST), //start from cctld db
							'8010000000'=>db_param_struct($RW_WHOISCRAWLER_DE_V1_DB, $RW_WHOISCRAWLER_DE_V1_DBUSER, $RW_WHOISCRAWLER_DE_V1_DBPASS, $RW_WHOISCRAWLER_DE_V1_DBHOST),
							'8020000000'=>db_param_struct($RW_WHOISCRAWLER_FR_V1_DB, $RW_WHOISCRAWLER_FR_V1_DBUSER, $RW_WHOISCRAWLER_FR_V1_DBPASS, $RW_WHOISCRAWLER_FR_V1_DBHOST),
							'8030000000'=>db_param_struct($RW_WHOISCRAWLER_IE_V1_DB, $RW_WHOISCRAWLER_IE_V1_DBUSER, $RW_WHOISCRAWLER_IE_V1_DBPASS, $RW_WHOISCRAWLER_IE_V1_DBHOST),
							'8040000000'=>db_param_struct($RW_WHOISCRAWLER_IN_V1_DB, $RW_WHOISCRAWLER_IN_V1_DBUSER, $RW_WHOISCRAWLER_IN_V1_DBPASS, $RW_WHOISCRAWLER_IN_V1_DBHOST),
							'8050000000'=>db_param_struct($RW_WHOISCRAWLER_UK_V1_DB, $RW_WHOISCRAWLER_UK_V1_DBUSER, $RW_WHOISCRAWLER_UK_V1_DBPASS, $RW_WHOISCRAWLER_UK_V1_DBHOST),
							'8060000000'=>db_param_struct($RW_WHOISCRAWLER_UK_V2_DB, $RW_WHOISCRAWLER_UK_V2_DBUSER, $RW_WHOISCRAWLER_UK_V2_DBPASS, $RW_WHOISCRAWLER_UK_V2_DBHOST),
							
							
						   '10000000000'=>db_param_struct($RW_WHOISCRAWLER_V3_COM_DB, $RW_WHOISCRAWLER_V3_DBUSER, $RW_WHOISCRAWLER_V3_DBPASS, $RW_WHOISCRAWLER_V3_DBHOST), //db v3
						   '10200000000'=>db_param_struct($RW_WHOISCRAWLER_V3_NET_DB, $RW_WHOISCRAWLER_V3_DBUSER, $RW_WHOISCRAWLER_V3_DBPASS, $RW_WHOISCRAWLER_V3_DBHOST),
						   '10300000000'=>db_param_struct($RW_WHOISCRAWLER_V3_ORG_DB, $RW_WHOISCRAWLER_V3_DBUSER, $RW_WHOISCRAWLER_V3_DBPASS, $RW_WHOISCRAWLER_V3_DBHOST),
						   '10400000000'=>db_param_struct($RW_WHOISCRAWLER_V3_INFO_DB, $RW_WHOISCRAWLER_V3_DBUSER, $RW_WHOISCRAWLER_V3_DBPASS, $RW_WHOISCRAWLER_V3_DBHOST),
						   '10500000000'=>db_param_struct($RW_WHOISCRAWLER_V3_US_DB, $RW_WHOISCRAWLER_V3_DBUSER, $RW_WHOISCRAWLER_V3_DBPASS, $RW_WHOISCRAWLER_V3_DBHOST),
						   '10600000000'=>db_param_struct($RW_WHOISCRAWLER_V3_BIZ_DB, $RW_WHOISCRAWLER_V3_DBUSER, $RW_WHOISCRAWLER_V3_DBPASS, $RW_WHOISCRAWLER_V3_DBHOST),
						   '10700000000'=>db_param_struct($RW_WHOISCRAWLER_V3_MOBI_DB, $RW_WHOISCRAWLER_V3_DBUSER, $RW_WHOISCRAWLER_V3_DBPASS, $RW_WHOISCRAWLER_V3_DBHOST),
						   '10800000000'=>db_param_struct($RW_WHOISCRAWLER_V3_PRO_DB, $RW_WHOISCRAWLER_V3_DBUSER, $RW_WHOISCRAWLER_V3_DBPASS, $RW_WHOISCRAWLER_V3_DBHOST),
						   '10900000000'=>db_param_struct($RW_WHOISCRAWLER_V3_COOP_DB, $RW_WHOISCRAWLER_V3_DBUSER, $RW_WHOISCRAWLER_V3_DBPASS, $RW_WHOISCRAWLER_V3_DBHOST),		  


						   '11000000000'=>db_param_struct($RW_WHOISCRAWLER_V4_COM_DB, $RW_WHOISCRAWLER_V4_DBUSER, $RW_WHOISCRAWLER_V4_DBPASS, $RW_WHOISCRAWLER_V4_DBHOST), //db V4
						   '11200000000'=>db_param_struct($RW_WHOISCRAWLER_V4_NET_DB, $RW_WHOISCRAWLER_V4_DBUSER, $RW_WHOISCRAWLER_V4_DBPASS, $RW_WHOISCRAWLER_V4_DBHOST),
						   '11300000000'=>db_param_struct($RW_WHOISCRAWLER_V4_ORG_DB, $RW_WHOISCRAWLER_V4_DBUSER, $RW_WHOISCRAWLER_V4_DBPASS, $RW_WHOISCRAWLER_V4_DBHOST),
						   '11400000000'=>db_param_struct($RW_WHOISCRAWLER_V4_INFO_DB, $RW_WHOISCRAWLER_V4_DBUSER, $RW_WHOISCRAWLER_V4_DBPASS, $RW_WHOISCRAWLER_V4_DBHOST),
						   '11500000000'=>db_param_struct($RW_WHOISCRAWLER_V4_US_DB, $RW_WHOISCRAWLER_V4_DBUSER, $RW_WHOISCRAWLER_V4_DBPASS, $RW_WHOISCRAWLER_V4_DBHOST),
						   '11600000000'=>db_param_struct($RW_WHOISCRAWLER_V4_BIZ_DB, $RW_WHOISCRAWLER_V4_DBUSER, $RW_WHOISCRAWLER_V4_DBPASS, $RW_WHOISCRAWLER_V4_DBHOST),
						   '11700000000'=>db_param_struct($RW_WHOISCRAWLER_V4_MOBI_DB, $RW_WHOISCRAWLER_V4_DBUSER, $RW_WHOISCRAWLER_V4_DBPASS, $RW_WHOISCRAWLER_V4_DBHOST),
						   '11800000000'=>db_param_struct($RW_WHOISCRAWLER_V4_PRO_DB, $RW_WHOISCRAWLER_V4_DBUSER, $RW_WHOISCRAWLER_V4_DBPASS, $RW_WHOISCRAWLER_V4_DBHOST),
						   '11900000000'=>db_param_struct($RW_WHOISCRAWLER_V4_COOP_DB, $RW_WHOISCRAWLER_V4_DBUSER, $RW_WHOISCRAWLER_V4_DBPASS, $RW_WHOISCRAWLER_V4_DBHOST),	
						   								 
							'9223372036854775807'  =>false
							
							);

?>


