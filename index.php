<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dog License</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
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
  </head>
  <body>
    <?php require "navbar.html" ?>
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