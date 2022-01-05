<?php
$all_lines = file('https://www.oxiinc.com/customers/myaccount');
foreach ($all_lines as $line_num => $line)
 {
 	echo "Line No.-{$line_num}: " . htmlspecialchars($line) . "\n";
 }
?>