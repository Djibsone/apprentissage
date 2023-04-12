const bar = document.getElementById('bar')
const close = document.getElementById('close')
const nav = document.getElementById('navbar')

if (bar) {
    bar.addEventListener('click', () => {
        nav.classList.add('active');
    })
}

if (close) {
    close.addEventListener('click', () => {
        nav.classList.remove('active');
    })
}

var mainImg = document.getElementById('mainImg')
var smaillimg = document.getElementsByClassName('small-img')

smaillimg[0].onclick = () => {
    mainImg.src = smaillimg[0].src;
}
smaillimg[1].onclick = () => {
    mainImg.src = smaillimg[1].src;
}
smaillimg[2].onclick = () => {
    mainImg.src = smaillimg[2].src;
}
smaillimg[3].onclick = () => {
    mainImg.src = smaillimg[3].src;
}