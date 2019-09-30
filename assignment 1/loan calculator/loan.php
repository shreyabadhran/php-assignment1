<!DOCTYPE HTML> 
<html> 
<head> 
<title>Loan Calculator</title> 
<style>
        body
        {
            background-color: #c6f1d6;
        }
        
    </style>
</head> 
<body> 
<?php
 
$capital=$_POST['capital']; 
$interest=$_POST['interest']; 
$year=$_POST['year']; 
$instalment=$_POST['instalment']; 


print "Capital $capital<br>"; 
print "Interest $interest<br>"; 
print "Instalment $instalment<br>"; 
print "Years $year<br>"; 


$months=$year * 12; 

 
if (strcmp($instalment,"Fixed")==0) 

{ 
 
    $fixedPayment=$capital / $months; 
    $interestRateForMonth=$interest / 12; 

    for ($i=0;$i<$months;$i++) 
    { 

        $interestForMonth=$capital / 100 * $interestRateForMonth; 

        $capital=$capital - $fixedPayment; 

    }     
} 

else 
{ 
    $interest=$interest / 100; 
    $result=$interest / 12 * pow(1 + $interest / 12,$months) / (pow(1 + $interest / 12,$months) - 1) * $capital;     
    printf("Monthly pay is %.2f", $result); 
} 
?> 


</body> 
</html>