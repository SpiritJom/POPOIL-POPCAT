<?php
    require '../conn.php';
    $sql = "SELECT * FROM popcat WHERE `popcat`.`id` = 1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    // echo "Comsci : " . $row["comsci"]. "<br>Parmong : " . $row["parmong"]. "<br>teacher : " . $row["teacher"]. "<br>";
    $teacherpass = $row["teacher"]+1;
    $teacher = "UPDATE `popcat` SET `teacher` = '$teacherpass' WHERE `popcat`.`id` = 1";
    if ($conn->query($teacher) === TRUE) {
        echo "<br>teacher record updated successfully";
    }
    $conn->close();
?>