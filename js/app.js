//=================
//ランダム位置に流れ星
//=================
const star = document.querySelector(".star");


function random_star() {
    star.style.top = Math.floor(Math.random() * window.innerWidth) + 1 + "px";
    star.style.left = Math.floor(Math.random() * window.innerHeight) + 1 + "px";
}

setInterval(random_star, 800);



