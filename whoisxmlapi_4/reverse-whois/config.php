<?php
// modified
global $WHOIS_CURRENT_INDEX;
global $WHOIS_HISTORY_INDEX;
global $MAX_DOMAIN_SEARCH_MATCH;
global $MAX_SEARCH_CUTOFF;
global $SHOW_QUERY_TIME;
global $SNIPPET_INDEX;
global $DBUSER;
global $DBPASS;
global $DBHOST;
global $DB;
global $RW_WHOISCRAWLER_DBS;

$WHOIS_CURRENT_INDEX="whois_current_index";
$WHOIS_HISTORY_INDEX="whois_history_index";
$MAX_DOMAIN_SEARCH_MATCH = 10000;
$MAX_SEARCH_CUTOFF = 10000;
$SHOW_QUERY_TIME = 1;
$SNIPPET_INDEX="test_v7_index";

//# database connect information
$DBUSER = "reader_dev";
$DBPASS = "RQgTQxGzzTeA";
$DBHOST = "107.182.166.186:9306";
$DB="mysql41";

$RW_WHOISCRAWLER_DB     = "whoiscrawler2";
$RW_WHOISCRAWLER_DBUSER = "reader_dev";
$RW_WHOISCRAWLER_DBPASS = "RQgTQxGzzTeA";
$RW_WHOISCRAWLER_DBHOST = "192.95.33.45";

$RW_WHOISCRAWLER_UPDATE1_DB     = "whoiscrawler_update_1";
$RW_WHOISCRAWLER_UPDATE1_DBUSER = "reader_dev";
$RW_WHOISCRAWLER_UPDATE1_DBPASS = "RQgTQxGzzTeA";
$RW_WHOISCRAWLER_UPDATE1_DBHOST = "64.150.176.240";

$RW_WHOISCRAWLER_UPDATE2_DB     = "whoiscrawler_update_2";
$RW_WHOISCRAWLER_UPDATE2_DBUSER = "reader_dev";
$RW_WHOISCRAWLER_UPDATE2_DBPASS = "RQgTQxGzzTeA";
$RW_WHOISCRAWLER_UPDATE2_DBHOST = "64.150.176.240";

$RW_WHOISCRAWLER_UPDATE3_DB     = "whoiscrawler_update_10003";
$RW_WHOISCRAWLER_UPDATE3_DBUSER = "reader_dev";
$RW_WHOISCRAWLER_UPDATE3_DBPASS = "RQgTQxGzzTeA";
$RW_WHOISCRAWLER_UPDATE3_DBHOST = "64.150.176.240";

$RW_WHOISCRAWLER_UPDATE4_DB     = "whoiscrawler_update_4";
$RW_WHOISCRAWLER_UPDATE4_DBUSER = "reader_dev";
$RW_WHOISCRAWLER_UPDATE4_DBPASS = "RQgTQxGzzTeA";
$RW_WHOISCRAWLER_UPDATE4_DBHOST = "64.150.176.240";

$RW_WHOISCRAWLER_UPDATE5_DB     = "whoiscrawler_update_5";
$RW_WHOISCRAWLER_UPDATE5_DBUSER = "reader_dev";
$RW_WHOISCRAWLER_UPDATE5_DBPASS = "RQgTQxGzzTeA";
$RW_WHOISCRAWLER_UPDATE5_DBHOST = "64.150.176.240";

$RW_WHOISCRAWLER_UPDATE6_DB     = "whoiscrawler_update_6";
$RW_WHOISCRAWLER_UPDATE6_DBUSER = "reader_dev";
$RW_WHOISCRAWLER_UPDATE6_DBPASS = "RQgTQxGzzTeA";
$RW_WHOISCRAWLER_UPDATE6_DBHOST = "64.150.176.240";

$RW_WHOISCRAWLER_UPDATE7_DB     = "whoiscrawler_update_7";
$RW_WHOISCRAWLER_UPDATE7_DBUSER = "reader_dev";
$RW_WHOISCRAWLER_UPDATE7_DBPASS = "RQgTQxGzzTeA";
$RW_WHOISCRAWLER_UPDATE7_DBHOST = "64.150.176.240";


