
  var icon_b = document.getElementById("change-icon");
  var icon_i = document.getElementById("icon");
  icon_b.addEventListener('click',function(){
    console.log(icon_i);
    icon_i.classList.toggle('fa-times');
  })

function myFunction(x , y) {
  if (x.matches) {
    // console.log(x.matches);
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function () {

      var currentScrollPos = window.pageYOffset;
      if ((prevScrollpos & currentScrollPos) === 0) {

        document.querySelector("#navbar").style.top = "69px";
        prevScrollpos = currentScrollPos;
      } else {
        if (prevScrollpos > currentScrollPos) {
          document.querySelector("#navbar").style.top = "0px";
        } else {
          document.querySelector("#navbar").style.top = "-80px";
        }
        prevScrollpos = currentScrollPos;
      }
    }
  }else if (y.matches) {
    // console.log(y.matches);
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function () {

      var currentScrollPos = window.pageYOffset;
      if ((prevScrollpos & currentScrollPos) === 0) {

        document.querySelector("#navbar").style.top = "34px";
        prevScrollpos = currentScrollPos;
      } else {
        if (prevScrollpos > currentScrollPos) {
          document.querySelector("#navbar").style.top = "0px";
        } else {
          document.querySelector("#navbar").style.top = "-80px";
        }
        prevScrollpos = currentScrollPos;
      }
    }
  } else {
    // console.log(x.matches);
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function () {

      var currentScrollPos = window.pageYOffset;
      if ((prevScrollpos & currentScrollPos) === 0) {

        document.querySelector("#navbar").style.top = "43px";
        prevScrollpos = currentScrollPos;
      } else {
        if (prevScrollpos > currentScrollPos) {
          document.querySelector("#navbar").style.top = "0px";
        } else {
          document.querySelector("#navbar").style.top = "-80px";
        }
        prevScrollpos = currentScrollPos;
      }
    }
  }
}

var x = window.matchMedia("(max-width: 683px)")
var y = window.matchMedia("(max-width: 870px)")
// console.log(y);
myFunction(x ,y)
x.addListener(myFunction)


var galleryTop = new Swiper('.gallery-top', {
  spaceBetween: 0,
  loop: true,
});

var swiper = new Swiper('.end_swiper', {
  slidesPerView: 6,
  spaceBetween: 0,
  loop: true,
  autoplay: {
    delay: 3000,
  },
  breakpoints: {
    230: {
      slidesPerView: 1,
      spaceBetween: 0,
    },
    360: {
      slidesPerView: 1,
      spaceBetween: 0,
    },
    511: {
      slidesPerView: 2,
      spaceBetween: 0,
    },
    711: {
      slidesPerView: 3,
      spaceBetween: 0,
    },
    1115: {
      slidesPerView: 5,
      spaceBetween: 0,
    },
    1330: {
      slidesPerView: 6,
      spaceBetween: 0,
    },
  }
});