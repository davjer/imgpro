<?php
//error_reporting(E_ALL);
//ini_set('display_errors', '1');

$fp = fopen("cpm06/competition06_E0.txt", "r");

$nd= round(fgets($fp));

$angle= round(fgets($fp));

$pos= fgets($fp);

$print=0;// for print img or 0 include

$porciones = explode(".", $pos);

$xm=$porciones[0];
$ym=$porciones[1];

$x=180;//$xm*2;
$y=250;//$ym*2;



$res1=$x*$y;
$res2=round($res1/$nd);
$res3=round(sqrt($res2));

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

$cont2=0;;
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




//echo "x:".$x1."y:".$y1."</br>";

	if($i<($x-$res3)){$i=$i+$res3;}else{$j=$j+$res3;$i=$res3;}
		
		
	//echo "i".$i."j".$j."</br>";
	if($cont2<=176){
	respos($i,$j,$res3,$cont2);	
imagefilledellipse($img, $i, $j, $res3, $res3,  $nColor);	

//imagestring($img, 3, $i-5 , $j-7,$cont2 , $color_texto);	/// uncoment for view pin number
}




//if($cic==2)	echo "x:".$x1."y:".$y."res:".$x-($res3*$cic)+1;
//$x1=$res3+1;


//if($y1>=$y-$res3){
//$stop=1;	
///$x1=$x1-$res3+1;		
//}


//if($xx>$x){$xx=30; $yy=$yy+30;}

//if($stop==0){
//	echo "x:".$x;

//echo $cont2,$x1,$y1,round($res3/255),,$res3

//imagefilledellipse($img, $x1, $y1, $res3, $res3,  $nColor);	
//}


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

/*
$c1=0;
$c2=0;
for($i=60;$i<=590-40;$i=$i+40){
	//$c1=0;
	for($j=60;$j<=519-40;$j=$j+40){
	$c1++;

	if($c1<=182){
	  $v2=$arry[$c2];
      $v3=$norm[$c2];
	 // $c1=0;
	  $c2++;
	
	   $val2=$v2/$max;
	   $val3=$val2*255;
	   $Colors = imagecolorsforindex($img,$val2);
	   $nColor = imagecolorallocate($img, $val3, $val3, $val3 );
	   // imagesetpixel($img, $i,$j, $nColor);	
		imagefilledellipse($img, $i, $j, 30, 30,   $nColor);	
		
	}	
	

		
	}
	
	
	
	
}

*/

//print_r($arry);

/*
for($i=0;$i<255;$i++){
	for($j=0;$j<255;$j++){
	
		$val=round(fgets($fp));
	
		$arrr[$i][$j]=$val;
    if($val>$max)$max=$val;	
	
		$total=$total+$val;

		
}
}
*/
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
while($ii<=$x && $ii>0){
	while($jj<=$y && $jj>0){
	
		if($st>9) $st=2;
       
		if($st==0){
			$ii=round($x/2);
			$jj=round($y/2);	
			
		}
	        
  	   if($st==1){	
       $ii=$ii-1;
	   $jj=$jj-1;	
        }
		
   	   if($st==2){	
        $ii=$ii+1;
 	   $jj=$jj;	
         }
		 
     	if($st==3){	
          $ii=$ii+1;
   	      $jj=$jj;	
           } 
		   
		 
        	if($st==4){	
             $ii=$ii;
      	      $jj=$jj+1;	
              }  
			  
          	if($st==5){	
               $ii=$ii;
        	      $jj=$jj+1;	
                }  	   
	
	
	       	if($st==6){	
	               $ii=$ii-1;
	        	      $jj=$jj;	
	                } 
	
		     if($st==7){	
		           $ii=$ii-1;
	       	      $jj=$jj;	
		                } 
		
		
		      if($st==8){	
		           $ii=$ii;
		  	      $jj=$jj-1;	
		   		  }    
				  
			      if($st==9){	
			           $ii=$ii-1;
			  	      $jj=$jj-2;	
			   		  }    		             
		
	
       $val= $arrr[$ii][$jj];	
	   
	    
	   $val2=$val/$max;
	   $val3=$val2*255;
	   $Colors = imagecolorsforindex($img,$val2);
	   $nColor = imagecolorallocate($img, $val3, $val3, $val3 );
	    imagesetpixel($img, $i,$j, $nColor);
		
		
		
		$st++;
}
}

*/


/*

for($j=0;$j<=$x;$j++)

{
			
	for($i=0;$i<=$y;$i++){
       
	  
	   
	   $val= $arrr[$i][$j];	
	   
	   
	   
 	   $val2=$val/$max;
 	   $val3=$val2*255;
 	   $Colors = imagecolorsforindex($img,$val2);
 	   $nColor = imagecolorallocate($img, $val3, $val3, $val3 );
 	    imagesetpixel($img, $i,$j, $nColor);


	}
}
*/

/*


$fp = fopen("training00_E1.txt", "r");

$x= (int)fgets($fp);

$y= (int)fgets($fp);

$sec= fgets($fp);




$x1=255;
$y1=255;
$j1=0;
$n=0;
$j=0;
$ix=0;
$jy=0;

while($n<550){


for($i1=0+$n;$i1<=$x1;$i1++){
	 $val= $val=round(fgets($fp));//$arrr[$i1][$j];	
	
	 ////
	 ////
   $val2=$val/$max;
   $val3=$val2*255;
   
   $Colors = imagecolorsforindex($img,$val2);
   $nColor = imagecolorallocate($img, $val3, $val3, $val3 );
    imagesetpixel($img, $i1,$j, $nColor);
	$ix=$i1;
	 ////	 
	 ////
}
		 for($j1=0+$n;$j1<=$y1;$j1++){
		 	$val= $val=round(fgets($fp));//$arrr[$ix][$j1];
	   	 ////
	   	 ////
		  
	      $val2=$val/$max;
	      $val3=$val2*255;
		 
	      $Colors = imagecolorsforindex($img,$val2);
	      $nColor = imagecolorallocate($img, $val3, $val3, $val3 );
	       imagesetpixel($img, $ix,$j1, $nColor);
	 
		   $jy=$j1;
	   	 ////	 
	   	 ////
		}
				for($i2=$x1;$i2>=0;$i2--){
				$val= $val=round(fgets($fp));//$arrr[$i2][$jy];
		   	 ////
		   	 ////
		      $val2=$val/$max;
		      $val3=$val2*255;
			 
		      $Colors = imagecolorsforindex($img,$val2);
		      $nColor = imagecolorallocate($img, $val3, $val3, $val3 );
		       imagesetpixel($img, $i2,$jy, $nColor);
			   $ix=$i2;
		   	 ////	 
		   	 ////
				     }
							for($j2=$y1;$j2>=0;$j2--){
						   	 ////
						   	 ////
							 $val= $val=round(fgets($fp));//$arrr[$ix][$j2];
						      $val2=$val/$max;
						      $val3=$val2*255;
							 
						      $Colors = imagecolorsforindex($img,$val2);
						      $nColor = imagecolorallocate($img, $val3, $val3, $val3 );
						       imagesetpixel($img, $ix,$j2, $nColor);
	 
						   	 ////	 
						   	 ////
							
						                          }
												  $x1--;
												  $y1--;
												  $n++;
												  $j++;
	

}

*/


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