$RW_WHOISCRAWLER_SPECIAL_UPDATE1_DB     = "whoiscrawler_special_update_1";
$RW_WHOISCRAWLER_SPECIAL_UPDATE1_DBUSER = "reader_dev";
$RW_WHOISCRAWLER_SPECIAL_UPDATE1_DBPASS = "RQgTQxGzzTeA";
$RW_WHOISCRAWLER_SPECIAL_UPDATE1_DBHOST = "64.150.176.240";

$RW_WHOISCRAWLER_V1_DB    = "whoiscrawler";
$RW_WHOISCRAWLER_V1_DBUSER = "reader_dev";
$RW_WHOISCRAWLER_V1_DBPASS = "RQgTQxGzzTeA";
$RW_WHOISCRAWLER_V1_DBHOST = "168.143.87.114";

$RW_WHOIS_API_DB2_DB    = "whoiscrawler";
$RW_WHOIS_API_DB2_DBUSER = "reader_dev";
$RW_WHOIS_API_DB2_DBPASS = "RQgTQxGzzTeA";
$RW_WHOIS_API_DB2_DBHOST = "206.80.35.74";

$RW_WHOISCRAWLER_CODERO2_DB    = "whoiscrawler";
$RW_WHOISCRAWLER_CODERO2_DBUSER = "reader_dev";
$RW_WHOISCRAWLER_CODERO2_DBPASS = "RQgTQxGzzTeA";
$RW_WHOISCRAWLER_CODERO2_DBHOST = "64.150.189.64";

$RW_WHOISCRAWLER_CA_V1_DB = "ca_v1";
$RW_WHOISCRAWLER_CA_V1_DBUSER = "reader_dev";
$RW_WHOISCRAWLER_CA_V1_DBPASS = "RQgTQxGzzTeA";
$RW_WHOISCRAWLER_CA_V1_DBHOST = "198.27.74.137";

$RW_WHOISCRAWLER_DE_V1_DB = "de_v1";
$RW_WHOISCRAWLER_DE_V1_DBUSER = "reader_dev";
$RW_WHOISCRAWLER_DE_V1_DBPASS = "RQgTQxGzzTeA";
$RW_WHOISCRAWLER_DE_V1_DBHOST = "198.27.74.137";

$RW_WHOISCRAWLER_FR_V1_DB = "fr_v1";
$RW_WHOISCRAWLER_FR_V1_DBUSER = "reader_dev";
$RW_WHOISCRAWLER_FR_V1_DBPASS = "RQgTQxGzzTeA";
$RW_WHOISCRAWLER_FR_V1_DBHOST = "198.27.74.137";

$RW_WHOISCRAWLER_IE_V1_DB = "ie_v1";
$RW_WHOISCRAWLER_IE_V1_DBUSER = "reader_dev";
$RW_WHOISCRAWLER_IE_V1_DBPASS = "RQgTQxGzzTeA";
$RW_WHOISCRAWLER_IE_V1_DBHOST = "198.27.74.137";

$RW_WHOISCRAWLER_IN_V1_DB = "in_v1";
$RW_WHOISCRAWLER_IN_V1_DBUSER = "reader_dev";
$RW_WHOISCRAWLER_IN_V1_DBPASS = "RQgTQxGzzTeA";
$RW_WHOISCRAWLER_IN_V1_DBHOST = "198.27.74.137";

$RW_WHOISCRAWLER_UK_V1_DB = "uk_v1";
$RW_WHOISCRAWLER_UK_V1_DBUSER = "reader_dev";
$RW_WHOISCRAWLER_UK_V1_DBPASS = "RQgTQxGzzTeA";
$RW_WHOISCRAWLER_UK_V1_DBHOST = "198.27.74.137";

