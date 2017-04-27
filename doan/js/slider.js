var slideIndex = 1;
var imgs = document.getElementsByClassName('mySlides');

function findSlide(index) {
    var a = imgs;
    if(index > a.length - 1 || index < 0)
        return undefined;
    return a[index - 1];
}

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function currentDiv() {
    showDivs(slideIndex);
}

function showDivs(n) {
    var i;
    var x = imgs;

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
    if (slide != undefined && slide.alt != "") {
            document.getElementById('next').style.visibility = checkCoder(slide.alt)?"":"hidden";

    }else{
         document.getElementById('next').style.visibility ="";
    }
}
function checkCoder(pattern) {
    "use strict";
    var value = editor.getSession().getValue();
    var re = new RegExp(pattern);
    var result = re.test(value);
 return result;
}
