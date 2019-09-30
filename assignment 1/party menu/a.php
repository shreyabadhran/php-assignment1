<!DOCTYPE html>
<head>
	<style>
		body
		{
			background-color:#c0ffb3;
		}
	</style>
</head>
<html>
<body>
<?php

	if(isset($_POST["menu"]))
{





echo"<center><table border=4 cellspacing=10 width=100%></center>";

echo" <tr>";
echo "<td><center>APPETIZER</center><br>";
if(isset($_POST["appe"]))  
        {
            
            foreach ($_POST['appe'] as $appe)  
               
    
print" <center>$appe</center>";
}
echo "</td>";
echo"</tr>";




echo" <tr>";
echo "<td><center>SALAD</center><br>";
if(isset($_POST["salad"]))  
        {
            
            foreach ($_POST['salad'] as $salad)  
               
    
print" <center>$salad</center>";
}
echo "</td>";
echo"</tr>";



echo" <tr>";

echo "<td><center>NON ALC. DRINK</center><br>";
if(isset($_POST["ndri"]))  
        {
            
            foreach ($_POST['ndri'] as $ndri)  
               
    
print" <center>$ndri</center>";
}
echo "</td>";
echo"</tr>";



echo" <tr>";
echo "<td><center>ALC. DRINK</center><br>";
if(isset($_POST["dri"]))  
        {
            
            foreach ($_POST['dri'] as $dri)  
               
    
print" <center>$dri</center>";
}
echo "</td>";
echo"</tr>";



echo"</table>";

}
?>
</body>
</html>