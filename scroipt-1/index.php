<?php
$file = 'test.text';
date_default_timezone_set('Africa/Cairo');
if($_SERVER['REQUEST_METHOD'] == "POST"){
$int =   $_POST["text"] ;
$opt = array(
'options' => array(
'min_range' => 11111,
'max_range' => 99999
)
);
$int      = filter_var($_POST['text'] , FILTER_SANITIZE_NUMBER_INT);

if( filter_var($int , FILTER_VALIDATE_INT, $opt) !==FALSE ) {
header("Location: https://www.google.com/");
}else{


// echo ' <div class="masege"> عفوا هذا  '.$int.'  ليس  رقم صحيح <span class="span-apan">  <img src="https://cdn1.iconfinder.com/data/icons/smashicons-emoticons-retro-vol-3/44/174_-_Dead_emoticon_emoji_face-512.png"> </span> </div>';
}

if(is_writable($file)){
//echo "Good THis File '.$file.' Is Found <hr>";

date_default_timezone_set('Africa/Cairo');
}else{
echo 'sory the file '.$file."IS Not  found ):Is Writable";
file_put_contents($file,'Created by php not Is Writable So i Can ');
}
$varData ='  ' .date ('Y-m-d/h:i');
$int = filter_var($int , FILTER_VALIDATE_INT) ; 
$text = $int ;

$textCo = $text ;
}
if($_SERVER["REQUEST_METHOD"] == 'POST'){
if(strlen($int) >=5 ){
$textCo = $text . $varData ;

}else{
$textCo = '' ;
}
file_put_contents($file,$textCo,FILE_APPEND );
}else {
//echo "  Sorry This UserName Is Not Exist In our Client ARea :)   ";
}
include 'index.html';
?> 
