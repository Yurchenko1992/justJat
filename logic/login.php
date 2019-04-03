<?php
session_start();
include '../pages/header.php';
$login = $_POST ['login_user'];
$password = $_POST ['password'];
$users = file('../db/db.txt');

if(!empty($login) && (!empty ($password))){
    $n = count($users);
    $ok= false;
    for($i=0; $i<$n && !$ok; $i++){
        $user = explode('::', $users [$i], 7);
        if (($user[0] == $login) && (Trim($user[1]) == $password)){
            $ok = true;
            $id=$i;

        }
    }

    if($ok){ //не надо писать $a тип boolean == true.
//        if (!isset($_SESSION['id'])){
//            $_SESSION['id'] = $id;
//        }

        echo ("<script>location.href='../pages/profile.php?id=".$id."';</script>");
    }else{
        echo '<div class="wrep"><div class="wrep-error"><span class="error"> Данные введены не верно</span></div></div>';
        echo ("<script>setTimeout(function() { location.href='../index.php' }, 1500);</script>");
    }

}else{
    echo '<div class="wrep"><div class="wrep-error"><span class="error"> Заполните все поля формы</span></div></div>';
    echo ("<script>setTimeout(function() { location.href='../index.php' }, 1500);</script>");
}
?>
