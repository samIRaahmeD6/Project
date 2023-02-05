 const passfield = document.querySelector("form div.holder input[type='password']"),
toggleBtn = document.querySelector("form div.holder i");
toggleBtn.onclick = ()=>{
    if(passfield.type == "password"){
        passfield.type = "text";
        toggleBtn.classList.add("active");
    }
    else{
        passfield.type = "password";
        toggleBtn.classList.remove("active");
    }
}