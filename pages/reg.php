<?php
include "header.php";
?>
<header>
    <div class="wrep">
        <div class="logo"><h3>Just-Jat</h3></div>
        <div class="exit"><a href="../index.php">Ввойти</a></div>
    </div>
</header>
<div class="wrep wrep-block__form">
    <div class="block-form">
        <h3>Форма реєстрации</h3>
        <form action="../logic/reg.php" method="post" class="reg">
            <input type="text" name="login" placeholder="Введите логин" minlength="5">
            <input type="password" name="password-1" placeholder="Введите пароль" minlength="6">
            <input type="password" name="password-2" placeholder="Введите пароль повторно" minlength="6">
            <input type="text" name="firstName" placeholder="Введите свое имя">
            <input type="text" name="surname" placeholder="Введите свою фамилию">
            <input type="text" name="birthday" placeholder="Дата рождения">
            <input type="text" name="country" placeholder="Страна в которой проживаете" >
            <input type="text" name="city" placeholder="Город в котором проживаете">
            <input type="submit" name="btm" value="Зареєструватися" class="btm">
        </form>

    </div>
</div>
<?php
include "footer.php";

?>
