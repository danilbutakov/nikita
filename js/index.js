"use strict";

const openPopUp = document.getElementById('open_pop_up');
const closePopUp = document.getElementById('pop_up_close');
const popUp = document.getElementById('pop_up');

openPopUp.addEventListener('click', function(e) {
    e.preventDefault();
    popUp.classList.add('active');
    console.log("Видео открылось");
});

closePopUp.addEventListener('click' , () => {
    popUp.classList.remove('active');
});
popUp.addEventListener('click', () => {
    popUp.classList.remove('active');
});

let offSet = 0; //смещение от левого края
const sliderImages = document.querySelector('.images');

document.querySelector('.slider-next').addEventListener('click', () => {
    offSet += 150;
    if(offSet > 300) {
        offSet = 0;
    }
    sliderImages.style.left = -offSet + 'px';
});

document.querySelector('.slider-prev').addEventListener('click', () => {
    offSet -= 150;
    if(offSet < 0) {
        offSet = 300;
    }
    sliderImages.style.left = -offSet + 'px';
});

function rand() {
    return Math.floor(Math.random() * 256);
}

const info = document.querySelector('.info');
const btnBc = document.querySelector('.btn-bc');

btnBc.addEventListener('click', () => {
    info.style.backgroundColor = "rgb(" + rand() + "," + rand() + "," + rand() + ")";
    console.log("Фон поменялся");
});


//Маска для ввода телефона 

window.addEventListener("DOMContentLoaded", function() {
    [].forEach.call( document.querySelectorAll('.tel'), function(input) {
    var keyCode;
    function mask(event) {
        event.keyCode && (keyCode = event.keyCode);
        var pos = this.selectionStart;
        if (pos < 3) event.preventDefault();
        var matrix = "+7 (___) ___ ____",
            i = 0,
            def = matrix.replace(/\D/g, ""),
            val = this.value.replace(/\D/g, ""),
            new_value = matrix.replace(/[_\d]/g, function(a) {
                return i < val.length ? val.charAt(i++) || def.charAt(i) : a
            });
        i = new_value.indexOf("_");
        if (i != -1) {
            i < 5 && (i = 3);
            new_value = new_value.slice(0, i)
        }
        var reg = matrix.substr(0, this.value.length).replace(/_+/g,
            function(a) {
                return "\\d{1," + a.length + "}"
            }).replace(/[+()]/g, "\\$&");
        reg = new RegExp("^" + reg + "$");
        if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = new_value;
        if (event.type == "blur" && this.value.length < 5)  this.value = ""
    }

    input.addEventListener("input", mask, false);
    input.addEventListener("focus", mask, false);
    input.addEventListener("blur", mask, false);
    input.addEventListener("keydown", mask, false)

  });

});