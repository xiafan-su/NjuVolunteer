

<?php

$_BASE_PATH = "../../../";

include_once( $_BASE_PATH.'sys/core/init.inc.php');

$wall = new PhotoWall();
$data = $wall->get_photo();

?>

<rss xmlns:media="http://search.yahoo.com/mrss/"  version="2.0">
	<channel>
		<?php foreach( $data as $rec ) { ?>
		<item>
				<title><?php  echo $rec['info'] ?></title>
				<media:thumbnail url="<?php  echo "../../Upload/picture/".$rec['url'] ?>" />
				<media:content url="<?php  echo "../../Upload/picture/".$rec['url'] ?>" type="" />
		</item>
		<?php } ?>
	</channel>
</rss>