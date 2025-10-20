function mostrarBotonesRegistro(e) {
    if (e.target.nextElementSibling.style.display == "block") {
        e.target.nextElementSibling.style.display = "none"
    }else{
        e.target.nextElementSibling.style.display = "block"
    }


    
}