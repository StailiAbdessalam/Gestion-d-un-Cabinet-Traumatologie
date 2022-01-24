const temp = document.createElement("template");
temp.innerHTML = `
<footer>
<div class="footr">
  <div class="chengement">
    <div class="info">
      <div class="informa">
        <i class="bx bx-map" style="color: #121212"></i> 497 SAFI, CA
        95673
      </div>
      <div class="informa">
        <i class="bx bx-mobile" style="color: #121212"></i>+44 345 678 903
      </div>
      <div class="informa">
        <i class="bx bxl-gmail" style="color: #121212"></i
        >Conatct@Cabinetrahbani.com
      </div>
    </div>

    <div class="emailll">
      <div class="phra">Subscribe to our newsletter</div>
      <div class="abonner">
        <input
          class="mail_footer"
          type="email"
          name="hh"
          placeholder="Entrer Email"
        />
        <button class="ok">OK</button>
      </div>
    </div>
  </div>

  <div class="fb">
    <div class="ellise"><i class="bx bxl-facebook"></i></div>
    <div class="ellise"><i class="bx bxl-instagram"></i></div>
    <div class="ellise"><i class="bx bxl-twitter"></i></div>
  </div>
</div>
<div class="copi">
  Copyright <i class="bx bx-copyright"></i> 2022 Cabinet,Traumato.All
  rights reserved.
</div>
</footer>
`;
class footre extends HTMLElement {
  connectedCallback() {
    this.innerHTML = temp.innerHTML;
  }
}

customElements.define("abdo-footer", footre);