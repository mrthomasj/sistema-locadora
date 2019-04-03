function openNav(){
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "180px";
    document.getElementsById("main").style.padding = "20px";
}

function closeNav(){
    
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.getElementsById("main").style.padding = "20px 20px 20px 102px";
}


function validaCpf(x){
    
    var re = /^([0-9]{3}\.?[0-9]{3}\.?[0-9]{3}\-?[0-9]{2})$/;
    if(re.test(document.getElementById(x).value)){
        document.getElementById(x).style.borderColor = '#A5D644';
        return true;
    }else{
        document.getElementById(x).style.borderColor = '#DB1F3D';
        document.getElementById(x+'Error').style.display = 'block';
        return false;
    }
    
    
}




function limpaFormularioCep(){
    
    document.getElementById('rua').value=("");
    document.getElementById('bairro').value=("");
    document.getElementById('cidade').value=("");
    document.getElementById('uf').value=("");
    
}


function meu_callback(content){
    if(!("erro" in content)){
        document.getElementById('rua').value=(content.logradouro);
        document.getElementById('bairro').value=(content.bairro);
        document.getElementById('cidade').value=(content.localidade);
        document.getElementById('uf').value=(content.uf);
    }
    else{
        limpaFormularioCep();
        alert("CEP não encontrado!");
    }
}

function pesquisaCep(input){
    var cep = input.value.replace(/\D/g, '');
    
    if(cep != ""){
        var validaCep = /^[0-9]{8}$/;
        
        if(validaCep.test(cep)){
            document.getElementById('rua').value=("...");
            document.getElementById('bairro').value=("...");
            document.getElementById('cidade').value=("...");
            document.getElementById('uf').value=("...");
            
            var script = document.createElement('script');
            
            script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';
            
            document.body.appendChild(script);
            
        }
        else{
            limpaFormularioCep();
            alert("Formato de CEP é invalido");
        }
    }
    else{
        limpaFormularioCep();
    }
}