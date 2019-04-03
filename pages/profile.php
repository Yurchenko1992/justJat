<?php session_start();?>
<?php include '../logic/profile.php';?>
<?php include 'header.php';?>

<header>
    <div class="wrep">
        <div class="logo"><h3>Just-Jat</h3></div>
        <div class="exit"><a href="../index.php">Выйти</a></div>
    </div>
</header>
<div class="wrep">
    <div class="aside">

    </div>
    <div class="block-abautUser">
        <div class="block-info">
            <div class="profile-name">
                <h1><?php print ($aboutUsers['2'] .' ' .$aboutUsers['3'])?></h1>
            </div>
            <div class="profile-birsday"><h3>Дата рождения:<?php print(' '.$aboutUsers['4']); ?></h3></div>
            <div class="profile-live"><h4>Место жительства:<?php print (' '.$aboutUsers ['5'].', '.$aboutUsers['6']);?></h4></div>
        </div>
    </div>
    <div class="right-aside">

    </div>
</div>
<?php include 'footer.php';?>
