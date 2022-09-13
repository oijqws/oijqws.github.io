
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<h1 ">

<?php

srand ((double)microtime()*1000000);
$f_contents = file ("txt/greenapples.txt");
$line = $f_contents[array_rand ($f_contents)];
print $line;

print "<br>";

$f_contents = file ("txt/redapples.txt");
for ($x=1; $x<=7; $x++) {
    print "$x .";
srand ((double)microtime()*1000000);
$line = $f_contents[array_rand ($f_contents)];
print $line;
print "<br>";
} 

?>
</h1>
<script>
document.write('<form><input type=button value="Refresh" onClick="history.go()"></form>')
</script>
<a href="rules.htm">Rules</a>
</div>