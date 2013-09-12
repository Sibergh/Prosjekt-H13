
//function callOthers() {
list.onchange = function textoutput() {	
	var list = document.getElementById('list');
	var outputbox = document.getElementById('outputbox');
outputbox.innerHTML = this.value;} 
//};function link () {window.open('name', 'list', 'height=undefined,width=undefined', false);}






//list.onchange = function (2) {
//	var name = document.getElementByName('name');
//name.window.open = this.name;"
//}



// Tidligere tester:
//	var name = document.getelementByName('name');

//list.onchange = function (1) {
//name.window.open = this.value}

//var selectmenu=document.getElementById("list")
//selectmenu.onchange=function(){ 
// var chosenoption=this.options[this.selectedIndex] //this refers to "selectmenu"
// if (chosenoption.value!="nothing"){
//  window.open(chosenoption.value, "", "") //open target site (based on option's value attr) in new window
// }
//}