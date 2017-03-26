function checkCoder(re) {
    "use strict";
    var value = document.getElementById('coder').value;
    var result = re.test(value);
 return result;
}
