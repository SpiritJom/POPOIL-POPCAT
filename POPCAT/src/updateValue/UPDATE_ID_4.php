<?php
    require '../conn.php';
    $sql = "SELECT * FROM popcat WHERE `popcat`.`id` = 1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    // echo "Comsci : " . $row["comsci"]. "<br>Parmong : " . $row["parmong"]. "<br>other : " . $row["other"]. "<br>";
    $otherpass = $row["other"]+1;
    $other = "UPDATE `popcat` SET `other` = '$otherpass' WHERE `popcat`.`id` = 1";
    if ($conn->query($other) === TRUE) {
        echo "<br>other record updated successfully";
    }
    $conn->close();
?>