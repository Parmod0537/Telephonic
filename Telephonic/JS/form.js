// This is a external javscript file linked to form.php
const province = (e) => {
  const $select = document.querySelector('#province');
  var value = $select.value;
    if(value == "1"){
        document.getElementById("Ontario").style.display="inherit";   
        document.getElementById("Quebec").style.display="none";           
        document.getElementById("British").style.display="none";           
        document.getElementById("sasketcahwan").style.display="none";           
        document.getElementById("disable").style.display="none";
        
    }
    else if(value == "2"){
        document.getElementById("Ontario").style.display="none";   
        document.getElementById("Quebec").style.display="inherit";           
        document.getElementById("British").style.display="none";           
        document.getElementById("sasketcahwan").style.display="none";           
        document.getElementById("disable").style.display="none";
    }
    else if(value == "3"){
        document.getElementById("Ontario").style.display="none";   
        document.getElementById("Quebec").style.display="none";           
        document.getElementById("British").style.display="inherit";           
        document.getElementById("sasketcahwan").style.display="none";           
        document.getElementById("disable").style.display="none";
    }
    else if(value == "4"){
        document.getElementById("Ontario").style.display="none";   
        document.getElementById("Quebec").style.display="none";           
        document.getElementById("British").style.display="none";           
        document.getElementById("sasketcahwan").style.display="inherit";           
        document.getElementById("disable").style.display="none";
    }
};

 document.querySelector('#province').addEventListener('click', province);

