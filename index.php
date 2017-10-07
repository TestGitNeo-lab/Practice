<?php
  /* ==== PRINT BIEN y:
  $x = 5;
  $y = 10;
  function Summary() {
    global $x, $y;
    $y = $x + $y;
  }
  Summary();
  echo $y;
  ====== */

  /* ==== PRINT BIEN y C2:
  $x = 5;
  $y = 10;
  function Sumary() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
  }
  Sumary();
  echo $y;
  */

  /* ===== IN 3 SO NGUYEN
  
  function printVar() {
    static $x = 0;
    echo $x;
    $x++;
  }
  printVar();
  echo "<br/>";
  printVar();
  echo "<br/>";
  printVar();
  echo "<br/>";
  */

  /* ===== PRINT EVEN_NUMBER FOR LOOP
  for($i = 0; $i <= 50; $i += 2) {
    if($i % 2 == 0){
      echo "Even number is : " . $i . "<br/>";
    }
  }
  ===================================*/


  /* ===== PRINT EVEN_NUMBER WHILE LOOP
  $i = 0;
  while($i <= 20) {
    if($i % 2 == 0) {
      echo $i . "<br/>";
      $i += 2;
    }
  }
  //*/

  /* ===== PRINT EVEN_NUMBER DO_WHILE LOOP
  $i = 0;
  do {
    echo "Even number is : " . $i . "<br/>";
    $i += 2;
  } while($i <= 50);
  */

  /* ==== CHIA HET CHO 9 FOR LOOP 
  $count = 1;
  for ($i=1; $i <=90; $i++) {
    if($i % 9 == 0) {
      echo "9 * " . $count++ . " : " . $i . "<br/>";
    }
  }
  ========================= */

  /* ==== IN MANG DUNG FOREACH LOOP
  $count = 1;
  $name = array('nhung', 'trang', 'hien');
  foreach ($name as $key => $value) {
    echo 'Sinh vien ' . $count++ . ' la : ' . $value . "<br/>";
  }
  ======================= */


  /* ========= HAM va THAM SO CUA HAM
  function listStudent($fname, $year = 1995) {
    echo $fname . ' Rose' . ' Was Born : '. $year ."<br/>";
  }
  listStudent('Trang', 1995);
  listStudent('Hien', 1994);
  listStudent('Nhung'); // neu ko truyen vao tham so thi no lay tham so mac dinh
  ==================== */

  /* ======== MANG cos key va value
  $colors = array('a' => 'white', 'ab' => 'black', 'abc' => 'red');
  foreach($colors as $key => $value) {
    echo $key . ' la ' . $value . "<br/>";
  }
  ==================== */

  // $numbers = array('a' => 3, 'b' => 5, 'd' => 8,' c' => 1);

  // asort($numbers);
  // foreach($numbers as $value) {
  //   echo $value . "<br/>";
  // }


  // $daysweek = array(0 => 25, 2 =>10, 5 => 2, 3 => 19, 6 => 4, 1 => 13, 4 =>0);

  // asort($daysweek);
  // for($i = 0; $i <= count($daysweek); $i++) {
  //   echo $daysweek[$i] . "<br/>";
  // }

  /* =========== 
  $cars = array
  (
    array('Volvo', 22, 18),
    array('BWM', 15, 13),
    array('Saab', 5, 2,),
    array('Land Rover', 17, 15)
  );

  for($row = 0; $row < 4; $row++) {
    for($col = 0; $col < 3; $col++) {
      echo $cars[$row][$col] . "<br/>";
    }
  }
  =================== */


  class cars
  {
    public $comp;
    public $color = 'beige';
    public $hasSunRoof = 'true';

    public function Xinchao()
    {
      return "I am " . $this->comp . ", I have color " . $this->color;
      echo "ahihi";
    }
  }
  

  $bwm = new cars;
  $mercedes = new cars;

  $bwm->comp = 'bwm';
  $bwm->color = 'green';

  $mercedes->comp = 'mercedes Benz';
  $mercedes->color = 'orange';

  echo $mercedes->Xinchao();

 //  $age = array("Peter" => 35, "Ben" => 43, "Joe" => 37);
 //  asort($age);

 //  foreach($age as $x=>$x_value) {
 //    echo "Key = " . $x . ", Value = " . $x_value . "<br/>";
 //  }

 // echo $_SERVER['SERVER_NAME'];

  // class A {
  //   function HamA() {
  //     $this->abc = "Nhung";
  //   }
  // }
  // $showName = new A;
  // echo $showName->abc;





?>
