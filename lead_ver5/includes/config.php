<?php
$api_url = "http://www.contrib.com/api/";
require('curl_client.php');
$max_redirect = 3;  // Skipable: default => 3
$client = new Curl_Client(array(

	CURLOPT_FRESH_CONNECT => 1,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_USERAGENT => ''

), $max_redirect);


$domain = $_SERVER["HTTP_HOST"]."".$_SERVER['REQUEST_URI'];//input sitename without www

if(stristr($domain, '~') ===FALSE) {
	$domain = $_SERVER["HTTP_HOST"];
    $domain = str_replace("http://","",$domain);
	$domain = str_replace("www.","",$domain);
	$key = md5($domain);
}else {
    $key = md5('vnoc.com');
   $d = explode('~',$domain);
   $user = str_replace('/','',$d[1]);
   $url = $api_url.'getdomainbyusername?username='.$user.'&key='.$key;
   $client->get($url);
   $result = $client->currentResponse('body');
   $data_domain = json_decode($result,true);
   $error = 0;
   $domain =   $data_domain[0]['domain'];
	
}





$url = $api_url.'getdomaininfo?domain='.$domain.'&key='.$key;
$client->get($url);
$result = $client->currentResponse('body');
$data_domain = json_decode($result,true);
$error = 0;
if (!$data_domain['error'])
       {
            $domainid = $data_domain[0]['DomainId'];
            $domainname = $data_domain[0]['DomainName'];
            $memberid = $data_domain[0]['MemberId'];
            $title = $data_domain[0]['Title'];
            $logo = $data_domain[0]['Logo'];
            $description = $data_domain[0]['Description'];
            $account_ga = $data_domain[0]['AccountGA'];
			
			$client2 = new Curl_Client(array(

				CURLOPT_FRESH_CONNECT => 1,
				CURLOPT_TIMEOUT => 30,
				CURLOPT_USERAGENT => ''

			), $max_redirect);
			
			$url2 = $api_url.'getfollowver2info?domainid='.$domainid.'&key='.$key;
			$client2->get($url2);
			$result2 = $client2->currentResponse('body');
			$data_domain2 = json_decode($result2,true);
			
			if(!$data_domain2['error']){
				$introduction = $data_domain2[0]['Introduction'];
				$background_image = $data_domain2[0]['BackgroundImage'];
				$about = $data_domain2[0]['About'];
			}
			
      	}else {
      		$error++;
}


$url = $api_url.'getfollowedsites?key='.$key;
$client->get($url);
$result = $client->currentResponse('body');
$data_domains = json_decode($result,true);



$url = $api_url.'getdomainfollowcount?domain='.$domain.'&key='.$key;
$client->get($url);
$result = $client->currentResponse('body');
$data_follow_count = json_decode($result,true);
if (!$data_follow_count['error']){
	$follow_count = ($data_follow_count[0]['total'] + 1 ) * 25;
}else {
	$follow_count = 1 * 25;
}



$url = $api_url.'getsignupformdata';
$client->get($url);
$result = $client->currentResponse('body');
$data_signup = json_decode($result,true);
if (!$data_signup['error']){
	$roles = $data_signup['roles'];
	$intentions = $data_signup['intentions'];
	$industries = $data_signup['industries'];
	$experiences = $data_signup['experiences'];
}


//get domain affiliate id
$url = $api_url.'getdomainaffiliateid?domain='.$domain.'&key='.$key;
$client->get($url);
$result = $client->currentResponse('body');
$data_domain_affiliate = json_decode($result,true);
if (!$data_domain_affiliate['error']){
	$domain_affiliate_id = $data_domain_affiliate['affiliate_id'];
}else {
	$domain_affiliate_id = '391'; //contrib.com affiliate id
}
$domain_affiliate_link = 'http://referrals.contrib.com/idevaffiliate.php?id='.$domain_affiliate_id.'&url=http://www.contrib.com/signup/firststep?domain='.$domain;




/**
	generate robots.txt if not exist
**/
$filename = '/robots.txt';
if(!(file_exists($filename))) {
    $my_file = 'robots.txt';
	$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
	$data = '---BEGIN ROBOTS.TXT ---
User-Agent: *
Disallow:

Sitemap: http://'.$domain.'/sitemap.html
--- END ROBOTS.TXT ----';
	fwrite($handle, $data);
}

?>