<!-- ---looping php -->
 <?php

// for ($i = 1; $i <=4; $i++) {

// echo "Hellow World =". $i ."<br>";

// }
//while loop

// $i = 1;
//  while($i<5){
//     echo "My name is: ".$i."<br>";
//     $i++;
//  }

//do while loop
// $i = 1;
// do{
//     echo"Hellow world".$i."<br>";
//     $i++;

// }while($i < 5);


//foreach

// $name = ["John","Jane","Doe"];

// foreach ($name as $value) {
//  echo"My name is : ". $value ."<br>";

// }
//associative array
// $names =['name'=> 'panda',
//           'age'=> 4,
//           'city' => 'katmandu',
//           'height' => 5.5,
// ];

// foreach ($names as $key => $value) {

//     echo'Total info is :'. $key .'=>'. $value .'<br>';



// }

//break and continue

// for( $i = 1; $i < 10; $i++ ){

// if($i == 4){
//     continue;
// }
//     echo "Hello".$i."<br>";
// }

// for( $i = 1; $i <= 5; $i++ ){
//     for( $j = 1; $j <= 5; $j++ ){
//         echo"$i x $j =".$i * $j."<br>";
//     }
// }

// $students = [
//     ['name' => 'john doe','age'=> 20],
//     ['name'=> 'raisul islam','age'=> '12'],
//     ['name'=> 'falguni biswas','age'=> '33'],
// ];

// foreach ($students as $student) {
//     foreach ($student as $key => $value) {
//         echo'Total info is : '. $key .'='. $value .'<br>';
//     }
// }

//function
// function hello(){
//     echo "Hellow world";
// }
// hello();

//parameter accept
// function hello( $name ) {
//     echo "hello". $name ." ";
// }
// hello("panda");

// function add($a,$b){
//     return $a + $b;
// }
// $result = add(10,20);
// echo $result;
// function showmyheight(float $height) {
//     return "I an $height f.t tall";
// }
// echo showmyheight(3.5);
// $name = "panda";

// function hello() {
//     global $name;
//     echo "hello :".$name."\n";
// }
// hello();



//annonymous function

// $sayhallo = function($name){
//  echo "hi -".$name."<br>";
// };

// $sayhallo("panda");


//clouser

function sayhello( $message ) {

    return function () use ( $message ) {
        return  $message ;

};
}
$said = sayhello("I LOVE YOU");
echo $said();





















































































































































?>
