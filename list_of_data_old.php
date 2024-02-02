<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        table, th, td{
            border: 1px solid black;
        }
    </style>
    </head>

    <body>

    <?php 
    $username = "root"; 
    $password = ""; 
    $database = "dog_license"; 
    $table = "applicants";

    $conn = mysqli_connect("localhost", $username, $password, $database); 
    $query = "SELECT * FROM $table";

    $descQuery = "DESCRIBE $table";
    $descResult = mysqli_query($conn, $descQuery);
    $descRows = mysqli_fetch_all($descResult);

    echo '
    <form action="index.php">
    <div class="container-fluid" style="position:relative; text-align:center; float:right; width:60%; margin:10px">
        <div class="mb-3">
            <table border="0" cellspacing="4" cellpadding="10"> 
                <tr> 
                    <td> <font face="Arial">'.$descRows[0][0].'</font> </td>
                    <td> <font face="Arial">'.$descRows[2][0].'</font> </td>
                    <td> <font face="Arial">'.$descRows[8][0].'</font> </td>
                </tr>';

    if ($result = mysqli_query($conn, $query)) {
        while ($row = mysqli_fetch_assoc($result)) {
            $field1name = $row["id"];
            $field2name = $row[$descRows[2][0]];
            $field3name = $row[$descRows[8][0]];

            echo '<tr> 
                    <td><a href="view_form.php?id='. $field1name.'">'.$field1name.'</a></td>
                    <td>'.$field2name.'</td>
                    <td>'.$field3name.'</td>

                </tr>
                </div>';
        }
        mysqli_free_result($result);
    }

    echo '
    </table>
    </div>
    <div class="container-fluid" style="position:relative; text-align:center; float:right; width:175%; margin:10px">
        <button type="submit" class="btn btn-primary">Add New Data</button>
    </div>
    </form>

    '
    ?>

    </body>
</html>