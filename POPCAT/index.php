<?php require './src/conn.php';?>
<!-- Hello world !!! -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POPOIL</title>
    <link rel="shortcut icon" type="image/jpg" href="favicon.ico"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" integrity="sha512-Cv93isQdFwaKBV+Z4X8kaVBYWHST58Xb/jVOcV9aRsGSArZsgAnFIhMpDoMDcFNoUtday1hdjn0nGp3+KZyyFw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="script.js" defer></script>
    <!-- <style>
        .topright {
            position: absolute;
            top: 8px;
            right: 16px;
            font-size: 18px;
        }
        h1{
            font-size: 4.5em;
            margin: 0.5% 0% -4.5% 0%;
            font-family: Nunito, Tahoma;
            -webkit-text-stroke: 3px black;
            color: royalblue;
        }
    </style> -->
</head>
<body>
    <div class="container">
        <h1>POP OIL</h1>
            <!-- consci_s -->
            <br><br>
            <?php 
                session_start();
                if(!isset($_COOKIE["count"])){
                    $cookie_name = "count";
                    $cookie_value = "0";
                    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
                    // header("Location:profile.php");
                    echo "<script>var score = 0;</script>";
                }else{
                    $cookie_value = $_COOKIE["count"];
                    echo "<script>var score = '". $cookie_value ."';</script>";
                }
            ?>
        <p id="score">
            <?php echo $cookie_value; ?>
        </p>
    </br></br>

            <img src="./src/image/maincat1.png" alt="Invalid" id="popcat1" height="400">
            
            <style>
                .divScroll {
                    overflow:scroll;
                    height:100px;
                    width:250px;
                }
            </style>
            <div class="m-3 badge bg-dark text-wrap buttom divScroll "style="text-align:left;" >
                โสด : <a id="demo_1" >1</a><br><br>
                เป็นได้แค่พี่น้อง: <a id="demo_2" >1</a><br><br>
                เป็นได้แค่เพื่อน           : <a id="demo_3" >1</a><br><br>
                มีแฟนแล้ว                   : <a id="demo_4" >1</a><br><br> 
                ยืนหนึ่งเรื่องซีรีส์       : <a id="demo_5" >1</a><br><br> 
                ยืนหนึ่งเรื่องกิน: <a id="demo_6" >1</a><br><br>
                ยืนหนึ่งเรื่องเกม  : <a id="demo_7" >1</a><br><br>
                <!-- คณะศึกษาศาสตร์และพัฒนศาสตร์ : <a id="demo_8" >1</a><br><br>
                คณะสัตวแพทยศาสตร์          : <a id="demo_9" >1</a><br><br>
                คณะประมง                  : <a id="demo_10">1</a><br><br>
                คณะสิ่งแวดล้อม              : <a id="demo_11" >1</a><br><br>
                อาจารย์และบุคลากร           : <a id="demo_12" >1</a><br><br> -->
            </div>

            <select name="majar" id="majar">
                <option value="1">[1] โสด</option> 
                <option value="2">[2] เป็นได้แค่พี่น้อง</option> 
                <option value="3">[3] เป็นได้แค่เพื่อน</option>
                <option value="4">[4] มีแฟนแล้ว</option> 
                <option value="5">[5] ยืนหนึ่งเรื่องซีรีส์</option>
                <option value="6">[6] ยืนหนึ่งเรื่องกิน</option>
                <option value="7">[7] ยืนหนึ่งเรื่องเกม</option>
                <!-- <option value="8">[8] คณะศึกษาศาสตร์และพัฒนศาสตร์</option>
                <option value="9">[9] คณะสัตวแพทยศาสตร์</option>
                <option value="10">[10] คณะประมง</option>
                <option value="11">[11] คณะสิ่งแวดล้อม</option>
                <option value="12">[12] อาจารย์และบุคลากร</option>  -->
            </select>
       
