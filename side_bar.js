class sidebar extends HTMLElement {
  connectedCallback(){
      this.innerHTML=`
      <div class="sidebar">
        <h3 class="w3-bar-item">Menu</h3>
  
        <p>price</p>
        <input type="text" placeholder="from" class="input-box" />
        <input type="text" placeholder="too" class="input-box" />
        <br />
  
        <p>number of seats</p>
        <input type="text" placeholder="from" class="input-box" />
        <input type="text" placeholder="too" class="input-box" />
        <br />
  
        <p>GearBox</p>
        <label for="">
          <input type="radio" name="GearBox" />
          <span class="checkmark"></span>
          automatic</label
        >
        <label for="">
          <input type="radio" name="GearBox" />
          <span class="checkmark"></span>
          manual</label
        >
        <br />
      </div>
      `
  }
}

customElements.define("sidebar-component",sidebar)