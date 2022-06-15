const botao = document.querySelector("nav h2")
const linksMenu = document.querySelector(".links-menu")
const icone = document.querySelector("#icons")
botao.addEventListener("click", function(event){  
    event.preventDefault();  
    linksMenu.classList.toggle("aberto");

    if ( linksMenu.classList.contains("aberto")) {
        icone.innerHTML = "<i class='fa fa-times' style='color:orange'></i>";
    } else {
        icone.innerHTML = "<i class='fa fa-bars' style='color:black'></i>";
    }

});