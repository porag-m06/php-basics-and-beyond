<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="styletest.css"/>
</head>
<body> 

<?php
  //phpinfo(); // displays all about php
  //Php arrays 
 $peopleArray1 = ['item one','item two','item three'];
 $Array2 = array(44,55,67);
  
?> 

<div> <?php echo $peopleArray1[0] . " is = ". $Array2[0];?> </div>
<div> <?php echo $peopleArray1[1] . " is = ". $Array2[1];?> </div>
<div> <?php echo $peopleArray1[2] . " is = ". $Array2[2];?> </div>

<div> <?php print_r($Array2); //printing the whole array ?> </div>

<div> <?php $Array2[0]=100; //changing an element of the array and printing again ?> </div>
<div> <?php print_r($Array2); //printing the whole array ?> </div>

</body>
</html>
