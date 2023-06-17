// Get the hero
var hero = document.querySelector(".project-hero");

// Get the image and insert it inside the hero - use its "alt" text as a caption
var images = document.querySelectorAll(".project-slides img");
var heroImg = document.getElementById("hero-image");
// var captionText = document.querySelector("div.caption");

let imgSrc;
// get images src onclick
images.forEach((img) => {
  img.addEventListener("click", (e) => {
    imgSrc = e.target.src;
    // hero.style.display = "block";
    // captionText.innerHTML = e.target.alt;
    heroImg.setAttribute("src", imgSrc);
    
  });
});

// console.log(captionText.innerHTML)

console.log(images);
