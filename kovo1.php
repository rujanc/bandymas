<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
      <style>
          table, tr, td {
              border: 1px solid black;
          }
      </style>
      <link rel="stylesheet" href="kovo1.css">
  </head>
  <body>
<!--  <li>-->
<!--    <h2>Hello world!! Welcome to PHP :D</h2>-->
<!--      --><?php //echo "labas"; ?>
<!--      <ul>Labas</ul>-->
<!--      <ul>Ka veiki</ul>-->
<!--      <ul>Kaip sekasi</ul>-->
<!--      <ul>Smagu-->
<!--          <img src="https://i.pinimg.com/736x/f4/89/ef/f489ef22363cf1e4c2a4fb5b1cd8aec5--geometric-background-background-designs.jpg" width="200px">-->
<!--      </ul>-->
<!--  </li>-->
<!--  <div class="herbas">S, H</div>-->
<!---->
<!--  --><?php
//  echo "5*10=". 5*10 . "<br>";
//
//  function suma ($skaicius1, $skaicius2)
//  {
//      $suma = $skaicius1 + $skaicius2;
//      return $suma;
//  }
//  echo suma ( 1,  20). "<br>";
//
//  function minus ($skaicius1, $skaicius2) {
//      $minus = $skaicius1 - $skaicius2;
//      return $minus;
//  }
//    echo minus (4, 3) . "<br>";
//
//  function multi ($skaicius1, $skaicius2) {
//      $multi = $skaicius1 * $skaicius2;
//      return $multi;
//  }
//    echo multi (10,5) . "<br>";
//
//  function divi ($skaicius1, $skaicius2) {
//      $divi = $skaicius1 / $skaicius2;
//      return $divi;
//  }
//  echo divi (100, 10) . "<br>";
//
//  function mod ($skaicius1, $skaicius2){
//      $mod = $skaicius1 % $skaicius2;
//      return $mod;
//  }
//  echo mod (255,5) . "<br>";
//
//  $amzius=18;
//  if ($amzius>=21){
//      echo $amzius . "<br>";
//  }
//  else {
//      echo "nepilnametis <br>";
//  }
//
//  $value= 13;
//  if ($value>20) {
//      echo "daugiau nei 20 <br>";
//  }
//  else if ($value == 20)
//  {
//      echo "lygu 20 <br>";
//  }
//  else {
//      echo "maziau uz 20 <br>";
//  }
//
//  $value2= 14.55;
//  echo round($value2) . "<br>";
//
//  $num = 1996;
//  if ($num % 100 === 0 ) {
//      echo $num / 100;
//  }
//  else {
//      echo (int) ($num / 100) + 1;
//  }
//
//    function reverse($string){
//      $string = strrev($string);
//      return $string;
//    }
//    echo reverse("labas") . "<br>";
//
//    function cap ($string){
//        $string = strtoupper($string);
//        return $string;
//    }
//    echo cap("labas") . "<br>";
//
//    function low ($string) {
//        $string = strtolower($string);
//        return $string;
//    }
//    echo low("labas") . "<br>";
//
//    function palend ($string) {
//        if ($string == strrev($string) ) {
//            return strtoupper($string);
//        }
//        else {
//            return strtolower($string);
//        }
//    }
//    echo palend("LABAS") . "<br>";
//
//        $number = 5;
//        for ($i=0; $i <= 10; $i = $i + 1){
//            $result = $number * $i;
//            echo "<td>" . $result . "<br>";
//        }
//echo "<table>";
//        for ($i=1; $i <=10; $i = $i + 1){
//            echo "<tr>";
//            for ($x=1; $x <=10; $x = $x + 1) {
//                $result = $i * $x;
//                echo "<td>$i x $x = $result</td>";
//            }
//            echo "</tr>";
//        }
//        echo "</table>";
//
//        echo "<table>";
//
//        function picture($number){
//                for($break=1; $break<=$number; $break++){
//                    echo "<br>";
//                    for($dot=1; $dot<=$break; $dot++){
//                        echo "*";
//                    }
//                }
//                for($break=$number; $break>=1; $break--){
//                    echo "<br>";
//                    for($dot=1; $dot<=$break; $dot++){
//                        echo "8";
//                    }
//                }
//        }
//picture(10);
//       echo "<br>";
//      echo  $coin = rand(0,1) . "<br>";
//    do {
//        $half = rand(0, 1);
//        if (0 == $half) echo "<div class='herbas'>H</div><br>";
//        else echo "<div class='herbas'>S</div><br>";
//    }
//    while (0 == $half);
//
//    do {
//        $random = rand(1,1000);
//    }
//    while (($random % 2) == 1);
//    echo $random;
//
//    function getZodiac($year) {
//
//        switch ($year % 12):
//        case 1: return 'Monkey';
//        case 2: return 'Rooster';
//        case 3: return 'Dog';
//        case 4: return 'Boar';
//        case 5: return 'Rat';
//        case 6: return 'Ox';
//        case 7: return 'Tiger';
//        case 8: return 'Rabit';
//        case 9: return 'Dragon';
//        case 10: return 'Snake';
//        case 11: return 'Horse';
//        case 12: return 'Lamb';
//        endswitch;
//
//    }
//    echo getZodiac(1);
//  ?>

    <form method="post">
        <input type="text" name="numeris1">
        <input type="text" name="numeris2">
        <select name="operator" id="">
            <option>None</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
            <option>Square</option>
        </select>
        <button type="submit" name="submit" value="submit">Skaiciuoti</button>
    </form>
  <?php
  if (isset($_POST['submit'])){
      $result1 = $_POST['numeris1'];
      $result2 = $_POST['numeris2'];
      $operator = $_POST['operator'];
      switch ($operator) {
          case 'None': echo "nieko nera";
          break;
          case 'Add': echo $result1 + $result2;
          break;
          case 'Subtract': echo $result1 - $result2;
          break;
          case 'Multiply': echo $result1 * $result2;
          break;
          case 'Divide': echo $result1 / $result2;
          break;
          case 'Square': echo $result1 ** $result2;
          break;

      }
  }





?>

    










  </body>
</html>
