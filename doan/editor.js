window.onload = function () {
    "use strict";
    var code = document.getElementById('coder');
    var view = document.getElementById('view');
    code.onkeyup = function (event) {
        view.innerHTML = code.value;
    };
};
function checkCode(regex) {
    "use strict";
    sessionStorage;
}