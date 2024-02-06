<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dog License</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script>
      $(function () {
        $('form').bind('submit', function () {
          $.ajax({
            type: 'post',
            url: 'partials/submit_to_db.php',
            data: $('form').serialize(),
            success: function () {
              window.location = 'list_of_data.php';
                }
            });
              return false;
            });
          });
        </script>
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
    <form id="form">
    <?php
      require "index.html";
    ?>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function(){
        $("#view_btn").click(function(){
          window.location = 'list_of_data.php';
        })
      })
    </script>
  </body>
</html>