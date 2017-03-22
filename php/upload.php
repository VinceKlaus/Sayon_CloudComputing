<?php
if( $_FILES['file']['name'] != "" )
{
copy( $_FILES['file']['name'], "/var/www/html" ) or
die( "Could not copy file!");
}
else
{
die("No file specified!");
}
?>

