
//Denne koden ser ut til å fungere på samme måte
//som den koden du viste i timen (06.09.13)//


//Når listen forandres, skjer følgende funksjon//
list.onchange = function() {

//Variabelen "list" henter informasjon fra selve listen med programmeringsspråk//
  var list = document.getElementById('list');

  //Plasserer det valgte alternativet fra listen i span elementet med id="outputbox"//
    outputbox.innerHTML = "Du har selektert programmeringsspråk: " + this.value;
	
  };