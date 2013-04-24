<?php
require_once('include/php/basic.php');
require_once('connections/root_conn.php');
?>
<rss xmlns:media="http://search.yahoo.com/mrss/" xmlns:atom="http://www.w3.org/2005/Atom" version="2.0">
<channel>
<?php
$query = "select * from 3D_data";
$select = mysql_query($query , $root_conn);
while($row = mysql_fetch_assoc($select))
{
?>
	<item>
		<title><?php echo $row['info']?></title>
		<media:thumbnail url="<?php echo $row['url']?>" />
		<media:content url="<?php echo $row['url']?>" type="" />
	</item>
<?php
}
?>

</channel>
</rss>