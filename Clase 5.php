<?php  
echo "EJERCICIO 1 <br>"; 
echo "<br> FOR <br>"; 
//FOR
for($i=2;$i<=20;$i+=2){
    echo "$i<br>";
}
echo "<br> WHILE <br>"; 
//while
$i=2;
while($i<=20){
    echo "$i<br>";
    $i+=2;
}
echo "<br> DO WHILE <br>";
//Do While 
$i=2;
do{
    echo "$i<br>";
    $i+=2;
}while($i<=20);
//Fin ejercicio 1
echo "<br> EJERCICIO 2 <br>"; 
$n1 = 100;
 for($i=0;$i<=$n1;$i++){
     if($i%2==0)
     echo "$i<br>";
 }
 /*
 profe hice el ejercicio asi ya que no entendi muy bien como ud lo pidio
 ya que me parece que se equivoco al escriirlo 
 */
//Fin ejercicio 2
echo "<br> EJERCICIO 3 <br>"; 
for($i=1;$i<=20;$i++){
    if(($i%5==0)&&($i%3==0))
    echo "$i FIZZ BUZZ <br>";
    else
    if ($i%5==0)
    echo "$i BUZZ <br>";
    else
    if ($i%3==0)
    echo "$i FIZZ <br>";
    else
    echo "$i <br>";
}
//Fin ejercicio 3
echo "<br> EJERCICIO 4 <br>";
$v = array(10);
$max = 0;
$min = 30;

for($i=1;$i<=10;$i++){

    $v[$i]=rand(1,30); //asignando valores aleatorios entre 1 y 30

    echo "$v[$i] <br>";

    if($v[$i]>$max)
        $max=$v[$i];
    if($v[$i]<$min)
        $min=$v[$i];
}
$mdo = ($max+$min)/2;
echo "<br> El valor medio es $mdo <br> ";
echo "El valor maximo es $max <br>";
echo "El valor minimo es $min <br>";

//Fin ejercicio 4

echo "<br> EJERCICIO 5 <br>";

$v = array("Antonio"=>"31",
         "María"=>"28",
          "Juan"=>"29",
           "Pepe"=>"27");

echo "<br> Ascendente asort";
    asort($v);
    var_export($v);
echo "<br> Descendente arsort";
    arsort($v);
    var_export($v);
echo "<br> Ascendente ksort";
    ksort($v);
    var_export($v);
echo "<br> Descendente krsort";
    arsort($v);
    var_export($v);
//Fin ejercicio 5
?>