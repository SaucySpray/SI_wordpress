class App {
    constructor(){

        // Scroll Bar 
        this.body = document.getElementById('body')
        this.height = document.body.offsetHeight
        this.scrollbar = document.querySelector('.scrollbar');
        this.innerScroll = document.querySelector('.scroll-inner');
        this.windowHeight = window.innerHeight
        document.addEventListener('resize', () => {
            this.height = document.body.offsetHeight
            this.windowHeight = window.innerHeight
            this.innerScroll.style.height = (100 *  window.scrollY) / (this.height - this.windowHeight) + "%"
        })

        // Green Scroll Bar
        document.addEventListener('scroll', (e) => {
            this.innerScroll.style.height = (100 *  window.scrollY) / (this.height - this.windowHeight) + "%"
        })
        // Color title on scrolling
        this.titles = document.querySelectorAll('h2')
        for (const title of this.titles) {
            title.classList.add('white')
        }        
        this.screenPos = []
        for (const title of this.titles) {
            this.screenPos.push(title.offsetTop - (this.windowHeight/2))
        }

        console.log(this.screenPos);

        document.addEventListener('scroll', () => {
            for (let i = 1; i < this.screenPos.length+1; i++) {
                console.log(window.scrollY);
                
                if(window.scrollY >= this.screenPos[i]) {
                    for (const title of this.titles) {
                        title.classList.replace('green', 'white')
                    }
                    this.titles[i].classList.replace('white', 'green')
                }
            }     
        })
    }
}    

new App()