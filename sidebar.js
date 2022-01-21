const open_sidebar = () => {
    Event.preventDefault();
    document.getElementById("overlay").style.display = "block";
    setTimeout(() => { document.getElementById("sidebar").style.transform = "translateX(0px)"; }, 100)
    setTimeout(() => { document.getElementById("overlay").style.opacity = "0.4"; }, 50);
    document.getElementsByTagName("body")[0].classList.add("stopScroll");
}

const close_sidebar = () => {
    document.getElementById("sidebar").style.transform = "translateX(290px)";
    document.getElementById("overlay").style.opacity = "0";
    setTimeout(() => { document.getElementById("overlay").style.display = "none" }, 400);
    document.getElementsByTagName("body")[0].classList.remove("stopScroll");
}