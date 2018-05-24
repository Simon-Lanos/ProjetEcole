window.onload=function() {
    canv = document.getElementById("demoCanvas");
    context = canv.getContext("2d");
    document.addEventListener("keydown", keyPush);
    setInterval(jeu, 1000 / 15);
};

let playerPosX = 230;
let playerPosY = 270;
let playerHeight = 20;
let playerWidth = 40;
let xVelocity = 0;
let bullets = [];

let shoot = false;
function Bullet() {
    this.move = function () {
        this.posY = this.posY + this.velocity;
        context.fillStyle="red";
        context.fillRect(this.posX, this.posY, this.width, this.height);
    };
    this.posX = playerPosX + playerWidth/2;
    this.posY = playerPosY - playerHeight/2;
    this.velocity = 20;
    this.height = 20;
    this.width = 10;
}

function jeu() {
    context.fillStyle="black";
    context.fillRect(0,0,canv.width,canv.height);

    context.fillStyle="lime";
    context.fillRect(playerPosX, playerPosY, playerWidth, playerHeight);

    playerPosX += xVelocity;
    xVelocity = 0;
    if (shoot) {
        let bullet = new Bullet;
        bullets.push(bullet);
    }
    for (let i = 0; i < bullets.length; i++) {
        bullets[i].move();
    }
}

function keyPush(evt) {
    switch(evt.keyCode) {
        case 37:
            xVelocity = -10;
            break;
        case 39:
            xVelocity = 10;
            break;
        case 38:
            shoot = true
    }
}
