// select the client
var client = document.querySelectorAll(".client");
var project = document.querySelectorAll(".project")

// select the buttons
var studio = document.querySelector(".studio");
var commission = document.querySelector(".commission");

console.log(client)
console.log(studio)
console.log(commission)
console.log(project)

// on "click" , studio filters just the studio projects , innerHTML = studio

studio.addEventListener("click", function() {
    for (var i = 0; i < client.length; i++) {
      if (client[i].innerHTML.indexOf('Studio') !== -1) {
        project[i].style.visibility = "hidden";
      }
    }
  });

  // 
  