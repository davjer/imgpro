<?php
if( !ini_get('safe_mode') ){ 
    set_time_limit(0); //this won't work if safe_mode is enabled.
}
ini_set('memory_limit', '-1'); 
error_reporting(0);

include "load.php";

////CONFIG
$debug=0; // if debug is 1 not compare symetryc 
$scal=24;//589;/////12// number of scale image, normalize and average value 
$loc=1; /// if 1, print dataset
$varianza=0.5;/// varianza for compare pixel group
$rotate=0;
////////////
//
///


//echo "pin:".$posar[12][12];

$img = imagecreatefrompng("images/2.png");



if($rotate<>0) imagerotate($img , $rotate, 0);

imagefilter($img, IMG_FILTER_GRAYSCALE);
$rgb = imagecolorat($img, 0, 0);
 $x= imagesx($img);
$y = imagesy($img);

$nb = imagecreatetruecolor($x, $y);	

$nb2 = imagecreatetruecolor($x, $y);	

$anom=0;	
for($i=0;$i<=$x;$i++)
{
	
	
	for($j=0;$j<=$y;$j++){
		
		$anom++;
		$rgb = imagecolorat($img, $i, $j);
	
	 $Colors = imagecolorsforindex($img,$rgb);

	 
	 $nrgb=$Colors['red']/255; 

	 // $nColor = imagecolorallocate($nb, 255, 0, 0 );		
		
	  $nColor = imagecolorallocate($nb, $Colors['red'], $Colors['red'], $Colors['red'] );
	    imagesetpixel($nb, $j,$i, $nColor);
         $nfr[$i][$j]=$nrgb;

                       }//end for recorrido
 
				//	   echo '</br>';
}//end for recorrido

//analisys

////
$nx=($x/$scal);
$ny=($y/$scal);

$nfr2=$nfr;
$nfr3;

$colr=0;
$nlx=0;

$count=0;

$nnx=0;
$nny=0;

$n1x=0;
$n1y=0;

for($i=0;$i<=$x;$i=$i+$nx)///$i=$i+$nx
{

	
	for($j=0;$j<=$y;$j=$j+$ny){///$j=$j+$ny
		
	//	$ny $nx
	$nlx=$i+$scal;
	if(($nx+$i)<=$x){
		for($i2=$i;$i2<=($nx+$i);$i2++){
			
	    $nly=$j+$scal;
	if(($ny+$j)<=$y){		
			for($j2=$j;$j2<=($ny+$j);$j2++){
					
			 // $nColor = imagecolorallocate($nb, 255, 0, 0 );	
		         $count++;
		         $colr+=$nfr[$i2][$j2];
				 $nbdc[$i+$i2][$j+$j2]=$nfr[$i2][$j2];
				 $nbdc2[$i+$i2][$j+$j2]= $colr/$count;	 //img
		       
				 $nnx=$i+$i2;
				 $nny=$j+$j2;
                // echo "i".$i2."J:".$j2."</br>";
				 
				                 }/// end fro3
							 	   
						 }///end if 1
		    
		 

		
             }//end for recorrido int 1

        
		
		
		    	}///end if 1
				
				
		//$bloq=;
		
	//	$nbdc[$i][$j]=$bloq;		
	//	$count=0;
	//	$colr=0;
	$bloq=$colr/$count;
    $nnfr[$i][$j]=$bloq; //img
	////////
	///////////
	/////////////
	//////////////
	////////////////
	/////////////////
	/////nor/////m////////
	
	
	//	$ny $nx
	$nlx=$i+$scal;
	if(($nx+$i)<=$x){
		for($i2=$i;$i2<=($nx+$i);$i2++){
			
	    $nly=$j+$scal;
	if(($ny+$j)<=$y){		
			for($j2=$j;$j2<=($ny+$j);$j2++){
				
		
			 // $nColor = imagecolorallocate($nb, 255, 0, 0 );	
	

				 $nbdc3[$i+$i2][$j+$j2]= $bloq;	 //img
				
				 $nny=$j+$j2;
                // echo "i".$i2."J:".$j2."</br>";
				 
				                 }/// end fro3
							 	   
						 }///end if 1
		    
		 
                $nnx=$i+$i2;
		
             }//end for recorrido int 1

        
		
		
		    	}///end if 1
	
	
				//////////b//dif//
				$r1=0;
				$r2=0;
				$nlx=$i+$scal;
				
				/*
						if(($nx+$i)<=$x){
					for($i2=$i;$i2<=($nx+$i);$i2++){
		
				    $nly=$j+$scal;
				if(($ny+$j)<=$y){		
						for($j2=$j;$j2<=($ny+$j);$j2++){
		
							$r1=$r1+$i2;
							$r2=$r2+$j2;
							
					    
							///cros/sim
		                $val1= $nbdc3[$i+$i2][$j+$j2];
						 
						$val2= $nbdc3[$nx+$i-$r1][$ny+$j-$r2];
						
						
						echo $val1."</br>";
						echo $val2."</br>";
						echo ($val1-$val2)."</br>______________________</br>";
		               
					//	if($val2>0) echo "val2".$val2;
						
					//	$tok=abs($val2-$val1);
						
						//echo "t0k:".$tok."</br>";
						
						
				//		$Color=$val1;
						
					//	if($tok>0.67){
							
							//echo "t0k:".$tok."</br>";
							//echo "i:".$i."j:".$j."</br>";  
							//echo "v1:".$val1."v2:".$val2."</br>";  	
							//echo "x".$x."y:".$y;
							
								//$nbdc3[$i+$i2][$j+$j2]=800;
						//	}
							///////
							//////
							/////
						}
						
					
	
	
				                }
				                                    }
											}		
											*/
				///////////
	/////////////////
	////////////
	///////
	///
	//
	$count=0;
	$colr=0;
	$bloq=0;
	$n1y++;


			}///end 2 for recorrido
					//   echo '</br>';
}//end for recorrido
/////
// $nbdc2
/////
//
//////



