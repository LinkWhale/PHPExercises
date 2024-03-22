<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>PHP uppgifter</h1>
<body>
    <?php 
    echo "<h2>Array Exercises";
//Array Exercises
echo "<h2>Array Exercises";
//upp 1
    echo "<h3>Uppgift 1</h3>";
    $color = array('white', 'green', 'red', 'blue', 'black');
    echo "The memory of that scene for me is like a frame of film forever frozen at that moment: 
        the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon<br>";
    
//upp 2
    echo "<h3>Uppgift 2</h3>";
    $color = array('white', 'green', 'red');
    
    foreach($color as $c) {
        echo "$c, ";
    }
    echo "<br><ul>";
    foreach($color as $c) {
        echo "<li>$c</li>";
    }
    echo "</ul>";
//upp 3
    echo "<h3>Uppgift 3</h3>";
    $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", 
    "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", 
    "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", 
    "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", 
    "Austria" => "Vienna", "Poland"=>"Warsaw") ;
    
    asort($ceu);
    foreach ($ceu as $x => $y) {
        echo "$y is the capital of $x<br>";
    }
    
//upp 4
    echo "<h3>Uppgift 4</h3>";
    $x = array(1, 2, 3, 4, 5);
    echo var_dump($x)."<br>";
    unset($x[2]);
    $x = array_values($x);
    echo var_dump($x)."<br>";

//upp 5
    echo "<h3>Uppgift 5</h3>";
    $color = array(4 => 'white', 6 => 'green', 11=> 'red');
    echo reset($color). "<br>";

echo "<h2>Date Exercises";
//Date time exercises
//upp 5
    echo "<h3>Uppgift 5</h3>";
    $date = strtotime("2012-09-12");
    echo date("d-m-Y", $date);

//upp 6
    echo "<h3>Uppgift 6</h3>";
    $date = strtotime("12-05-2014");
    echo $date;

//upp 7
    echo "<h3>Uppgift 7</h3>";
    $date = floor(abs(time() - strtotime("2012-12-12"))/(60*60*24));
    echo $date."<br>";
//upp 8
    echo "<h3>Uppgift 8</h3>";
    $dt = "2025-04-13";
    echo 'First day : '. date("Y-m-01", strtotime($dt)).' - Last day : '. date("Y-m-t", strtotime($dt)).'<br>';  
//upp 9
    echo "<h3>Uppgift 9</h3>";
    echo date('l \t\h\e jS')."<br>";
//upp 10
    echo "<h3>Uppgift 10</h3>";
    echo var_dump(checkdate(3, 30, 0));
//File exercises
echo "<h2>File Exercises";
//upp 1
    echo "<h3>Uppgift 1</h3>";
    echo fread(fopen("text.txt", "r"), filesize("text.txt")). "<br>";
//upp 2
    echo "<h3>Uppgift 2</h3>";
    function checkPath($path) {
        if(file_exists($path)) {
            echo "File $path exists <br>";
        }
        else {
            echo "File $path does not exist <br>";
        }
    }
    checkPath("text.txt");
    checkPath("text.php");
//upp 3
    echo "<h3>Uppgift 3</h3>";
    $lines = 0;
    $file = fopen("text.txt", "r");

    while(!feof($file)) {
        $line = fgets($file);
        if ($line !== false) {
            $line++;
        }
    }
    echo $lines;
?>
</body>
</html>