function actualizarMesasDisponibles() {
    var pisoSeleccionado = document.getElementById("piso_deseado").value;
    var selectMesasDisponibles = document.getElementById("mesas_disponibles");
    selectMesasDisponibles.innerHTML = "";

    if (pisoSeleccionado === "piso1") {
        agregarOpcionMesa(selectMesasDisponibles, "mesa1", "Mesa N°1 capacidad 5 Personas");
        agregarOpcionMesa(selectMesasDisponibles, "mesa2", "Mesa N°2 capacidad 4 Personas");
        agregarOpcionMesa(selectMesasDisponibles, "mesa3", "Mesa N°3 capacidad 8 Personas");
        agregarOpcionMesa(selectMesasDisponibles, "mesa4", "Mesa N°4 capacidad 5 Personas");
        agregarOpcionMesa(selectMesasDisponibles, "mesa5", "Mesa N°5 capacidad 4 Personas");
        agregarOpcionMesa(selectMesasDisponibles, "mesa6", "Mesa N°6 capacidad 6 Personas");
        agregarOpcionMesa(selectMesasDisponibles, "mesa7", "Mesa N°7 capacidad 6 Personas");
        agregarOpcionMesa(selectMesasDisponibles, "mesa8", "Mesa N°8 capacidad 5 Personas");


    } else if (pisoSeleccionado === "piso2") {
        agregarOpcionMesa(selectMesasDisponibles, "mesa1", "Mesa N°1   capacidad 10 Personas");
        agregarOpcionMesa(selectMesasDisponibles, "mesa2", "Mesa N°2   capacidad 7 Personas");
        agregarOpcionMesa(selectMesasDisponibles, "mesa3", "Mesa N°3   capacidad 8 Personas");
        agregarOpcionMesa(selectMesasDisponibles, "mesa4", "Mesa N°4   capacidad 12 Personas");
        agregarOpcionMesa(selectMesasDisponibles, "mesa5", "Mesa N°5   capacidad 10 Personas");
        agregarOpcionMesa(selectMesasDisponibles, "mesa6", "Mesa N°6   capacidad 6 Personas");
        agregarOpcionMesa(selectMesasDisponibles, "mesa7", "Mesa N°7   capacidad 8 Personas");
        agregarOpcionMesa(selectMesasDisponibles, "mesa8", "Mesa N°8   capacidad 5 Personas");
        agregarOpcionMesa(selectMesasDisponibles, "mesa9", "Mesa N°9   capacidad 4 Personas");        
        agregarOpcionMesa(selectMesasDisponibles, "mesa10","Mesa N°10  capacidad 11 Personas");
        agregarOpcionMesa(selectMesasDisponibles, "mesa11","Mesa N°11  capacidad 14 Personas");

    }
}

function agregarOpcionMesa(selectElement, value, text) {
    var option = document.createElement("option");
    option.value = value;
    option.text = text;
    selectElement.appendChild(option);
}


document.getElementById("piso_deseado").addEventListener("change", actualizarMesasDisponibles);


actualizarMesasDisponibles();
