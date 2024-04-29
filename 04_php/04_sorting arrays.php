<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


    <?php
    
    // Sorting arrays 


        // using Sort()
        $numbers = array(4, 2, 8, 1, 6);
        sort($numbers);
        print_r($numbers);
        
    
        // using asort() 

        $ages = array("John" => 30, "Alice" => 25, "Bob" => 35);
        asort($ages);
        print_r($ages);

    

        //using ksort()
        $fruits = array("banana" => 2, "apple" => 3, "orange" => 1);
        ksort($fruits);
        print_r($fruits);

    ?>



</body>
</html>