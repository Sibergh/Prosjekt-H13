<?php
/*
Skal teste random generatoren
Forfatter Nicolai Juul Roberg, IS-107 kullet 2013
Påbegynt 130913
*/ 


/* Initialisering:
Skal generere $maxantkast ganger kast og tellerne nullstilles

 - Kaste terning $antall
 - For hvert kast:
	- Registrere hva vi får

 - Vise resultat
*/

// Del 1:
$kast1 = rand(1,6);
$kast2 = rand(1,6);
$kast3 = rand(1,6);

// 2: Legge sammen
$sum = $kast1 + $kast2 + $kast3;

// 3: Skrive ut
echo "Kast 1 er $kast1 <br>";
echo "Kast 2 er $kast2 <br>";
echo "Kast 3 er $kast3 <br>";
echo "Sum er $sum <br>";



// Del 2

// Variabler:
$maxantkast = 10000;

$en		= 0;
$to 	= 0;
$tre 	= 0;
$fire 	= 0;
$fem 	= 0;
$seks 	= 0;
$kastteller = 0;


// Funksjonen / det som skal gjøres:
for ($kastteller = 0; $kastteller < $maxantkast; $kastteller++)
{	
$terning = rand(1,6);
if 	($terning ==1)
		{$en++;}
if 	($terning ==2)
		{$to++;}
if 	($terning ==3)
		{$tre++;}
if 	($terning ==4)
		{$fire++;}
if 	($terning ==5)
		{$fem++;}
if 	($terning ==6)
		{$seks++;}
}

// Det som skal skrives:

echo 	"Antall terningkast som ble en: $en <br>";
echo 	"Antall terningkast som ble to: $to <br>";
echo 	"Antall terningkast som ble tre: $tre <br>";
echo 	"Antall terningkast som ble fire: $fire <br>";
echo 	"Antall terningkast som ble fem: $fem <br>";
echo 	"Antall terningkast som ble seks: $seks <br>";
echo	"Du har kastet $kastteller ganger <br>";
?>