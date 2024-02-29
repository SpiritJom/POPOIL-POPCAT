<?php
    require '../conn.php';
    $sql = "SELECT * FROM popcat WHERE `popcat`.`id` = 1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    // echo "Comsci : " . $row["comsci"]. "<br>Parmong : " . $row["parmong"]. "<br>life_science : " . $row["life_science"]. "<br>";

    $life_sciencepass = $row["life_science"]+1;

    $life_science = "UPDATE `popcat` SET `life_science` = '$life_sciencepass' WHERE `popcat`.`id` = 1";
    if ($conn->query($life_science) === TRUE) {
        echo "<br>life_science record updated successfully";
    }

    $conn->close();
?>