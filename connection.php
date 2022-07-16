<?php
$link = new mysqli("sql203.epizy.com", "epiz_32175725", "taBKAv0ybClD","epiz_32175725_juniortestdb");

if ($link == false){
    print("Ошибка: Невозможно подключиться к MySQL " . $link->connect_error);
    echo "<br>";
}
else {
    //print("Соединение установлено успешно");
    echo "<br>";
}
?>