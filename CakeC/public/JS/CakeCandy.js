// Switch landing
let landing = document.querySelector(".landing");
let imagesArray = ["01.jpg", "02.jpg", "03.jpg", "05.jpg"];
setInterval(() => {
  let count = Math.floor(Math.random() * imagesArray.length);
  landing.style.background = `url(Images/${imagesArray[count]})`;
}, 5000);
// Open links
let bars = document.querySelector(".bars");
let links = document.querySelector("ul");

bars.onclick = function () {
    links.classList.toggle("open");
};
