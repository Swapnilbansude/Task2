<?php 

    if (isset($_POST['submit'])) {
        $file_name = $_FILES['one']['name'];
        $file_type = $_FILES['one']['type'];
        $file_size = $_FILES['one']['size'];
        $file_temp_loc = $_FILES['one']['tmp_name'];
        $file_store = "upload/".$file_name;
        print_r($input);

        move_uploaded_file($file_temp_loc, $file_store);
        echo '<script>alert("File Uploaded Successfully!!!!!")</script>';

       
    }

?>
