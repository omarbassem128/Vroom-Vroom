class seacrhb extends HTMLElement {
    connectedCallback(){
        this.innerHTML=`
        <div class="center container">
            <form class=" container" action="">
                <div class="search container">
                <input type="text" class="searchTerm" placeholder="Car model">
                <input type="text" class="searchTerm" placeholder="price">
                <button type="submit" class="searchButton">
                        <i class='bx bx-search-alt-2'></i>
                    </button>
                </div>
            </form>
        </div>
        
            
        `
    }
}

customElements.define("searchbar-component",seacrhb)