<?php
// declare(strict_types=1);
$showAlert=false;
$showError=false;
$err = [];
$lenErr = [];

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    require "_dbconnect.php";

    $checkDataLists = [$_POST['applicantname'], $_POST['appstreetnumber'], $_POST['appstreetname'], $_POST['appcity'],
                        $_POST['appstate'], $_POST['apptelephone'], $_POST['appemail'],
                        $_POST['addstreetnumber'], $_POST['addstreetname'], $_POST['addcity'],$_POST['addstate']];

    foreach ($checkDataLists as $checkDataList){
        if (empty($checkDataList) || str_starts_with($checkDataList," ")){
            $err[]=$checkDataList;
        }
    }
    
    if (strlen($_POST['applicantname']) >= 35){
        $lenErr[]="Applicant Name is too long. This field accepts only 15 characters. ";
    }
    elseif (strlen($_POST['appstreetnumber']) >= 10){
        $lenErr[]="Street Number is too long. This field accepts only 10 characters. ";
    }
    elseif (strlen($_POST['apptelephone']) >= 15){
        $lenErr[]="Telephone Number is too long. This field accepts only 15 numbers. ";
    }
    if (count($err) >0 || count($lenErr) > 0){
        $showError = $lenErr[0];
    }
    else{
        if (isset($_POST['yes'])){
            $otherapp = $_POST['yes'];
        }
        else{
            $otherapp = $_POST['no'];
        }
        print_r($_POST);
        if (isset($_POST['new'])){
            $chimney = $_POST['new'];
        }
        elseif(isset($_POST['existing'])){
            $chimney = $_POST['existing'];
        }
        if (isset($_POST['apppobox'])){
            $apppobox = $_POST['apppobox'];
        }
        else{
            $apppobox = "off";
        }
        if (isset($_POST["addpobox"])){
            $addpobox = $_POST["addpobox"];
        }
        else{
            $addpobox = "off";
        }


        $insData = ['apppobox' => $apppobox,
                    'applicantname'=>$_POST['applicantname'], 
                    'appstreetnumber'=>$_POST['appstreetnumber'],
                    'appstreetname'=>$_POST['appstreetname'], 
                    'appcity'=>$_POST['appcity'], 
                    'appstate'=>$_POST['appstate'], 
                    'appzip'=>$_POST['appzip'], 
                    'apptelephone'=>$_POST['apptelephone'],
                    'appemail'=>$_POST['appemail'],
                    'addpobox' => $addpobox,
                    'addstreetnumber'=>$_POST['addstreetnumber'],
                    'addstreetname'=>$_POST['addstreetname'], 
                    'addcity'=>$_POST['addcity'], 
                    'addstate'=>$_POST['addstate'], 
                    'addzip'=>$_POST['addzip'],
                    'floormaterial'=>$_POST['floormaterial'],
                    'wall'=>$_POST['wall'],
                    'ceiling'=>$_POST['ceiling'],
                    'clearnace'=>$_POST['clearnace'],
                    'wall1'=>$_POST['wall1'],
                    'ceiling1'=>$_POST['ceiling1'],
                    'chimney'=>$chimney,
                    'type'=>$_POST['type'],
                    'size'=>$_POST['size'],
                    'otherapp'=>$otherapp,
                ];

        $query="UPDATE `{$database}`.`{$table}` SET ";
        foreach ($insData as $key => $value){
            $query .= "`$key`='$value',";
        }
        $query = substr($query, 0, -1);

        $query .= ' WHERE ';
        $id = $_GET['id'];
        $where = ['id' => $id];
        foreach($where as $key => $value)
        {
            $query .= '`'.$key.'`='.$value.','; 
        }
        $query = substr($query, 0, -1);

        $result = mysqli_query($conn, $query);
    }
}

?>