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



$drink=$_POST['drink'];

$salad=$_POST['salad'];

$dessert=$_POST['dessert'];


echo"<center><table border=4 cellspacing=10 width=100%></center>";

echo" <tr>";
echo "<td><center>APPETIZER</center><br>";
if(isset($_POST["ap"]))  
        {
            
            foreach ($_POST['ap'] as $ap)  
               
    
print" <center>$ap</center>";
}
echo "</td>";
echo"</tr>";


echo"<tr>";

print" <td><center>DRINK<br><br>$drink<br></center></td>";

echo"</tr>";

echo"<tr>";

print" <td><center><b>MAIN COURSE</b><br></center></td>";

echo"</tr>";

echo"<tr>";

print" <td><center>SALAD<br>$salad<br></center></td>";

echo"</tr>";

echo" <tr>";

echo "<td><center>VEGETABLE</center><br>";
if(isset($_POST["ve"]))  
        {
            
            foreach ($_POST['ve'] as $ve)  
               
    
print" <center>$ve</center>";
}
echo "</td>";
echo"</tr>";



echo" <tr>";
echo "<td><center>BREAD</center><br>";
if(isset($_POST["br"]))  
        {
            
            foreach ($_POST['br'] as $br)  
               
    
print" <center>$br</center>";
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