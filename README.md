# imgpro
Recognition of anomalies in images inspired by Gamma emission tomography (PGET) instruments,

Make a verification of the symmetry of the image, in case of an anomaly represents it with red, this just, its symmetrical equivalent

Requirements:
PHP7

for use locate the reader.php file

$ img = imagecreatefrompng ("images / 6.png");
to indicate image to analyze

////CONFIG
$debug=1; // if debug is 1 not compare symetryc 
$scal=128;/////12// number of scale image, normalize and average value 
$loc=0; /// if 1, print dataset
$varianza=0.04;/// varianza for compare pixel group
////////////
