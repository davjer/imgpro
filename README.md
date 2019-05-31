# imgpro
Recognition of anomalies in images inspired by Gamma emission tomography (PGET) instruments,

Make a verification of the symmetry of the image, in case of an anomaly represents it with red, this just, its symmetrical equivalent

Requirements:
PHP7

for use locate the reader.php file

$ img = imagecreatefrompng ("images / 6.png");
to indicate image to analyze

$debug 
indicates whether it processes symmetrical differences in the image or only displays image

$ scal = 12; to scale the image and analysis

$varianza=0.04  degree of difference between comparisons

$loc=1; if 1 dysplay dataset result, 0 for display image
