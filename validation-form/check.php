<?php

  //! проверка на тип, получение текста с инпутов и фильтрация
  $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
  $name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

  //! проверка введеного контента
  if(mb_strlen($login) < 5 || mb_strlen($login) > 90){
    echo "<h1>Недопустимая длина логина!</h1>";
    echo"<a href='/'>Вернутся</a>";
    exit();

  } else if(mb_strlen($name) < 2 || mb_strlen($name) > 50){
    echo "<h1>Недопустимая длина имени!</h1>";
    echo"<a href='../index.php'>Вернутся</a>";
    exit();

  } else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 15){
    echo "<script type='text/javascript'>alert('Недопустимая длина логина (от 2 до 6 символов)!');</script>";
    exit();
  }

  $pass = md5($pass."akefwngxnu32067");

  //! подключение к бд
  $mysql = new mysqli("localhost", "root", "","register-bd");
  $mysql->query("INSERT INTO `users` (`login`, `pass`, `name`) VALUES( '$login', '$pass', '$name')");



  //! разрыв соединения
  $mysql->close();

  //! переадресация
  header('Location: /');
?>

<!-- <script>
  const userId =
  export default '*';
</script> -->
