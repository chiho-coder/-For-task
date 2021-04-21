<?php
function max_array($arr) {
    $max_number = $arr[0];
    foreach($arr as $a) {
        if($a >$max_number) 
            $max_number = $a;
    }   
    return $max_number;
    }   
  
  echo max_array([3,4,1,4,8]);  
  
  
  //　課題５　strip_tags使い方
  
 $string = '<a href = "https://www.yahoo.co.jp/">yahoo</a>';
 $result = strip_tags($string);
 echo $result;

//array_push使い方
$drink = array ("coke","sprite");
array_push($drink,"shake","Lemonade");
print_r($drink);

//array-mergeの使い方
$drink1 = ['coke', 'sprite', 'shake'];
$drink2 = ['lemonade', 'soda','calpis'];
$deink3 = ['coffe' ,'cafeLatte' ,'tea'];

$drink_merge = array_merge($drink1,$drink2,$deink3);

print_r($drink_merge);


//time,mktime使い方
$timeclock = time ();
echo $timeclock;

echo date ("l",mktime(0,0,0,5,18,2021));

//date 使い方
date_default_timezone_set('Asia/Tokyo');
echo date ('Y年m月d日　H時i分s秒',strtotime('2021/07/07 10:00:10'))."\n" 
?>