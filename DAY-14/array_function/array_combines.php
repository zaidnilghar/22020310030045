<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array functions </title>
</head>
<body>
    <?php
    $fname=array("zaid","ilsa","ajaj","abduu");
    $age=array("19","19","20","21");
    $c=array_combine($fname,$age);
    print_r($c);
    ?>
</body>
</html>