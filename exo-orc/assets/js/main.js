
let attack = document.getElementById("attack");

attack.onclick = function (e) {
    e.preventDefault();
    let imgManip = document.getElementById("hero");
    let imgManip2 = document.getElementById("hero2");
    let imgManip3 = document.getElementById("hero3");

    if (imgManip.src.match("hero")) {
        
        imgManip.src = "assets/img/attack.gif";
    } else {
        imgManip.src = "assets/img/hero.gif";
    }

    if (imgManip3.src.match("gun")) {
        
        imgManip3.src = "assets/img/shoot.gif";
    } else {
        imgManip3.src = "assets/img/gun.gif";
    }
}