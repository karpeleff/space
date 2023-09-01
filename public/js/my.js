/*

var inp = document.getElementsByClassName('radio');
var biz = document.getElementById('bizcat');
var adv = document.getElementById('advcat');
          adv.style.display = "block";
          biz.style.display = "none";
var price  =  document.getElementById('price');
function func (elm) {
    if (elm.id == "radio_1" && elm.checked)
    {
        adv.style.display = "block";
        price.style.display = "block";
    }
    else
    {
        adv.style.display = "none";
        price.style.display = "none";
    }

    if (elm.id == "radio_2" && elm.checked)
    {
        biz.style.display = "block";
        price.style.display = "none";
    }
    else
    {
        biz.style.display = "none";
        price.style.display = "none";
    }
}

for (var i=0;i<inp.length;i++){
    inp[i].onchange = function () {func(this)};
}
*/

var  biz = document.getElementById('bizcat');
var adv = document.getElementById('advcat');
var price  =  document.getElementById('price');

biz.style.display = "none";
adv.style.display = "block";
price.style.display = "block";

//var free = document.querySelector('');

radio_1.onclick = function() {
   // alert('Спасибо');
    price.style.display = "block";
    adv.style.display = "block";
    biz.style.display = "none";

};

radio_2.onclick = function() {
  //  alert('Спасибо2');
    price.style.display = "none";
    biz.style.display = "block";
    adv.style.display = "none";
};

advcat.onblur = function () {
  //  alert('Спасибо');

    if(adv.value === 'free'){
        price.style.display = "none";
    }else{
        price.style.display = "block";
    }

}

