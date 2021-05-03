/* function roleClick(el) {
    el.querySelector(".role-svg-icon").classList.add("role-svg-border-click");
} */

const { indexOf } = require("lodash");

const roleItems = document.querySelectorAll(".role-item");

/* roleItems.forEach((el) =>
    el.addEventListener("click", roleClick(el.querySelector(".role-svg-icon")), false)
); */

const roleImgs = [
    "https://lolstatic-a.akamaihd.net/frontpage/apps/prod/harbinger-l10-website/en-gb/production/en-gb/static/assassin-d64d3ffdda15e1eed637aefe6a2c7fee.png",
    "https://lolstatic-a.akamaihd.net/frontpage/apps/prod/harbinger-l10-website/en-gb/production/en-gb/static/fighter-7a08920b696ecdb673edeeae1d3c616e.png",
    "https://lolstatic-a.akamaihd.net/frontpage/apps/prod/harbinger-l10-website/en-gb/production/en-gb/static/mage-3bfa6dfe620adafe5e539c2e470f4acc.png",
    "https://lolstatic-a.akamaihd.net/frontpage/apps/prod/harbinger-l10-website/en-gb/production/en-gb/static/marksman-b339ed8fd7e04ff2c3fca022c5d299fb.png",
    "https://lolstatic-a.akamaihd.net/frontpage/apps/prod/harbinger-l10-website/en-gb/production/en-gb/static/support-d63ae08baf517425864ddc020a5871d5.png",
    "https://lolstatic-a.akamaihd.net/frontpage/apps/prod/harbinger-l10-website/en-gb/production/en-gb/static/tank-1245abc326bd98c567ab22659719a1a3.png",
]

let old = 0;

roleItems.forEach((el) =>
    el.addEventListener(
    "click",
    () => {
        setTimeout(()=>{ document.getElementById("circle-img").setAttribute("src", roleImgs[indexOf(roleItems, el)]);}, 250);

        if (old  == 0) {
            document.getElementById("circle-img-transition-x").classList.toggle('active');
            old = 1;
        } else {
            document.getElementById("circle-img-transition-y").classList.toggle('active');
            old = 0;
        }
        /* old = (Math.floor(Math.random()*2)); */

        roleItems.forEach((el) => el.classList.remove('active'));
        el.classList.toggle('active');
        /* roleClickIcon(el.querySelector(".role-svg-icon"));
        roleClickBorder(el.querySelector(".role-svg-border")); */
        document.getElementById("circle-element").classList.remove("active");
        // trigger a DOM reflow
        void document.getElementById("circle-element").offsetWidth;
        setTimeout(()=>{document.getElementById("circle-element").classList.add("active")}, 500);
    },
    false)
);

function roleClickIcon(el) {
    /* if (el.classList.contains("role-svg-icon-click")){
        el.classList.remove("role-svg-icon-click");
    } else {
        el.classList.add("role-svg-icon-click");
    } */
    el.classList.toggle('role-svg-icon-click');
}

function roleClickBorder(el) {
    /* if (el.classList.contains("role-svg-border-click")){
        el.classList.remove("role-svg-border-click");
    } else {
        el.classList.add("role-svg-border-click");
    } */
    el.classList.toggle('role-svg-border-click');
}

const btnLogo = document.getElementById("btn-logo");
btnLogo.addEventListener("click", () => { btnLogoClick() }, false);

function btnLogoClick() {
    document.getElementById("collapse-logo").classList.toggle('click');
    document.getElementById("btn-fist-logo").classList.toggle('click');
}

/* var path = document.querySelectorAll("path");
var length = path.forEach.getTotalLength();
console.log(length); */

/* var current_frame, total_frames, path, length, handle, myobj;

myobj = document.getElementById('myobj').cloneNode(true);

var init = function() {
  current_frame = 0;
  total_frames = 60;
  path = new Array();
  length = new Array();
  for(var i=0; i<4;i++){
    path[i] = document.getElementById('i'+i);
    l = path[i].getTotalLength();
    length[i] = l;
    path[i].style.strokeDasharray = l + ' ' + l;
    path[i].style.strokeDashoffset = l;
  }
  handle = 0;
}

var draw = function() {
   var progress = current_frame/total_frames;
   if (progress > 1) {
     window.cancelAnimationFrame(handle);
   } else {
     current_frame++;
     for(var j=0; j<path.length;j++){
       path[j].style.strokeDashoffset = Math.floor(length[j] * (1 - progress));
     }
     handle = window.requestAnimationFrame(draw);
   }
};

init();
draw();

var rerun = function() {
  var old = document.getElementsByTagName('div')[0];
  old.parentNode.removeChild(old);
  document.getElementsByTagName('body')[0].appendChild(myobj);
  init();
  draw();
}; */
