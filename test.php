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

    <header>
        <h1>Лабораторная работа 4 Бондарчук</h1>
    </header>
    <div class="container">
    <a href="index.php">Перейти на главную</a>
    <br>

    Тест 1:
    <?php
    session_start();
    echo "Hello, World!<br>"
    ?>
    Тест 2:
    <?php echo 2+2 ?>

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
