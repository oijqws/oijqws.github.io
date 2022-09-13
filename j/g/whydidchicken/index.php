<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<h1 class="display-1">
<?php
srand ((double)microtime()*1000000);
$f_contents = file ("noun2.php.txt");
$line = $f_contents[array_rand ($f_contents)];
print $line;
?>
<p>-<p>-<p>-<p>

<?php
srand ((double)microtime()*1000000);
$f_contents = file ("noun2.php.txt");
$line = $f_contents[array_rand ($f_contents)];
print $line;
?>
<p>-<p>-<p>-<p>
<?php
srand ((double)microtime()*1000000);
$f_contents = file ("q.php.txt");
$line = $f_contents[array_rand ($f_contents)];
print $line;
?>
<p>
</h1>