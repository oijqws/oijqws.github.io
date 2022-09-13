<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>



<div class="container-fluid" >
	<h2 class="text-primary">
<?php
srand ((double)microtime()*1000000);
$f_contents = file ("txt/greenapples.txt");
$line = $f_contents[array_rand ($f_contents)];
print $line;
?>
</h2>

</div>

