<?php
    // phpinfo();

    // echo 'hello';
    // echo '<h1>Hello</h1>';

    // VARIABLES
    //Strings
    $string = 'Good morning' ;
    //Integers
    $integer = 2;
    //Floats
    $float = 3.5;
    //Booleans
    $boolean = false;
    //Arrays
    $array = array('item 1', 'item 2', 'item 3');
    //Objects
    class Me {
        function Me(){
            $this->name = 'Richard';
            $this->gender = 'Male';
        }
    }

    $myself = new Me();

    $null = null;

    define('SITETITLE', 'This is a constant variable');



    // var_dump($array);
    // print_r($array);
    echo '<pre>';
        print_r($array);
    echo '</pre>';

    // die($string);
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
     <head>
         <meta charset="utf-8">
         <title><?php echo 'this is the page title'; ?></title>
     </head>
     <body>

         <?php
            echo '<h1>This is an H1</h1>';
            echo '<p>This is a paragraph</p>';
        ?>
         <h3>Our string variable is : <?php echo $string; ?></h3>
         <h3>Our integer variable is : <?php echo $integer; ?></h3>
         <h3>Our float variable is : <?php echo $float; ?></h3>
         <h3>Our boolean variable is : <?php echo $boolean; ?></h3>
         <h3>A Object value is : <?php echo $myself->name; ?></h3>
         <h3>Our null variable is : <?php echo $null; ?></h3>
         <h3>Our Constant variable is : <?php echo SITETITLE; ?></h3>

         <h3>A value in my array is : <?php echo $array[0]; ?></h3>
     </body>
 </html>
