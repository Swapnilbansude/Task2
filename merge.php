<?php 

    /*if (isset($_POST['merge'])) {
        $input1 = $_FILES['first']['name'];
        $input2 = $_FILES['second']['name'];
    */
        $one = fopen("city.csv", "r");
        //$two = fopen($input2, "r");

        $result = fopen("upload/result.csv", "w+");

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
        echo '<script>alert("Files merged Successfully!!!<a href="#">Download</a>")</script>';

    echo "<h3>Student Data</h3>";

    echo "<table>";

    $file = fopen("city.csv", "r");

    while (($data = fgetcsv($file)) !== false) {
        echo "<tr>";
        foreach ($data as $i) {
            echo "<td> \t" . htmlspecialchars($i) . "</td>";
        }
        echo "</tr>";
        echo "\n";
    }

    fclose($file);
    echo "</table>";

    //}
?>