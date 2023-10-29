const showhidepassword = document.querySelector('.shp');
const passwordInput =document.querySelector('#password');
showhidepassword.onclick = () => {
    if(passwordInput.type==='password'){
        passwordInput.type ='text';
        showhidepassword.classList.add('fa-eye-dropper');
        showhidepassword.classList.remove('fa-eye');
    }else{
        passwordInput.type='password';
        showhidepassword.classList.remove('fa-eye-dropper');
        showhidepassword.classList.add('fa-eye');
    }
}