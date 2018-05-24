var toto = {
    "couleur" : "rouge",
    "taille" : 22
};

//document.write(toto.couleur);
//document.write(toto["taille"]);

//prende la dernière et considère undefined comme value
var x = toto.couleur && toto.taille;
document.write(x);
console.log(toto.couleur);
console.log(toto.taille);

if (typeof Object.create !== 'function') {
    Object.create = function(truc) {
        var F = function() {};
        F.prototype = truc;
        return new F();
    };
}
typeof toto.taille.toString(); // 'function'
typeof toto.constructor(); // 'function'
toto.hasOwnProperty('couleur'); // true
toto.hasOwnProperty('constructor'); // false

var turtle = "coucou";
function tamere() {
    alert(turtle)
}
//tamere();

let superVariable = {}; // "simule" des namespaces
superVariable.toto = {
    'taille' : 30
};

function Car(modele) {
    this.model = modele;
}
let tuning = new Car(206);
Car.prototype.demarrer = function () {
    alert("Ma " + this.model + " fait Vroum !")
};
Car.prototype.roues = true;
function VoitureTuning() {
    Voiture.apply(this);
}
tuning.demarrer();

function calculerInterer() {
    let form = document.getElementById('form-interer');

    let formData = [];
    //parcours le formulaire et pousse les donnés dans un tableau
    for (let i = 0; i < form.length; i++) {
        let oldArray = formData.length;
        let newArray = formData.push(form.elements[i].value);
        //teste si le tableau a changer pour couper la boucle
        if (newArray === oldArray) {
            break;
        }
    }
    formData[2] = formData[2]/100 ;

    let numerateur = (formData[0] * formData[2]/12);

    let denominateur = 1 - Math.pow(1 + formData[2] / 12, -(formData[1]));

    let mensualiter = numerateur/denominateur;
    alert(mensualiter);
}


