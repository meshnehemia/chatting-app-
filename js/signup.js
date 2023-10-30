const form = document.getElementById('Form');
form.addEventListener('submit',(e)=>{
    e.preventDefault();
    let xml = new XMLHttpRequest();
    xml.open("POST",'../php/signup.php',true)
    xml.onreadystatechange =()=> {
        if (xml.readyState === XMLHttpRequest.DONE) {
            if (xml.status === 200) {
                let data = xml.response;
                console.log("the data",data);
            }
        }
    }
    let formData = new FormData(form);
    xml.send(formData);

});