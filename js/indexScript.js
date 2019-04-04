//sidenav management

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


//validation


function validaForm(x){
    
    var elements = x.elements;
    
    for(var i = 0; elements.length; elements[i++]){
        if(elements[i].type=="text"){
            switch(elements[i].id){
                case 'cpf': 
                    if(!validaCpf(elements[i].id)){
                                
                                alert("Verifique o CPF!");
                                elements[i].focus();
                                elements[i].select();
                                return false;
                                
                                
                            }
                    break;
                case 'cliNome':
                    if(!validaNome(elements[i].id)){
                                
                                alert("Verifique o nome digitado!\nUtilize apenas a-z, A-Z, ', - ou espaços.");
                                elements[i].focus();
                                elements[i].select();
                                return false;
                                
                                
                            }
                    break;
                    
                case 'dtNasc':
                    if(!validaData(elements[i].id)){
                                
                                alert("Verifique a data de nascimento digitada.");
                                elements[i].focus();
                                elements[i].select();
                                return false;
                                
                                
                            }
                    break;
                
            }
        }
    }
    
    
}

function validaVazio(x){
    
    var ref = document.getElementById(x).value;
    
    if(ref==""){
        document.getElementById(x).style.borderColor = '#DB1F3D';
        return false;
    }
    else{
        document.getElementById(x).style.borderColor = 'inherit';
        return true;
    }
    
}


function validaData(x){
    
    var re = /^\d{8}$/;
    var rex = /[0-9]{2}\/[0-9]{2}\/[0-9]{4}/;
    var data = document.getElementById(x).value;
    var dtstr;
    if(re.test(data)){
        data = data.substr(0,2) + '/' + data.substr(2,2) + '/' + data.substr(4,4);
        document.getElementById(x).value = data;
        document.getElementById(x).style.borderColor = 'inherit';
        dtstr = data.substr(4,4)+ "-" + data.substr(2,2) + "-" + data.substr(0,2);
        if(Date.parse(dtstr)){
           return true;
        }
        else{
            return false;
        }
        
    }
    else{
        if(rex.test(data)){
            document.getElementById(x).style.borderColor = 'inherit';
            dtstr = data.substr(6,4)+ "-" + data.substr(3,2) + "-" + data.substr(0,2);
            if(Date.parse(dtstr)){
               return true;
            }
        }
        return false;
    }
    
}

function validaNome(x){
    
    var re = /\p{L}\s?'?-?/g;
    var nm = document.getElementById(x).value;
    
    if(!re.test(nm)){
        
            document.getElementById(x).style['boxShadow'] =  "0 0 2px #DB1F3D";
            document.getElementById(x).style.borderColor = '#DB1F3D';
        
    }
    
}


function validaCpf(x){
    
    var re = /^([0-9]{3}\.?[0-9]{3}\.?[0-9]{3}\-?[0-9]{2})$/;
    strCPF = document.getElementById(x).value;
    if(strCPF==""){
        document.getElementById(x+'Error').style.display = 'none';
        document.getElementById(x).style.borderColor = 'inherit';
        return false;
    }else{
        if(re.test(strCPF)){
        /*if(strCPF.length == 15){
            strCPF = strCPF.substr(0, 3) + strCPF.substr(4,3) + strCPF.substr(8,3) + strCPF.substr(12);
            document.getElementById(x).value = strCPF;
        }
        document.getElementById(x).style.borderColor = '#A5D644';
        return true;*/
        
            if(TestaCPF(strCPF)){
                document.getElementById(x).style['boxShadow'] =  "0 0 2px #A5D644";
                document.getElementById(x).style.borderColor = '#A5D644';
                document.getElementById(x+'Error').style.display = 'none';
                return true;
            }
            else{
                document.getElementById(x).style['boxShadow'] =  "0 0 2px #DB1F3D";
                document.getElementById(x).style.borderColor = '#DB1F3D';
                document.getElementById(x+'Error').style.display = 'block';
                document.getElementById(x+'Error').innerHTML = 'CPF inválido!'
                return false;
            }
        }else{
            document.getElementById(x).style['boxShadow'] =  "0 0 2px #DB1F3D";
            document.getElementById(x).style.borderColor = '#DB1F3D';
            document.getElementById(x+'Error').style.display = 'block';
            document.getElementById(x+'Error').innerHTML = 'Utilize somente números!'
            return false;
        }
    }
    
    
}


function TestaCPF(strCPF) {
    var Soma;
    var Resto;
    Soma = 0;
  if (strCPF == "00000000000") return false;
     
  for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
  Resto = (Soma * 10) % 11;
   
    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10)) ) return false;
   
  Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;
   
    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11) ) ) return false;
    return true;
}



//CEP query


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
        
        document.getElementById('rua').disabled=true;
        document.getElementById('bairro').disabled=true;
        document.getElementById('cidade').disabled=true;
        document.getElementById('uf').disabled=true;
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