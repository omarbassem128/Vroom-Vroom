class navbar extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `
        <link rel="stylesheet" href="landing.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <div class="nav container">
            <a href="landing.html" class="logo"><i class='bx bxs-car'>VROOM</i></a>
            <input type="checkbox" name="" id="menu">
            <ul class="navbar">
                <li><a href="landing.php">home</a></li>
                <li><a href="dashboard.php">Your Dashboard</a></li>
                <li><a href="carlist.php">Rental listings</a></li>
            </ul>
        </div>
        `;
  }
}

customElements.define("navbar-component", navbar);
