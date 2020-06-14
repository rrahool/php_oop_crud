<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>
<body>
    <?php 
        include 'includes/person.inc.php';

        $pet01 = new Pet();

        echo $pet01->owner();
    ?>
</body>
</html>