const errorfield =document.querySelector('.error-text');
const submitbutton =document.querySelector('.sbn');
errorfield.style.display='none';
submitbutton.addEventListener('click',(event)=>{
    event.preventDefault();
    errorfield.style.display='block';
});
