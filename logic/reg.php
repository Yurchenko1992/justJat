<?php include "../pages/header.php"; ?>
<?
//Получаем данные из формы
$login = $_POST ['login']; // Логин пользывателя
$password_1 = Trim($_POST ['password-1']); // Пароль пользывателя
$password_2 = Trim($_POST ['password-2']); // Повторный пароль пользывателя
$name = $_POST ['firstName']; // Имя пользывателя
$surname = $_POST ['surname']; // Фамилия пользывателя
$birthday = $_POST ['birthday']; // Дата рохдения пользывателя
$country = $_POST ['country']; // Страна проживания пользывателя
$city = $_POST ['city'];// Город пользывателя
$users = file('../db/db.txt');// Читает файл и помещает ево в масив



if (!empty($login) && (!empty($password_1)) && (!empty($password_2)) && ($password_1 == $password_2) && (!empty($name)) && (!empty($surname)) && (!empty($birthday)) && (!empty($country)) && (!empty($city))){
    $n = count($users);
    for($i=0; $i<$n; $i++){
        $user = explode('::',$users[$i], 7 );
        if ($user[0] == $login){
            exit ('Пользыватель с таким логином уже существует');
        }
    }
    $file = fopen('../db/db.txt', 'a+');
    if (( $user[0] !== $login ) && (fwrite($file, $login .'::' .$password_1 .'::' .$name .'::' .$surname .'::' .$birthday .'::' .$country .'::' .$city . PHP_EOL) === false)){
        echo 'Error';
    }else {
        echo ('<div class="wrep"><div class="wrep-reg"><span class="reg-ok">Поздровляю! Регестрация прошла успешно</span> </div></div>"');
        echo ("<script>setTimeout(function() { location.href='../index.php' }, 2000);</script>");
    }
}
else{
    echo '<div class="wrep"><div class="wrep-error"><span class="error"> Одна из форм не заполнена или введенные пароли не  совпадают</span></div></div>';
    echo ("<script>setTimeout(function() { location.href='../pages/reg.php' }, 1000);</script>");
}
?>