import "./bootstrap";

// IMPORTO MIO SCSS  |  ~resources ALIAS DI  /resources/
import "~resources/scss/comics.scss";

// IMPORT JS DI BOOTSTRAP PER COMPONENTI CHE POTREBBERO RICHIEDERLO
import * as bootstrap from "bootstrap";

// PER QUANDO SI VA IN PRODUZIONE DICO A VITE DI CONSIDERARE QUESTE IMMAGINI, COMPRIMERLE ETC..
import.meta.glob(["../img/**"]);
