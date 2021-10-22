<?php
// this php file (example saved as name is vCardDL.php) is placed in my html subdirectory
//
header('Content-Type: application/octet-stream');
// the above line is needed or else the .vcf file will be downloaded as a .htm file
header('Content-disposition: attachment; filename="xxxxxxxxxx.vcf"');
//
//header('Content-type: application/vcf'); remove this so android doesn't complain that it does not have a valid application
readfile('http://thechinsells.com/files/937026/Ed_Urbaniak.vcf');
//The above is the parth to where the file is located - if in same directory as the php, then just the file name
?>
