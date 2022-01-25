const conta = document.querySelector(".kopo");
const form = document.querySelector("#koppppo");
conta.addEventListener("click", (e) => {
  e.preventDefault();
  Swal.fire({
    position: "top-end",
    icon: "success",
    title: "Your work has been saved",
    showConfirmButton: false,
    timer: 1000,
  });
});
