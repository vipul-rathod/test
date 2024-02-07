<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Form</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>

    <?php
    
    if ($_GET){
        $id = ($_GET['id']);
        require "partials/_dbconnect.php";
        $sql_query = "SELECT * FROM `$database`.`$table` WHERE id=$id";
        $result = mysqli_query($conn, $sql_query);
        $row= mysqli_fetch_assoc($result);
        require "index.php";
      }
    ?>
      <script>
        function viewFunc($){
          $(document).ready(function(){
            // SECTION-3 grab all fields input value to a variable.
            var apppobox = "<?php echo $row['apppobox'] ?>";
            var applicantname = "<?php echo $row['applicantname'] ?>";
            var appstreetnumber = "<?php echo $row['appstreetnumber'] ?>";
            var appstreetname = "<?php echo $row['appstreetname'] ?>";
            var appcity = "<?php echo $row['appcity'] ?>";
            var appstate = "<?php echo $row['appstate'] ?>";
            var appzip = "<?php echo $row['appzip'] ?>";
            var apptelephone = "<?php echo $row['apptelephone'] ?>";
            var appemail = "<?php echo $row['appemail'] ?>";

            // SECTION-4 grab all fields input value to a variable.
            var addpobox = "<?php echo $row['addpobox'] ?>";
            var addstreetnumber = "<?php echo $row['addstreetnumber'] ?>";
            var addstreetname = "<?php echo $row['addstreetname'] ?>";
            var addcity = "<?php echo $row['addcity'] ?>";
            var addstate = "<?php echo $row['addstate'] ?>";
            var addzip = "<?php echo $row['addzip'] ?>";

            // SECTION-5 grab all fields input value to a variable.
            var floormaterial = "<?php echo $row['floormaterial'] ?>";
            var wall = "<?php echo $row['wall'] ?>";
            var ceiling = "<?php echo $row['ceiling'] ?>";
            var clearnace = "<?php echo $row['clearnace'] ?>";
            var wall1 = "<?php echo $row['wall1'] ?>";
            var ceiling1 = "<?php echo $row['ceiling1'] ?>";
            var chimney = "<?php echo $row['chimney'] ?>";
            var type = "<?php echo $row['type'] ?>";
            var size = "<?php echo $row['size'] ?>";
            var otherapp = "<?php echo $row['otherapp'] ?>";

            // Make all attributes readonly to view the form
            $("*").attr("readonly", true);
            $("input").addClass("input-disabled");

            // Check and update all t he fields as per the database to view the form
            if (apppobox == "off"){
              $("#apppobox").prop('checked', false);
              $("#apppobox").prop('disabled', true);
            }
            else{
              $("#apppobox").prop('checked', true);
              $("#apppobox").prop('disabled', true);
            }

            $("#applicantname").attr("value", applicantname);
            $("#appstreetnumber").attr("value", appstreetnumber);
            $("#appstreetname").attr("value", appstreetname);
            $("#appcity").attr("value", appcity);
            $("#appstate").attr("value", appstate);
            $("#appzip").attr("value", appzip);
            $("#apptelephone").attr("value", apptelephone);
            $("#appemail").attr("value", appemail);

            if (addpobox == "off"){
              $("#addpobox").prop('checked', false);
              $("#addpobox").prop('disabled', true);
            }
            else{
              $("#addpobox").prop('checked', true);
              $("#addpobox").prop('disabled', true);
            }

            $("#addstreetnumber").attr("value", addstreetnumber);
            $("#addstreetname").attr("value", addstreetname);
            $("#addcity").attr("value", addcity);
            $("#addstate").attr("value", addstate);
            $("#addzip").attr("value", addzip);

            $("#floormaterial").attr("value", floormaterial);
            $("#wall").attr("value", wall);
            $("#ceiling").attr("value", ceiling);
            $("#clearnace").attr("value", clearnace);
            $("#wall1").attr("value", wall1);
            $("#ceiling1").attr("value", ceiling1);

            if (chimney == "New"){
              $("#new").prop("checked", true);
              $("#new").prop('disabled', true);
              $("#existing").prop('disabled', true);
            }
            if (chimney == "Existing"){
              $("#new").prop('checked', false);
              $("#existing").prop('checked', true);
              $("#existing").prop('disabled', true);
              $("#new").prop('disabled', true);
            }

            $("#type").attr("value", type);
            $("#size").attr("value", size);

            if (otherapp == "yes"){
              $("#yes").prop("checked", true|false);
              $("#yes").prop('disabled', true);
              $("#no").prop('disabled', true);
            }
            if (otherapp == "no"){
              $("#no").prop('checked', true|false);
              $("#no").prop('disabled', true);
              $("#yes").prop('disabled', true);
            }

            $("#submit_btn").attr("hidden", true);
            $("#edit_btn").attr("hidden", false);
            $("#edit_btn").click(function(){
              $("*").attr("readonly", false);

              $("#apppobox").prop('disabled', false);

              $("#addpobox").prop('disabled', false);
              $("#new").prop('disabled', false);
              $("#existing").prop('disabled', false);
              $("#yes").prop('disabled', false);
              $("#no").prop('disabled', false);



              $("input").removeClass("input-disabled");
              $("*").attr("onclick", true);
              $("#edit_btn").attr("hidden", true);
              $("#update_btn").attr("hidden", false);

              $("#update_btn").click(function(){
                var id = "<?php echo $_GET['id']; ?>";
                $.ajax({
                  type: 'post',
                  url: 'partials/update_to_db.php?id='+id,
                  data: $('#form').serialize(),
                  success: function (result) {
                    window.location = 'list_of_data.php';
                      }
                });
              })
            })
          })
        }
        viewFunc($);
      </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

