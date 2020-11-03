<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LB 4</title>
</head>
<body>
    <style>
    body{
        padding:0px;
        margin:0px;
    }
    .container{
        max-width: 1140px;
        padding-left: 15px;
        padding-right: 15px;
        margin-left: auto;
        margin-right: auto;
    }
    header{
        height: 60px;
        width: 100%;
        background-color: gray;
        display:flex;
        justify-content:center;
        align-items:center;
        margin-bottom:30px;
    }
    h1{
        margin:0px;
        padding:0px;
    }
    </style>
    <?php 
    session_start();
    ?>
    <header>
        <h1>Лабораторная работа 4 Бондарчук</h1>
    </header>
    <div class="container">
    <form action="login.php" method="POST">
    <input type="text" name="yourname" id="yourname">
    <button>
    Отправить
    </button>
    </form>

    <a href="page.php">Перейти на другую страницу портала</a>
    <br>
    <a href="test.php">Перейти на страницу тест</a>

    <?php 
    
    if (isset($_SESSION['yourname']))
    {
    ?>
    <p><?php echo 'Ваше имя: ' ,$_SESSION['yourname'];?></p>
    <?php
    }
    else{
    ?>
    <p>Сессия не зарегестрирована</p>
    <?php
    }
    ?>
    </div>
</body>
</html>