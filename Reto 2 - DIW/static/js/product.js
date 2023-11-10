document.addEventListener("DOMContentLoaded", function () {
    const mainImg = document.querySelector("#mainImg");
    const btnVar1 = document.querySelector("#btnVar1");
    const btnVar2 = document.querySelector("#btnVar2");
    const btnVar3 = document.querySelector("#btnVar3");
    const btnVar4 = document.querySelector("#btnVar4");
    const btnVar5 = document.querySelector("#btnVar5");
    const btnVar6 = document.querySelector("#btnVar6");
    const btnVar7 = document.querySelector("#btnVar7");
    const btnVar8 = document.querySelector("#btnVar8");


    btnVar1.addEventListener("click", () => {
        if (mainImg.getAttribute("src") != "static/img/Comoda de madera - Madera clara.png") {
            mainImg.setAttribute("src", "static/img/Comoda de madera - Madera clara.png");
            mainImg.setAttribute("alt", "Cómoda de madera - Madera clara");
        }
    })

    btnVar2.addEventListener("click", () => {
        if (mainImg.getAttribute("src") != "static/img/Comoda de madera - Madera blanca.png") {
            mainImg.setAttribute("src", "static/img/Comoda de madera - Madera blanca.png");
            mainImg.setAttribute("alt", "Cómoda de madera - Madera blanca");
        }
    })

    btnVar3.addEventListener("click", () => {
        if (mainImg.getAttribute("src") != "static/img/Comoda de madera - Madera cerezo.png") {
            mainImg.setAttribute("src", "static/img/Comoda de madera - Madera cerezo.png");
            mainImg.setAttribute("alt", "Cómoda de madera - Madera cerezo");
        }
    })

    btnVar4.addEventListener("click", () => {
        if (mainImg.getAttribute("src") != "static/img/Comoda de madera - Madera oscura.png") {
            mainImg.setAttribute("src", "static/img/Comoda de madera - Madera oscura.png");
            mainImg.setAttribute("alt", "Cómoda de madera - Madera oscura");
        }
    })

    btnVar5.addEventListener("click", () => {
        if (mainImg.getAttribute("src") != "static/img/Comoda de madera - Madera negra.png") {
            mainImg.setAttribute("src", "static/img/Comoda de madera - Madera negra.png");
            mainImg.setAttribute("alt", "Cómoda de madera - Madera negra");
        }
    })

    btnVar6.addEventListener("click", () => {
        if (mainImg.getAttribute("src") != "static/img/Comoda de madera - Madera verde.png") {
            mainImg.setAttribute("src", "static/img/Comoda de madera - Madera verde.png");
            mainImg.setAttribute("alt", "Cómoda de madera - Madera verde");
        }
    })

    btnVar7.addEventListener("click", () => {
        if (mainImg.getAttribute("src") != "static/img/Comoda de madera - Madera azul.png") {
            mainImg.setAttribute("src", "static/img/Comoda de madera - Madera azul.png");
            mainImg.setAttribute("alt", "Cómoda de madera - Madera azul");
        }
    })

    btnVar8.addEventListener("click", () => {
        if (mainImg.getAttribute("src") != "static/img/Comoda de madera - Madera rosa.png") {
            mainImg.setAttribute("src", "static/img/Comoda de madera - Madera rosa.png");
            mainImg.setAttribute("alt", "Cómoda de madera - Madera rosa");
        }
    })
});

