

const formLogin =  document.querySelector('#formLogin');
formLogin.addEventListener('submit', (e) =>{
    e.preventDefault();

    const datosForm = new FormData(formLogin);

    fetch('login.php',{
        method:"POST",
        body: datosForm
    })
        .then(resp => resp.text())
        .then(data => {
            alert(data);
    })
})