$RW_WHOISCRAWLER_UK_V2_DB = "uk_v2";
$RW_WHOISCRAWLER_UK_V2_DBUSER = "reader_dev";
$RW_WHOISCRAWLER_UK_V2_DBPASS = "RQgTQxGzzTeA";
$RW_WHOISCRAWLER_UK_V2_DBHOST = "198.27.74.137";


$RW_WHOISCRAWLER_V3_DBUSER ="reader_dev";
$RW_WHOISCRAWLER_V3_DBPASS ="RQgTQxGzzTeA";
$RW_WHOISCRAWLER_V3_DBHOST ="192.95.33.45";

$RW_WHOISCRAWLER_V3_COM_DB = "whoiscrawler_v3_com";
$RW_WHOISCRAWLER_V3_NET_DB = "whoiscrawler_v3_net";
$RW_WHOISCRAWLER_V3_ORG_DB = "whoiscrawler_v3_org";
$RW_WHOISCRAWLER_V3_INFO_DB = "whoiscrawler_v3_info";
$RW_WHOISCRAWLER_V3_US_DB = "whoiscrawler_v3_us";
$RW_WHOISCRAWLER_V3_BIZ_DB = "whoiscrawler_v3_biz";
$RW_WHOISCRAWLER_V3_MOBI_DB = "whoiscrawler_v3_mobi";
$RW_WHOISCRAWLER_V3_PRO_DB = "whoiscrawler_v3_pro";
$RW_WHOISCRAWLER_V3_COOP_DB = "whoiscrawler_v3_coop";


$RW_WHOISCRAWLER_V4_DBUSER ="reader_dev";
$RW_WHOISCRAWLER_V4_DBPASS ="RQgTQxGzzTeA";
$RW_WHOISCRAWLER_V4_DBHOST ="192.95.33.45";

$RW_WHOISCRAWLER_V4_COM_DB = "whoiscrawler_v4_com";
$RW_WHOISCRAWLER_V4_NET_DB = "whoiscrawler_v4_net";
$RW_WHOISCRAWLER_V4_ORG_DB = "whoiscrawler_v4_org";
$RW_WHOISCRAWLER_V4_INFO_DB = "whoiscrawler_v4_info";
$RW_WHOISCRAWLER_V4_US_DB = "whoiscrawler_v4_us";
$RW_WHOISCRAWLER_V4_BIZ_DB = "whoiscrawler_v4_biz";
$RW_WHOISCRAWLER_V4_MOBI_DB = "whoiscrawler_v4_mobi";
$RW_WHOISCRAWLER_V4_PRO_DB = "whoiscrawler_v4_pro";
$RW_WHOISCRAWLER_V4_COOP_DB = "whoiscrawler_v4_coop";

$RW_WHOISCRAWLER_V7_DBUSER ="reader_dev";
$RW_WHOISCRAWLER_V7_DBPASS ="RQgTQxGzzTeA";
$RW_WHOISCRAWLER_V7_DBHOST ="192.95.33.45 ";

$RW_WHOISCRAWLER_V7_COM_DB = "whoiscrawler_v7_com";
$RW_WHOISCRAWLER_V7_NET_DB = "whoiscrawler_v7_net";
$RW_WHOISCRAWLER_V7_ORG_DB = "whoiscrawler_v7_org";
$RW_WHOISCRAWLER_V7_INFO_DB = "whoiscrawler_v7_info";
$RW_WHOISCRAWLER_V7_US_DB = "whoiscrawler_v7_us";
$RW_WHOISCRAWLER_V7_BIZ_DB = "whoiscrawler_v7_biz";
$RW_WHOISCRAWLER_V7_MOBI_DB = "whoiscrawler_v7_mobi";
$RW_WHOISCRAWLER_V7_PRO_DB = "whoiscrawler_v7_pro";
$RW_WHOISCRAWLER_V7_COOP_DB = "whoiscrawler_v7_coop";
$RW_WHOISCRAWLER_V7_ASIA_DB = "whoiscrawler_v7_asia";

