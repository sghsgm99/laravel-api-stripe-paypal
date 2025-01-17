<?php require_once __DIR__ . "/api-products.php";?>

<p class="rightTop"></p>
<h1>Registrant Alert API Guide</h1> 
<div class="rightTxt2">
<h2>How to make a webservice call to Registrant Alert API?</h2>
		<b>http://www.whoisxmlapi.com/registrant-alert-api/search.php?term1=cinema&username=xxxxx&password=xxxxx</b>
<br/>
<br/>
The Registrant Alert API searches through newly registered and changed domain names to find whois records matching the alert terms.  By default, the result contains
all the domain names registered or dropped today(the day your query is submmited on).    
Your program can monitor each set of terms by submitting a single query each day(after 4AM PST).  Optionally you can set since_date
or days_back to backtrack the alerts up to 12 days back.

The product is ideal for brand protection agents to monitor registrations that contain a trademarked word or product phrase. 
<br/>
<br/>


<table style="width:95%" cellspacing="1" cellpadding="7" border="0" align="center">
              <tr>
			  	
                <td align="left" style="background-color:#C0C0C0">Parameters</td>
           		<td align="left" style="background-color:#C0C0C0">Values</td>
               
              </tr>
              <tr>
                <td align="left">term<b>x</b></td>
           		<td align="left">term to search for, x ranges from 1 to 4, term1 is the first term to search for, 
           		term2 is the second term to search for, the relationship between the terms is AND.  
           		At least one term is required.
           		</td>
              </tr>
              <tr>
                <td align="left">exclude_term<b>x</b></td>
           		<td align="left">term to exclude in the search, x ranges from 1 to 4, exclude_term1 is the first term to exclude, 
           		exclude_term2 is the second term to exclude.   optional.  
           		
           		</td>
              </tr>              
              
              <tr>
                <td align="left">since_date</td>
           		<td align="left">search domains registered/dropped from this date to today(inclusive).  The date format is YYYY-MM-dd(eg. 2012-04-01).   It can be up to 12 days prior to today.   optional.  </td>
              </tr>
              <tr>
                <td align="left">days_back</td>
           		<td align="left">search domains registered/dropped up to 12 days prior to today.  an integer between 0 to 12.  optional.  default to 1</td>
              </tr>
             <tr>
                <td align="left">username</td>
           		<td align="left">required, your account username</td>
              </tr>
                <tr>
                <td align="left">password</td>
           		<td align="left">required, your account password</td>
              </tr>                                                              
</table>              
	<br/>
<h2>Pricing for Registrant Alert API?</h2>
A monthly subscription fee of $<?php echo APIProducts::$api_products['registrant-alert-api']['monthly_price'];?> is required to use Registrant Alert API.  The cost per query is $0.02.  
<a  href="order-api.php" class="ignore_jssm" title="Order Now">Order Now!</a>
</div>




