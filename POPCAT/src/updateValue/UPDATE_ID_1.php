<?php
    require '../conn.php';
    $sql = "SELECT * FROM popcat WHERE `popcat`.`id` = 1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    // echo "Comsci : " . $row["comsci"]. "<br>comsci_s : " . $row["comsci_s"]. "<br>Visava : " . $row["visava"]. "<br>";

    $comsci_spass = $row["comsci_s"]+1;

    $comsci_s = "UPDATE `popcat` SET `comsci_s` = '$comsci_spass' WHERE `popcat`.`id` = 1";
    if ($conn->query($comsci_s) === TRUE) {
        echo "<br>comsci_s record updated successfully";
    }

    $conn->close();
?>