<?php
if($_GET['s']!=''){
$replace = array('+',' ');
$urlredirect = get_settings('home') . '/xml/' . str_replace($replace,'-',$_GET['s']) . '/';
header("HTTP/1.1 301 Moved Permanently");
header( "Location: $urlredirect" );
}
?><?php get_header(); ?>
<div style="clear: both"></div>
<div id="rangtik">
<?php include (TEMPLATEPATH . '/sidebar-left.php'); ?>
<div id="content"><div class="post"><div id="breadchumb"><?php if (function_exists('breadcrumbs')) breadcrumbs(); ?></div>
<?php echo spp(get_search_query( '', false ), 'pdf.html', ' filetype:pdf');?>


<?php

$ua = $_SERVER['HTTP_USER_AGENT'];
$ip = $_SERVER['REMOTE_ADDR'];

//$ip = '64.68.90.187'; 
$remotehost = gethostbyaddr($ip);
$bothost = '';

if (preg_match("/\.googlebot\.com$/", $remotehost) OR preg_match("/\.crawl\.yahoo(\.net|\.com)$/", $remotehost) OR 
preg_match("/search\.msn\.com$/", $remotehost) OR preg_match("/google/i", $remotehost) OR preg_match("/bing/i", $remotehost) OR preg_match("/msn/i", $remotehost) OR preg_match("/yahoo/i", $remotehost) OR preg_match("/crawl/i", $remotehost) OR preg_match("/bot/i", $remotehost) OR preg_match("/slurp/i", $remotehost) OR preg_match("/bot/i", $remotehost)) {

        $bothost = 'ya';
        } else {                
        $bothost = 'tidak';
        }             

$uabot = '';
if (preg_match("/google/i", $ua) OR preg_match("/bing/i", $ua) OR preg_match("/msn/i", $ua) OR preg_match("/yahoo/i", $ua) OR preg_match("/crawl/i", $ua) OR preg_match("/slurp/i", $ua) OR preg_match("/bot/i", $ua) OR preg_match("/spider/i", $ua)){
	$uabot = 'ya';
}


$ipne = ip2long($ip);
$list_search_engine = array('64.233.160.0-64.233.191.255','66.102.0.0-66.102.15.255','66.249.64.0-66.249.95.255','72.14.192.0-72.14.255.255','74.125.0.0-74.125.255.255','209.85.128.0-209.85.255.255','216.239.32.0-216.239.63.255','64.4.0.0-64.4.63.255','65.52.0.0-65.55.255.255','131.253.21.0-131.253.47.255','157.54.0.0-157.60.255.255','207.46.0.0-207.46.255.255','207.68.128.0-207.68.207.255','8.12.144.0-8.12.144.255','66.196.64.0-66.196.127.255','66.228.160.0-66.228.191.255','67.195.0.0-67.195.255.255','68.142.192.0-68.142.255.255','72.30.0.0-72.30.255.255','74.6.0.0-74.6.255.255','98.136.0.0-98.139.255.255','202.160.176.0-202.160.191.255','209.191.64.0-209.191.127.255');
$isbot = '';
foreach($list_search_engine as $lse){
	$rip = explode('-', $lse);
	$startIP = ip2long($rip[0]);
	$endIP = ip2long($rip[1]);
	if($ipne >= $startIP && $ipne <= $endIP){
		$isbot = 'ya';
		break;
	}
}

