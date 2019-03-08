// hruhuhushfsuhfsufh


// Calcular o valor da compra e limitar a compra de acordo ou com o limite estabelecido ou a quantidade de ingressos

function calcularValor(qtdade,valor_ingresso,limite){
    // console.log(qtdade * valor_ingresso);
    document.getElementById("total").innerHTML = qtdade * valor_ingresso
    // console.log(document.getElementById("total").innerHTML)
    document.getElementsByName("valor_form").innerHTML = document.getElementById("total").innerHTML
    // console.log("valor campo hidden : "  + document.getElementsByName("valor_form").innerHTML)

    if (  qtdade > limite  ){
        alert('Só é possível efetuar a compra de ' + limite + " ingressos.")
        location.reload()
    }


}

// só permite números no campo

function validaNumero (evt, limite){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;

    return true;
}
