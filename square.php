<?php
//error_reporting(E_ALL);
//ini_set('display_errors', '1');

$fp = fopen("competition01_E0.txt", "r");

$nd= round(fgets($fp));

$angle= round(fgets($fp));

$pos= fgets($fp);

$print=1;// for print img or 0 include

$porciones = explode(".", $pos);

$xm=$porciones[0];
$ym=$porciones[1];

$x=190;//$xm*2;
$y=260;//$ym*2;



$res1=$x*$y;
$res2=round($res1/$nd);
$res3=round(sqrt($res2)); //diameter of circle

$img = imagecreatetruecolor($x,$y);	
imagefilter($img, IMG_FILTER_GRAYSCALE);
$total=0;
$max=0;
$arrr=array();
$arry=array();
$valores=array();


$norm=array();
$count=0;
$max=0;
$max2=0;
$media=0;

while(!feof($fp)) {

	$val=round(fgets($fp));


	if($val>$max) $max=$val;
   
   $valores[]=$val;

   $media=$media+$val;

if (in_array($val, $arry)){

$key=array_search($val, $arry);
	
$norm[$key]=$norm[$key]+1;	///number count
	
	if($norm[$key]>$max2) $max2=$norm[$key];
	
}else{
	
$arry[]= $val;	
$key=array_search($val, $arry);
$norm[$key]=1;	/// equal to key in arry
	if($norm[$key]>$max2) $max2=$norm[$key];	
}


$count++;
}

if($print==0){
$mediaf=$media/$count;	
$mediaf=$mediaf/$max;	
	
}





 //echo "max:".$max."</br>";   
/////////
///////////
/////////
//echo $count."f".$nd."</br>";

$lim=$count/$nd;
$lt=0;
$prom=0;
$t=0;
$gr=0;
$xx=$xm;
$yy=$ym;

$yy=30;
$v1=0;
$v0=0;
$gr=0;
$x1=0;
$y1=0;

$x1=0;
$y1=$res3+1;
$stop=0;
$av1=1;
$av2=1;
$av3=1;
$av4=1;
$av5=1;

$cic=1;
$cont=0;

$cont2=0;

$i=0;
$j=$res3/2;

$color_texto = imagecolorallocate($img, 255, 0, 0 );
while($t<$count){
	
	//echo $res3;
$lt=$lt+1;
$v0=$valores[$t];
	
$v1=$v1+($v0/$max);
$t++;	

if($lt==round($lim)){

$cont2++;

$val=$v1/$lim;

$lt=0;	
$v1=0;
$val3=round($val*255);
 //echo $val3."<br>";

$nColor = imagecolorallocate($img, $val3, $val3, $val3 );



	if($i<($x-$res3)){$i=$i+$res3;}else{$j=$j+$res3;$i=$res3;}
		
		
	//echo "i".$i."j".$j."</br>";
	if($cont2<=176){
imagefilledellipse($img, $i, $j, $res3, $res3,  $nColor);	

imagestring($img, 3, $i-5 , $j-7,$cont2 , $color_texto);	
}
// imagesetpixel($img, $i,$j, $nColor);	
///
/////
$rad=$gr*2*(3.141516)/360;

	$ys=35*tan($rad);
    $xs=35*cos($rad);
/////
/////

//imagefilledellipse($img, $xx+$xs, $yy+$ys, 30, 30,   $nColor);	

$prom=0;
$gr=$gr+3;
if($gr>=360){
	$xx=$xx+35;
	$yy=$yy+35;	
}


}	

}


//echo "arr:".count($arry)."nor:".count($norm);


/////////////////////
/////////////////////
$posar[][]=array();

function respos($x,$y,$rr,$pos){

	global $posar;	

	$x1=$x-round($rr);
	$y1=$y-round($rr);
		
	for($q=0;$q<=$rr;$q++){
		for($t=0;$t<=$rr;$t++){
	
		$posar[$q+$x1][$t+$y1]=$pos;
	//	echo "x:".($q+$x1)."y:".($t+$y1)."Pos:".$pos."</br>";	
		
		}
		
	}


}

/////////////////////
////////////////

//echo $max;
$st=0;
$ii=0;
$jj=0;

$ind=0;



/*
$Colors = imagecolorsforindex($img,$val2);
$nColor = imagecolorallocate($img, $Colors['red'], $Colors['green'], $Colors['blue'] );
 imagesetpixel($img, $i,$j, $nColor);
 */

//echo $last;
fclose($fp);
//echo $total;
//	imagejpeg($img, "Dataset_reconstruccion.jpg");

if($print==1){
//imagejpeg($img, "Dataset_reconstruccion.jpg");
header('Content-Type: image/png');
imagepng($img);
}


	
	
	
	
	
	
	
	
	
	
?>