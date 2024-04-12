const formOpenBtn = document.querySelector("#form-open"),
    home  = document.querySelector(".home"),
    formContainer = document.querySelector(".form-container"),
    formCloseBtn = document.querySelector(".form-close"),
    signupBtn = document.querySelector("#signup"),
    loginBtn = document.querySelector("#login");

    formOpenBtn.addEventListener("click", () => home.classList.add("show"));
    formCloseBtn.addEventListener("click", () => home.classList.remove("show"));

    signupBtn.addEventListener("click",(e) =>{
        e.preventDefault();
        formContainer.classList.add("active");
    })
    loginBtn.addEventListener("click",(e) =>{
        e.preventDefault();
        formContainer.classList.remove("active");
    })