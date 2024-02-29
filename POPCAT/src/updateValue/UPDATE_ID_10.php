<?php
    require '../conn.php';
    $sql = "SELECT * FROM popcat WHERE `popcat`.`id` = 1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    // echo "Comsci : " . $row["comsci"]. "<br>Parmong : " . $row["parmong"]. "<br>envilon : " . $row["envilon"]. "<br>";
    $envilonpass = $row["envilon"]+1;
    $envilon = "UPDATE `popcat` SET `envilon` = '$envilonpass' WHERE `popcat`.`id` = 1";
    if ($conn->query($envilon) === TRUE) {
        echo "<br>envilon record updated successfully";
    }
    $conn->close();
?>