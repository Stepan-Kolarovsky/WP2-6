<?php
$field[0] = "x";
$field[1] = "o";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sachovnice</title>
</head>
<body>
 <?php
    for ($i=0; $i < 10; $i++) { ?>
    <br>
<?php
    for ($i1=0; $i1 < 10 ; $i1++) { 
    
    if ($i1 % 2 == 0) {
        echo $field[0];
    } else {
       echo $field[1];
    }
 }
}
?>
</body>
</html>