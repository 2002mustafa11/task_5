<?php
#the usort ()=========== 1
$numbers = [5, 2, 7, 1, 9 , 3 , 15];

 usort($numbers,function($a, $b){return($a > $b) ? -1 : 1;});

 echo '<pre>';
 print_r($numbers);
 echo '</pre>';
#array_filter() 2
 $numbers = [5, 2, 7, 1, 9, 3, 15];
$new_array = array_filter($numbers, function($number) {
    return $number > 5;
});

 echo '<pre>';
 print_r($new_array);
 echo '</pre>';
#array_map() 3
 $names = ['ahmed', 'ali', 'mohammed', 'mostafa', 'eman' ];

 print_r(array_map(function($na){return ucwords($na);},$names));

 
 #========== 4
 function hasSpaces($str){
for ($i=0; $i < strlen($str); $i++) { 
    if ($str[$i]==' ') {
        return true;
    }
}
return false;
}
var_dump(hasSpaces('hello'));
#=========== 5
echo '<br>';
$Extension="code.html";
function getExtension($Extension){
    $ar=explode('.',$Extension);
    return $ar[count($ar)-1];
}

echo getExtension($Extension);
#=========== 6
 $type=array("214", true, false, 2, 2.15, [], null);
  
 echo '<pre>';
 print_r(array_map(function($na){return gettype($na);},$type));
 echo '</pre>';
#============== 7
function Sum($n) {
$a=0;
 for ($i=$n; $i > 0; $i--) { 
     $a+=$i;
 }
 return $a;
 }
 echo sum(4);
 echo '<br>';
 #============ 8

 $nums = [1, 2, 3];
 $nums[] =4;
array_unshift($nums,4);
 print_r($nums);
 
 array_push($nums,4);
 echo '<br>';

 ?>

 <?php
 #=============the $_POST 9
 if ($_SERVER['REQUEST_METHOD']=='POST') {
   // echo $_POST['name'],'  ',$_POST['password'];
    echo '<pre>';
    print_r($_REQUEST);
    echo '</pre>';
 }
 
#=====the-----QUERY_STRING 10
 echo '<pre>';
 print_r($_SERVER['QUERY_STRING']);
 echo '</pre>';

 #========== 11
 $fruits = ['apple', 'orange', 'banana', 'carrot'];

$randomIndex = rand(0, count($fruits)-1);
//array_splice($fruits, $randomIndex, 0, 'Kiwi');

$arr=[];

for ($i=0; $i < count($fruits); $i++) { 
    
    if ($i==$randomIndex) {
        $arr[]='Kiwi';
    }
    $arr[]=$fruits[$i];
        
}
print_r($arr);
#============= 12
$str='https://www.eraasoft.com?group=314';
$arr=explode('=',explode('?',$str)[1]);

print_r([$arr[0]=>$arr[1]]) ;

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h3>POST</h3>
        <input type="text" name="name" >
        <input type="password" name="password" >
        <input type="submit" value="submit">
    </form>
    <form action="" method="">
        <h3>QUERY_STRING</h3>
        <input type="text" name="name" >
        <input type="submit" value="get">
    </form>
    <form action="" method="get">
    
    <input type="submit" value="get">
    </form>
</body>
</html>
