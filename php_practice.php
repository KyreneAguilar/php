<!--Hello World

<h1>Hello Baby! </h1>

<style>
    h1{
        color: pink;
    }
</style>

<script>
    alert("Hello World!")
</script> -->


<?php
    // echo "Hello World!";
    # echo "Hello World!";
    /*echo "Hello World!";
     echo "Hello World!"; */
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>This is my First php</h1>  -->
    <?php
        // echo "Hello World!";
        // echo "Hello World!";
        
        // VARIABLE
    // $a = 5;
        // var_dump($a);
        // var_dump("John");
        // var_dump(3.14);
        // var_dump(true);
        // var_dump([1, 2, 3]);
        // var_dump(null);

        //variable scope

        // $a = 5;
        // echo $a;

        // function test()
        // {
        //     static $a = 6;
        //     echo $a;
        //     echo "<br>";
        //     $a++;
        // }

        // // test(); //6
        // // test(); //6
        // test(); //6
        // test(); //7
        // //echo $a;

        // ECHO & PRINT

    // echo ("Hello Baby ko! <br>"), ("Hello Baby! <br>");
    // echo "Hello Baby ko! <br>", ("Hello Baby! <br>");

    // print ("Hello Baby! <br>");
    // print "Hello Baby! <br>";

    // echo print ("Hello Mylove!")

    // DATA TYPES
    // $a = "Kyrene"; // String
    // $b = 5; //int
    // $c = 3.14; //Float
    // $d = true; // Boolean
    // $e = [1, 2, 3]; //array
    // $f = new stdClass(); // object
    // $g = null; // null
    // $h = fopen("php_practice.php", "r"); // resource

    // var_dump($a);
    // echo "<br>";
    // var_dump($b);
    // echo "<br>";
    // var_dump($c);
    // echo "<br>";
    // var_dump($d);
    // echo "<br>";
    // var_dump($e);
    // echo "<br>";
    // var_dump($f);
    // echo "<br>";
    // var_dump($g);
    // echo "<br>";
    // var_dump($h);
    // echo "<br>";

    //STRING
    // $a = "pink"; 
    // $name = "<h1 style = \"color:$a\"> Kyrene Pretty";

    $name = "Kyrene Pretty";

    echo strlen ($name), "<br>";
    echo str_word_count($name), "<br>";
    echo strpos ($name, "Pretty"), "<br>";
    echo strtoupper ($name,), "<br>";
    echo strtolower ($name,), "<br>";
    echo str_replace ("Pretty", "Ganda", $name,), "<br>";
    echo strrev ($name,), "<br>";
    echo trim($name,), "<br>";
    echo print_r(explode("o", $name,), "<br>");



    ?>

    

</body>
</html>