$RW_WHOISCRAWLER_V8_DBUSER ="reader_dev";
$RW_WHOISCRAWLER_V8_DBPASS ="RQgTQxGzzTeA";
$RW_WHOISCRAWLER_V8_DBHOST ="192.95.33.45";

$RW_WHOISCRAWLER_V8_COM_DB = "whoiscrawler_v8_com";
$RW_WHOISCRAWLER_V8_NET_DB = "whoiscrawler_v8_net";
$RW_WHOISCRAWLER_V8_ORG_DB = "whoiscrawler_v8_org";
$RW_WHOISCRAWLER_V8_INFO_DB = "whoiscrawler_v8_info";
$RW_WHOISCRAWLER_V8_US_DB = "whoiscrawler_v8_us";
$RW_WHOISCRAWLER_V8_BIZ_DB = "whoiscrawler_v8_biz";
$RW_WHOISCRAWLER_V8_MOBI_DB = "whoiscrawler_v8_mobi";
$RW_WHOISCRAWLER_V8_PRO_DB = "whoiscrawler_v8_pro";
$RW_WHOISCRAWLER_V8_COOP_DB = "whoiscrawler_v8_coop";
$RW_WHOISCRAWLER_V8_ASIA_DB = "whoiscrawler_v8_asia";


$RW_WHOISCRAWLER_DBS = array('0'=>db_param_struct($RW_WHOISCRAWLER_DB, $RW_WHOISCRAWLER_DBUSER, $RW_WHOISCRAWLER_DBPASS,$RW_WHOISCRAWLER_DBHOST), //db v2
							'2000000000'=>db_param_struct($RW_WHOISCRAWLER_V1_DB, $RW_WHOISCRAWLER_V1_DBUSER, $RW_WHOISCRAWLER_V1_DBPASS,$RW_WHOISCRAWLER_V1_DBHOST), //db v1, not available in both index and database, resurrect it someday

							'3000000000'=>db_param_struct($RW_WHOISCRAWLER_UPDATE1_DB, $RW_WHOISCRAWLER_UPDATE1_DBUSER, $RW_WHOISCRAWLER_UPDATE1_DBPASS,$RW_WHOISCRAWLER_UPDATE1_DBHOST),
							'3100000000'=>db_param_struct($RW_WHOISCRAWLER_UPDATE2_DB, $RW_WHOISCRAWLER_UPDATE2_DBUSER, $RW_WHOISCRAWLER_UPDATE2_DBPASS,$RW_WHOISCRAWLER_UPDATE2_DBHOST),
							'3200000000'=>db_param_struct($RW_WHOISCRAWLER_UPDATE3_DB, $RW_WHOISCRAWLER_UPDATE3_DBUSER, $RW_WHOISCRAWLER_UPDATE3_DBPASS,$RW_WHOISCRAWLER_UPDATE3_DBHOST), //updated daily from newly registered domains with whois
							'3300000000'=>db_param_struct($RW_WHOISCRAWLER_UPDATE4_DB, $RW_WHOISCRAWLER_UPDATE4_DBUSER, $RW_WHOISCRAWLER_UPDATE4_DBPASS,$RW_WHOISCRAWLER_UPDATE4_DBHOST), //updated daily from newly registered domains with whois
							'3400000000'=>db_param_struct($RW_WHOISCRAWLER_UPDATE5_DB, $RW_WHOISCRAWLER_UPDATE5_DBUSER, $RW_WHOISCRAWLER_UPDATE5_DBPASS,$RW_WHOISCRAWLER_UPDATE5_DBHOST), //updated daily from newly registered domains with whois
							'3500000000'=>db_param_struct($RW_WHOISCRAWLER_UPDATE6_DB, $RW_WHOISCRAWLER_UPDATE6_DBUSER, $RW_WHOISCRAWLER_UPDATE6_DBPASS,$RW_WHOISCRAWLER_UPDATE6_DBHOST), //updated daily from newly registered domains with whois
							'3600000000'=>db_param_struct($RW_WHOISCRAWLER_UPDATE7_DB, $RW_WHOISCRAWLER_UPDATE7_DBUSER, $RW_WHOISCRAWLER_UPDATE7_DBPASS,$RW_WHOISCRAWLER_UPDATE7_DBHOST), //updated daily from newly registered domains with whois


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

						   '12000000000'=>db_param_struct($RW_WHOISCRAWLER_V7_COM_DB, $RW_WHOISCRAWLER_V7_DBUSER, $RW_WHOISCRAWLER_V7_DBPASS, $RW_WHOISCRAWLER_V7_DBHOST), //db V7
						   '12200000000'=>db_param_struct($RW_WHOISCRAWLER_V7_NET_DB, $RW_WHOISCRAWLER_V7_DBUSER, $RW_WHOISCRAWLER_V7_DBPASS, $RW_WHOISCRAWLER_V7_DBHOST),
						   '12300000000'=>db_param_struct($RW_WHOISCRAWLER_V7_ORG_DB, $RW_WHOISCRAWLER_V7_DBUSER, $RW_WHOISCRAWLER_V7_DBPASS, $RW_WHOISCRAWLER_V7_DBHOST),
						   '12400000000'=>db_param_struct($RW_WHOISCRAWLER_V7_INFO_DB, $RW_WHOISCRAWLER_V7_DBUSER, $RW_WHOISCRAWLER_V7_DBPASS, $RW_WHOISCRAWLER_V7_DBHOST),
						   '12500000000'=>db_param_struct($RW_WHOISCRAWLER_V7_US_DB, $RW_WHOISCRAWLER_V7_DBUSER, $RW_WHOISCRAWLER_V7_DBPASS, $RW_WHOISCRAWLER_V7_DBHOST),
						   '12600000000'=>db_param_struct($RW_WHOISCRAWLER_V7_BIZ_DB, $RW_WHOISCRAWLER_V7_DBUSER, $RW_WHOISCRAWLER_V7_DBPASS, $RW_WHOISCRAWLER_V7_DBHOST),
						   '12700000000'=>db_param_struct($RW_WHOISCRAWLER_V7_MOBI_DB, $RW_WHOISCRAWLER_V7_DBUSER, $RW_WHOISCRAWLER_V7_DBPASS, $RW_WHOISCRAWLER_V7_DBHOST),
						   '12800000000'=>db_param_struct($RW_WHOISCRAWLER_V7_PRO_DB, $RW_WHOISCRAWLER_V7_DBUSER, $RW_WHOISCRAWLER_V7_DBPASS, $RW_WHOISCRAWLER_V7_DBHOST),
						   '12900000000'=>db_param_struct($RW_WHOISCRAWLER_V7_COOP_DB, $RW_WHOISCRAWLER_V7_DBUSER, $RW_WHOISCRAWLER_V7_DBPASS, $RW_WHOISCRAWLER_V7_DBHOST),
						   '12950000000'=>db_param_struct($RW_WHOISCRAWLER_V7_ASIA_DB, $RW_WHOISCRAWLER_V7_DBUSER, $RW_WHOISCRAWLER_V7_DBPASS, $RW_WHOISCRAWLER_V7_DBHOST),


 						'13000000000'=>db_param_struct($RW_WHOISCRAWLER_V8_COM_DB, $RW_WHOISCRAWLER_V8_DBUSER, $RW_WHOISCRAWLER_V8_DBPASS, $RW_WHOISCRAWLER_V8_DBHOST), //db V8
						   '13200000000'=>db_param_struct($RW_WHOISCRAWLER_V8_NET_DB, $RW_WHOISCRAWLER_V8_DBUSER, $RW_WHOISCRAWLER_V8_DBPASS, $RW_WHOISCRAWLER_V8_DBHOST),
						   '13300000000'=>db_param_struct($RW_WHOISCRAWLER_V8_ORG_DB, $RW_WHOISCRAWLER_V8_DBUSER, $RW_WHOISCRAWLER_V8_DBPASS, $RW_WHOISCRAWLER_V8_DBHOST),
						   '13400000000'=>db_param_struct($RW_WHOISCRAWLER_V8_INFO_DB, $RW_WHOISCRAWLER_V8_DBUSER, $RW_WHOISCRAWLER_V8_DBPASS, $RW_WHOISCRAWLER_V8_DBHOST),
						   '13500000000'=>db_param_struct($RW_WHOISCRAWLER_V8_US_DB, $RW_WHOISCRAWLER_V8_DBUSER, $RW_WHOISCRAWLER_V8_DBPASS, $RW_WHOISCRAWLER_V8_DBHOST),
						   '13600000000'=>db_param_struct($RW_WHOISCRAWLER_V8_BIZ_DB, $RW_WHOISCRAWLER_V8_DBUSER, $RW_WHOISCRAWLER_V8_DBPASS, $RW_WHOISCRAWLER_V8_DBHOST),
						   '13700000000'=>db_param_struct($RW_WHOISCRAWLER_V8_MOBI_DB, $RW_WHOISCRAWLER_V8_DBUSER, $RW_WHOISCRAWLER_V8_DBPASS, $RW_WHOISCRAWLER_V8_DBHOST),
						   '13800000000'=>db_param_struct($RW_WHOISCRAWLER_V8_PRO_DB, $RW_WHOISCRAWLER_V8_DBUSER, $RW_WHOISCRAWLER_V8_DBPASS, $RW_WHOISCRAWLER_V8_DBHOST),
						   '13900000000'=>db_param_struct($RW_WHOISCRAWLER_V8_COOP_DB, $RW_WHOISCRAWLER_V8_DBUSER, $RW_WHOISCRAWLER_V8_DBPASS, $RW_WHOISCRAWLER_V8_DBHOST),
							'13950000000'=>db_param_struct($RW_WHOISCRAWLER_V8_ASIA_DB, $RW_WHOISCRAWLER_V8_DBUSER, $RW_WHOISCRAWLER_V8_DBPASS, $RW_WHOISCRAWLER_V8_DBHOST),

							'9223372036854775807'  =>false

							);
