<?php
    require '../conn.php';
    $sql = "SELECT * FROM popcat WHERE `popcat`.`id` = 1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    // echo "Consci : " . $row["comsci"]. "<br>Parmong : " . $row["parmong"]. "<br>life_science : " . $row["life_science"]. "<br>";
    $life_science = $row["life_science"];
    print $life_science;
    $conn->close();

?>