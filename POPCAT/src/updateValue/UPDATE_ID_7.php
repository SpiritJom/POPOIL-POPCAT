<?php
    require '../conn.php';
    $sql = "SELECT * FROM popcat WHERE `popcat`.`id` = 1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    // echo "Comsci : " . $row["comsci"]. "<br>Parmong : " . $row["parmong"]. "<br>education : " . $row["education"]. "<br>";
    $educationpass = $row["education"]+1;
    $education = "UPDATE `popcat` SET `education` = '$educationpass' WHERE `popcat`.`id` = 1";
    if ($conn->query($education) === TRUE) {
        echo "<br>education record updated successfully";
    }
    $conn->close();
?>