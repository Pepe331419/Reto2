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
    const numItems = document.querySelector("#numItems");
    const buttonsAddToCart = document.querySelectorAll(".addToCart");


    if (btnVar1) btnVar1.addEventListener("click", () => {
        if (mainImg.getAttribute("src") != "static/img/Comoda de madera - Madera clara.png") {
            mainImg.setAttribute("src", "static/img/Comoda de madera - Madera clara.png");
            mainImg.setAttribute("alt", "Cómoda de madera - Madera clara");
            if (!customCost.classList.contains("hidden")) customCost.classList.add("hidden");
            variantInput.value = "var1";
        }
    })

    if (btnVar2) btnVar2.addEventListener("click", () => {
        if (mainImg.getAttribute("src") != "static/img/Comoda de madera - Madera blanca.png") {
            mainImg.setAttribute("src", "static/img/Comoda de madera - Madera blanca.png");
            mainImg.setAttribute("alt", "Cómoda de madera - Madera blanca");
            if (customCost.classList.contains("hidden")) customCost.classList.remove("hidden");
            variantInput.value = "var2";
        }
    })

    if(btnVar3) btnVar3.addEventListener("click", () => {
        if (mainImg.getAttribute("src") != "static/img/Comoda de madera - Madera cerezo.png") {
            mainImg.setAttribute("src", "static/img/Comoda de madera - Madera cerezo.png");
            mainImg.setAttribute("alt", "Cómoda de madera - Madera cerezo");
            if (customCost.classList.contains("hidden")) customCost.classList.remove("hidden");
            variantInput.value = "var3";
        }
    })

    if(btnVar4) btnVar4.addEventListener("click", () => {
        if (mainImg.getAttribute("src") != "static/img/Comoda de madera - Madera oscura.png") {
            mainImg.setAttribute("src", "static/img/Comoda de madera - Madera oscura.png");
            mainImg.setAttribute("alt", "Cómoda de madera - Madera oscura");
            if (customCost.classList.contains("hidden")) customCost.classList.remove("hidden");
            variantInput.value = "var4";
        }
    })

    if(btnVar5) btnVar5.addEventListener("click", () => {
        if (mainImg.getAttribute("src") != "static/img/Comoda de madera - Madera negra.png") {
            mainImg.setAttribute("src", "static/img/Comoda de madera - Madera negra.png");
            mainImg.setAttribute("alt", "Cómoda de madera - Madera negra");
            if (customCost.classList.contains("hidden")) customCost.classList.remove("hidden");
            variantInput.value = "var5";
        }
    })

    if(btnVar6) btnVar6.addEventListener("click", () => {
        if (mainImg.getAttribute("src") != "static/img/Comoda de madera - Madera verde.png") {
            mainImg.setAttribute("src", "static/img/Comoda de madera - Madera verde.png");
            mainImg.setAttribute("alt", "Cómoda de madera - Madera verde");
            if (customCost.classList.contains("hidden")) customCost.classList.remove("hidden");
            variantInput.value = "var6";
        }
    })

    if(btnVar7) btnVar7.addEventListener("click", () => {
        if (mainImg.getAttribute("src") != "static/img/Comoda de madera - Madera azul.png") {
            mainImg.setAttribute("src", "static/img/Comoda de madera - Madera azul.png");
            mainImg.setAttribute("alt", "Cómoda de madera - Madera azul");
            if (customCost.classList.contains("hidden")) customCost.classList.remove("hidden");
            variantInput.value = "var7";
        }
    })

    if(btnVar8) btnVar8.addEventListener("click", () => {
        if (mainImg.getAttribute("src") != "static/img/Comoda de madera - Madera rosa.png") {
            mainImg.setAttribute("src", "static/img/Comoda de madera - Madera rosa.png");
            mainImg.setAttribute("alt", "Cómoda de madera - Madera rosa");
            if (customCost.classList.contains("hidden")) customCost.classList.remove("hidden");
            variantInput.value = "var8";
        }
    })

    if(btnAddItem) btnAddItem.addEventListener("click", () => {
        let currentNum = parseInt(numItems.textContent);
        currentNum+=1;
        numItems.textContent=currentNum;
        chooseDialog.showModal();
    })

    if(btnGoToList) btnGoToList.addEventListener("click", () =>{
        window.location.href="index.php";
    })

    if(buttonsAddToCart) buttonsAddToCart.forEach(button => {
        button.addEventListener("click", () => {
            let currentNum = parseInt(numItems.textContent);
            currentNum+=1;
            numItems.textContent=currentNum;
        })
    });
});

