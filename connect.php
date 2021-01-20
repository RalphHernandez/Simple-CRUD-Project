<?php
    $plant_name = $_POST['plantName'];
    $date_potted = $_POST['datePotted'];
    $plant_status = $_POST['pstatus'];
    $recommendation = $_POST['recommendation'];

    $conn = new mysqli('localhost', 'root', '', 'phr');
    if($conn -> connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("INSERT INTO plant (plant_name, date_potted, plant_status, recommendation)
        values(?, ?, ?, ?)");
        $stmt -> bind_param("ssss", $plant_name, $date_potted, $plant_status, $recommendation);
        $stmt -> execute();
        echo "Plant successfully added!";
    }
?>
/*  $plant_name = $_POST['plantName'];
    $date_potted = $_POST['datePotted'];
    $plant_status = $_POST['pstatus'];
    $recommendation = $_POST['recommendation'];

    if(!empty($plant_name) || !empty($date_potted) || !empty($plant_status) || !empty($recommendation)){
        $host = "localhost";
        $dbUserName = "root";
        $dbPassword = "";
        $dbName = "phr";

        $conn = new mysqli($host, $dbUserName, $dbPassword, $dbName);

        if(mysqli_connect_error()){
            die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
        }else{
            $INSERT = "INSERT INTO phr (plant_name, date_potted, plant_status, recommendation)
                values(?, ?, ?, ?)";
            
            $sql = $conn->prepare($INSERT);
            $sql->bind_param("ssss", $plant_name, $date_potted, $plant_status, $recommendation);
            $sql->execute();
            echo "Plant successfully added!";
            $sql->close();
            $conn->close();
        }
    }else{
        echo "All fields are required!";
        die();
    }*/