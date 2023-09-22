document.addEventListener("click", e =>{
    const isDropdownButton = e.target.matches("[data-dropdown-button]")
    if(!isDropdownButton && e.target.closest("[data-dropdown]") != null) return

    let currentDropdown
    if(isDropdownButton){
        currentDropdown = e.target.closest("[ data-dropdown]")
        currentDropdown.classList.toggle("active")
    }
    
    document.querySelectorAll("[data-dropdown].active").forEach(dropdown => {
        if(dropdown === currentDropdown) return
        dropdown.classList.remove("active")
        title.style.margin="auto";
    })
}); 


const buttonMenu = document.querySelector('.button__menu');
const header = document.querySelector('.header');
const headerLayout = document.querySelector('.header__layout');
const title = document.querySelector(".title");
const Menubutton = document.querySelector(".menu__button");
buttonMenu.onclick = function(){
    header.classList.toggle('header__is_open');
    if(Menubutton.classList.contains("fa-bars")){
        Menubutton.classList.remove("fa-bars");
        Menubutton.classList.add("fa-xmark");
        title.style.margin="0";
    }
    else if(Menubutton.classList.contains("fa-xmark")){
        Menubutton.classList.remove("fa-xmark");
        Menubutton.classList.add("fa-bars");
        title.style.margin="90px 0";
    }
}