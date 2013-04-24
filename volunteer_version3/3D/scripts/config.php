<?php 
$durl = 'localhost'; 
$dname = 'alumni';
$dlogname = 'root';
$dlogpass ='root';
$link=mysql_connect($durl,$dlogname,$dlogpass); 
if (!$link){die('Could not connect: ' . mysql_error());}
mysql_select_db($dname, $link);
mysql_query('set names utf8');?>