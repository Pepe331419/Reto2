document.addEventListener("DOMContentLoaded", function () {
    const buttonsEditar = document.querySelectorAll(".editar");
    const buttonsEliminar = document.querySelectorAll(".eliminar");
    const eliminateDialog = document.querySelector("#eliminateDialog");
    const btnCancelElim = document.querySelector("#btnCancelElim");
    const editDialog = document.querySelector("#editDialog");
    const btnCancelEdit = document.querySelector("#btnCancelEdit");

    if (buttonsEditar) buttonsEditar.forEach(button => {
        button.addEventListener("click", () => {
            editDialog.showModal();
        })
    });

    if (buttonsEliminar) buttonsEliminar.forEach(button => {
        button.addEventListener("click", () => {
            eliminateDialog.showModal();
        })
    });

    if (btnCancelElim) btnCancelElim.addEventListener("click", () =>{
        eliminateDialog.close();
    })

    if(btnCancelEdit) btnCancelEdit.addEventListener("click", () =>{
        console.log("cerrando");
        editDialog.close();
    })
})