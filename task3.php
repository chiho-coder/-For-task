<?php
//課題１引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function dble($num) {
    return $num*2;
}

echo dble."\n" ;

//課題２.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください
function pulse($a, $b) {
    return $a + $b ;
}
echo pulse(5,6)."\n";

//課題３　$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください
$arr = array(1,3,5,7,9);
function times($arr){
$result = 1;
foreach ($arr as $arrs) {
    $result *= $arrs; 
}
echo $result;
  }

times($arr);

//課題４【応用】　下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください
function max_array($arr) {
$max_number = $arr[0];
 foreach($arr as $a) {
    if($a >$max_number) 
     $max_number = $a;
    }   
    return $max_number;
    }   
  
  echo max_array([3,4,1,4,8]);  
  
  
  //　課題５　下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください　strip_tags使い方
  
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