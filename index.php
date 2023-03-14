<?php
  require ‘vendor/autoload.php’;
  ?>

  <!-- <?php




// $a = array("apple", "banana");
// $b = array(1 => "banana", "0" => "apple");

// var_dump($a == $b);
// var_dump($a === $b);



?> -->

<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta charset='utf-8'>
    <title>Лабораторная</title>
<?php
    // 1 СПОСОБ ПОДКЛЮЧЕНИЯ
        echo "<link rel='stylesheet' href=/style.css>";
        echo "<h1 > Тождественное равенство <h1> <br>";
echo "<h3>";
 $arr = array(' ',0, Null,'0',[],true,false,1,'1',-1,'-1');
//$arr= [1,0,1,0,1,0];
for ($i=0; $i <count($arr); $i++) {


  for ($j=0; $j < count($arr) ; $j++) {
    if ($arr[$i] == $arr[$j]){
      echo "1 " ;
    }
    else {
      echo "0 ";
    }
  }
  echo "<br>";
}

echo "<br><br><br>";
echo "Цикл While <br>";
$var_while = 0;
while ($var_while<=50) {
  if ($var_while % 2 <>0) {
    echo "$var_while ";
  }
  $var_while+=1;
  // code...
}

$var_while = 0;
echo "<br><br><br>";
echo "Цикл For <br>";
for ($i=0; $i <50 ; $i++) {
  if ($var_while % 2 <> 0) {
    echo "$var_while ";
  }
  $var_while+=1;
  // code...
}
?>


</head>
    <p>подключаю css стили</p>
</html>
