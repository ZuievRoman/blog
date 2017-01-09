<?php
$link = db_connect();
$visitor_ip = $_SERVER["REMOTE_ADDR"];
//echo $_SERVER['REMOTE_ADDR'];
//echo $_SERVER['SERVER_NAME'];
$date_views = date("Y-m-d");
//Были ли посещения за сегодня?
$res = mysqli_query($link, "SELECT visit_id FROM visits WHERE date_views = '$date_views'") or die("Проблема при подключении");
//Если за сегодня еще не было посетителей
if (mysqli_num_rows($res) == 0) {
//    echo ('Первое условие');
    //Clean table's ip's
    mysqli_query($link, "DELETE FROM ips");
    //Add new visitior's ip
    mysqli_query($link, "INSERT INTO ips(`ip_address`) VALUES ('$visitor_ip')");
    //Add hosts to base named 'visits'
    $res_count = mysqli_query($link, "INSERT INTO visits(`date_views`, `hosts`, `views`) VALUES ('$date_views',1,1)");
} else {
//    echo ('Второе условие');

    //checkin' ip matches
    $current_ip = mysqli_query($link, "SELECT ip_id FROM ips WHERE ip_address='$visitor_ip'");
    //not unique ip
    if (mysqli_num_rows($current_ip) == 1) {
//        echo ('Не уникальный ИП');
//        echo $visitor_ip;
//        echo $date_views;
        mysqli_query($link, "UPDATE visits SET views='views'+1 WHERE date_views='$date_views'");//+1 view 4 this date //WHERE date='$date'//

    } else {
        mysqli_query($link, "INSERT INTO ips(`ip_address`) VALUES ('$visitor_ip')");//adding new ip to base
        mysqli_query($link, "UPDATE visits SET hosts='hosts'+1, views='views'+1 WHERE date_views='$date_views'");//+1 new(hosts + view)
    }
    //echo ('$res');
}