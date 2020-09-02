<html>
    <head>
        <title>
            PHP ASSIGNMENT
        </title>
        
    	<style type="text/css">
.auto-style1 {
	color: #FAFAFA;
	font-family: "Courier New", Courier, monospace;
	font-size: x-small;
}
.auto-style2 {
	color: #74164B;
}
.auto-style3 {
	color: #FAFAFA;
	font-family: "Courier New", Courier, monospace;
	font-size: small;
}
</style>
        
    </head>
    <body body style="background-color:#808080; font-size: large;">


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<strong>Please Enter Latitude:</strong> <input type="text" name="lat"><br>
	<br><span class="auto-style3">**The format of latitude values is signed 
	decimal degrees (+dd.ddd)</span><span class="auto-style1"> <br></span><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="submit" value="Calculate" class="auto-style2" style="width: 115px; height: 34px; background-color: #008080">
</form>


<?php 

$pi=3.14;
$radius=6400;
$late =$_POST['lat'];

 if(!empty ($late) and -90 < $late  and $late < 90) {


 $perimeter = 2*$radius*$pi*cos($late);
 echo "circumference Of the Parallel = {$perimeter}\n";
 }
 
 else{

    echo '<p style="color: blue;">
    Please Enter a Number Between -90 and +90 !
    </p>';
 }
 
 ?>



	<p><img alt="" height="296" src="1.jpg" width="387"></p>



</body>

