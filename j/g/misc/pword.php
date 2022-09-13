<title>get a noun</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<h1 class="display-1">
<?php
srand ((double)microtime()*1000000);
$f_contents = file (basename($_SERVER['REQUEST_URI']) . ".txt");
$line = $f_contents[array_rand ($f_contents)];
print $line;
?>
</h1>