<script>
        function getValue_Comsci() {
            // const sb = document.querySelector('#majar');
            // const primary_key = sb.selectedIndex;
            var xhttp;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("demo_1").innerHTML = xhttp.responseText;
                }
            };
            xhttp.open("GET", `./src/getValue/getValue_Comsci.php`, true);
            xhttp.send();
        }
        function getValue_comsci_s() {
            // const sb = document.querySelector('#majar');
            // const primary_key = sb.selectedIndex;
            var xhttp;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("demo_2").innerHTML = xhttp.responseText;
                }
            };
            xhttp.open("GET", `./src/getValue/getValue_Comsci_s.php`, true);
            xhttp.send();
        }
        function getValue_life_science() {
            // const sb = document.querySelector('#majar');
            // const primary_key = sb.selectedIndex;
            var xhttp;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("demo_3").innerHTML = xhttp.responseText;
                }
            };
            xhttp.open("GET", `./src/getValue/getValue_life_science.php`, true);
            xhttp.send();
        }
        function getValue_political() {
            // const sb = document.querySelector('#majar');
            // const primary_key = sb.selectedIndex;
            var xhttp;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("demo_4").innerHTML = xhttp.responseText;
                }
            };
            xhttp.open("GET", `./src/getValue/getValue_political.php`, true);
            xhttp.send();
        }
        function getValue_other() {
            // const sb = document.querySelector('#majar');
            // const primary_key = sb.selectedIndex;
            var xhttp;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("demo_5").innerHTML = xhttp.responseText;
                }
            };
            xhttp.open("GET", `./src/getValue/getValue_other.php`, true);
            xhttp.send();
        }
        function getValue_kraset() {
            // const sb = document.querySelector('#majar');
            // const primary_key = sb.selectedIndex;
            var xhttp;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("demo_6").innerHTML = xhttp.responseText;
                }
            };
            xhttp.open("GET", `./src/getValue/getValue_kraset.php`, true);
            xhttp.send();
        }
        function getValue_vissava() {
            // const sb = document.querySelector('#majar');
            // const primary_key = sb.selectedIndex;
            var xhttp;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("demo_7").innerHTML = xhttp.responseText;
                }
            };
            xhttp.open("GET", `./src/getValue/getValue_vissava.php`, true);
            xhttp.send();
        }
        function getValue_education() {
            // const sb = document.querySelector('#majar');
            // const primary_key = sb.selectedIndex;
            var xhttp;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("demo_8").innerHTML = xhttp.responseText;
                }
            };
            xhttp.open("GET", `./src/getValue/getValue_education.php`, true);
            xhttp.send();
        }
        function getValue_animal() {
            // const sb = document.querySelector('#majar');
            // const primary_key = sb.selectedIndex;
            var xhttp;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("demo_9").innerHTML = xhttp.responseText;
                }
            };
            xhttp.open("GET", `./src/getValue/getValue_animal.php`, true);
            xhttp.send();
        }
        function getValue_fish() {
            // const sb = document.querySelector('#majar');
            // const primary_key = sb.selectedIndex;
            var xhttp;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("demo_10").innerHTML = xhttp.responseText;
                }
            };
            xhttp.open("GET", `./src/getValue/getValue_fish.php`, true);
            xhttp.send();
        }
        function getValue_envilon() {
            // const sb = document.querySelector('#majar');
            // const primary_key = sb.selectedIndex;
            var xhttp;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("demo_11").innerHTML = xhttp.responseText;
                }
            };
            xhttp.open("GET", `./src/getValue/getValue_envilon.php`, true);
            xhttp.send();
        }
        function getValue_teacher() {
            // const sb = document.querySelector('#majar');
            // const primary_key = sb.selectedIndex;
            var xhttp;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("demo_12").innerHTML = xhttp.responseText;
                }
            };
            xhttp.open("GET", `./src/getValue/getValue_teacher.php`, true);
            xhttp.send();
        }
        setInterval(getValue_Comsci, 1000);
        setInterval(getValue_comsci_s, 1000);
        setInterval(getValue_life_science, 1000);
        setInterval(getValue_political, 1000);
        setInterval(getValue_other, 1000);
        setInterval(getValue_kraset, 1000);
        setInterval(getValue_vissava, 1000);
        setInterval(getValue_education, 1000);
        setInterval(getValue_animal, 1000);
        setInterval(getValue_fish, 1000);
        setInterval(getValue_envilon, 1000);
        setInterval(getValue_teacher, 1000);
    </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>
