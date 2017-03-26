var slideIndex = 1,
    check = [12, 14, 19, 23, 27],
    check =[
        {
            id:12,
            re:/^(<h1>)(\w?)+(<\/h1>)$/
        },
        {
            id:14,
            re:undefined
        },
        {
            id:19,
            re:undefined
        },
        {
            id:23,
            re:undefined
        },
        {
            id:27,
            re:undefined
        }
    ]
    imgs = [];
for (var i = 1; i <= 29; i++) {
    imgs.push('img/lession/1/' + i + '.jpg');
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

function contains(a, obj) {
    for (var i = 0; i < a.length; i++) {
        if (a[i] === obj) {
            return true;
        }
    }
    return false;
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
    if (n > x.length || n < 1) {
        return;
    }
    if (n < 1) {
        slideIndex = x.length
    }
    if(contains(check,n)){
       if(!checkCoder()) document.getElementById('next').style.visibility="hidden";

    }else{
        document.getElementById('next').style.visibility="";
    }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    x[slideIndex - 1].style.display = "block";
    var span = document.getElementById('numslide');
    span.innerText = [slideIndex, '/', imgs.length].join('');
}
