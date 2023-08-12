<?php 
//arrays:
//1. indexed array:
/*
$students=array("pandidurai","aruna","thivilan","soorimuthu","periyasamy","tamilarasi");
$students[2]="arunapandithivi";
$students[]="my family";
$no=[2,12,4,5];
//echo $students[3];
//echo count($students);
//var_dump($students);
print_r ($no);

$students=array("pandidurai"=>"red","aruna"=>"black","thivilan"=>"white","soorimuthu"=>"orange","periyasamy"=>"pink","tamilarasi"=>"green");
$id=[1=>"pandi",2=>"ram",3=>"raja"];           //associate array

echo  $students["tamilarasi"];
echo $id[2];

//multi dimensional array
$pets=array(
    array("dog","black"),
    array("sheep","red"),
    array("cat","white")
);
echo $pets[2][0];


//loops:
//forloop:
    
for($i=0; $i<=5; $i++) {
    echo $i;
    echo "<br>";
}   

 

//while loop
$i=0;
while($i<4){
    echo $i;
    echo "<br>";
    $i++;
}


//do while  loop
$i=0;
do{
    echo $i;
    echo "<br>";
    $i++;
}
while ($i<5);

//foreach loop
$students=array("pandidurai","aruna","thivilan","soorimuthu","periyasamy","tamilarasi");
foreach ($students as $name){
    echo $name;
    echo "<br>";
}

//styles:
//lower case or underscore
$my_name=1;
//upper case  or pascal case
$MyName=2;
//camel case
$myName=3;


//functions
function test(){
    echo "arunapandi";
}
test();
*/
// single parameter function
function test($name){
echo "hellow: $name";
echo "<br>";
}
test("pandi");
test("aruna");
test("thivi");

//double parameter with reference
function minus($no1,$no2){
echo "$no1"-"$no2";
echo "<br>";
}
minus(34,23);
minus(55,34);
minus(73,32);

function value($name){
return "hellow: $name";
echo "<br>";
}
 echo value("pandi");



?>
