<?php include 'header.php' ?>
<header>
    <div class="wrep">
        <div class="logo"><h3>Just-Jat</h3></div>
    </div>
</header>
<div class="wrep wrep-block__form">
    <div class="block-form">
        <h3>Форма входу в личный кабинет</h3>
        <form action="logic/login.php" method="post" class="login">
            <input type="text" name="login_user" minlength="5">
            <input type="password" name="password" minlength="6">
            <input type="submit" name="btm" value="Ввойти" class="btm">
        </form>
        <a href="pages/reg.php">Регистрация!</a>
    </div>
</div>
<?php include 'footer.php'; ?>


