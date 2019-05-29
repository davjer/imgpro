<?php
if( !ini_get('safe_mode') ){ 
    set_time_limit(0); //this won't work if safe_mode is enabled.
}
ini_set('memory_limit', '-1'); 
error_reporting(E_ERROR);
$img = imagecreatefrompng("images/4.png");


imagefilter($img, IMG_FILTER_GRAYSCALE);
$rgb = imagecolorat($img, 0, 0);
$x=imagesx($img);
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
	 include 'version1.php';
	 
	 $nrgb=$Colors['red']/255; 

	 // $nColor = imagecolorallocate($nb, 255, 0, 0 );		
		
	  $nColor = imagecolorallocate($nb, $Colors['red'], $Colors['red'], $Colors['red'] );
	    imagesetpixel($nb, $j,$i, $nColor);
         $nfr[$i][$j]=$nrgb;

                       }//end for recorrido
 
				//	   echo '</br>';
}//end for recorrido

//analisys
$scal=24;
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
		
		         $colr+=$nfr[$i2][$j2];
				 $nbdc[$i+$i2][$j+$j2]=$nfr[$i2][$j2];
				 $nbdc2[$i+$i2][$j+$j2]= $colr/$count;	 //img
		         $count++;
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
				 $nnx=$i+$i2;
				 $nny=$j+$j2;
                // echo "i".$i2."J:".$j2."</br>";
				 
				                 }/// end fro3
							 	   
						 }///end if 1
		    
		 

		
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

$debug=0;


$nnb = imagecreatetruecolor($nnx, $nny);	
  for($i=0;$i<=$nnx;$i++)
  {
	  for($j=0;$j<=$nny;$j++){
		  
	$colo=$nbdc3[$i][$j];
	$colo2=$nbdc3[$i][$nny-$j];
	
	if($debug==1){
	$finc=abs($colo-$colo2);
	
	//echo $finc."</br>"; 
		
	if($finc>0.04){ $nColor = imagecolorallocate($nnb, 255, 0, 0);
                  
				  }else{
		  $nColor = imagecolorallocate($nnb, $colo*255, $colo*255, $colo*255);
		                }  
	 imagesetpixel($nnb, $i,$j, $nColor);	
					}else{
		 $nColor = imagecolorallocate($nnb, $colo*255, $colo*255, $colo*255);			
		  imagesetpixel($nnb, $i,$j, $nColor);				
						
					}
			
}
	
}


///////////
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


header('Content-Type: image/png');
imagepng($nnb);

?>