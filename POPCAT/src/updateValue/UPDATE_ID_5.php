<?php
    require '../conn.php';
    $sql = "SELECT * FROM popcat WHERE `popcat`.`id` = 1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    // echo "Comsci : " . $row["comsci"]. "<br>Parmong : " . $row["parmong"]. "<br>kraset : " . $row["kraset"]. "<br>";
    $krasetpass = $row["kraset"]+1;
    $kraset = "UPDATE `popcat` SET `kraset` = '$krasetpass' WHERE `popcat`.`id` = 1";
    if ($conn->query($kraset) === TRUE) {
        echo "<br>kraset record updated successfully";
    }
    $conn->close();
?>