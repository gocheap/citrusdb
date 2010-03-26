<?php   
// Copyright (C) 2002-2005  Paul Yasi <paul@citrusdb.org>
// read the README file for more information

/*----------------------------------------------------------------------------*/
// Check for authorized accesss
/*----------------------------------------------------------------------------*/
if(constant("INDEX_CITRUS") <> 1){
	echo "You must be logged in to run this.  Goodbye.";
	exit;	
}

if (!defined("INDEX_CITRUS")) {
	echo "You must be logged in to run this.  Goodbye.";
        exit;
}


if (!isset($base->input['ship'])) { $base->input['ship'] = ""; }
if (!isset($base->input['return'])) { $base->input['return'] = ""; }

// GET Variables
$ship = $base->input['history'];
$return = $base->input['inventory'];

if ($ship) {
  echo "<h3>$l_shipinventory</h3>";
  
  // get the count of items in new inventory
  $query = "SELECT count(*) AS newcount WHERE status = 'new'";
  $DB->SetFetchMode(ADODB_FETCH_ASSOC);
  $result = $DB->Execute($query) or die ("$l_queryfailed");
  $myresult = $result->fields;
  $newcount = $myresult['newcount'];

  // get the count of items in used inventory
  $query = "SELECT count(*) AS usedcount WHERE status = 'used'";
  $DB->SetFetchMode(ADODB_FETCH_ASSOC);
  $result = $DB->Execute($query) or die ("$l_queryfailed");
  $myresult = $result->fields;
  $usedcount = $myresult['usedcount'];

  echo "$newinventory: $newcount, $usedinventory: $usedcount";

  // TODO: print a form that asks for info about what they want to ship

  /*
   serial_number
   from new or used inventory
   sale type
   shipping tracking number
   shipping date
  */ 

  
 } else if ($return) {

  // TODO: put this inventory into a return status
  

  // TODO: make an new entry in inventory to put this item in under a used status
  
 }



?>