////////
////////////
/*
$nnb = imagecreatetruecolor($x, $y);	
  for($i=0;$i<=$x;$i++)
  {
	  for($j=0;$j<=$y;$j++){
		$colo=$nnfr[$i][$j];
		
		  $nColor = imagecolorallocate($nnb, $colo*255, $colo*255, $colo*255);
		  imagesetpixel($nnb, $i,$j, $nColor);	
		
	}
	
}
*/

//////
/////
//var_dump($nbdc);
/////////////

////
/////// search diferente


//	echo "x:".$x."R:".abs($nnx/12)."y:".$y."R:".abs($nny/12)."</br>";
$arrfin=array();
$nnbxy = imagecreatetruecolor($x, $y);	
$nnb = imagecreatetruecolor($nnx, $nny);

$missin[]=array();

$countf=0;	
  for($i=0;$i<$nnx;$i++)
  {
	  for($j=0;$j<$nny;$j++){
		  
	$colo=$nbdc3[$i][$j];
	$colo2=$nbdc3[$i][$nny-$j];
	///////////////
	////////////////
	
	 $partx=$x/$nnx;
	$party=$y/$nny;
	
	$relx=$nnx/$x;
	$rely=$nny/$y;
	
	$nxx=round($i/$relx);
	$nyy=round($j/$rely);
	
	
	////////////////
	/////////////////
	if($debug==0){
	$finc=abs($colo-$colo2);
	
	//echo $finc."</br>"; 
	
	if($loc==1){//// 3 steap print
		
	if($posar[$nxx][$nyy]==""){ $PRT=0;}else{$PRT=$posar[$nxx][$nyy];} 	
	
	echo $PRT.",".$nxx.",".$nyy.",".$mediaf.",".$finc.",".$varianza.",".$colo.";</br>";
		
	}
	
	
	
		
	if($finc>$varianza && $colo>$colo2){ 
		$countf++;
		$nColor = imagecolorallocate($nnb, 255, 0, 0);
		/// full pixels and pin locate, add missing pings
	 if($loc==1){ //echo $posar[$nxx][$nyy].",".$nxx.",".$nyy.";</br>"; 
		 $missin[]=$posar[$nxx][$nyy];
	 }
	 

	 
	 
	 if($loc==1){ $arrfin[round($i*$partx)][round($j*$party)]="l";}         
				 
		/*	if($loc==1){ 
				echo $i.",".$j.",".$colo.";</br>";
				echo "x2:".$nnx."y2:".$nny."</br>";
				echo "x:".$x."R:".abs($nnx/$x)*$i."y:".$y."R:".abs($nny/$y)*$j."res:".$colo."</br>";
			               }*/
				 
				  }else{
		  $nColor = imagecolorallocate($nnb, $colo*255, $colo*255, $colo*255);
		                }  
	 imagesetpixel($nnb, $i,$j, $nColor);
	 /////

	imagesetpixel($nnbxy, $i*$partx,$j*$party, $nColor);	
	///////
	 	
					}else{
		 $nColor = imagecolorallocate($nnb, $colo*255, $colo*255, $colo*255);			
		  imagesetpixel($nnb, $i,$j, $nColor);				
		  ///////
		  imagesetpixel($nnbxy, $i*$partx,$j*$party, $nColor);				
		  /////////
					}
			
}
	
}

//echo "nnx".$nnx." nny".$nny;
///////////
$nnb = imagecreatetruecolor($nnx, $nny);	

