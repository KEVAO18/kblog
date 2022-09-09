const API_URL = "https://62e6fa3769bd03090f7769ab.mockapi.io/KontabApi";

const xhr = new XMLHttpRequest();

function onRequestHandler() {
    if ((this.readyState == 4) && (this.status == 200)) {
        const datos = JSON.parse(this.response);
        const HTMLResponse = document.querySelector('#contenedor');
        
        datos.forEach(entrada => {

            // div.col-sm-12-------------------------------------------------

            const col = document.createElement('div'); 

            col.classList.add("col-sm-12", "my-4");
            
            // div.card -----------------------------------------------------

            const card = document.createElement('div');
    
            card.classList.add("card");
    
            col.appendChild(card); // add card to col

            // div.card-header ---------------------------------------------

            const card_h = document.createElement('div');

            card_h.classList.add("card-header");

            // add text to card_h ------------------------------------------

            card_h.appendChild(
                document.createTextNode(`${entrada.cabecera}`)
            );

            card.appendChild(card_h); // add card_h to card

            // div.card-body -----------------------------------------------

            const card_b = document.createElement('div');
            
            card_b.classList.add("card-body");

            // add text to card_b ------------------------------------------

            card_b.appendChild(
                document.createTextNode(`${entrada.entrada}`)
            );
            
            card.appendChild(card_b); // add card_b to card

            // div.card-footer ----------------------------------------------

            const card_f = document.createElement('div');
            
            card_f.classList.add("card-footer");

            // add text to card_f ------------------------------------------

            card_f.appendChild(
                document.createTextNode(`${entrada.fecha}`)
            );
            
            card.appendChild(card_f); // add card_f to card

            // ------------------------ debug ------------------------------

            HTMLResponse.appendChild(col);
        });
    }
}

xhr.addEventListener("load", onRequestHandler);

xhr.open('GET', `${API_URL}/blog`); // readyState = 1
xhr.send(); // readyState = 2
