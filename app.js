const form = document.getElementById("calc-form");
const msg = document.getElementById("error-msg");
const res = document.getElementById("resultat");
const historiqueList = document.getElementById("historique");

let historique = [];

form.addEventListener("submit", function (e) {
    e.preventDefault();

    msg.textContent = "";
    res.textContent = "";

    const A = document.getElementById("nombreA").value.trim();
    const B = document.getElementById("nombreB").value.trim();
    const op = document.getElementById("operation").value;

    // VALIDATION
    if (A === "" || B === "") {
        msg.textContent = "Veuillez remplir tous les champs.";
        return;
    }

    if (op === "/" && Number(B) === 0) {
        msg.textContent = "Impossible de diviser par zéro.";
        return;
    }

    // CALCUL
    const resultat = eval(`${A} ${op} ${B}`);
    res.textContent = `Résultat : ${resultat}`;

    // AJOUT À L'HISTORIQUE
    const ligne = `${A} ${op} ${B} = ${resultat}`;
    historique.push(ligne);

    afficherHistorique();
});

function afficherHistorique() {
    historiqueList.innerHTML = "";
    historique.slice().reverse().forEach(item => {
        let li = document.createElement("li");
        li.textContent = item;
        historiqueList.appendChild(li);
    });
}
