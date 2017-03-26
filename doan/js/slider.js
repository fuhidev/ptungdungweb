var slideIndex = 1,

    imgs = [];
for (var i = 1; i <= 29; i++) {
    imgs.push(
        {
            id:i,
            re:i==12?/(<h1>)(\w?)+(<\/h1>)/:i==14?/(<p>)(\w?)+(<\/p>)/:i==19?/(<input)[\s\w]*( type="email")([\s\w]*)(>)/:i==23?/(<input)[\s\w]*( type="submit")([\s\w]*)(>)/:i==27?/(<input)[\s\w]*( type="email")([\s\w]*)( placeholder="Your email")([\s\w]*)(>)/:undefined,
         img:'img/lession/1/' + i + '.jpg'
        });
}

function loadImage(images) {
    var content = document.getElementsByClassName('content')[0];

    images.forEach(function (value, key) {
        var img = document.createElement('img');
        img.src = value.img;
        img.className = "mySlides";
        content.appendChild(img);
    });

}

function findSlide(obj) {
    var a = imgs;
    for (var i = 0; i < a.length; i++) {
        if (a[i].id === obj) {
            return a[i];
        }
    }
    return undefined;
}

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function currentDiv() {
    showDivs(slideIndex);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");

    if (n > x.length || n < 1) {
        return;
    }
    if (n < 1) {
        slideIndex = x.length
    }

    for (i = 0; i < x.length; i++) {
        x[i].style.display = slideIndex - 1 === i?"block":"none";
    }
    var span = document.getElementById('numslide');
    span.innerText = [slideIndex, '/', imgs.length].join('');
    var slide = findSlide(n);
    if (slide != undefined && slide.re != undefined) {
            document.getElementById('next').style.visibility = checkCoder(slide.re)?"":"hidden";

    }else{
         document.getElementById('next').style.visibility ="";
    }
}
