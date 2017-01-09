<?php
$res1 = mysqli_query($link, "SELECT views,hosts FROM visits WHERE date_views = '$date_views'");
$row = mysqli_fetch_assoc($res1);
echo '<br>Уникальных посетителей: ' . $row['hosts'] . '</br>';
echo '<br>Просмотров: '. $row['views'] . '</br>';
