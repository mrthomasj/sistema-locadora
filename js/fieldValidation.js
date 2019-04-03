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