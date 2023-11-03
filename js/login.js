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
                message.innerHTML =data;
            }
        }
    }
    let formData =new FormData(form);
    xml.send(formData);
})