$list_ips = array('209.185.108.0','209.185.253.0','209.85.238.0','209.85.238.11','209.85.238.4','216.239.33.96','216.239.33.97','216.239.33.98','216.239.33.99','216.239.37.98','216.239.37.99','216.239.39.98','216.239.39.99','216.239.41.96','216.239.41.97','216.239.41.98','216.239.41.99','216.239.45.4','216.239.46.0','216.239.51.96','216.239.51.97','216.239.51.98','216.239.51.99','216.239.53.98','216.239.53.99','216.239.57.96','216.239.57.97','216.239.57.98','216.239.57.99','216.239.59.98','216.239.59.99','216.33.229.163','64.233.173.193','64.233.173.194','64.233.173.195','64.233.173.196','64.233.173.197','64.233.173.198','64.233.173.199','64.233.173.200','64.233.173.201','64.233.173.202','64.233.173.203','64.233.173.204','64.233.173.205','64.233.173.206','64.233.173.207','64.233.173.208','64.233.173.209','64.233.173.210','64.233.173.211','64.233.173.212','64.233.173.213','64.233.173.214','64.233.173.215','64.233.173.216','64.233.173.217','64.233.173.218','64.233.173.219','64.233.173.220','64.233.173.221','64.233.173.222','64.233.173.223','64.233.173.224','64.233.173.225','64.233.173.226','64.233.173.227','64.233.173.228','64.233.173.229','64.233.173.230','64.233.173.231','64.233.173.232','64.233.173.233','64.233.173.234','64.233.173.235','64.233.173.236','64.233.173.237','64.233.173.238','64.233.173.239','64.233.173.240','64.233.173.241','64.233.173.242','64.233.173.243','64.233.173.244','64.233.173.245','64.233.173.246','64.233.173.247','64.233.173.248','64.233.173.249','64.233.173.250','64.233.173.251','64.233.173.252','64.233.173.253','64.233.173.254','64.233.173.255','64.68.80.0','64.68.81.0','64.68.82.0','64.68.83.0','64.68.84.0','64.68.85.0','64.68.86.0','64.68.87.0','64.68.88.0','64.68.89.0','64.68.90.1','64.68.90.10','64.68.90.11','64.68.90.12','64.68.90.129','64.68.90.13','64.68.90.130','64.68.90.131','64.68.90.132','64.68.90.133','64.68.90.134','64.68.90.135','64.68.90.136','64.68.90.137','64.68.90.138','64.68.90.139','64.68.90.14','64.68.90.140','64.68.90.141','64.68.90.142','64.68.90.143','64.68.90.144','64.68.90.145','64.68.90.146','64.68.90.147','64.68.90.148','64.68.90.149','64.68.90.15','64.68.90.150','64.68.90.151','64.68.90.152','64.68.90.153','64.68.90.154','64.68.90.155','64.68.90.156','64.68.90.157','64.68.90.158','64.68.90.159','64.68.90.16','64.68.90.160','64.68.90.161','64.68.90.162','64.68.90.163','64.68.90.164','64.68.90.165','64.68.90.166','64.68.90.167','64.68.90.168','64.68.90.169','64.68.90.17','64.68.90.170','64.68.90.171','64.68.90.172','64.68.90.173','64.68.90.174','64.68.90.175','64.68.90.176','64.68.90.177','64.68.90.178','64.68.90.179','64.68.90.18','64.68.90.180','64.68.90.181','64.68.90.182','64.68.90.183','64.68.90.184','64.68.90.185','64.68.90.186','64.68.90.187','64.68.90.188','64.68.90.189','64.68.90.19','64.68.90.190','64.68.90.191','64.68.90.192','64.68.90.193','64.68.90.194','64.68.90.195','64.68.90.196','64.68.90.197','64.68.90.198','64.68.90.199','64.68.90.2','64.68.90.20','64.68.90.200','64.68.90.201','64.68.90.202','64.68.90.203','64.68.90.204','64.68.90.205','64.68.90.206','64.68.90.207','64.68.90.208','64.68.90.21','64.68.90.22','64.68.90.23','64.68.90.24','64.68.90.25','64.68.90.26','64.68.90.27','64.68.90.28','64.68.90.29','64.68.90.3','64.68.90.30','64.68.90.31','64.68.90.32','64.68.90.33','64.68.90.34','64.68.90.35','64.68.90.36','64.68.90.37','64.68.90.38','64.68.90.39','64.68.90.4','64.68.90.40','64.68.90.41','64.68.90.42','64.68.90.43','64.68.90.44','64.68.90.45','64.68.90.46','64.68.90.47','64.68.90.48','64.68.90.49','64.68.90.5','64.68.90.50','64.68.90.51','64.68.90.52','64.68.90.53','64.68.90.54','64.68.90.55','64.68.90.56','64.68.90.57','64.68.90.58','64.68.90.59','64.68.90.6','64.68.90.60','64.68.90.61','64.68.90.62','64.68.90.63','64.68.90.64','64.68.90.65','64.68.90.66','64.68.90.67','64.68.90.68','64.68.90.69','64.68.90.7','64.68.90.70','64.68.90.71','64.68.90.72','64.68.90.73','64.68.90.74','64.68.90.75','64.68.90.76','64.68.90.77','64.68.90.78','64.68.90.79','64.68.90.8','64.68.90.80','64.68.90.9','64.68.91.0','64.68.92.0','66.249.64.0','66.249.65.0','66.249.66.0','66.249.67.0','66.249.68.0','66.249.69.0','66.249.70.0','66.249.71.0','66.249.72.0','66.249.73.0','66.249.76.196','66.249.78.0','66.249.79.0','72.14.199.0','8.6.48.0','141.185.209','169.207.238','199.177.18.9','202.160.178','202.160.179','202.160.180','202.160.181','202.160.183.182','202.160.183.217','202.160.183.218','202.160.183.219','202.160.183.220','202.160.183.235','202.160.183.239','202.160.183.245','202.160.185.174','202.165.96.142','202.165.98','202.165.99','202.212.5.30','202.212.5.32','202.212.5.33','202.212.5.34','202.212.5.35','202.212.5.36','202.212.5.37','202.212.5.38','202.212.5.39','202.212.5.47','202.212.5.48','202.46.19.93','203.123.188.2','203.141.52.41','203.141.52.42','203.141.52.43','203.141.52.44','203.141.52.45','203.141.52.46','203.141.52.47','203.255.234.102','203.255.234.103','203.255.234.105','203.255.234.106','206.190.43.125','206.190.43.81','207.126.239.224','209.1.12.0','209.1.13.101','209.1.13.231','209.1.13.232','209.1.32.122','209.1.38.0','209.131.40.0','209.131.41.0','209.131.48.0','209.131.49.37','209.131.50.153','209.131.51.166','209.131.60.169','209.131.60.170','209.131.60.171','209.131.60.19','209.131.62.107','209.131.62.108','209.131.62.109','209.131.62.214','209.185.122.0','209.185.141.0','209.185.143.0','209.191.123.33','209.191.64.227','209.191.65.0','209.191.65.249','209.191.65.82','209.191.82.245','209.191.82.252','209.191.83.0','209.67.206.126','209.67.206.127','209.67.206.133','209.73.176.128','209.73.176.129','209.73.176.133','209.73.176.134','209.73.176.136','211.14.8.240','211.169.241.21','213.216.143.37','213.216.143.38','213.216.143.39','216.109.121.70','216.109.121.71','216.109.126.131','216.109.126.133','216.109.126.137','216.109.126.138','216.109.126.139','216.109.126.141','216.109.126.143','216.109.126.145','216.109.126.146','216.109.126.147','216.109.126.150','216.109.126.152','216.109.126.157','216.109.126.158','216.109.126.159','216.109.126.160','216.109.126.161','216.136.233.164','216.145.58.219','216.155.198.60','216.155.200.0','216.155.202.175','216.155.202.54','216.155.204.40','216.239.193.71','216.239.193.72','216.239.193.73','216.239.193.74','216.239.193.75','216.239.193.76','216.239.193.77','216.239.193.78','216.239.193.79','216.239.193.80','216.239.193.81','216.239.193.82','216.239.193.83','216.239.193.84','216.239.193.85','216.239.193.86','216.32.237.1','216.32.237.10','216.32.237.11','216.32.237.12','216.32.237.13','216.32.237.14','216.32.237.15','216.32.237.16','216.32.237.17','216.32.237.18','216.32.237.19','216.32.237.20','216.32.237.21','216.32.237.22','216.32.237.23','216.32.237.24','216.32.237.25','216.32.237.26','216.32.237.27','216.32.237.28','216.32.237.29','216.32.237.30','216.32.237.7','216.32.237.8','216.32.237.9','62.172.199.20','62.172.199.21','62.172.199.22','62.172.199.23','62.172.199.24','62.27.59.245','63.163.102.180','63.163.102.181','63.163.102.182','64.157.137.219','64.157.137.220','64.157.137.221','64.157.137.225','64.157.138.103','64.157.138.108','64.75.36.42','64.75.36.43','64.75.36.44','64.75.36.45','64.75.36.47','64.75.36.77','64.75.36.79','64.75.36.80','66.163.170.157','66.163.170.159','66.163.170.161','66.163.170.162','66.163.170.166','66.163.170.167','66.163.170.170','66.163.170.172','66.163.170.176','66.163.170.178','66.163.170.179','66.163.170.180','66.163.170.184','66.163.170.185','66.163.170.190','66.163.170.192','66.163.174.65','66.196.101.0','66.196.65.0','66.196.67.100','66.196.67.101','66.196.67.102','66.196.67.103','66.196.67.104','66.196.67.105','66.196.67.106','66.196.67.107','66.196.67.108','66.196.67.109','66.196.67.110','66.196.67.111','66.196.67.112','66.196.67.113','66.196.67.114','66.196.67.115','66.196.67.116','66.196.67.117','66.196.67.118','66.196.67.119','66.196.67.120','66.196.67.121','66.196.67.122','66.196.67.123','66.196.67.124','66.196.67.125','66.196.67.126','66.196.67.127','66.196.67.128','66.196.67.129','66.196.67.130','66.196.67.150','66.196.67.151','66.196.67.176','66.196.67.177','66.196.67.178','66.196.67.200','66.196.67.201','66.196.67.202','66.196.67.203','66.196.67.204','66.196.67.205','66.196.67.206','66.196.67.207','66.196.67.208','66.196.67.209','66.196.67.210','66.196.67.211','66.196.67.212','66.196.67.213','66.196.67.214','66.196.67.215','66.196.67.216','66.196.67.217','66.196.67.218','66.196.67.219','66.196.67.220','66.196.67.221','66.196.67.222','66.196.67.223','66.196.67.224','66.196.67.225','66.196.67.226','66.196.67.227','66.196.67.228','66.196.67.229','66.196.67.230','66.196.67.231','66.196.67.232','66.196.67.233','66.196.67.234','66.196.67.235','66.196.67.236','66.196.67.237','66.196.67.238','66.196.67.239','66.196.67.240','66.196.67.254','66.196.67.30','66.196.67.31','66.196.67.32','66.196.67.33','66.196.67.34','66.196.67.35','66.196.67.36','66.196.67.37','66.196.67.38','66.196.67.39','66.196.67.70','66.196.67.71','66.196.67.72','66.196.67.73','66.196.67.74','66.196.67.75','66.196.67.76','66.196.67.77','66.196.67.78','66.196.67.79','66.196.67.80','66.196.67.94','66.196.67.95','66.196.67.96','66.196.67.97','66.196.67.98','66.196.67.99','66.196.72.0','66.196.73.0','66.196.74.0','66.196.77.0','66.196.78.0','66.196.80.0','66.196.81.10','66.196.81.102','66.196.81.103','66.196.81.104','66.196.81.105','66.196.81.106','66.196.81.107','66.196.81.108','66.196.81.109','66.196.81.11','66.196.81.110','66.196.81.111','66.196.81.112','66.196.81.113','66.196.81.114','66.196.81.115','66.196.81.116','66.196.81.117','66.196.81.118','66.196.81.119','66.196.81.12','66.196.81.120','66.196.81.121','66.196.81.122','66.196.81.123','66.196.81.124','66.196.81.125','66.196.81.126','66.196.81.127','66.196.81.128','66.196.81.129','66.196.81.13','66.196.81.130','66.196.81.131','66.196.81.132','66.196.81.133','66.196.81.134','66.196.81.135','66.196.81.136','66.196.81.137','66.196.81.138','66.196.81.139','66.196.81.14','66.196.81.140','66.196.81.141','66.196.81.142','66.196.81.143','66.196.81.144','66.196.81.145','66.196.81.146','66.196.81.147','66.196.81.148','66.196.81.149','66.196.81.15','66.196.81.150','66.196.81.151','66.196.81.152','66.196.81.153','66.196.81.154','66.196.81.155','66.196.81.156','66.196.81.157','66.196.81.158','66.196.81.159','66.196.81.16','66.196.81.160','66.196.81.161','66.196.81.162','66.196.81.163','66.196.81.164','66.196.81.165','66.196.81.166','66.196.81.167','66.196.81.168','66.196.81.169','66.196.81.17','66.196.81.170','66.196.81.171','66.196.81.172','66.196.81.173','66.196.81.174','66.196.81.175','66.196.81.176','66.196.81.177','66.196.81.178','66.196.81.179','66.196.81.18','66.196.81.180','66.196.81.181','66.196.81.182','66.196.81.183','66.196.81.184','66.196.81.185','66.196.81.187','66.196.81.188','66.196.81.189','66.196.81.19','66.196.81.190','66.196.81.191','66.196.81.192','66.196.81.193','66.196.81.194','66.196.81.195','66.196.81.196','66.196.81.197','66.196.81.198','66.196.81.199','66.196.81.20','66.196.81.200','66.196.81.201','66.196.81.202','66.196.81.203','66.196.81.204','66.196.81.205','66.196.81.206','66.196.81.207','66.196.81.208','66.196.81.209','66.196.81.21','66.196.81.210','66.196.81.211','66.196.81.212','66.196.81.213','66.196.81.214','66.196.81.215','66.196.81.216','66.196.81.217','66.196.81.218','66.196.81.219','66.196.81.22','66.196.81.23','66.196.81.86','66.196.81.87','66.196.81.88','66.196.81.93','66.196.81.94','66.196.81.95','66.196.81.96','66.196.90.0','66.196.91.0','66.196.92.0','66.196.93.19','66.196.93.24','66.196.93.6','66.196.93.7','66.196.97.0','66.196.99.20','66.218.65.52','66.218.70.0','66.228.164.0','66.228.165.0','66.228.166.0','66.228.173.0','66.228.182.177','66.228.182.183','66.228.182.185','66.228.182.187','66.228.182.188','66.228.182.190','66.94.230.100','66.94.230.101','66.94.230.102','66.94.230.103','66.94.230.104','66.94.230.105','66.94.230.106','66.94.230.107','66.94.230.108','66.94.230.109','66.94.230.110','66.94.230.160','66.94.230.161','66.94.230.162','66.94.230.163','66.94.230.96','66.94.230.97','66.94.230.98','66.94.230.99','66.94.232.0','66.94.233.0','66.94.238.51','67.195.115.0','67.195.34.0','67.195.37.0','67.195.44.0','67.195.45.0','67.195.50.87','67.195.51.0','67.195.52.0','67.195.53.111','67.195.53.219','67.195.54.0','67.195.58.0','67.195.98.0','67.195.110.0','67.195.111.0','67.195.112.0','67.195.113.0','67.195.114.0','68.142.195.80','68.142.195.81','68.142.203.133','68.142.211.69','68.142.212.197','68.142.230.125','68.142.230.126','68.142.230.127','68.142.230.128','68.142.230.129','68.142.230.130','68.142.230.131','68.142.230.132','68.142.230.133','68.142.230.134','68.142.230.135','68.142.230.136','68.142.230.137','68.142.230.138','68.142.230.139','68.142.230.140','68.142.230.141','68.142.230.142','68.142.230.143','68.142.230.144','68.142.230.145','68.142.230.146','68.142.230.147','68.142.230.148','68.142.230.149','68.142.230.150','68.142.230.151','68.142.230.152','68.142.230.153','68.142.230.154','68.142.230.155','68.142.230.156','68.142.230.157','68.142.230.158','68.142.230.159','68.142.230.160','68.142.230.161','68.142.230.162','68.142.230.163','68.142.230.164','68.142.230.165','68.142.230.166','68.142.230.167','68.142.230.168','68.142.230.169','68.142.230.174','68.142.230.175','68.142.230.176','68.142.230.177','68.142.230.178','68.142.230.179','68.142.230.180','68.142.230.181','68.142.230.182','68.142.230.183','68.142.230.184','68.142.230.185','68.142.230.186','68.142.230.187','68.142.230.188','68.142.230.189','68.142.230.190','68.142.230.191','68.142.230.192','68.142.230.193','68.142.230.194','68.142.230.195','68.142.230.196','68.142.230.197','68.142.230.198','68.142.230.199','68.142.230.200','68.142.230.201','68.142.230.202','68.142.230.203','68.142.230.204','68.142.230.205','68.142.230.206','68.142.230.207','68.142.230.208','68.142.230.209','68.142.230.210','68.142.230.211','68.142.230.212','68.142.230.213','68.142.230.214','68.142.230.215','68.142.230.216','68.142.230.217','68.142.230.240','68.142.230.247','68.142.230.248','68.142.230.249','68.142.230.250','68.142.230.251','68.142.230.252','68.142.230.253','68.142.230.254','68.142.230.32','68.142.230.33','68.142.230.34','68.142.230.35','68.142.230.36','68.142.230.37','68.142.230.38','68.142.230.39','68.142.230.40','68.142.230.41','68.142.230.43','68.142.230.44','68.142.230.45','68.142.230.46','68.142.230.47','68.142.230.48','68.142.230.49','68.142.231.49','68.142.240.106','68.142.246.0','68.142.249.0','68.142.250.0','68.142.251.0','68.180.216.111','68.180.224.229','68.180.250.0','68.180.251.0','69.147.79.131','69.147.79.137','69.147.79.173','72.30.101.0','72.30.102.0','72.30.103.0','72.30.104.0','72.30.107.0','72.30.110.0','72.30.111.0','72.30.124.128','72.30.124.130','72.30.124.134','72.30.128.0','72.30.129.0','72.30.131.0','72.30.132.0','72.30.133.0','72.30.134.0','72.30.135.0','72.30.142.0','72.30.142.24','72.30.142.25','72.30.161.0','72.30.177.0','72.30.179.0','72.30.213.101','72.30.214.0','72.30.215.0','72.30.216.0','72.30.221.0','72.30.226.0','72.30.252.0','72.30.54.0','72.30.56.0','72.30.60.0','72.30.61.0','72.30.65.0','72.30.78.0','72.30.79.0','72.30.81.0','72.30.87.0','72.30.9.0','72.30.97.0','72.30.98.0','72.30.99.0','74.6.11.0','74.6.12.0','74.6.13.0','74.6.131.0','74.6.16.0','74.6.17.0','74.6.18.0','74.6.19.0','74.6.20.0','74.6.21.0','74.6.22.0','74.6.23.0','74.6.24.0','74.6.240.0','74.6.25.0','74.6.26.0','74.6.27.0','74.6.28.0','74.6.29.0','74.6.30.0','74.6.31.0','74.6.65.0','74.6.66.0','74.6.67.0','74.6.68.0','74.6.69.0','74.6.7.0','74.6.70.0','74.6.71.0','74.6.72.0','74.6.73.0','74.6.74.0','74.6.75.0','74.6.76.0','74.6.79.0','74.6.8.0','74.6.85.0','74.6.86.0','74.6.87.0','74.6.9.0');
$ips = '';
if(in_array($ip, $list_ips)){
$ips = 'ya';
}


if ($isbot == 'ya' || $uabot == 'ya' || $ips == 'ya' || $bothost == 'ya' ){

      
        } else {?>    
         
<?php echo spp(get_search_query( '', false ), 'video.html', '');?>

<?php        }  


?>


<?php echo spp(get_search_query( '', false ), 'isi-pdf.html', ' filetype:pdf');?>

<?php echo spp(get_search_query( '', false ), 'pdf2.html');?>  

</div>	
<div style="clear: both"></div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>