<?php 

/*
AUTOLOAD CLASSES
*/

$total_files = count($ms_files);

/*
FOR LOOP TO INCLUDE ALL FILES REQUIRED
*/

for ($i = 0; $i < $total_files; $i++) {

include(MSF.$ms_files[$i].".php");

}

?>