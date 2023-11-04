const user_id = document.querySelector('.outgoingmessage').innerHTML;
const client_id = document.querySelector('.incomingmessage').innerHTML;
const chats = document.querySelector('.chat');
let myform =document.querySelector('.form');
const field =document.querySelector('.txtf');

if(user_id==client_id){
    location.href="../html/chats.php";
}
let intavales =setInterval(()=>{
    xmr =new XMLHttpRequest();
    xmr.open("POST","../php/chatting.php",true);
    xmr.onload =()=>{
        if(xmr.readyState === XMLHttpRequest.DONE){
            if(xmr.status == 200){
                let data =xmr.response;
                chats.innerHTML=data;
            }
        }
    }
    xmr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmr.send('user='+user_id+'&client='+client_id);
},500);

setTimeout(()=>{
    document.querySelector('.chat').scrollTop = document.querySelector('.chat').scrollHeight+20;
},1000);

myform.addEventListener('submit',(e)=>{
    e.preventDefault();
    xmr =new XMLHttpRequest();
    xmr.open("POST","../php/sendmessage.php",true);
    xmr.onload =()=>{
        if(xmr.readyState === XMLHttpRequest.DONE){
            if(xmr.status == 200){
                setTimeout(()=>{
                    document.querySelector('.chat').scrollTop = document.querySelector('.chat').scrollHeight+20;
                },1000);
                field.value ="";
            }
        }
    }
    let formData = new FormData(myform);
    xmr.send(formData);
});