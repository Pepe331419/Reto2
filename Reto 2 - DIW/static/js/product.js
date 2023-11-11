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
    const variantInput = document.querySelector("#variantInput");
    const customCost = document.querySelector("#customCost");
    const chooseDialog = document.querySelector("#chooseDialog");
    const btnAddItem = document.querySelector("#btnAddItem");
    const btnGoToList = document.querySelector("#btnGoToList");


    btnVar1.addEventListener("click", () => {
        if (mainImg.getAttribute("src") != "static/img/Comoda de madera - Madera clara.png") {
            mainImg.setAttribute("src", "static/img/Comoda de madera - Madera clara.png");
            mainImg.setAttribute("alt", "Cómoda de madera - Madera clara");
            if (!customCost.classList.contains("hidden")) customCost.classList.add("hidden");
            variantInput.value = "var1";
        }
    })

    btnVar2.addEventListener("click", () => {
        if (mainImg.getAttribute("src") != "static/img/Comoda de madera - Madera blanca.png") {
            mainImg.setAttribute("src", "static/img/Comoda de madera - Madera blanca.png");
            mainImg.setAttribute("alt", "Cómoda de madera - Madera blanca");
            if (customCost.classList.contains("hidden")) customCost.classList.remove("hidden");
            variantInput.value = "var2";
        }
    })

    btnVar3.addEventListener("click", () => {
        if (mainImg.getAttribute("src") != "static/img/Comoda de madera - Madera cerezo.png") {
            mainImg.setAttribute("src", "static/img/Comoda de madera - Madera cerezo.png");
            mainImg.setAttribute("alt", "Cómoda de madera - Madera cerezo");
            if (customCost.classList.contains("hidden")) customCost.classList.remove("hidden");
            variantInput.value = "var3";
        }
    })

    btnVar4.addEventListener("click", () => {
        if (mainImg.getAttribute("src") != "static/img/Comoda de madera - Madera oscura.png") {
            mainImg.setAttribute("src", "static/img/Comoda de madera - Madera oscura.png");
            mainImg.setAttribute("alt", "Cómoda de madera - Madera oscura");
            if (customCost.classList.contains("hidden")) customCost.classList.remove("hidden");
            variantInput.value = "var4";
        }
    })

    btnVar5.addEventListener("click", () => {
        if (mainImg.getAttribute("src") != "static/img/Comoda de madera - Madera negra.png") {
            mainImg.setAttribute("src", "static/img/Comoda de madera - Madera negra.png");
            mainImg.setAttribute("alt", "Cómoda de madera - Madera negra");
            if (customCost.classList.contains("hidden")) customCost.classList.remove("hidden");
            variantInput.value = "var5";
        }
    })

    btnVar6.addEventListener("click", () => {
        if (mainImg.getAttribute("src") != "static/img/Comoda de madera - Madera verde.png") {
            mainImg.setAttribute("src", "static/img/Comoda de madera - Madera verde.png");
            mainImg.setAttribute("alt", "Cómoda de madera - Madera verde");
            if (customCost.classList.contains("hidden")) customCost.classList.remove("hidden");
            variantInput.value = "var6";
        }
    })

    btnVar7.addEventListener("click", () => {
        if (mainImg.getAttribute("src") != "static/img/Comoda de madera - Madera azul.png") {
            mainImg.setAttribute("src", "static/img/Comoda de madera - Madera azul.png");
            mainImg.setAttribute("alt", "Cómoda de madera - Madera azul");
            if (customCost.classList.contains("hidden")) customCost.classList.remove("hidden");
            variantInput.value = "var7";
        }
    })

    btnVar8.addEventListener("click", () => {
        if (mainImg.getAttribute("src") != "static/img/Comoda de madera - Madera rosa.png") {
            mainImg.setAttribute("src", "static/img/Comoda de madera - Madera rosa.png");
            mainImg.setAttribute("alt", "Cómoda de madera - Madera rosa");
            if (customCost.classList.contains("hidden")) customCost.classList.remove("hidden");
            variantInput.value = "var8";
        }
    })

    btnAddItem.addEventListener("click", () => {
        chooseDialog.showModal();
    })

    btnGoToList.addEventListener("click", () =>{
        window.location.href="carrito.php";
    })
});

