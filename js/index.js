function changeBg (){
    var navbar = document.getElementById("navbar");
    var btn = document.getElementById("btn");
    var scrollValue = window.scrollY;
    var night = document.getElementById("nightA");

    if(scrollValue > 1){
        navbar.classList.add("bgColor");
        btn.classList.add("white_button");
        btn.classList.remove("btn1");
        night.classList.add("black");
        night.classList.remove("white");
        
        
    }
    else{
        navbar.classList.remove("bgColor");
        btn.classList.remove("white_button");
        btn.classList.add("btn1");
        night.classList.remove("black");
        night.classList.add("white");
    }

}

window.addEventListener("scroll", changeBg);


const button = document.getElementById("night");
