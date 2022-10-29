//navbar change background when scroll
window.onscroll = function () {
    const header = document.querySelector("header");
    const button = document.querySelector(".myBtn");
    const fixNav = header.offsetTop;
  
    if (window.pageYOffset > 300) {
      // di bawah
      header.classList.remove("fixed");
      header.classList.add("dynamic");


      // button
      button.style.display = "block";

    } else {
      // di atas
      header.classList.remove("dynamic");
      header.classList.add("fixed");
      // button
      button.style.display = "none";


    }


  }


