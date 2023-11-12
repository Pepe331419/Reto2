document.addEventListener("DOMContentLoaded", function () {

    const btnForgotPassword = document.querySelector("#btnForgotPassword");
    const recoverPassword = document.querySelector("#recoverPassword");

    btnForgotPassword.addEventListener("click",()=>{
        recoverPassword.classList.remove("hidden");
    })

})