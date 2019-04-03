<?php

function addListUser() {
    $content = file('../db/db.txt'); // Получаем содержимое файла
    $n = count($content);
    for ($i = 0; $i < $n; $i++) {
        $contentUsers = explode('::', $content[$i], 7);
        $name = ($contentUsers[2]);
        $country = ($contentUsers[5]);
        $id = $i;
        $row = "<div class='row'><a href='profile.php?id=".$id. "' ><div class='col'>" . $name . "</div><div class='col'>" . $country . "</div></div>";
        print $row;
    }
}
?>




