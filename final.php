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
    <div class="card">
        <div class="card-body">
        <h3 class="card-title">Merge CSV Files</h3>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          File Merged Successfully!!!!!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
      </div>
        <form>
            <div class="form-group">
                <label for="exampleFormControlFile1">Upload First CSV File</label>
                <input type="file" class="form-control" name="first" id="exampleFormControlFile1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile2">Upload Second CSV File</label>
                <input type="file" class="form-control" name="second" id="exampleFormControlFile2">
            </div>
            <button type="button" name="merge" class="btn btn-outline-primary btn-lg">Merge</button>
            <?php
            echo '<p><a href="download.php?file=' . urlencode("result.csv") . '">Download</a></p>';
            ?>       
            </form>
        </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
