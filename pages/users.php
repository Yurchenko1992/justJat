<?php include "header.php"; ?>

<header>
    <div class="wrep">
        <div class="logo"><h3>Just-Jat</h3></div>
        <div class="exit"><a href="../index.php">Выйти</a></div>
    </div>   
</header>  
<?php include "../logic/users.php";?>
<div class="wrep">
    <div class="aside">

    </div>
    <div class="content">
    <?php print addListUser();?>  
    </div>
    <div class="right-aside">
        
    </div>

</div>
<?php include "footer.php";?>

