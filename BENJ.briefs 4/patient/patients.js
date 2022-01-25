let but2 = document.getElementById("icon-S");
let but3 = document.getElementById("Button-menu1");
const alo = document.querySelector(".gestion_P");
but3.onclick = function () {
  document.getElementById("menu").style.margin = "0%";
};
but2.onclick = function () {
  document.getElementById("menu").style.margin = " 100%";
};
const detailles = document.querySelectorAll(".ana i");
const papier_detaille = document.querySelector(".gestion_P");
const f_papier_detaille = document.querySelector("#flex");
detailles.forEach((a) => {
  a.addEventListener("click", () => {
    papier_detaille.classList.toggle("plus");
  });
});
f_papier_detaille.addEventListener("click", () => {
  papier_detaille.classList.remove("plus");
});
const popap = document.querySelector(".amin");
const f_popap = document.querySelectorAll(".titleee i");
const modifier = document.querySelector(".ajouter");
const modifi = document.querySelector(".list .header_T .ajouter");


modifier.addEventListener("click", () => {
  popap.style.display = "flex";
});
modifi.addEventListener("click", () => {
  popap.style.display = "flex";
});
f_popap.forEach((p) => {
  p.addEventListener("click", () => {
    popap.style.display = "none";
  });
});
const popap_update = document.querySelector(".update_popap");
console.log(popap_update);
const update = document.querySelectorAll(".but1");

const popContainer = popap_update.querySelector(".popap");
const form = document.createElement("form");

form.id = "form";
form.method = "POST";
update.forEach((q) => {
  q.addEventListener("click", () => {
    popap_update.style.display = "flex";
    e.preventDefault();

  });
});
f_popap.forEach((z) => {
  z.addEventListener("click", () => {
    popap_update.style.display = "none";
  });
});
