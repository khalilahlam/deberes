// ======================================================
// =================== ACTIVIDAD 1 =====================
// ======================================================

let input2 = document.getElementById('input2');
console.log(input2);

let coleccion = document.getElementsByTagName('p')
console.log(coleccion);

let lipsumID = document.getElementById('lipsum');
let parr = lipsumID.getElementsByTagName('p')
console.log(parr);

let formulario = document.querySelector('form')
console.log(formulario);

let input = document.querySelectorAll('input');
console.log(input);

let sexoInputs = document.querySelectorAll('input[name="sexo"]');
console.log(sexoInputs);

let importantListItems = document.querySelectorAll('li.important');
console.log(importantListItems);


// ======================================================
// =================== ACTIVIDAD 2 =====================
// ======================================================

let Lipsum = document.getElementById('lipsum');
let primerparr = Lipsum.firstElementChild;
console.log(primerparr);

let Lipsum2 = document.getElementById('lipsum');
let segundoparr = primerparr.nextElementSibling;
console.log('este es ' , segundoparr);

let elementoslista = document.getElementsByTagName('ul');
let ultimoil = elementoslista[0];
console.log(ultimoil);

let elementosLabel = document.getElementsByTagName('label');
console.log(elementosLabel);
let elementosexo = elementosLabel[elementosLabel.length - 1]
console.log(elementosexo.textContent);


// ======================================================
// =================== ACTIVIDAD 3 =====================
// ======================================================

let escogesexo = elementosLabel[elementosLabel.length - 1]
console.log(escogesexo.innerHTML);

let escogesexocontent = elementosLabel[elementosLabel.length - 1]
console.log(escogesexocontent.textContent);

escogesexo.firstChild.textContent = "GENERO";
console.log(escogesexo);

let inputs = document.getElementsByName('sexo');
let inputprimero = inputs[0];
console.log(inputprimero.value);

let inputseleccionado = document.querySelector('input[name="sexo"]:checked');
console.log('Sexo seleccionado:', inputseleccionado ? inputseleccionado.value : 'Ninguno seleccionado');


// ======================================================
// =================== ACTIVIDAD 4 =====================
// ======================================================

let miDiv = document.getElementById('lipsum');
document.innerHTML +="<p>Párrafo añadido al final</p>";
console.log(miDiv);

let lipsumDiv = document.getElementById('lipsum');
let nuevoParrafo = document.createElement('p');
nuevoParrafo.innerHTML = 'Nuevo párrafo <b>añadido</b> por javascript';
lipsumDiv.appendChild(nuevoParrafo);

let input1 = document.getElementById('input1');

let nuevoLabel = document.createElement('label');
nuevoLabel.setAttribute('for', 'input1bis');
nuevoLabel.textContent = 'Dato 1 bis ';

let nuevoInput = document.createElement('input');
nuevoInput.type = 'text';
nuevoInput.id = 'input1bis';
nuevoInput.value = 'Hola'; 

nuevoLabel.appendChild(nuevoInput);
