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



$soup=$_POST['soup'];

$salad=$_POST['salad'];

$dessert=$_POST['dessert'];


echo"<center><table border=4 cellspacing=10 width=100%></center>";

echo" <tr>";
echo "<td><center>APPETIZER</center><br>";
if(isset($_POST["app"]))  
        {
            
            foreach ($_POST['app'] as $app)  
               
    
print" <center>$app</center>";
}
echo "</td>";
echo"</tr>";


echo"<tr>";

print" <td><center>SOUP<br><br>$soup<br></center></td>";

echo"</tr>";

echo" <tr>";
echo "<td><center>DRINKS</center><br>";
if(isset($_POST["dr"]))  
        {
            
            foreach ($_POST['dr'] as $dr)  
               
    
print" <center>$dr</center>";
}
echo "</td>";
echo"</tr>";


echo"<tr>";

print" <td><center><b>MAIN COURSE</b><br></center></td>";

echo"</tr>";

echo"<tr>";

print" <td><center>SALAD<br>$salad<br></center></td>";

echo"</tr>";

echo" <tr>";

echo "<td><center>VEGETABLE</center><br>";
if(isset($_POST["vege"]))  
        {
            
            foreach ($_POST['vege'] as $vege)  
               
    
print" <center>$vege</center>";
}
echo "</td>";
echo"</tr>";



echo" <tr>";
echo "<td><center>BREAD</center><br>";
if(isset($_POST["bre"]))  
        {
            
            foreach ($_POST['bre'] as $bre)  
               
    
print" <center>$bre</center>";
}
echo "</td>";
echo"</tr>";

echo"<tr>";

print" <td><center>DESSERT<br><br>$dessert<br></center></td>";

echo"</tr>";

echo"</table>";

}
?>
</body>
</html>