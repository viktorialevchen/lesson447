<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    .black-block{
        background-color: black;
        color: white;
        padding: 20px;
        display: flex;
        align-items: flex-start; 
        gap: 15px;
        height: 742px;
    }
    .black-block img{
        width: 150px; 
        height: 150px; 
        object-fit: cover;
        border-radius: 10px; 
    }
    .col-12{
        height: 60px;
        background-color:black;
    }
    .img1{
        width: 100px;
        height: 20px;
    }
</style>
</head>
<body>
    <div class ="col-12">
        	<img class ="img1" src="logo.png">
            <div>
                <a href="" class="text-light ms-4 text-uppercase">Магазин</a>
					<a href="" class="text-light ms-4 text-uppercase">Сообщество</a>
					<a href="" class="text-light ms-4 text-uppercase">O STEAM</a>
					<a href="" class="text-light ms-4 text-uppercase">Поддержка</a>			
            </div>
    </div>
<div class="container-fluid p-0">
    <div class="black-block">       
        <img src="https://thumbs.dreamstime.com/b/%D0%BF%D1%80%D0%BE%D1%84%D0%B8%D0%BB%D1%8C-%D0%BF%D0%BE%D0%BB%D1%8C%D0%B7%D0%BE%D0%B2%D0%B0%D1%82%D0%B5%D0%BB%D1%8F-%D0%B2%D0%B5%D0%BA%D1%82%D0%BE%D1%80%D0%B0-%D0%BF%D1%80%D0%BE%D1%84%D0%B8%D0%BB%D1%8F-%D0%B0%D0%B2%D0%B0%D1%82%D0%B0%D1%80%D1%8B-%D0%BF%D0%BE-%D1%83%D0%BC%D0%BE%D0%BB%D1%87%D0%B0%D0%BD%D0%B8%D1%8E-179376714.jpg" alt="Аватар">

        <div>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo "<h2>Создание аккаунта</h2>";
                echo "Имя аккаунта: " . $_POST['username'] . "<br>";
                echo "Электронная почта: " . $_POST['email'] . "<br>";
                echo "Возраст: " . $_POST['age'] . "<br>";
            } else {
                echo "<h2>/h2>";
            }
            ?>
        </div>

    </div>
</div>

</body>
</html>
