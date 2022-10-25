//navbar change background when scroll
window.onscroll = function () {
    const header = document.querySelector("header");
    const fixNav = header.offsetTop;
  
    if (window.pageYOffset > fixNav) {
      header.classList.remove("navBlack");
      header.classList.add("navBlur");
    } else {
      header.classList.remove("navBlur");
      header.classList.add("navBlack");

    }
  };


