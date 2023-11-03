setInterval(()=>{
    xmr =new XMLHttpRequest();
    xmr.open("GET","../html/chatting.php",true);
    xmr.send();
},500);