<?php
    require '../conn.php';
    $sql = "SELECT * FROM popcat WHERE `popcat`.`id` = 1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    // echo "Consci : " . $row["comsci"]. "<br>Parmong : " . $row["parmong"]. "<br>teacher : " . $row["teacher"]. "<br>";
    $teacher = $row["teacher"];
    print $teacher;
    $conn->close();

?>