<?php

//! обнуляем куки
setcookie('user', $user['name'],time() - 3600, "/");
setcookie('id', $userId['id'],time() - 3600, "/");



header('Location: /')
?>
