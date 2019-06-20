let body = document.getElementById('body')

let scrollbar = document.querySelector('.scrollbar');
let innerScroll = document.querySelector('.scroll-inner');

console.log(scrollbar);
console.log(innerScroll);


let height = document.body.offsetHeight

document.addEventListener('scroll', (e) => {
    console.log(window.scrollY);
})

