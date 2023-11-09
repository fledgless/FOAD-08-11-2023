// let regions = [
//     "centre-val-de-loire",
//     "hauts-de-france",
//     "bretagne",
//     "normandie",
//     "grand-est",
//     "pays de-la-loire",
//     "ile-de-france",
//     "nouvelle-aquitaine",
//     "auvergne-rhone-alpes",
//     "bourgogne-franche-comte",
//     "occitanie",
//     "provence-alpes-cote-dazur",
//     "guadeloupe",
//     "martinique",
//     "mayotte",
//     "la-reunion",
//     "corse",
// ];

// document.querySelector("map").addEventListener("click", (e) => {
//     e.preventDefault();
//     let popup = document.querySelector(".list");
//     popup.classList.toggle("show");
// });

// document.querySelector("select").addEventListener("change", (e) => {
//     let dataId = document.querySelector("area").getAttribute("data-id");
//     optionChoisi = e.target.value;
//     regions.forEach(element => {
//         if (optionChoisi === dataId) {
//             console.log("bonne réponse !");
//         } else {
//             console.log("mauvaise réponse !");
//         }
//     })
// });

let regions = document.querySelectorAll("area");
console.log(regions);

let select = document.querySelector("select");
regions.forEach((area) => {
    let option = document.createElement("option");
    option.value = area.getAttribute("alt");
    option.text = area.getAttribute("alt");
    select.add(option);
    area.addEventListener("click", () => {
        let favDialog = document.querySelector("#favDialog");
        favDialog.showModal();
        let form = document.querySelector("form");
        form.addEventListener("submit", (e) => {
            console.log(e.target[0].value);
        });
    });
});