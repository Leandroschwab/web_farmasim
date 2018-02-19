function removetables(){
    if(document.getElementById("tabelaEtiqueta")!=null){
        var elem = document.getElementById("tabelaEtiqueta");
        elem.parentNode.removeChild(elem);
    }
    if(document.getElementById("tabelaHorario")!=null){
        var elem = document.getElementById("tabelaHorario");
        elem.parentNode.removeChild(elem);
    }
}


function fazTabelaEtiqueta1() {
    removetables();
    var posl = 1;
    var i,j;
    var etiqueta = 1;
    var numHora =1;
    var g = document.createElement("DIV");
    g.setAttribute("id", "tabelaEtiqueta");

    var gg = "<div id=\'folhaEtiqueta\'><table id=\'tabela\' cellspacing=\'0\' cellpadding=\'0\'>";
    for(i=1;i<=10;i++){
        gg += "<tr>";
        for(j=1;j<=3;j++){

            gg += "<td><div class=\' " + jTipoFolha  + " \' > ";

            if((posl>=jPos) && (posl<=(jPos+jQuant-1))){

                gg += "<div class=\'divbola\' id=\'bola"+ etiqueta +"\'></div> ";
                gg += " <p>Nome: " + jNomePaciente+ " <br> Remedio: " + jNomeRemedio[etiqueta] + " <br> Horário: " + jHora[etiqueta][numHora];
                numHora++;
                while (jHora[etiqueta][numHora]!=null) {
                    gg += " e " + jHora[etiqueta][numHora];
                    numHora++;
                }
                numHora =1;
                etiqueta++;

            }
            gg += "</div></td>";
            posl++;
        }
        gg += "</tr>"
    }
    gg += "</table></div>";
    g.innerHTML += gg;
    document.getElementById("folha").appendChild(g);
}
function fazTabelaEtiqueta2() {
    removetables();
    var i,j;
    var etiqueta = 1;
    var horarios =[00,"06:00","07:00","12:00","19:00","21:00"];
    var g = document.createElement("DIV");

    g.setAttribute("id", "tabelaHorario");

    var gg = "<div id=\'folhaHorario\'><table id=\'tabelaH\' cellspacing=\'0\' cellpadding=\'0\'>";
    gg += "<tr>";

    gg += "<td id=\'tabelaH1\'>";
    gg += "<p>Img-Farmasim</p><p>Paciente: "+ jNomePaciente + "</p>";
    gg += "</td>";

    gg += "<td class=\'tabelaH2\'>";
    gg += " <p>Img-hora-1</p>";
    gg += "</td>";

    gg += "<td class=\'tabelaH2\'>";
    gg += " <p>Img-hora-2</p>";
    gg += "</td>";

    gg += "<td class=\'tabelaH2\'>";
    gg += " <p>Img-hora-3</p>";
    gg += "</td>";

    gg += "<td class=\'tabelaH2\'>";
    gg += " <p>Img-hora-4</p>";
    gg += "</td>";

    gg += "<td class=\'tabelaH2\'>";
    gg += "<p>Img-hora-5</p>";
    gg += "</td>";
    gg += "</tr>";
    for(i=1;i<=jQuant;i++){
        gg += "<tr>";
        for(j=0;j<=5;j++){

            gg += "<td class=\'tabelaNomeRemedio\'><div>";

            if(j==0){
                gg += " <p>" + jNomeRemedio[etiqueta] + " </p>";
            }
            for(k=1;k<=jTHoras[etiqueta];k++){
                if(horarios[j]==jHora[etiqueta][k]){
                    gg += "<div class=\'divbola2\' id=\'bola"+ etiqueta +"\'></div> ";
                }
            }

            gg += "</div></td>";

        }
        etiqueta++;
        gg += "</tr>";
    }
    gg += "</table></div>";
    g.innerHTML += gg;
    document.getElementById("folha").appendChild(g);
}