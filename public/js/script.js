//navbar change background when scroll
window.onscroll = function () {
    const header = document.querySelector("header");
    const fixNav = header.offsetTop;
  
    if (window.pageYOffset > fixNav) {
      // header.classList.remove("navBlack");
      // header.classList.add("navBlur");
      document.getElementById("dynamic").style.top = "0";

    } else {
      // header.classList.remove("navBlur");
      // header.classList.add("navBlack");
      document.getElementById("dynamic").style.top = "-50px";


    }

   
//   };

  // function scrollFunction() {
  //   if (document.querySelector("header") > 20 || document.documentElement.scrollTop > 20) {
  //     document.getElementById("dynamic").style.top = "0";
  //   } else {
  //     document.getElementById("dynamic").style.top = "-50px";
  //   }
  }


