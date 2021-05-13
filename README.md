# imgpro
Recognition of anomalies in images inspired by Gamma emission tomography (PGET) instruments,

Make a verification of the symmetry of the image, in case of an anomaly represents it with red, this just, its symmetrical equivalent

Requirements:
PHP7 (this is very important, since only PHP7 has the processing speed for the functions, the use of previous versions can cause a great delay or fall by time)

for use locate the reader.php file

$ img = imagecreatefrompng ("images / 6.png");
to indicate image to analyze

////CONFIG
$debug=1; // if debug is 1 not compare symetryc 

$scal=128;/////12// number of scale image, normalize and average value 

$loc=0; /// if 1, print dataset

$varianza=0.04;/// varianza for compare pixel group

////////////
use load for reconstruction the image
load.php

when include put $print=0;


a rectangle is proposed for the search of pins, this is construlled as the data file is traversed, averaging each segment to fill each pin.
for review please look the PNG "template_pins.png", you can run square.php for view

you can comment include "load.php" in the line 8, and load any image, for this change the route in line 23

######

you can run the square.php function to reconstruct the shape of the pins

More About Proyect:
https://ideas.unite.un.org/iaea-tomography/Page/ViewIdea?ideaid=1505


