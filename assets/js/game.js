/* function sayName(name) {
    return "Hello " + name;
}
console.log(sayName('Bertran'));
var name = prompt("Enter your name", "sale con !");
document.write("<br>" + sayName(name));

var personnage = {
    initEleve:function (name, classe, arme) {
        this.nom = name;
        this.classe = classe;
        this.arme = arme;
    },

    decrire : function () {
        let description = "Je m'appele " + this.nom +
            ", je suis un(e) " + this.classe +
            ", je me bat avec un(e) " + this.arme;
        return description
    }
};

var personnage1 = Object.create(personnage);
personnage1.initEleve('Moi', 'Barbare', 'Mertenzen');

var personnage2 = Object.create(personnage);
personnage2.initEleve('Clément', 'Prêtre', 'Morningstar et Bouclier');

var personnage3 = Object.create(personnage);
personnage3.initEleve('Yann', 'Stalker', 'Double dague');

var personnage4 = Object.create(personnage);
personnage4.initEleve('Rudy', 'Ranger', 'Recurved bow');

document.write( "<ul>" +
    "<li>" + personnage1.decrire() + "</li>" +
    "<li>" + personnage2.decrire() + "</li>" +
    "<li>" + personnage3.decrire() + "</li>" +
    "<li>" + personnage4.decrire() + "</li>" +
    "</ul>"
); */



window.onload=function() {
    canv=document.getElementById("gc");
    ctx=canv.getContext("2d");
    document.addEventListener("keydown",keyPush);
    setInterval(game,1000/15);
}
px=py=10;
gs=tc=20;
ax=ay=15;
xv=yv=0;
trail=[];
tail = 5;
function game() {
    px+=xv;
    py+=yv;
    if(px<0) {
        px= tc-1;
    }
    if(px>tc-1) {
        px= 0;
    }
    if(py<0) {
        py= tc-1;
    }
    if(py>tc-1) {
        py= 0;
    }
    ctx.fillStyle="black";
    ctx.fillRect(0,0,canv.width,canv.height);

    ctx.fillStyle="lime";
    for(var i=0;i<trail.length;i++) {
        ctx.fillRect(trail[i].x*gs,trail[i].y*gs,gs-2,gs-2);
        if(trail[i].x==px && trail[i].y==py) {
            tail = 5;
        }
    }
    trail.push({x:px,y:py});
    while(trail.length>tail) {
        trail.shift();
    }

    if(ax==px && ay==py) {
        tail++;
        ax=Math.floor(Math.random()*tc);
        ay=Math.floor(Math.random()*tc);
    }
    ctx.fillStyle="red";
    ctx.fillRect(ax*gs,ay*gs,gs-2,gs-2);
}
function keyPush(evt) {
    switch(evt.keyCode) {
        case 37:
            xv=-1;yv=0;
            break;
        case 38:
            xv=0;yv=-1;
            break;
        case 39:
            xv=1;yv=0;
            break;
        case 40:
            xv=0;yv=1;
            break;
    }
}

