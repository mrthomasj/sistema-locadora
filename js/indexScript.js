function openNav(){
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "170px";
    document.getElementsById("main").style.padding = "20px";
}

function closeNav(){
    
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.getElementsById("main").style.padding = "20px 20px 20px 102px";
}