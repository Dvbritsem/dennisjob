let tagknop = document.getElementById("tagknop");

let ir = document.getElementById("irverbinding");
let ir2 = document.getElementById("irverbinding2");

let allesuit = document.getElementById("alles-uit");
let rooduit = document.getElementById("rood-uit");
let groenuit = document.getElementById("groen-uit");
let blauwuit = document.getElementById("blauw-uit");
let roodaan = document.getElementById("rood-aan");
let groenaan = document.getElementById("groen-aan");
let blauwaan = document.getElementById("blauw-aan");

let aan = document.getElementById("aan");
let uit = document.getElementById("uit");
let rood = document.getElementById("rood");
let groen = document.getElementById("groen");
let blauw = document.getElementById("blauw");

tagknop.onclick = function(){
    irsend();
}

function irsend() {
    ir.style.display = "flex";
    tagknop.disabled = true;
    setTimeout("irrecieve()", 2000);
}
function irrecieve() {
    ir.style.display = "none";
    ir2.style.display = "flex";
    setTimeout("action()", 2000);
}
function action() {
    ir2.style.display = "none";
    blauwaan.style.display = "none";
    roodaan.style.display = "none";
    groenaan.style.display = "none";
    blauwuit.style.display = "none";
    rooduit.style.display = "none";
    groenuit.style.display = "none";

        if (aan.checked && rood.checked) {
            allesuit.style.display = "none";
            roodaan.style.display = "flex";
        }
        else if (aan.checked && groen.checked) {
            allesuit.style.display = "none";
            groenaan.style.display = "flex";
        }
        else if (aan.checked && blauw.checked) {
            allesuit.style.display = "none";
            blauwaan.style.display = "flex";
        }

        else if (uit.checked && rood.checked) {
            allesuit.style.display = "none";
            rooduit.style.display = "flex";
        }
        else if (uit.checked && groen.checked) {
            allesuit.style.display = "none";
            groenuit.style.display = "flex";
        }
        else if (uit.checked && blauw.checked) {
            allesuit.style.display = "none";
            blauwuit.style.display = "flex";
        }
    
    tagknop.disabled = false;
}