<?php 
    session_start();
    if(isset($_SESSION['type'])){
        if($_SESSION['type'] == "admin"){
            // header("Location: adminportal.php");
        }
        else if($_SESSION['type'] == "official"){
            // header("Location: official.php");
        }
    }
    else{
        // header("Location: login.php");
    }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/body.css">
    <link rel="stylesheet" href="css/header.css">

</head>
<body>
    <header>
        <div style = "display: flex; padding: center;color: white; align-text:center; ">

            <a href="index.php"><img src="resources\Kontra Covid-19 Chatbot LOGO.png" height="60px" width="60px"></a>
            <h3 style="padding-top: 20px;">Kontra COVID-19 Chatbot</h3>
        </div>
        <nav>
            <div>
                <img src="resources\icons\2x\baseline_dehaze_white_48dp.png" class="burger">
            </div>
            <?php 
            if(isset($_SESSION['logged'])){
                // echo $_SESSION['logged'];
                if($_SESSION['logged'] == "admin"){
                    echo '<ul class="navLinks">
                    <li><a href="adminportal.php" class="navLink">DASHBOARD</a></span></li>
                    <li><a href="includes/logout.inc.php" class="navLink">LOGOUT</a></li>
                </ul>';
                }
                else if($_SESSION['logged'] == "official"){
                    echo '<ul class="navLinks">
                    <li><a href="officialsportal.php" class="navLink">ASSESSMENT RESULTS</a></span></li>
                    <li><a href="officialsprofile.php" class="navLink">PROFILE</a></span></li>
                    <li><a href="includes/logout.inc.php" class="navLink">LOGOUT</a></li>
                </ul>';
                }
            }
            else{
                echo '<ul class="navLinks">
                <li><a href="index.php" class="navLink">CHATBOT</a></span></li>
                <li><a href="login.php" class="navLink">LOGIN</a></li>
                <li><a href="registration.php" class="navLink">REGISTER</a></li>
                <li><a class="navLink" id="exit">EXIT</a></li>
            </ul>';
            }
            ?>      
            
        </nav>          
    </header>
    <div class="burgerLinks" value="false">
        <ul>
            <li><a href="index.php" class="navLink">CHATBOT</a></span></li>
            <li><a href="registration.php" class="navLink">REGISTER</a></li>
            <li><a href="login.php" class="navLink">LOGIN</a></li>
            <li><a class="navLink" id="exit">EXIT</a></li>
        </ul>
    </div>
    <script src="script/header.js"></script>
<body>
    