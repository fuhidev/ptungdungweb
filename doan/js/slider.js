var slideIndex = 1;
var imgs = [];
for (var i = 1; i <= 29; i++) {
    imgs.push('img/lession/1/' + i + '.jpg');
}
window.onload = function () {

    loadImage(imgs);
    loadDots(imgs.length);
    showDivs(slideIndex);
}

function loadImage(images) {
    var content = document.getElementsByClassName('content')[0];

    images.forEach(function (value, key) {
        var img = document.createElement('img');
        img.src = value;
        img.className = "mySlides";
        content.appendChild(img);
    });

}

function loadDots(num) {
    var dot = document.getElementById('dots');
    for (var i = 1; i <= num; i++) {
        var btn = document.createElement('button');
        btn.className = "button demo";
        btn.innerText = i;
        btn.onclick = 'currentDiv('+i+')';
        dot.appendChild(btn);
    }
}

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function currentDiv(n) {
    showDivs(slideIndex = n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    if (n > x.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = x.length
    }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" red", "");
    }
    x[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " red";
}
