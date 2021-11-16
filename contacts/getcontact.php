<?php
  //! проверка на тип, получение текста с инпутов и фильтрация
  $id = $_COOKIE['id'];
  $username = filter_var(trim($_POST['userName']),FILTER_SANITIZE_STRING);
  $usernum = filter_var(trim($_POST['userNumber']),FILTER_SANITIZE_STRING);

  //! подключение к бд
  $mysql = new PDO('mysql:host=localhost;dbname=users-bd','root','');


  //! заполнение бд
  $mysql->query("INSERT INTO `contacts` (`userid`, `username`, `usernum`) VALUES('$id','$username', '$usernum')");

  //! получение всех данных из бд
    $sql = $mysql->prepare("SELECT * FROM `contacts` id=:userid  AND username = :username AND usernum = :usernum");
  $sql->execute(array(
  ':userid' => $userid,
  ':userName' => $username,
  ':userNum' => $username
  ));

  $result = array(
  'userid' => $userid,
   'userName' => $username,
  'userNum' => $username,

  );

  foreach($sql as $row){
    $result['resultMass'][] = array('userid' => $row['userid'], 'username' => $row['username'], 'usernum' => $row ['usernum']);
  }
  $resultEncode = json_encode($result);

  // $sql = "SELECT * FROM `contacts`";

  // if($result = $mysql->query($sql)){
  // $rowsCount = $result->num_rows;

  // foreach($result as $row){
  // $userid = $row["id"];
  // $username = $row["username"];
  // $usernum = $row["usernum"];

  // echo "<script type='text/javascript'>
  //     var existingEntries = JSON.parse(localStorage.getItem(\"allEntries\"));
  //     if (existingEntries == null) existingEntries = [];
  //     var entryName = \"$username\";
  //     var entryNumber = $usernum;
  //     var entry = {
  //     userId:$userid,
  //     name: entryName,
  //     number: entryNumber,
  //     };

  //     existingEntries.push(entry);
  //     localStorage.setItem(\"allEntries\", JSON.stringify(existingEntries));

  //     </script>";
  //     exit();
  // }
// }
    header('Location: /');
?>
