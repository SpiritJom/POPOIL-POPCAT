<?php
    require '../conn.php';
    $sql = "SELECT * FROM popcat WHERE `popcat`.`id` = 1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    // echo "Consci : " . $row["comsci"]. "<br>comsci_s$comsci_s : " . $row["comsci_s$comsci_s"]. "<br>Visava : " . $row["visava"]. "<br>";
    $comsci_s = $row["comsci_s"];
    print $comsci_s;
    $conn->close();

?>