<?php
require_once 'config.php';

$sql = "SELECT * FROM `$table`";
$result = $conn->query($sql);
$arr_users = [];
if ($result->num_rows > 0 ){
    $arr_users = $result->fetch_all(MYSQLI_ASSOC);
    
    $columns = array_keys($arr_users[0]);
    $row_data_arrs = [];
    for ($i=0; $i<count($arr_users); $i++):
        $row_data_arrs[] = (array_values($arr_users[$i]));
    endfor;
}
?>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css"/>

<table id="myTable" class="display">
    <thead>
        <?php
            for ($x=0; $x<count($columns); $x++):
                echo ('<td>'.$columns[$x].'</td>');
            endfor;
        ?>
    </thead>
    <tbody>
            <?php
                foreach($row_data_arrs as $row_data_arr):
                    echo '<tr>';
                    foreach($row_data_arr as $row_data):
                        echo ('<td><a href="view_form.php?id='.$row_data_arr[0].'">'.$row_data.'</td>');
                    endforeach;
                    echo '</tr>';
                endforeach;
            ?>
    </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

<script>
    let table = new DataTable('#myTable');
</script>