function mostrar() {
  const o = document.querySelector(".items");
  o.classList.toggle("mostrar");
}
function remover() {
  const o = document.querySelector(".items");
  o.classList.remove("mostrar");
}
const izq = document.querySelector(".izq");
let posicion = 0;
izq.addEventListener("click", () => {
  const o = document.querySelectorAll(".col");
  console.log(posicion),
    o[posicion].classList.remove("visible"),
    --posicion,
    console.log(posicion),
    posicion <= 0 ? (posicion = 3) : --posicion,
    console.log(posicion),
    o[posicion].classList.add("visible");
});
const der = document.querySelector(".der");
der.addEventListener("click", () => {
  const o = document.querySelectorAll(".col");
  console.log(posicion),
    o[posicion].classList.remove("visible"),
    --posicion,
    console.log(posicion),
    posicion <= 0 ? (posicion = 3) : --posicion,
    console.log(posicion),
    o[posicion].classList.add("visible");
});
