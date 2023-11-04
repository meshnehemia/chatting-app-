const users = document.querySelector('.userlist');
// const search =document.querySelector('.searchbtn');
const form = document.querySelector('.form');
const searchfield =document.querySelector('.searchfield');
let intavales =setInterval(()=>{
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

searchfield.addEventListener('keyup',(event)=>{
    clearInterval(intavales);
    let message = document.querySelector('.searchfield').value;
    xmr =new XMLHttpRequest();
    xmr.open("POST","../php/searchuser.php",true);
    xmr.onload =()=>{
        if(xmr.readyState === XMLHttpRequest.DONE){
            if(xmr.status == 200){
                let data =xmr.response;
                users.innerHTML=data;
            }
        }
    }
    xmr.setRequestHeader ("Content-type", "application/x-www-form-urlencoded");
    xmr.send('srch='+message);
    if(message==""){
        intavales =setInterval(()=>{
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
        
    }
})


