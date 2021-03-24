function validar_nome(elemento){
    if(elemento.value.length >= 3){
        console.log("vazio")
        document.getElementById("msg_erro"). innerHTML="";
        //apagar mensagem de erro
    }
    else{
        console.log("erro")
        document.getElementById("msg_erro"). innerHTML=" O Nome deve possuir no mínimo 3 letras!";
        //mostrar mensagem de erro
    }
}