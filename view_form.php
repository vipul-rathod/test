<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    div.container-fluid{
      position:relative;
      width: 100%;
      margin: 5px;
      border: 1px solid #000000;
    }

    .required::before{
      content: "*";
      color: red;
    }
  </style>
  </head>
  <body>

    <?php
    
    if ($_GET){
        $id = ($_GET['id']);
        require "partials/_dbconnect.php";
        $sql_query = "SELECT * FROM `$database`.`$table` WHERE id=$id";
        $result = mysqli_query($conn, $sql_query);
        while ($row= mysqli_fetch_array($result)){
          require "view_form_html.php";
        }
      }
    ?>
      <!-- <div>
        <button type="submit" class="btn btn-primary" style="position:relative;left:50%; transform: translateX(-50%)">Submit</button>
      </div> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>