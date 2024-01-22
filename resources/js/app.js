import "./bootstrap";

import "~resources/scss/app.scss";
import.meta.glob(["../img/**"]);

import * as bootstrap from "bootstrap";

const buttons = document.querySelectorAll(".btn-delete");

buttons.forEach((button) => {
    button.addEventListener("click", (event) => {
        //blocco il form
        event.preventDefault();

        // Trovo elemento modal
        const deleteModal = new bootstrap.Modal("#delete-modal");

        //gestisco il dato da riportare nel modal
        const title = button.getAttribute("data-title");
        document.getElementById("title-to-delete").innerHTML = title;

        // impostare il bottone del Modal, in modo da far partire il form e far eleiminare l'elemento giusto
        document
            .getElementById("action-delete")
            .addEventListener("click", () => {
                button.parentElement.submit();
            });

        //mostro modale
        deleteModal.show();
    });
});
