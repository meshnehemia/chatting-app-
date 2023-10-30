// const form = document.getElementById('myform');
// form.addEventListener('submit',(e)=>{
//     e.preventDefault();
//     let xml = new XMLHttpRequest();
//     xml.open("POST",'../php/login.php',true)
//     xml.onload =()=>{
//         if(xml.readyState === XMLHttpRequest.DONE){
//             if(xml.status === 200){
//                 let data =xml.response;
//                 alert(data);
//             }
//         }
//     }
//     let formData = new formData(form);
//     xml.send(formData);
// })