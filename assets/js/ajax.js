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

let toto = getXMLHttpRequest();
toto.onreadystatechange = function() {
    toto.timeout = 7000;
    console.log(toto.readyState);
    console.log(toto.status);

    if (toto.readyState === 4 && toto.status === 200) {
        let reponce = toto.response;
        let text = document.getElementById("reponce");
        text.innerHTML = reponce;
        console.log(toto.response);

    }
};

toto.ontimeout = function(e) {
    
};

toto.open("HEAD", "jesuiscon.fr/?toto=12", true);
toto.send(null);