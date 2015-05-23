<?php
	require_once('../preheader.php');

	#the code for the class
	include ('../ajaxCRUD.class.php');

    #this one line of code is how you implement the class
    ########################################################
    ##

	$wills = new ajaxCRUD("Item", "wills2", "id", "../");
	//$wills->setCSSFile('csstest1.css');

	$wills->omitPrimaryKey();

	$wills->displayAs("name", "Name");
	$wills->displayAs("fname", "Forename");
	$wills->displayAs("year", "Year");
	$wills->displayAs("par", "Parish");
	$wills->displayAs("alias", "Alias");
	$wills->displayAs("reg", "Reg");
	$wills->displayAs("ref", "Ref");
	$wills->displayAs("film", "Film");
	$wills->displayAs("will", "Will");


	$wills->disallowDelete();
	//$wills->disallowAdd();
	$wills->disallowEdit("name");
	$wills->disallowEdit("fname");
	$wills->disallowEdit("year");
	$wills->disallowEdit("par");
	$wills->disallowEdit("alias");
	$wills->disallowEdit("reg");
	$wills->disallowEdit("ref");
	$wills->disallowEdit("film");


	$wills->setLimit(10);
	#$wills->turnOffAjaxEditing();
	$wills->addAjaxFilterBoxAllFields();
	$wills->setAjaxFilterBoxSize('alias', 6);
	$wills->setAjaxFilterBoxSize('reg', 3);
	$wills->setAjaxFilterBoxSize('par', 3);


	#$wills->addTableBorder();
	#$wills->addButton("Add Page", "page_management.php");
	$wills->formatFieldWithFunction('name', 'makeBlue');
	$wills->formatFieldWithFunction('alias', 'makeBlue');
	#$wills->formatFieldWithFunction('name_known_by', 'makeBold');
	$wills->formatFieldWithFunction('wills', 'makeURL');


	#actually show to the table
	$wills->showTable();
	function makeBold($val){
	return "<b>$val</b>";
	}
	function makeBlue($val){
	return "<span style='color: blue;'>$val</span>";
	}


?>