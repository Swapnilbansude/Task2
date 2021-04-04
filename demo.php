<?php 

    $file = fopen("city.csv","r");
    $file2 = fopen("cars.csv","r");
    $result = fopen("upload/result.csv", "w");
/*
    while (! feof($file)) {
        $line = fgetcsv($file);
        print_r($line);
            fputcsv($result, (array)$line);
        
    }
    fclose($file);

    while (! feof($file2)) {
        $line = fgetcsv($file2);
        print_r($line);
            fputcsv($result, (array)$line);
        
    }
    fclose($file2);
*/
    print_r(fgetcsv($file));   
    fputcsv($result, fgetcsv($file));
    fclose($result);
?>