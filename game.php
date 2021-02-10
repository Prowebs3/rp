<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Redressed&display=swap" rel="stylesheet">
    <style>
    .round
    {
    border-radius:50%;
    float:right;
    
    }
        </style>
</head>


<body>
<div id="round">
        <img src="profile/<?php echo $_SESSION['user_photo']; ?>" alt=" "  width="100px" height="50px" class="round"  >
        </div>
    <div class="">
        <button class="btn btn-danger mt-5" onclick="reset()"><a href="game.php" id="gf">CONTINUE</a></button>
        <button class="btn btn-danger mt-5" onclick=""><a href="logout.php" id="gf">LOGOUT</a></button>
       
    </div>
    <h2 ></h2>

    <div class="container-3 mt-5">
        <h1>Rock Paper Scissors</h1>
        <div class="time" id="time"></div>
        <div class="flex-con-3" id="flex-rps">
            <img id="rock" src="http://images.clipartpanda.com/rock-clipart-clipart-harvestable-resources-rock.png" height=150 width=150 alt="" onclick="rpsGame(this)">
            <img id="paper" src="http://images.clipartpanda.com/pencil-and-paper-clipart-black-and-white-1206556249326967385nexxuz_Loose_Leaf_Paper.svg.hi.png" height=150 width=150 alt="" onclick="rpsGame(this)">
            <img id="scissors" src="https://cdn0.iconfinder.com/data/icons/rock-paper-scissors-emoji/792/rock-paper-scissors-emoji-cartoon-009-512.png" height=150 width=150 alt="" onclick="rpsGame(this)">
        </div>

    </div>



    <script src="js/script.js"></script>
</body>

</html>