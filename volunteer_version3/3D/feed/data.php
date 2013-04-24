<rss xmlns:media="http://search.yahoo.com/mrss/" xmlns:atom="http://www.w3.org/2005/Atom" version="2.0">
<channel>
<atom:link href="http://114.212.190.77/alumni/feed" rel="self" type="application/rss+xml"/>;

<?
$page = isset($_GET['p'])?intval($_GET['p']):1;
if($page>1)
{
	echo '<atom:link rel="previous" href="index.php?p='.($page-1).'"/>';}
	echo '<atom:link rel="next" href="index.php?p='.($page+1).'"/>';
	$size = 20;
	$start = ($page - 1)* $size;
	$sql = "select * from 3d_data order desc limit $start,$size";
	$result = mysql_query($sql);
	
	while($row = mysql_fetch_array($result))
	{
	?>
        <item>
        <title><? echo $row['info']?></title>
        <link>remained</link>
        <media:thumbnail url=<? echo $row['small_url']?>>
        <media:content url=<? echo $row['big_url']?>>
        <guid isPermaLink="false">remained</guid>
        </item>
	<?
	}
}
?>
</channel>
</rss>;