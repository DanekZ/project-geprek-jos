const navbarNav = document.querySelector(".navbar-nav")

// ketika ikon hamburger menu di klik
document.querySelector("#hamburger-menu").onclick = () =>{
    navbarNav.classList.toggle("active")
}


// fitur klik dimana saja untuk menghilangkan nav-side
const hamburger = document.querySelector("#hamburger-menu")

document.addEventListener("click",function(e){
    if(!hamburger.contains(e.target) && !navbarNav.contains(e.target)){
        navbarNav.classList.remove("active");
    }
});





