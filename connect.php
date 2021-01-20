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
        $stmt -> close();
        $conn -> close();
    }
?>