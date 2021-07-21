var boton = document.getElementById("btn");
var myParent = document.getElementById("divsito");
var originalSelect = document.getElementById("frutas");
var opciones = originalSelect.getElementsByTagName("option")
var array = [];
var arrayid = [];

for (var s = 0; s < opciones.length; s++) {
    array.push(opciones[s].text);
    arrayid.push(opciones[s].value);
}
var inc = 0;

boton.onclick = function() {
    //Create and append select list
    var selectList = document.createElement("select");
    var salto = document.createElement("br");
    var cantidad = document.createElement("input");
    var borrar = document.createElement("a");
    var div = document.createElement("div")
    var recorrido = document.cre

    inc = inc + 1;

    div.id = "div_"+ inc;
    cantidad.type = "number";
    cantidad.id = "cantidad";
    cantidad.name = "cantidad_" + inc;
    cantidad.className = "input-cantidad";
    cantidad.placeholder = "Cantidad"
    selectList.id = "mySelect";
    selectList.className = "select-css";
    selectList.name = "fruta_" + inc;
    borrar.id = "borrar";
    borrar.className = "btn btn-secundario";
    borrar.text = "Borrar";
    myParent.appendChild(div);
    div.appendChild(selectList);

    //Create and append the options
    for (var i = 0; i < array.length; i++) {
        var option = document.createElement("option");
        option.value = arrayid[i];
        option.text = array[i];
        selectList.appendChild(option);
    }
    
    div.appendChild(cantidad);
    div.appendChild(borrar);
    div.appendChild(salto);

    borrar.onclick = function() {
        var ultimo = document.getElementById("div_"+ inc);
        myParent.removeChild(ultimo);
        inc = inc - 1;
    }
}




