   <?php
     echo "<hr>The selected range of number is from 1 to 20</hr> <br>";  
   
     foreach (range(1,20) as $number) {
    echo $number ."<br>";
       }
       echo "<br>";
       $array = [1, 20, 3, 5];
       echo "The sum of the array number = ". array_sum($array);
   ?>
