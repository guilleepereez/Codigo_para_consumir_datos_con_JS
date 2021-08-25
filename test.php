<?php
$menu = new stdClass();
$menuBody = new stdClass();
$menuItem = new stdClass();
$menuItem1 = new stdClass();
$menuItem2 = new stdClass();
$menuItem3 = new stdClass();

//Menu item 1
$menuItem1 -> value = "New";
$menuItem1 -> onclick = "CreateNewDoc()";

//Menu item 2
$menuItem2 -> value = "Open";
$menuItem2 -> onclick = "OpenDoc()";

//Menu item 3
$menuItem3 -> value = "Close";
$menuItem3 -> onclick = "CloseDoc()";


$menuItemsArray = array($menuItem1, $menuItem2, $menuItem3);
$menuItem->menuitem = $menuItemsArray;

$menuBody -> id = "file";
$menuBody -> value = "File";
$menuBody -> popup = $menuItem;

$menu-> menu = $menuBody; 
$responseJson = json_encode($menu);
echo $responseJson;
?>