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
        //     echo "Hello World!";
        //     echo "Hello World!";
           
        //     VARIABLE
        // $a = 5;
        //     var_dump($a);
        //     var_dump("John");
        //     var_dump(3.14);
        //     var_dump(true);
        //     var_dump([1, 2, 3]);
        //     var_dump(null);

        //     variable scope

        //     $a = 5;
        //     echo $a;

        //     function test()
        //     {
        //         static $a = 6;
        //         echo $a;
        //         echo "<br>";
        //         $a++;
        //     }

        //     // test(); //6
        //     // test(); //6
        //     test(); //6
        //     test(); //7
        //     //echo $a;

        //     ECHO & PRINT

        // echo ("Hello Baby ko! <br>"), ("Hello Baby! <br>");
        // echo "Hello Baby ko! <br>", ("Hello Baby! <br>");

        // print ("Hello Baby! <br>");
        // print "Hello Baby! <br>";

        // echo print ("Hello Mylove!")

        // DATA TYPES
        // $a = "Jairos"; // String
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

        // STRING
        // $a = "pink";
        // $name = "<h1 style = \"color:$a\">Kyrene Aguilar";

        // $name = "Jairos Ibe";

        // echo strlen ($name), "<br>";
        // echo str_word_count($name), "<br>";
        // echo strpos ($name, "Kyrene"), "<br>";
        // echo strtoupper ($name,), "<br>";
        // echo strtolower ($name,), "<br>";
        // echo str_replace (" Kyrene", "Aguilar", $name,), "<br>";
        // echo strrev ($name,), "<br>";
        // echo trim($name,), "<br>";
        // echo print_r(explode("o", $name,), "<br>");

    // $x = "Hello";
    // $y = "World";
    // echo $x ." ". $y. "<br>";
    // echo "$x $y <br>";
    // echo '$x $y <br>';

    //Slicing
    // $x = "Hello";
    // echo substr($x, 1, 4), "<br>";
    // echo substr($x, 1, ), "<br>";
    // echo substr($x, -5, 4), "<br>";

    //escape charaters
    // $a = "sample";
    // $x = "Kyrene \"sarap\" Aguilar";
    // echo $x;

    //number
    // $a = -1; //int
    // $b = 1.0; //float
    // $c = "5 pretty"; // string

    // echo PHP_INT_MAX, "<br>";
    // echo PHP_INT_MIN, "<br>";
    // echo PHP_INT_SIZE, "<br>";
    // echo is_int($a), "<br>";

    // echo PHP_FLOAT_MAX, "<br>";
    // echo PHP_FLOAT_MIN, "<br>";
    // echo PHP_FLOAT_DIG, "<br>";
    // echo PHP_FLOAT_EPSILON, "<br>";
    // echo is_float($b), "<br>";

    // echo is_numeric($c);

    //php cxasting

    // $a = "john";

    // $a = "5Kyrene"; // String
    //      $b = 5; //int
    //      $c = 3.14; //Float
    //      $d = true; // Boolean
    //      $e = [1, 2, 3]; //array
    //      $f = new stdClass(); // object
    //      $g = null; // null
    //      $h = fopen("php_practice.php", "r"); // resource

        //  $a = $a;
        //  $b = $b;
        //  $c = $c;
        //  $d = $d;
        //  $e = $e;
        //  $f = $f;
        //  $g = $g;
        //  $h = $h;


        //casting - string
        //  $a = (string) $a;
        //  $b = (string) $b;
        //  $c = (string) $c;
        //  $d = (string) $d;
        //  $e = $e;
        //  $f = $f;
        //  $g = (string) $g;
        //  $h = (string) $h;

         //casting - int

        //  $a = (int) $a;
        //  $b = (int) $b;
        //  $c = (int) $c;
        //  $d = (int) $d;
        //  $e = (int) $e;
        //  $f =  $f;
        //  $g = (int) $g;
        //  $h = (int) $h;

         //casting - float
        //  $a = (float) $a;
        //  $b = (float) $b;
        //  $c = (float) $c;
        //  $d = (float) $d;
        //  $e = (float) $e;
        //  $f = $f;
        //  $g = (float) $g;
        //  $h = (float) $h;


       
        //casting - boolaen
        //  $a = (bool) $a;
        //  $b = (bool) $b;
        //  $c = (bool) $c;
        //  $d = (bool) $d;
        //  $e = (bool) $e;
        //  $f = $f;
        //  $g = (bool) $g;
        //  $h = (bool) $h;

         
        //casting - array
        //  $a = (array) $a;
        //  $b = (array) $b;
        //  $c = (array) $c;
        //  $d = (array) $d;
        //  $e = (array) $e;
        //  $f = $f;
        //  $g = (array) $g;
        //  $h = (array) $h;

        //  //casting - object
        //  $a = (array) $a;
        //  $b = (array) $b;
        //  $c = (array) $c;
        //  $d = (array) $d;
        //  $e = (array) $e;
        //  $f = $f;
        //  $g = (array) $g;
        //  $h = (array) $h;



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

   
       //php math

    //    $pi = pi();
    //    echo $pi, "<br>";
       
    //    $minNumber = min(300, 3, 80, 4, 98);
    //    $maxNumber = max(300, 3, 80, 4, 98);

    //    echo $minNumber, "<br>";
    //    echo $maxNumber, "<br>";

    //    $num = 5;
    //    echo abs($num), "<br>";

    //    $sqrt = sqrt(9);
    //    echo $sqrt, "<br>";

    //    $rounded = round(3.49, 1);
    //    echo $rounded;

    //    echo PHP_INT_MAX, "<br>";
    //    echo PHP_INT_MIN, "<br>";
    //    echo rand(), "<br>";
       
    //    echo rand(5, 30), "<br>";


    //php constant
   
    // define("GREETING", "39");
    // //echo GREETING;
    // $x = 5;

    // function test() {
    //     echo GREETING;
    // }

    // test();

    // php operators
    // arithmitic

    //addition + sum

    //  echo 6 + 5 + 90, "<br>";

    // //subtraction - Difference

    // echo 7 - 2 - 10, "<br>";;

    // echo 7 - 2 + 90, "<br>"; //pemdas

    // //Multiplication * product

    // echo 6 * 8 * 9, "<br>"; 

    // //division / quotient

    // echo 6 / 8, "<br>";
    
    // echo 6 + 6 / 2 * 2, "<br>";

    // // modulus %
    // echo 5 % 3, "<br>";


    // //exponent **
    // echo 4**2,"<br>";


    // assignment
    // $x = 5;

    // // +-
    // // $x = $x + 10 
    // $x +- 10;
    // echo $x


    // comparison 

    // ==
    // var_dump(6 == "6");

    // // === indentical
    // var_dump(6 === "6");

    // //!=
    // var_dump(100 != 99);

    // //!==
    // var_dump(100 !== 100);

    // // >
    // // > =
    // var_dump(6 >= 6);

    // // < 
    // // <=
    // var_dump(6 <= 7);

    // //<==>
    // echo 2 <==> 1;


    // // ++ increment
    // $x = 5;
    // // pre - incement 
    // echo ++$x, "<br>";
    // $y = 5;
    // //post - incement
    // echo $y++, "<br>";


    // // -- decrement
    //  $x = 5;
    // // pre - decrement 
    // echo --$x, "<br>";
    // $y = 5;
    // //post - decrement
    // echo $y--, "<br>";

    //logical operators

    //AND &&
    // var_dump(true and true); // true
    // echo "<br>";
    // var_dump(6 == "6" and 6 > 9); // false
    // echo "<br>";

    // // OR ||
    // var_dump(false or false); // false
    // echo "<br>";
    // var_dump(6 == "6" || 6 > 9); // true
    // echo "<br>";

    // //xor 
    // var_dump(true xor false); // true
    // echo "<br>";
    // var_dump(6 == "6" xor 6 > 9); // true
    // echo "<br>";

    // // !
    // var_dump(!true); // false
    // echo "<br>";
    // var_dump(!(6 == "6")); // false
    // echo "<br>";

    //String operators
    // echo "Hello" . "World!"

    // $x = "Hello";
    // $x .= $x . "World";
    // $x .= "World";









    ?>

   

</body>
</html>
