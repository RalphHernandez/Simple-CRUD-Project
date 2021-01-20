<!DOCTYPE html>
<html>
<head>
    <title>Collection</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Plant Name</th>
            <th>Date Potted</th>
            <th>Status</th>
            <th>Recommendation</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "phr");
        $sql = "SELECT * FROM plant";
        $result = $conn-> query($sql);

        if($result->num_rows > 0){
            while($row =  $result-> fetch_assoc()){
                echo "<tr><td>" . $row["plant_id"] . "</td><td>" . $row["plant_name"] . "</td><td>" . $row["date_potted"] . "</td><td>" . $row["plant_status"] . "</td><td>" . $row["recommendation"] . "</td></tr>";
            }
        }
        else{
            echo "No Results!";
        }
        $conn-> close();
        ?>
    </table>
</body>
</html>