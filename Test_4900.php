<?php

/**
*
* Displays where_are_data.py on my local server 
*/
$command = escapeshellcmd('python /Applications/MAMP/htdocs/where_are_data.py');
$output = shell_exec($command);
echo "<iframe src = '$output' height = '100%' width = '100%'></iframe>";
?>
