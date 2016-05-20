<?php
  $contents = file_get_contents("http://www.whoisxmlapi.com//whoisserver/WhoisService?domainName=lspro.com.tr&username=root&password=PASSWORD&outputFormat=JSON");
  //echo $contents;
  $res=json_decode($contents);
  $whoisRecord = $res->WhoisRecord;
  if($whoisRecord){
    echo "Domain name: " . print_r($whoisRecord->domainName,1) ."<br/>";
    echo "Created date: " .print_r($whoisRecord->createdDate,1) ."<br/>";
    echo "Updated date: " .print_r($whoisRecord->updatedDate,1) ."<br/>";
    if($whoisRecord->registrant)echo "Registrant: <br/><pre>" . print_r($whoisRecord->registrant->rawText, 1) ."</pre>";
    print_r($whoisRecord);
  }
?>