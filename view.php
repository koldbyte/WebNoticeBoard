<?php
start_session();
include('includes/db.php');

//start html page
//include header page
include('templates/header.php');
//show main page content
// show the notice 
if(isset($_GET['id']){
	//show the notice here with id = $id
	$notice_query = '';
	if (!$result) {
    	echo "Could not successfully run query from DB ";
    	exit;
	}

	$num=mysql_num_rows($result);

	if ($num != 1) {
    	echo "No notice with specific id found!";
    	exit;
	}

	$row = mysql_fetch_assoc($result)
	$content = $row['content'];
	$file = $row['file'];
    	include('templates/notice.html.php');
	}
}

else echo 'No id is specified. Go to Home and try Again!';
//show footer
include('templates/footer.php');
?>

