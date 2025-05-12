let icone_olho=document.getElementById("olho");
let senha=document.getElementById("senha");



// pagar o icone olho


// evento de click
icone_olho.addEventListener("click",()=>{
    // muda o tipo de olho 
    if(icone_olho.classList.contains("bx-show")){
        icone_olho.classList.add("bx-hide");
        icone_olho.classList.remove("bx-show");
    }else{
        icone_olho.classList.add("bx-show");
        icone_olho.classList.remove("bx-hide");
    }
    
    // mudança de visulização do password
    if(senha.getAttribute("type") === "password"){
        senha.setAttribute("type","text");
    }else{
        senha.setAttribute("type","password");
    }
})
