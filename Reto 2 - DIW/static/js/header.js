//TODO: Agrupar elementos del header con resoluciones límites
document.addEventListener("DOMContentLoaded", function () {

    const btnBusqueda = document.querySelector("#btnBusqueda");
    const menuBusqueda = document.querySelector("#menuBusqueda");

    const lgndMuebles = document.querySelector("#lgndMuebles");
    const fldstMuebles = document.querySelector("#fldstMuebles");
    const divMuebles = fldstMuebles.querySelectorAll(".divMuebles");

    const lgndModa = document.querySelector("#lgndModa");
    const fldstModa = document.querySelector("#fldstModa");
    const divModa = fldstModa.querySelectorAll(".divModa");

    const lgndInterior = document.querySelector("#lgndInterior");
    const fldstInterior = document.querySelector("#fldstInterior");
    const divInterior = fldstInterior.querySelectorAll(".divInterior");

    const lgndPrecio = document.querySelector("#lgndPrecio");
    const fldstPrecio = document.querySelector("#fldstPrecio");
    const divPrecio = fldstPrecio.querySelectorAll(".divPrecio");

    

    if (btnBusqueda) btnBusqueda.addEventListener("click", ()=>{
        menuBusqueda.classList.toggle("reveal");
    })
    

    lgndMuebles.addEventListener("click", () => {
        lgndMuebles.textContent == "Muebles ▶" ? lgndMuebles.textContent = "Muebles ▼" : lgndMuebles.textContent = "Muebles ▶";
        divMuebles.forEach((div) =>{
            div.classList.toggle("hidden");
        })
    })

    lgndModa.addEventListener("click", () => {
        lgndModa.textContent == "Moda ▶" ? lgndModa.textContent = "Moda ▼" : lgndModa.textContent = "Moda ▶";
        divModa.forEach((div) =>{
            div.classList.toggle("hidden");
        })
    })

    lgndInterior.addEventListener("click", () => {
        lgndInterior.textContent == "Interior ▶" ? lgndInterior.textContent = "Interior ▼" : lgndInterior.textContent = "Interior ▶";
        divInterior.forEach((div) =>{
            div.classList.toggle("hidden");
        })
    })

    lgndPrecio.addEventListener("click", () => {
        lgndPrecio.textContent == "Precio ▶" ? lgndPrecio.textContent = "Precio ▼" : lgndPrecio.textContent = "Precio ▶";
        divPrecio.forEach((div) =>{
            div.classList.toggle("hidden");
        })
    })

})