function db_param_struct($db, $username, $password, $host){
	return array('db'=>$db, 'username'=>$username,'password'=>$password, 'db_host'=>$host);
}

function connect_to_whoiscrawler_index_db() {
  global $DBHOST,$DB, $DBUSER, $DBPASS;

  if (!mysql_connect($DBHOST, $DBUSER, $DBPASS)) {
    // couldn't connect
    error_log( "could not connect ($DBHOST)");
    return false;
  }

  return true;
}
function connect_to_whoiscrawler_index_db_i() {
  global $DBHOST,$DB, $DBUSER, $DBPASS;

  $link = mysqli_connect($DBHOST, $DBUSER, $DBPASS);
  if ( mysqli_connect_errno() )die ( "connect failed: " . mysqli_connect_error() );
  return $link;
}

function connect_to_rw_whoiscrawler_db($whois_record_id=0) {
  global $RW_WHOISCRAWLER_DBS;

	$cur_db_info=$RW_WHOISCRAWLER_DBS['0'];
	$prev_val=$RW_WHOISCRAWLER_DBS['0'];
	foreach($RW_WHOISCRAWLER_DBS as $min_id=>$db_info){

		if($whois_record_id<$min_id){

			$cur_db_info=$prev_val;
			break;
		}
		$prev_val=$db_info;
	}
//	print_r($cur_db_info);
  $res = mysql_connect($cur_db_info['db_host'], $cur_db_info['username'], $cur_db_info['password']);

  if (!$res) {
    // couldn't connect
    error_log( "could not connect (" . $cur_db_info['db_host'] . ")");
    return false;
  }
  if (!mysql_select_db($cur_db_info['db'])) {
    // couldn't connect
    error_log("could not select (" . $cur_db_info['db'] .")");
    return $res;
  }
  return $res;
}


?>