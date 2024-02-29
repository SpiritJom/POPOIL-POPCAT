<?php
    require '../conn.php';
    $sql = "SELECT * FROM popcat WHERE `popcat`.`id` = 1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    // echo "Comsci : " . $row["comsci"]. "<br>Parmong : " . $row["parmong"]. "<br>animal : " . $row["animal"]. "<br>";
    $animalpass = $row["animal"]+1;
    $animal = "UPDATE `popcat` SET `animal` = '$animalpass' WHERE `popcat`.`id` = 1";
    if ($conn->query($animal) === TRUE) {
        echo "<br>animal record updated successfully";
    }
    $conn->close();
?>