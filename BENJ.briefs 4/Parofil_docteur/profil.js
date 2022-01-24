let but2 = document.getElementById("icon-S");
let but3 = document.getElementById("Button-menu1");

but3.onclick = function () {
  document.getElementById("menu").style.margin = "0%";
};
but2.onclick = function () {
  document.getElementById("menu").style.margin = " 100%";
};
// close and open  modifier
const popap = document.querySelector(".amin");
const f_popap = document.querySelector(".title i");
const modifier = document.querySelector("#subb");
console.log(f_popap);
modifier.addEventListener("click", () => {
  popap.style.display = "flex";
});
f_popap.addEventListener("click", () => {
  popap.style.display = "none";
});
