<?php
    require '../conn.php';
    $sql = "SELECT * FROM popcat WHERE `popcat`.`id` = 1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    // echo "Comsci : " . $row["comsci"]. "<br>Parmong : " . $row["parmong"]. "<br>fish : " . $row["fish"]. "<br>";
    $fishpass = $row["fish"]+1;
    $fish = "UPDATE `popcat` SET `fish` = '$fishpass' WHERE `popcat`.`id` = 1";
    if ($conn->query($fish) === TRUE) {
        echo "<br>fish record updated successfully";
    }
    $conn->close();
?>