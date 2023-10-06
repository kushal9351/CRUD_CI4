<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>view - product page</h1>
    <h1><?php 
        if(isset($name)){
            echo "product name:" .$name. "<br>";
        }
        
    ?></h1>
    <ul>
    <?php 
        if(isset($name)){
        foreach($name_arr as $n){?>
            <li><?php echo $n ?></li>
        <?php }} ?>
    </ul>
</body>
</html>