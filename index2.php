<!DOCTYPE html>
<html lang="en">

<body id="page-top" >

  

<?php

function range_string($csv)
{
    // split string using the , character
    $number_array = array_map('intval', explode(',', $csv));
    sort($number_array);

    // Loop through array and build range string
    $previous_number = intval(array_shift($number_array)); 
    $range = false;
    $range_string = "" . $previous_number; 
    foreach ($number_array as $number) {
      $number = intval($number);
      if ($number == $previous_number + 1) {
        $range = true;
      }
      else {
        if ($range) {
          $range_string .= "-$previous_number";
          $range = false;
        }
        $range_string .= ",$number";
      }
      $previous_number = $number;
    }
    if ($range) {
      $range_string .= "-$previous_number";
    }

    return $range_string;
}

$csv_string = "1,2,3,4,6,8,9,10,18,17";
print range_string($csv_string); // 11-12,15-18,22-24

?>
    
</body>
</html>