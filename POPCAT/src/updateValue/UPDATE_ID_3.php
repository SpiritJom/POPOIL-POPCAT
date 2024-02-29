<?php
    require '../conn.php';
    $sql = "SELECT * FROM popcat WHERE `popcat`.`id` = 1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    // echo "Comsci : " . $row["comsci"]. "<br>Parmong : " . $row["parmong"]. "<br>political : " . $row["political"]. "<br>";

    $politicalpass = $row["political"]+1;

    $political = "UPDATE `popcat` SET `political` = '$politicalpass' WHERE `popcat`.`id` = 1";
    if ($conn->query($political) === TRUE) {
        echo "<br>political record updated successfully";
    }

    $conn->close();
?>