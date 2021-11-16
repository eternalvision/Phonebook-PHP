<?php

    //! проверка на тип, получение текста с инпутов и фильтрация
    $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

    $pass = md5($pass."akefwngxnu32067");

    //! подключение к бд
    $mysql = new mysqli("localhost", "root", "","register-bd");

    //! проверка на совпадение логина и пароля
    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
    $user = $result->fetch_assoc();

    //! перебор результата для получения id пользователя
    while($row = mysqli_fetch_array($result)){
      $id = $row['id'];
    }

  if(count($user) == 0){
  echo "<script type='text/javascript'>alert('Такой пользователь не найден');</script>";
  exit();
  }

  //! автологин через куки
  setcookie('user', $user['name'], time() + 3600, "/");

  //! id
  setcookie('id', $user['id'], time() + 3600, "/");

  //! разрыв соединения
  $mysql->close();

  //! переадресация
  header('Location: /');
?>
