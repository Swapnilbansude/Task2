
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Merge CSV</title>


    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/main.js"></script>

  </head>
  <body>
    <div class="card">
        <div class="card-body">
        <h3 class="card-title">Merge CSV Files</h3>
        <form class="md-form" method="POST" action="?" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleFormControlFile1">Select First CSV File</label>
                <input type="file" class="form-control" name="first" id="exampleFormControlFile1" onchange="return fileValidation()">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile2">Select Second CSV File</label>
                <input type="file" class="form-control" name="second" id="exampleFormControlFile2" onchange="return fileValidation()">
            </div>
            <button type="submit" name="merge" class="btn-grad btn-outline-primary btn-lg" onclick="return validate()">Merge</button>
        </form>
        </div>
    
    <?php 

        if (isset($_POST['merge'])) {
            $input1 = $_FILES['first']['name'];
            $input2 = $_FILES['second']['name'];

            //loaction of the files
            $file_temp_loc1 = $_FILES['first']['tmp_name'];
            $file_temp_loc2 = $_FILES['second']['tmp_name'];

            //upload selected csv files in upload folder
            $file_store1 = "upload/".$input1;
            move_uploaded_file($file_temp_loc1, $file_store1);
            $file_store2 = "upload/".$input2;
            move_uploaded_file($file_temp_loc2, $file_store2);

            //open both files in read mode
            $one = fopen("upload/".$input1, "r");
            $two = fopen("upload/".$input2, "r");

            $result = fopen("results/result.csv", "w+");

            //Merge first csv file to result.csv
            while (! feof($one)) {
                $line = fgetcsv($one);
                fputcsv($result, (array)$line);
                
            }
            fclose($one);
            
            //Merge second csv file result.csv
            while (! feof($two)) {
                $line = fgetcsv($two);
                fputcsv($result, (array)$line);
                
            }
            fclose($two);
        
            fclose($result);
            ?>
            <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php
            echo "Success! Files Merged Successfully";
            echo '<p>Download Merged file through given link <a href="download.php?file=' . urlencode("result.csv") . '">Download Link</a></p>';
        }
        ?>

        </div>

    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
