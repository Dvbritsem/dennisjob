//Defines the ID of the text to a variable//
const StatusText = document.getElementById('Status');

//Set the default value//
StatusText.innerText = 'Laat de bloemen groeien door op de knop te drukken.';
let Status = 0;

//Checks if the control button is pressed//
document.getElementById("button")
.addEventListener("click", FlowerStatus);

//Checks if it is night time//
let d = new Date();
let t = d.getHours();

//Updates status of the flower on the website//
function FlowerStatus() {
    if (Status === 1) {
        StatusText.innerHTML = 'Bloemen zijn al gegroeid.';
    }
    else {
        if (t >= 23 || t <= 6) {
            StatusText.innerHTML = 'De bloemen kunnen in de nacht niet groeien.';
        } else {
            StatusText.innerHTML = 'Bloemen zijn gegroeid.';
            //FlowerMoveFunction(Grow);
            Status = 1;
            FlowerFact();
        }
    }
}

function FlowerFact() {
    //List of facts//
        const FlowerFacts =
            [
                "Rozen zijn verwant aan appels, frambozen, kersen, perziken, pruimen, nectarines, peren en amandelen.",
                "Tulpenbollen waren in de jaren 1600 in Nederland waardevoller dan goud.",
                "Bijna 60 procent van de in de Verenigde Staten geteelde verse snijbloemen komt uit Californië.",
                "Honderden jaren geleden, toen de Vikingen Schotland binnenvielen, werden ze afgeremd door stukken wilde distel, waardoor de Schotten de tijd kregen om te ontsnappen. Hierdoor werd de wilde distel de nationale bloem van Schotland genoemd.",
                "Het sap van klokjesbloemen werd van oudsher gebruikt om lijm te maken.",
                "Zonnebloemen bewegen de hele dag als reactie op de beweging van de zon van oost naar west.",
                "Maanbloemen bloeien alleen 's nachts en sluiten overdag.",
                "Tijdens de middeleeuwen dacht men dat de mantel van de vrouw magische genezende eigenschappen had.",
                "Toen de mormoonse pioniers in de Salt Lake Valley arriveerden, leefden ze van de wortels van de Sego Lily Plant. Deze plant is de staatsbloem van Utah.",
                "Angelica werd honderden jaren in Europa gebruikt als een remedie voor alles, van de builenpest tot indigestie. Er werd gedacht dat het boze geesten zou afweren."
            ];

    //Chooses a random fact from the list//
        const RandomFact = FlowerFacts[Math.floor(Math.random() * FlowerFacts.length)];

        document.getElementById('Fact').innerHTML = RandomFact;
}