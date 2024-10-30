<?php
// Define some variables for testing
$var1 = "Hello!";
$var2 = "";
$var3 = null;
$var4 = 0;

// Check using isset() and empty()

echo "Checking isset() function:<br>";
echo "\$var1: " . (isset($var1) ? 'true' : 'false') . "<br>";  // true, $var1 is set
echo "\$var2: " . (isset($var2) ? 'true' : 'false') . "<br>";  // true, $var2 is set but empty
echo "\$var3: " . (isset($var3) ? 'true' : 'false') . "<br>";  // false, $var3 is null
echo "\$var4: " . (isset($var4) ? 'true' : 'false') . "<br>";  // true, $var4 is set (value is 0)

echo "<br>Checking empty() function:<br>";
echo "\$var1: " . (empty($var1) ? 'true' : 'false') . "<br>";  // false, $var1 is not empty
echo "\$var2: " . (empty($var2) ? 'true' : 'false') . "<br>";  // true, $var2 is empty
echo "\$var3: " . (empty($var3) ? 'true' : 'false') . "<br>";  // true, $var3 is empty (null)
echo "\$var4: " . (empty($var4) ? 'true' : 'false') . "<br>";  // true, $var4 is considered empty (0)
?>