$color_texto = imagecolorallocate($nnb, 0, 0, 255);

  for($i=0;$i<$nnx;$i++)
  {
	  for($j=0;$j<$nny;$j++){
		  
	$colo=$nbdc3[$i][$j];
	$colo2=$nbdc3[$nnx-$i][$j];
	///////////////
	////////////////
	
	 $partx=$x/$nnx;
	$party=$y/$nny;
	
	
	
	$relx=$nnx/$x;
	$rely=$nny/$y;
	
	$nxx=round($i/$relx);
	$nyy=round($j/$rely);
	////////////////
	/////////////////
	if($debug==0){
	$finc=abs($colo-$colo2);
	
	//echo $finc."</br>"; 
		
		
	/*	
	if($loc==1){
		
	echo $posar[$nxx][$nyy].",".$nxx.",".$nyy.",".$mediaf.",".$finc.",".$colo.";</br>";
		
	}	
	*/	
		
	if($finc>$varianza && $colo>$colo2){ 
		$countf++;
		$nColor = imagecolorallocate($nnb, 255, 0, 0);
	   
	  
	   
	if($loc==1 ){///1 steap missing coordinates
	   // echo $posar[$nxx][$nyy].",".$nxx.",".$nyy.";</br>"; 	
		 $missin[]=$posar[$nxx][$nyy];
	} 
	
	

	 
	
			 if($loc==1){ $arrfin[round($i*$partx)][round($j*$party)]="l";}    
			
		//	if($loc==1){ 
				
		//	echo "x:".$x."R:".abs($nnx/$x)*$i."y:".$y."R:".abs($nny/$y)*$j."res:".$colo."</br>";
				//echo $i.",".$j.",".$colo.";</br>";	
			       //         }	 
				  }else{
		  $nColor = imagecolorallocate($nnb, $colo*255, $colo*255, $colo*255);
		                }  
	 imagesetpixel($nnb, $i,$j, $nColor);
	 /////	
	
	 imagesetpixel($nnbxy, $i*$partx,$j*$party, $nColor);
	 ///////
					}else{
		 $nColor = imagecolorallocate($nnb, $colo*255, $colo*255, $colo*255);			
		  imagesetpixel($nnb, $i,$j, $nColor);	
		  /////////			
			imagesetpixel($nnbxy, $i*$partx,$j*$party, $nColor);			
			/////////
					}
			
}
	
}

/////////////////////////
//////////////////////////
///////////////////////////
///////////////////////////
$tr=0;
$nmiss=0;
while($tr<=181){
$tr++;	
	
	
  if(array_search($tr, $missin)) $nmiss++;



}
///print missing pings cuantify
if($loc==1 && 1==2) echo "missing:".$nmiss."</br>";



//////////////////////////////
//////////////////////////////
/////////////////////////////
	
if($loc==1){
	$anom=0;
	$corr=0;
for($i=0;$i<=$x;$i++)
{
	
	
	for($j=0;$j<=$y;$j++){
		
	
		$rgb = imagecolorat($nnbxy, $i, $j);
	
	 $Colors = imagecolorsforindex($nnbxy,$rgb);

	 
	

	 if($Colors['red']==255 && $Colors['blue']==0 && $Colors['green']==0) {	
		 $anom++; 
	//	 echo ($i+1).",".($j+1).",1;</br>";
	 }else{
	 	
	$corr++;	
			
	 }

                       }//end for recorrido
 
				//	   echo '</br>';
}//end for recorrido



}/// end if





///////
////pint img
/////
/*
$nnb = imagecreatetruecolor($nnx, $nny);	
  for($i=0;$i<=$nnx;$i++)
  {
	  for($j=0;$j<=$nny;$j++){
	$colo=$nbdc3[$i][$j];
		
		  $nColor = imagecolorallocate($nnb, $colo*255, $colo*255, $colo*255);
		  imagesetpixel($nnb, $i,$j, $nColor);	
}
	
}
*/

//echo sizeof($nnfr);
/*
$nnb = imagecreatetruecolor($n1x, $n1y);	
  for($i=0;$i<=$n1x;$i++)
  {
	  for($j=0;$j<=$n1y;$j++){
		$colo=$nnfr[$i][$j];
		
		  $nColor = imagecolorallocate($nnb, $colo*255, $colo*255, $colo*255);
		  imagesetpixel($nnb, $i,$j, $nColor);	
		
	}
	
}
*/

////print res
/*
if($loc==1 && 1==2){
  for($i=0;$i<=$x;$i++)
  {
	  for($j=0;$j<=$y;$j++){
	
		$colo=$arrfin[$i][$j];
        if($colo=="l"){echo ($i+1).",".($j+1).",".$nfr[$i][$j].";</br>";} 
	
}
	
}

}
*/
//imagescale ( $nnb , $x,  $y ,  IMG_BILINEAR_FIXED );

//imagejpeg($nnbxy, "Dataset_reconstruccion.jpg");
//file_put_contents('img1.png', file_get_contents($nnb));
if($loc==0){
header('Content-Type: image/png');
imagepng($nnbxy);
}
?>