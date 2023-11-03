const form = document.getElementById('myform');
const loading =document.querySelector('.loading');
const message = document.querySelector('.error-text');
loading.classList.remove('loading');
form.addEventListener('submit',(e)=>{
    e.preventDefault();
    loading.classList.add('loading');
    let xml = new XMLHttpRequest();
    xml.open("POST",'../php/login.php',true)
    xml.onload =()=>{
        if(xml.readyState === XMLHttpRequest.DONE){
            loading.classList.remove('loading');
            if(xml.status === 200){
                let data =xml.response;
                if(data =="successfully"){
                    message.classList.remove('bg-warning');
                    message.classList.add('success');
                    message.innerHTML="you have logged in " + data;
                    setTimeout(function() {location.href = "../html/chats.php"; }, 2000);
                }else{
                    message.classList.add('bg-warning');
                    message.classList.remove('success');
                    message.innerHTML =data;
                }
            }
        }
    }
    let formData =new FormData(form);
    xml.send(formData);
})