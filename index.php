<?php
start_session();
include('includes/db.php');

//start html page
//include header page
include('templates/header.php');
//show main page content
if($_GET['page']=='rss') {
	//show rss list
	include('templates/rss.php');
}
else {
// show notices recent
	include('templates/notices.php');
}

//show footer
include('templates/footer.php');


?>

