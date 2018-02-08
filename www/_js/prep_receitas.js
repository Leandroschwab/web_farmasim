
var numEtiquetas = 1;
var numEtiquetasTotal = 1;


function addHora(etiqueta) {
    document.getElementById("cNumHoras"+etiqueta).value++;
    var tHoras = document.getElementById("cNumHoras"+etiqueta).value;
    var paraH= document.createElement("th");
    paraH.innerHTML += '<label for=\"CHora'+ etiqueta + '-'+ tHoras +'\">Hora: </label><select name=\"tHora'+ etiqueta +'-'+ tHoras + '\" id=\"CHora'+ etiqueta + '-'+ tHoras +'\"><option value=\"06:00\" selected>06:00</option><option value=\"07:00\">07:00</option><option value=\"12:00\">12:00</option><option value=\"19:00\">19:00</option><option value=\"21:00\">21:00</option></select >';
    document.getElementById("horas"+etiqueta).appendChild(paraH);
}
function addEtiqueta() {
    var para = document.createElement("DIV");
    para.innerHTML += '<div>' +
        '<p><label for=\"cNomeRemedio'+ numEtiquetas + '\">Nome do remédio '+ numEtiquetas + ':  </label><input type=\"text\" name=\"tNomeRemedio'+ numEtiquetas + '\" id=\"cNomeRemedio'+ numEtiquetas + '\" size=\"40\" maxlength=\"40\" placeholder=\"Nome do remédio\"></p>' +
        '<div>' +
        '<table class="horass"><tr id=\"horas'+numEtiquetas+'\"></tr></table>' +
        '<div class="buttonHora"><input type=\"hidden\" id=\"cNumHoras'+numEtiquetas+'\" name=\"tNumHoras'+numEtiquetas+'\" value=\"0\"><button type="button" onclick="addHora('+ numEtiquetas +')">Adicionar Hora!</button></div>' +
        '</div>' +
        '<p><label for=\"cCor'+ numEtiquetas + '\">Cor: </label><input type=\"color\" name=\"tCor'+ numEtiquetas + '\" id=\"cCor'+ numEtiquetas + '\"></p></div>';

    document.getElementById("myDIV").appendChild(para);
    addHora(numEtiquetas);
    document.getElementById("cNumEtiquetas").value = numEtiquetas;
    numEtiquetas++;

}
