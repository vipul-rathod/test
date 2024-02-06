<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>

  <style>
    .input-disabled{background-color:#EBEBE4;border:1px solid #ABADB3;padding:2px 1px;}
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
        $row= mysqli_fetch_assoc($result);
        print_r($row);
        foreach($row as $key=>$value){
          echo ('Key: '.$key.' Value: '.$value);
        }
        require "index.php";
      }
    ?>

      <script>
        function viewFunc($){
          $(document).ready(function(){
            $("*").attr("readonly", true);
          })
        }
        viewFunc($);
      </script>

      <script>
        function myFunction(){
          $(document).ready(function(){
            $("button").click(function(){
              $("*").attr("readonly", false);
              $("*").attr("onclick", true);
              $("button").attr("hidden", true);
              $("#submit_update_btn").attr("hidden", false);
              $("input").removeClass("input-disabled");
              var id = "<?php echo $id;?>";
              $('form').bind('submit', function () {
                $.ajax({
                  type: 'post',
                  url: 'partials/update_to_db.php?id='+id,
                  data: $('form').serialize(),
                  success: function (data) {
                    window.location = 'list_of_data.php';
                      }
                });
                    return false;
              });
            });
          });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

