<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KontraCOVID</title>
    <link rel="stylesheet" type="text/css" href="css/body.css">
</head>
<body>
    <?php include_once 'header.php';?>
    <?php if(isset($_SESSION['logged'])){
        if($_SESSION['logged'] == "admin"){
            header("Location: adminportal.php");
        }
        else if($_SESSION['logged'] == "official"){
            header("Location: officialsportal.php");
        }
    }
    else{
        // header("Location: login.php");
    }?>
    <div class="banner" >
        <div class="container">
            <h1>WELCOME!</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid sed dolores aperiam soluta tempora corporis assumenda omnis a natus necessitatibus, quia sapiente vero earum nulla reiciendis nesciunt et tempore consequuntur fugiat ea similique. Autem, libero tempora illum nostrum ipsam incidunt nesciunt aspernatur porro repellat at nihil adipisci numquam quo cumque.</p>
            <br><br>
            <!-- <p><a href="#get_started" class="lime button">Get Started</a></p> -->
        </div>
    </div>
    <div id="get_started"></div>
    <div class="chatbotbox" >
        <?php include_once 'chatbot.php'?>    
    </div>

    <?php include_once 'footer.php';?>
</body>
</html>


