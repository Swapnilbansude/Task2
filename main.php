<?php 

    if (isset($_POST['merge'])) {
    
        $one = fopen("first.csv", "r");
        $two = fopen("second.csv", "r");

        $result = fopen("result.csv", "w+");

        while (!feof($one)) {
            fwrite($result, fgets($one));
        }
        fclose($one);
        unset($one);

        while (!feof($two)) {
            fwrite($result, fgets($two));
        }
        fclose($two);
        unset($two);
      
    }
?>