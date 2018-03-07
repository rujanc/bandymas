let btn = document.getElementById("btn");
let name = document.getElementById("main-name");
btn.addEventListener("click", changeName);
function changeName() {
  name.innerHTML = "Welcome";
}

let paragraph = document.createElement('h3');
let node = document.createTextNode('We provide the great support to our customers');
paragraph.appendChild(node);
document.getElementById("text-box").appendChild(paragraph);

function scrollToView(x) {
  document.querySelector(x).scrollIntoView({behavior:'smooth'});
}
