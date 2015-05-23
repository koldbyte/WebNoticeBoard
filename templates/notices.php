<div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Tags</li>
              <?php
              	include('templates/tags.php'); 
              ?>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
<?php
//include notices here sorted by date
$notices_query = '';
$result = mysql_query($notices_query);

if (!$result) {
    echo "Could not successfully run query from DB ";
    exit;
}

$num=mysql_num_rows($result);

if ($num == 0) {
    echo "No Notices found!";
    exit;
}

while ($row = mysql_fetch_assoc($result)) {
	$url = '';
	include('templates/notice.html.php')
}
mysql_free_result($result);

?>
      <hr>
