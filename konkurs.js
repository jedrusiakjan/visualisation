let ham = document.querySelector(".ham");

ham.addEventListener("click", myFunction);

function myFunction() {
    var x = document.querySelector(".navbar");
    if (x.style.display === "flex") {
      x.style.display = "none";
    } else {
      x.style.display = "flex";
    }
}

function myFunction1(x) {
    x.classList.toggle("change");
  }