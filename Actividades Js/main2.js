let divTabla = document.getElementById('tabla');
let olLista = document.getElementById('seleccion');
let tablaCreada = false;
let filasTabla = 0;
let columnasTabla = 0;

function generarTabla() {
    console.log("Generando tabla");

    if(tablaCreada) {
        console.error("Tabla ya creada, no creo otra");
        return;
    }

    filasTabla = document.getElementById("table_x").value;
    columnasTabla = document.getElementById("table_y").value;

    console.log("filasTabla = " + filasTabla);
    console.log("columnasTabla = " + columnasTabla);

    divTabla.innerHTML = "";

    let tabla = document.createElement("table");
    tabla.setAttribute("border","1");

    for(let i = 0; i < filasTabla; i++) {
        let fila = document.createElement("tr");

        for(let j = 0; j < columnasTabla; j++) {
            let celda = document.createElement("td");
            celda.setAttribute("id", `celda_${i}_${j}`);
            celda.textContent = `${i},${j}`;
            fila.appendChild(celda);
        }

        tabla.appendChild(fila);
    }

    divTabla.appendChild(tabla);
    tablaCreada = true;
}

function borrarTabla() {
    console.log("Borrando tabla");

    divTabla.innerHTML = "";
    olLista.innerHTML = "";
    document.getElementById("table_x").value = "";
    document.getElementById("table_y").value = "";
    tablaCreada = false;
}

function seleccionarCelda() {
    console.log("Seleccionar Celda");

    if(!tablaCreada) {
        console.error("ERROR: primero genera la tabla");
        return;
    }

    let numX = Math.floor(Math.random() * filasTabla);
    let numY = Math.floor(Math.random() * columnasTabla);

    let celda = document.getElementById(`celda_${numX}_${numY}`);
    if(!celda) return;

    // Si la celda ya estaba roja se pone gris
    if(celda.classList.contains("red")) {
        celda.classList.replace("red", "grey");
    } 
    // Si la celda no tenía color, se pone roja
    else if(!celda.classList.contains("grey")) {
        celda.classList.add("red");
    }

    // Añadir al listado
    let li = document.createElement("li");
    li.textContent = celda.textContent;
    olLista.appendChild(li);
}
