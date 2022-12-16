/* HAMBURGER MENU */

const hamburgerMenu = document.querySelector(".hamburger-menu");
const navMenu = document.querySelector(".nav-menu");

hamburgerMenu.addEventListener("click", () => {
    navMenu.classList.toggle("active");
});

const navLinks = document.querySelectorAll(".nav-link");

navLinks.forEach(n => n.addEventListener("click", () => {
    navMenu.classList.remove("active");
}));

/* REVIEW CAROUSEL */

let reviewIndex = 1;
showReviews(reviewIndex);

function plusReviews(n) {
  showReviews(reviewIndex += n);
}

function currentReview(n) {
  showReviews(reviewIndex = n);
}

function showReviews(n) {
  let i;
  const reviews = document.getElementsByClassName("reviews");
  const dots = document.getElementsByClassName("dot");
  if (n > reviews.length) {reviewIndex = 1}    
  if (n < 1) {reviewIndex = reviews.length}
  for (i = 0; i < reviews.length; i++) {
      reviews[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  reviews[reviewIndex-1].style.display = "block";  
  dots[reviewIndex-1].className += " active";
}