function loginclick(){
    let logintag = document.getElementById("loginscreen");
    logintag.style.display="flex";
}

function closelogin(){
    let logintag = document.getElementById("loginscreen");
    logintag.style.display="none";
    // bodytag.style.opacity="1";   
}

function choice(a){
    let choice = document.getElementsByClassName("lrchoice");
    let lform = document.getElementsByClassName("lform");
    let rform = document.getElementsByClassName("rform");
    choice[1].className=choice[1].className.replace(" lractive","");
    choice[0].className=choice[0].className.replace(" lractive","");
    lform[0].style.display = "none";
    rform[0].style.display = "none";
    if(a==1){
        choice[0].className+=" lractive";
        lform[0].style.display = "flex";
    }
    else{
        choice[1].className+=" lractive";
        rform[0].style.display = "flex";
    }
}
