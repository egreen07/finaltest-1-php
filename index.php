<?php
//1.Fizz Buzz
for ($i = 1; $i <= 100; $i++) {
  if ($i % 3 === 0 && $i % 5 ===0) {
    echo 'FizzBuzz';
  } elseif ($i % 5 === 0) {
    echo 'Buzz';
  } elseif ($i % 3 === 0) {
    echo 'Fizz';
  } else {
    echo $i;
  }
  echo '<br>';
}

echo'<br><br>';

//2. 素数算出

for($i = 2; $i <= 10000; $i++) {
  $flag = 0;

  for($j = 2; $j < $i; $j++) {
    if($i % $j == 0) {
      $flag = 1;
      break;
    }
  }
  if($flag ==0) {
    echo $i. "\n";
  }
}



//3. 5次元配列

$multi_dimensional_array = [
  ["鈴木", "20", "male", "170", "70"],
  ["山本", "30", "female", "160", "50"],
  ["田中", "50", "male", "180", "80"],
  ["佐藤", "18", "female", "157", "45"],
  ["伊藤", "43", "male", "172", "75"],
];
var_dump($multi_dimensional_array);

echo'<br><br>';

?>


