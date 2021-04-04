<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Merge CSV</title>


    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
  <div class="container">
    <form method="POST" action="?" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleFormControlFile1">Upload First CSV File</label>
            <input type="file" class="form-control" name="first" id="exampleFormControlFile1" onchange="return fileValidation()">
        </div>
        <button type="submit" name="show">Show</button>
    <form>
    <table class="table-bordered table-hover">
    <?php 
      if (isset($_POST['show'])) {
        $input1 = $_FILES['first']['name'];
        $file_temp_loc = $_FILES['first']['tmp_name'];
        
        $file_store = "upload/".$input1;
        move_uploaded_file($file_temp_loc, $file_store);

        $file = fopen("upload/".$input1, "r");

        while (($data = fgetcsv($file)) !== false) {
            echo "<tr>";
            foreach ($data as $i) {
                echo "<td> \t" . htmlspecialchars($i) . "</td>";
            }
            echo "</tr>";
            echo "\n";
        }

        fclose($file);
      }
    ?>
    </table>
</div>




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
