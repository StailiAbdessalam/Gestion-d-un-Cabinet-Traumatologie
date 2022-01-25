const abdo = document.createElement("template");
abdo.innerHTML = `
<header class="header_doc">
<div class="nav-bar">
    <img src="../index/logo.png" class="logo" />

    <ul class="menu">
        <li id="hh"><a href="#review">Patients</a></li>
        <li id="hh"><a href="#about">Nurses</a></li>
        <li class="active" id="hh"><a href="#home">Profile</a></li>
        <li>
            <a href="../login/login.php"> <button class="hoo" type="button">Log out</button></a>
        </li>
    </ul>
    <i class='bx bx-menu'></i>

    <div id="menu">
    <i class='bx bx-x' id="icon-S" style='color:#ffffff'></i>
    <ul class="menuieu">
        <li>Patients</li>
        <li>Nurses</li>
        <li>Profile</li>
        <li><a href="../index/index1.html"><button>home</button> </a></li>
    </ul>

</div>
</div>

</header>
`;
class nav_bar_p extends HTMLElement {
  connectedCallback() {
    this.innerHTML = abdo.innerHTML;
  }
}









