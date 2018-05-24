function getXMLHttpRequest() {
    let yolo;
    if (window.XMLHttpRequest || window.ActiveXObject) {
        if (window.ActiveXObject) {
            try {
                yolo = new ActiveXObject("Msxm12.XMLHTTP");
            }
            catch (e) {
                yolo = new ActiveXObject("Microsoft.XMLHTTP");
            }
        }
        else {
            yolo = new XMLHttpRequest();
        }
        return yolo
    }
    else {
        //alert("Môrche pô");
        return false;
    }
}

function getLength(arr) {
    let length = 0;
    for(let index in arr){
        if(arr.hasOwnProperty(index)) {length++;}
    }
    return length;
}

/**
 * @param idForm string
 * @returns {Array}
 */
function ExtractFormData(idForm) {
    let form = document.getElementById(idForm);
    let formData = [];
    //parcours le formulaire et pousse les donnés dans un tableau
    for (let i = 0; i < form.length; i++) {
        let oldLength = getLength(formData);
        formData[form.elements[i].name] = form.elements[i].value;
        let newLength = getLength(formData);
        //teste si le tableau n'à pas changer pour couper la boucle
        if (newLength === oldLength) {
            break;
        }
    }
    return formData;
}

function testStorage() {
    let formData = ExtractFormData('form');
    for (let index in formData) {
        sessionStorage.setItem(index, formData[index])
    }
}

function getFromStorage(index) {
    return sessionStorage.getItem(index);
}