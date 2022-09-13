<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<font size="10">
<?php
srand ((double)microtime()*1000000);
$f_contents = file (basename($_SERVER['REQUEST_URI']) . ".txt");
$line = $f_contents[array_rand ($f_contents)];
print $line;
?>
</font>