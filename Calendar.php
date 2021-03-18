<?php

class Calender{
    public function showDay($month,$day){
    $date = "2021-".$month."-".$day;
    $unixTimestamp = strtotime($date);
    $dayOfWeek = date("l",$unixTimestamp);
    return $dayOfWeek;
}
}
