<?php
    require '../conn.php';
    $sql = "SELECT * FROM popcat WHERE `popcat`.`id` = 1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    // echo "Comsci : " . $row["comsci"]. "<br>Parmong : " . $row["parmong"]. "<br>vissava : " . $row["vissava"]. "<br>";
    $vissavapass = $row["vissava"]+1;
    $vissava = "UPDATE `popcat` SET `vissava` = '$vissavapass' WHERE `popcat`.`id` = 1";
    if ($conn->query($vissava) === TRUE) {
        echo "<br>vissava record updated successfully";
    }
    $conn->close();
?>