<?php
include('includes/db.php');
include('includes/functions.php');

$tags_query = '';
$result = mysql_query($tags_query);

if (!$result) {
    echo "Could not successfully run query from DB ";
    exit;
}

$num=mysql_num_rows($result);

if ($num == 0) {
    echo "No tags found!";
    exit;
}

var tags[];
while ($row = mysql_fetch_assoc($result)) {
    $tags[] = explode(' ',$row["userid"]);
}
//tags stored in a multidimensional array
//flatten it
array_flat( $tags, $s = array( ), $l = 0 )

// While a row of data exists, put that row in $row as an associative array
// Note: If you're expecting just one row, no need to use a loop
// Note: If you put extract($row); inside the following loop, you'll
//       then create $userid, $fullname, and $userstatus


mysql_free_result($result);


echo '<div class="well sidebar-nav">';
echo '            <ul class="nav nav-list">';
echo '              <li class="nav-header">TAGS</li>';
for($i=0;$i<count($tags);$i++){
	echo '<a href="#">&nbsp; '.$tags[i].' &nbsp;</a>';
}
              
echo '            </ul>';
echo '          </div><!--/.well -->';
?>
