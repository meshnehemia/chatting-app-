const users = document.querySelector('.userlist');
setInterval(()=>{
    xmr =new XMLHttpRequest();
    xmr.open("GET","../php/listofusers.php",true);
    xmr.onload =()=>{
        if(xmr.readyState === XMLHttpRequest.DONE){
            if(xmr.status == 200){
                let data =xmr.response;
                users.innerHTML=data;
            }
        }
    }
    xmr.send();
},500);


