    <?php
    // par impar
    echo "<h1>Ejercicios IF, ELSE, ELSEIF</h1>";
    echo "<h4>Identificar si un numero es par o impar </h4>";
    $numero = rand(1,100);
    if($numero % 2)
        echo $numero," es impar <br>";
    else
        echo $numero," es par <br>";
    // Identifique cual es mayor y si es par o impar.
    echo "<h4>Identifique cual es mayor y si es par o impar </h4>";

    $n1 = rand(1,100);
    $n2 = rand(1,100);
    //evaluando si la variable n1 es mayor e impar o par al mismo tiempo
    if(($n1>$n2)&&($n1%2)){
        echo "Numero1: $n1 <br>
            Numero2: $n2 <br>
            El mayor es $n1 (impar)<br>";
    }
    else if($n1>$n2){
        echo "Numero1: $n1 <br>
            Numero2: $n2 <br>
            El mayor es $n1 (par)<br>";
    }
    //evaluando si la variable n2 es mayor e impar o par al mismo tiempo
    else
    if(($n2>$n1)&&($n1%2)){
        echo "Numero1: $n1 <br>
            Numero2: $n2 <br>
            El mayor es $n1 (impar)<br>";
    }
    else if($n2>$n1){
        echo "Numero1: $n1 <br>
            Numero2: $n2 <br>
            El mayor es $n2 (par)<br>";
    }
    if ($n1==$n2) {
        echo "Numero 1: $n1<br>  
            Numero 2: $n2<br>";
        if ($n1%2) {
            echo "Son iguales e Impares<br>";
        }
        else{
            echo "Son iguales y Pares<br>";
        }
    }
    /*Muestre su nombre y su sueldo (Generado aleatoriamente), si el salario es
    menor a $500 usted gana menos del mínimo y si es mayor a $1.000, dele gracias
    al señor (Muestre este resultado por pantalla).*/
    echo "<h4>Nombre y sueldo aleatorio. </h4>";

    $name = "Manuel Puente";

    $sueldo = rand(100,2000);

    if($sueldo<500)
        echo "$name gana menos del minimo $sueldo";
        else 
            if (($sueldo>499)&&($sueldo<1001))
            echo "$name gana un sueldo intermedio $sueldo";
        else{
            if($sueldo>=1000)
            echo "$name gana un gran sueldo gracias a dios $sueldo";
        }
    /*Realice un programa en php que muestre el día, el mes y la hora en español. Usa
        date(“h:i:s”) para la hora, date(“l”) para el día, date(“d”) para el mes y
        date(“y”) para el año. */
    echo "<h4>Mostrar DIA, MES Y HORA </h4>";
    $hora=date("h:i:s");
    $dia=date("l");//Muestra el dia en ingles.
    $diames=date("d");//Muestra el dia del mes en que estamos.
    $mes=date("n");//Muestra el mes del año.
    $anio=date("y");//Muestra el año.

     //Traduciendo los dias a español. 
    if ($dia=="Monday")
        echo "Lunes ";
    else
    if ($dia=="Tuesday")
        echo "Martes ";
    else
    if ($dia=="Wednesday")
        echo "Miercoles ";
    else
    if ($dia=="Thursday")
        echo "Jueves ";
    else
    if ($dia=="Friday")
        echo "Viernes ";
    else
    if ($dia=="Saturday")
        echo "Sabado ";
    else
    if ($dia=="Sunday") 
        echo "Domingo ";

    //Convirtiendo los meses de numeros a letras
    if ($mes==1) {
        echo $diames." del mes de Enero del 20 $anio <br>";
    }
    else
    if ($mes==2) {
        echo $diames." del mes de Febrero del 20 $anio<br>";
    }
    else
    if ($mes==3) {
        echo $diames." del mes de Marzo del 20 $anio <br>";
    }
    else
    if ($mes==4) {
        echo $diames." del mes de Abril del 20 $anio <br>";
    }
    else
    if ($mes==5) {
        echo $diames." del mes de Mayo del 20 $anio<br>";
    }
    else
    if ($mes==6) {
        echo $diames." del mes de Junio del 20 $anio<br>";
    }
    else
    if ($mes==7) {
        echo $diames." del mes de Julio del 20 $anio<br>";
    }
    else
    if ($mes==8) {
        echo $diames." del mes de Agosto del 20 $anio<br>";
    }
    else
    if ($mes==9) {
        echo $diames." del mes de Septiembre del 20 $anio <br>";
    }
    else
    if ($mes==10) {
        echo $diames." del mes de Octubre del 20 $anio <br>";
    }
    else
    if ($mes==11) {
        echo $diames." del mes de Noviembre del 20 $anio <br>";
    }
    else
    if ($mes==12) {
        echo $diames." del mes de Diciembre del 20 $anio <br>";
    }
    echo "La hora actual es $hora <br>";

    echo "<h4> Rueda De Camion </h4>";

    $tipo="Rueda De Camion";
    $grosor=0.33;
    $diametro=1.25;
    $marca="Kimashuki";

    //Comprobando el diametro de la Rueda.
    if ($diametro>1.4) {
        echo "La rueda es para un vehiculo grande.<br>";
    }
    if ($diametro<=1.4) {
        echo "La rueda es para un vehiculo pequeño.<br>";
    }
    if ($diametro==1000) {
        echo "No existe un tamaño de rueda valido.<br>";
    }

    echo "<h4> Ejercicios SWITCH </h4>";
        //meses
    echo "Meses.<br>";
    $mes2=1;
    switch ($mes2) {
        case 1:
            echo ("El mes es Enero.<br>");
            break;
        case 2:
            echo ("El mes es Febrero.<br>");
            break;
        case 10:
            echo ("El mes es Octubre.<br>"); 
            break;
        default: 
            echo ("El mes no es Enero, Febrero ni Octubre.<br>"); 
            break;
    }
    //tienda de mascotas
    echo "Tienda de mascotas.<br>";
    $mascota=rand(1,6);
    switch ($mascota) {
        case 1:
            echo "Compro un perro.<br>";
            break;
        case 2:
            echo "Compro un gato.<br>";
            break;
        case 3:
            echo "Compro un conejo.<br>";
            break;
        case 4:
            echo "Compro un pez.<br>";
            break;
        case 5:
            echo "Compro un hamster.<br>";
            break;
        default:
            echo "Ninguna de las anteriores.<br>";
            break;
    }
    echo "<br>";

    // Bomba de Fluidos
    echo "Bomba de Fluidos.<br>";
		$tdm=3;

		switch ($tdm) {
			case 0:
				echo "No hay establecido un valor definido para el tipo de bomba.<br>";
				break;
			case 1:
				echo "La bomba es una bomba de agua.<br>";
				break;
			case 2:
				echo "La bomba es una bomba de Gasolina.<br>";
				break;
			case 3:
				echo "La bomba es una bomba de Hormigon.<br>";
				break;
			case 4:
				echo "La bomba es una bomba de pasta alimenticia.<br>";
				break;
			default:
				echo "No existe un valor valido para tipo de bomba";
				break;
		}
		echo "<br>";

        echo "<h4> Bucle while</h4>";

        // Del 0 al 10.
		echo "Incremento del 0 al 10.<br>";
		$i=0;
		while ($i <= 10) {
					echo $i."<br>";
					$i++;
				}	

		echo "<br><br>";	
        // Carro quedandose sin Gasolina		
		echo "2. Carro quedandose sin Gasolina.<br>";
		$gasolina=10;
		while ($gasolina>-1) {
			echo "El nivel de gasolina esta en: $gasolina<br>";
			$gasolina--;
		}

		echo "<br>";
        // Reponiendo la gasolina del carro.
		echo "3. Reponiendo la gasolina del carro.<br>";
		do {
		  	$gasolina++;
		  	echo "El nivel de gasolina es: $gasolina<br>";
		  } while ( $gasolina<10); 
		  if ($gasolina==10) {
		   	echo "El tanque esta lleno.<br>";
		  } 
?>