<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		html, body{
			height: 100%;
		}
		
	</style>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
	<div class="col-12  p-3" style="background-color: #171A21;">
		<div class="col-8 mx-auto" >
			<div class="row">
				<div class="col-3" >
					<a href="index.html">
						<img src="logo.png" class="w-100">
					</a>
				</div>
				<div class="col-9 pt-4" >
					<a href="" class="text-light ms-4 text-uppercase">Магазин</a>
					<a href="" class="text-light ms-4 text-uppercase">Сообщество</a>
					<a href="" class="text-light ms-4 text-uppercase">O STEAM</a>
					<a href="" class="text-light ms-4 text-uppercase">Поддержка</a>					
				</div>
			</div>			
		</div>
	</div>
	<div class="col-12" style="background-color: #212429; height: 100%;">
    <div class="col-4 mx-auto p-5" style="background-color: #222431;">
        
        <h3 class="text-light mb-4">Вход</h3>

        <form onsubmit="checkForm(); return false;">
            <input type="text" id="email" placeholder="Email" class="form-control mb-3">
            <input type="password" id="password" placeholder="Пароль" class="form-control mb-3">
            <button type="submit" class="btn btn-primary w-100">Войти</button>
        </form>

    </div>
</div>
<script>





   <form method="POST" class="mb-3">
                        <input type="text" name="username" placeholder="Имя" class="form-control mb-2" required>
                        <input type="email" name="email" placeholder="Email" class="form-control mb-2" required>
                        <input type="number" name="age" placeholder="Возраст" class="form-control mb-2" required>
                        <button type="submit" class="btn btn-primary">Создать аккаунт</button>
                    </form>

                    <div>
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            echo "<h2>Создание аккаунта</h2>";
                            echo "Имя аккаунта: " . $_POST['username'] . "<br>";
                            echo "Электронная почта: " . $_POST['email'] . "<br>";
                            echo "Возраст: " . $_POST['age'] . "<br>";
                        }
                        ?>
                    </div>
	


  if(!emailPattern.test(email)){
    alert("Введите корректный email");
    return;
  }

  if(password.length < 6){
    alert("Пароль минимум 6 символов");
    return;
  }

  alert("Все ок ✅");
</script>
</body>
</html>