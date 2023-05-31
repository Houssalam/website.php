<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="index.php" method="post">
    <label>radius</label>
    <input type="text" name="radius">
    <!-- <label>y:</label>
    <input type="text" name="y">
    <label>z:</label>
    <input type="text" name="z"> -->
    <input type="submit" value="calculate">
   </form>
</body>
</html>
   
<?php

// fonction maths
//  $x = $_POST["x"];
//  $y = $_POST["y"];
//  $z = $_POST["z"];
//  $total = null;

// //  $total = abs($x);
// // $total = round($x);
// // $total = floor($x);
// //  $total = ceil($x);
// // $total = sqrt($x);
// // $total = pow($x, $y);
// // $total = max($x, $y, $z);
// // $total = pi();
// $total = rand(1, 6);

//  echo $total;

//    $radius = $_POST ["radius"];
//    $circumference = null;

//    $circumference = 2 * pi() * $radius;
//    $circumference = round($circumference, 2);

//    $area = pi() * pow($radius, 2);
//    $area = round($area, 2);

//    $volume = 4/3 * pi() * pow($radius, 3);
//    $volume = round($volume, 2);
 
//    echo " circumference = {$circumference} "." cm <br>"; 
//    echo "Area = {$area} "."cm^2 <br>";
//    echo "Volume = {$volume} "." cm^3 <br>";

// boulean
    // $age = 101;
    // if($age >= 100) {
    //     echo "You are too old to enter this site";
    // }
    // elseif ($age >= 18) {
    //     echo "You may enter this site";
    // }
    // elseif($age <= 0) {
    //     echo "That wasn't a valid age";
    // }
  
    // else {
    //    echo "You must be 18+ to enter" ;
    // }

    // $adult = true;
    // if($adult) {
    //     echo "You my enter thsis site";
    // }
    // else {
    //     echo "You must be an adult ton enter";
    // }
    //  $hours = 30;
    //  $rate = 15;
    //  $weekly_pay = null;

    //     if($hours <= 0){
    //            $weekly_pay = 0;
    //     }
    //     elseif($hours <= 40){
    //            $weekly_pay = $hours * $rate;
    //     }
    //     else {
    //        $weekly_pay = ($rate * 40) + (($hours -40) * ($rate * 1.5)) ; 
    //     }

    //     echo "You made \${$weekly_pay} this week ";



    // logical operators = combine conditional statments
    // if (condition1 && condition2)
    // && = true of both conditions are true
    // || = true if at least one condition is true
    //  ! = true if false. false if true.

    // $temp = 10;
    // $cloudy = false;

    // if($temp >= 0 && $temp <= 30) {
    //     echo "The weather is good. <br>";
    // }
    // else {
    //     echo "The weather is bad. <br>";
    // }
    // if(!$cloudy) {
    //     echo "It's sunny";
    // }
    // else {
    //     echo "It's cloudy";
    // }

    // $age = 25;
    // $citizen = true;

    // if(!$age >= 18 && !$citizen) {
    //     echo "You cannot vote";
    // }
    // else{
    //     echo"You can vote";
    // }

    // $child = true;
    // $senior = false;
    // $ticket = null;

    // if($child || $senior) {
    //     $ticket = 10;
    // }
    // else {
    //     $ticket = 15;
    // }
    // echo "The ticket price is \${$ticket}";

    /* Switch = replacement to using many elseif statements
    more efficient, less code to write*/

    $grade = "p";

    if($grade == "A") {
        echo "You did great";
    }
    elseif($grade == "B") {
        echo "You did good";
    }
    elseif($grade == "C") {
        echo "You did okay";
    }
    elseif($grade == "D") {
        echo "You did pprly";
    }
    if($grade == "F") {
        echo "You did failled";
    }
    else {
        echo "{$grade} is not a valid grade";
    }
?>


