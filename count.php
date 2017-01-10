<?php
$link = db_connect();
$visitor_ip = $_SERVER["REMOTE_ADDR"];
//echo $_SERVER['REMOTE_ADDR'];
//echo $_SERVER['SERVER_NAME'];
$date_views = date("Y-m-d");
//Были ли посещения за сегодня?

function update_counter($article_id){
    $link = db_connect();
    $visitor_ip = $_SERVER["REMOTE_ADDR"];
    $date_views = date("Y-m-d");


    $current_ip = mysqli_query($link, "SELECT ip_id FROM ips WHERE ip_address='$visitor_ip'");
    if (mysqli_num_rows($current_ip) > 0) {
        $ip_id=$current_ip->fetch_object()->ip_id;
//        var_dump($current_ip->fetch_object()); die(); //вывод масива переменнои
//        var_dump($ip_id); die(); //вывод масива переменнои
        mysqli_query($link,"INSERT INTO visits(`date_views`, `ip_id`, `article_id`) VALUES ('$date_views',$ip_id,$article_id)");
//        mysqli_query($link, "");
    } else {
        mysqli_query($link, "INSERT INTO ips(`ip_address`) VALUES ('$visitor_ip')");
        $ip_id = mysqli_insert_id($link);
        mysqli_query($link,"INSERT INTO visits(`date_views`, `ip_id`, `article_id`) VALUES ('$date_views',$ip_id,$article_id)");
    }

}

function get_counter($article_id){
    $link = db_connect();
    $result = mysqli_query($link, "SELECT * FROM visits WHERE `article_id` = $article_id GROUP BY `ip_id`");
//     $result = mysqli_query($link, "SELECT * FROM visits WHERE `article_id` = $article_id");
    $visits = mysqli_num_rows($result);

    return $visits;

//    var_dump($visits); die();
//    var_dump("SELECT count(`id`) FROM visits WHERE `article_id` = $article_id GROUP BY `ip_id`"); die();



}


//
//
//
//
//
//
//
////$res = mysqli_query($link, "SELECT visit_id FROM visits WHERE date_views = '$date_views'") or die("Проблема при подключении");
////Если за сегодня еще не было посетителей
//
//if (mysqli_num_rows($res) == 0) {
////    echo ('Первое условие');
//    //Clean table's ip's
//    mysqli_query($link, "DELETE FROM ips");
//    //Add new visitior's ip
//    mysqli_query($link, "INSERT INTO ips(`ip_address`) VALUES ('$visitor_ip')");
//    //Add hosts to base named 'visits'
//    $res_count = mysqli_query($link, "INSERT INTO visits(`date_views`, `hosts`, `views`) VALUES ('$date_views',1,1)");
//} else {
////    echo ('Второе условие');
//
//    //checkin' ip matches
//    $current_ip = mysqli_query($link, "SELECT ip_id FROM ips WHERE ip_address='$visitor_ip'");
//    //not unique ip
//    if (mysqli_num_rows($current_ip) > 0) {
////        echo ('Не уникальный ИП');
////        echo $visitor_ip;
////        echo $date_views;
////        mysqli_query($link, "UPDATE visits SET views='views'+1 WHERE date_views='$date_views'");//+1 view 4 this date //WHERE date='$date'//
//        mysqli_query($link, "");
//    } else {
//        mysqli_query($link, "INSERT INTO ips(`ip_address`) VALUES ('$visitor_ip')");//adding new ip to base
//        mysqli_query($link, "UPDATE visits SET hosts='hosts'+1, views='views'+1 WHERE date_views='$date_views'");//+1 new(hosts + view)
//    }
//    //echo ('$res');
//}