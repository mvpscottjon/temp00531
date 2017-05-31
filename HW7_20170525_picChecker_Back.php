<?php

if(isset($_GET['answer'] )){
    $answer=$_GET['answer'];

    if($answer=='1234'){

        header('Location:20170526_35.php');}

    else{echo 'wrong';}
}


imagecreate ( 400 , 200);

$imgDst=imagecreatetruecolor ( 400  , 200 );

//$imgSrc=imagecreatefromjpeg ( "./fileupload/pika.jpg" );
//
//$imgSrc2=imagecreatefrompng ( "./fileupload/pika2.png" );

$red=imagecolorallocate ( $imgDst , 255, 0, 0);

//$textset = '1234';

imagettftext ( $imgDst , 24 , 0 , 50 , 50 , $red , "./fonts/fireflysung.ttf", "1234" );



//imagecopyresized ( $imgDst , $imgSrc , 0, 0 ,
//0, 0, 400 , 200 , 400 , 10 );


header('Content-Type:image/jpeg');

imagejpeg($imgDst);

imagedestroy($imgDst);

?>