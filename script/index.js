const dat = document.getElementById('date')
const date = new Date();
dat.innerHTML = date.getFullYear()
$('.carousel').carousel({
    interval: 3000
})