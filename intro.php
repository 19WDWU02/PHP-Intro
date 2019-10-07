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


if($boolean === true){
    echo 'the boolean is true';
} else {
    echo 'the boolean is false';
}

// $array = array('item 1', 'item 2', 'item 3');
for ($i=0; $i < count($array); $i++) {
    echo '<br>';
    echo $array[$i];
}

// die($string);

echo '<br>';
// Instead of using objects like we did in js, we will be using associative arrays
$favouriteColours = array(
    'simon' => 'green',
    'brayden' => 'purple',
    'ryley' => 'red'
);
echo '<br>';
// There are two ways of using foreach, if we use just 2 arguments, the first arg is the array and then the second is the values
// foreach($favouriteColours as $person){
// If we use 3 arguments, then the first is still the array, the second will be the key and the third will be the value.
foreach($favouriteColours as $person => $value){
    echo '<br>';
    echo $person . '\'s favourite colour is '. $value;
}

$class = array(
    'Simon' => array(
        'age' => 19,
        'colour' => 'green',
        'food' => 'Sushi',
        'town' => 'Ngaio',
        'fullLicence' => false
    ),
    'Brayden' => array(
        'age' => 21,
        'colour' => 'purple',
        'food' => 'Sushi',
        'town' => 'Brown Owl',
        'fullLicence' => true
    ),
    'Ryley' => array(
        'age' => 19,
        'colour' => 'red',
        'food' => 'Garlic Bread',
        'town' => 'Tawa',
        'fullLicence' => false
    ),
    'Andy' => array(
        'age' => 26,
        'colour' => 'blue',
        'food' => 'Fish tacos',
        'town' => 'Lower Hutt',
        'fullLicence' => false
    ),
    'Katherine' => array(
        'age' => 18,
        'colour' => 'Purple',
        'food' => 'Pizza',
        'town' => 'Tawa',
        'fullLicence' => true
    ),
    'Larissa' => array(
        'age' => 19,
        'colour' => 'khaki green',
        'food' => 'Rice bubbles and yoghurt',
        'town' => 'wadestown',
        'fullLicence' => false
    ),
    'Sophie' => array(
        'age' => 32,
        'colour' => 'peach',
        'food' => 'avocado',
        'town' => 'paraparaumu',
        'fullLicence' => true
    ),
    'Annie' => array(
        'age' => 17,
        'colour' => 'blue',
        'food' => 'pizza',
        'town' => 'Taita',
        'fullLicence' => false
    )
);


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


    <?php
    // You can write out html on the page like bellow by echoing out all of the html tags.
    // foreach($class as $classMember => $details){
    //     echo '<div>';
    //     echo '<h3>'.$classMember.'</h3>';
    //     echo '<p>'.$details['age'].' years old </p>';
    //     echo '</div>';
    // }
    ?>

    <hr>
    <!--
        Or you can write it like bellow where we open up the our php tags,
        include the opening foreach on one line and the closing of the foreach on another.
        Then between the tags you just write HTML as normal, but echo out the values in the appropriate place.
    -->
    <?php foreach($class as $classMember => $details): ?>

        <div class="">
            <h3><?php echo $classMember; ?></h3>
            <p><?php echo $details['age']; ?> years old</p>
            <p>Their favourite food is <?php echo $details['food'] ?></p>
            <p>Their favourite colour is <?php echo $details['colour'] ?></p>
            <p>They live in <?php echo $details['town']; ?></p>
            <?php if($details['fullLicence'] === true): ?>
                <p>They have their full licence</p>
            <?php else: ?>
                <p>They do not have their full licence</p>
            <?php endif; ?>
            <hr>
        </div>

    <?php endforeach; ?>


</body>
</html>
