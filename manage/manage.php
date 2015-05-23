<?php

require_once('../preheader.php'); // <-- this include file MUST go first before any HTML/output
#the code for the class
include_once ('../ajaxCRUD.class.php'); // <-- this include file MUST go first before any HTML/output
#create an instance of the class
$tblFriend = new ajaxCRUD("Notices", "notice", "id", "../");
?>
<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<?php 	$tblFriend->insertH?>

	</body>
</html>eader(); ?>

		<!-- these js/css includes are ONLY to make the calendar widget work (fldDateMet);
			 these includes are not necessary for the class to work!! -->
		<link rel="stylesheet" href="includes/jquery.ui.all.css">
		<script src="includes/jquery.ui.core.js"></script>
		<!--script src="includes/jquery.ui.widget.js"></script-->
		<script src="includes/jquery.ui.datepicker.js"></script>
	</head>

<?php

	$tblFriend->displayAs("id", "ID");
	$tblFriend->displayAs("title", "Title");
	$tblFriend->displayAs("content", "Content");
	$tblFriend->displayAs("description", "Description");
	$tblFriend->displayAs("pubdate", "Date");
	$tblFriend->displayAs("tags", "Tags");
	$tblFriend->displayAs("file", "File");
	
	$tblFriend->setLimit(2);
	
	$tblFriend->addAjaxFilterBoxAllFields();
	
	$tblFriend->setFileUpload('file','uploads/','uploads/');
	
	$tblFriend->modifyFieldWithClass("pub_date", "datepicker");
	
	$tblFriend->modifyFieldWithClass("title", "required");
	$tblFriend->modifyFieldWithClass("content", "required");
	$tblFriend->modifyFieldWithClass("pub_date", "required");
	
	$tblFriend->showTable();
	
	?>

	</body>
</html>
