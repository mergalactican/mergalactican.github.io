let lang = document.getElementById('lang');
let mode = document.getElementById('site-mode');
let light = document.getElementById('dark-mode');
let show = document.getElementById('showw');
let showw = document.getElementById('show');
let input = document.getElementById('first_name');
let input2 = document.getElementById('last_name');
let input3 = document.getElementById('email');
let input4 = document.getElementById('password');
let black = document.getElementById('black');
let rus = document.getElementById('rus');
let buttons = document.getElementById('buttons');
let mshow = document.getElementById('menu-show');
let diff = document.getElementById('diff');
let bord = document.getElementById('bord');
let topp = document.getElementById('top-line');
let middle = document.getElementById('middle-line');
let bottom = document.getElementById('bottom-line');
let search = document.getElementById('search-ch');
let inp = document.getElementById('inp');
let x = document.getElementById('x');
let berb = document.getElementById('bor-border');
let whiteBorder = document.getElementById('white-border');
let first_name = document.getElementById('first_name');
let last_name = document.getElementById('last_name');
let email = document.getElementById('email');
let password = document.getElementById('password');
let bbp = document.getElementById('bbp');
let submit = document.getElementById('submit');
let topl = document.getElementById('top-liner');
let middlee = document.getElementById('middle-liner');
let message = document.getElementById('mess');
let main = document.querySelectorAll('main');
let wrap1 = document.getElementById('wrap1');
const buttonl = document.querySelectorAll('#srch2');
const buttonm = document.querySelectorAll('#a-color');
const buttonk = document.querySelectorAll('#buttons');

let menu = document.getElementById('menu-show');

menu.onclick = function () {
  let topline = document.querySelector('#top-line');
  let middleline = document.querySelector('#middle-line');

  document.getElementById('show').classList.toggle('showww');
  topline.classList.toggle('top-line-rotate');
  middleline.classList.toggle('middle-line-rotate');
}

inp.onclick = function () {
  x.classList.toggle('block-x');
  x.onclick = function () {
    inp.value = '';
  }
}

mode.onclick = function () {
  let modeon = document.querySelector('#light');

  if (modeon) {
    modeon.classList.toggle('mode-on');
  }

  if (light) {
    light.classList.toggle('dark-on');
  }

  if (show) {
    show.classList.toggle('whi-wite');
  }

  if (showw) {
    showw.classList.toggle('whi-white');
  }

  if (input) {
    input.classList.toggle('mon');
  }

  if (input2) {
    input2.classList.toggle('mon2');
  }

  if (input3) {
    input3.classList.toggle('mon3');
  }

  if (input4) {
    input4.classList.toggle('mon4');
  }

  if (black) {
    black.classList.toggle('mode');
  }

  if (lang) {
    lang.classList.toggle('bll');
  }

  if (mshow) {
    mshow.classList.toggle('mshow');
  }

  if (diff) {
    diff.classList.toggle('difff');
  }

  if (bord) {
    bord.classList.toggle('bord');
  }

  if (topp) {
    topp.classList.toggle('color-gray');
  }

  if (middle) {
    middle.classList.toggle('color-gray');
  }

  if (bottom) {
    bottom.classList.toggle('color-gray');
  }

  if (mode) {
    mode.classList.toggle('gray-mode');
  }

  if (search) {
    search.classList.toggle('gray-modee');
  }

  if (inp) {
    inp.classList.toggle('moode');
  }

  if (rus) {
    rus.classList.toggle('blll');
  }

  if (berb) {
    berb.classList.toggle('berb');
  }

  if (first_name) {
    first_name.classList.toggle('first-mode');
  }

  if (last_name) {
    last_name.classList.toggle('last-mode');
  }

  if (email) {
    email.classList.toggle('email-mode');
  }

  if (password) {
    password.classList.toggle('password-mode');
  }

  if (whiteBorder) {
    whiteBorder.classList.toggle('black-border');
  }

  if (bbp) {
    bbp.classList.toggle('bbm');
  }

  if (submit) {
    submit.classList.toggle('sub-mit');
  }

  if (topl) {
    topl.classList.toggle('col-blc');
  }

  if (middlee) {
    middlee.classList.toggle('col-blc');
  }

  for (let i = 0; i < buttonm.length; i++) {
    buttonm[i].classList.toggle('black-s');
  }

  for (let j = 0; j < buttonk.length; j++) {
    buttonk[j].classList.toggle('black-l');
  }

  for (let m = 0; m < buttonl.length; m++) {
    buttonl[m].classList.toggle('srch2-ch');
  }
}

$(document).ready(function () {
  $("form").submit(function (ev) {
    ev.preventDefault();
    const form = new FormData(this);
    $.ajax({
      type: "POST",
      url: "/",
      data: form,
      dataType: "JSON",
      processData: false,
      contentType: false,
      success: function (ev) {
        if (ev.status == "success") {
          if (ev.method == "login") {
            console.log("You are logged in");
            setTimeout(() => {
              location.href = "dashboard";
            }, 300);
          } else if (ev.method == "register") {
            console.log("You are Registered");
            setTimeout(() => {
              location.href = 'login';
            }, 300);
          } else if (ev.method == "update_user") {
            setTimeout(() => {
              location.reload();
            }, 300);
          } else if (ev.method == "add_product") {
            $(".close").click();
            console.log(create_product_tr(ev.message));
            $("#products_table tbody").prepend(create_product_tr(ev.message));
          } else if (ev.method == "edit_product") {
            $(".close").click();
            $(`[data-product-tr-id="${ev.message.id}"] .img`).attr(
              "src",
              "/" + ev.message.image
            );
            $(`[data-product-tr-id="${ev.message.id}"] .title`).text(
              ev.message.title
            );
            $(`[data-product-tr-id="${ev.message.id}"] .price`).text(
              ev.message.price
            );
            $(`[data-product-tr-id="${ev.message.id}"] .desc`).text(
              ev.message.desc.slice(0, 100)
            );
          }
        } else {
          if (ev.method == "login") {
            console.log(r.message);
          }
          if (ev.method == "register") {
            console.log(r.message);
          }
        }
      },
    });
  });
});