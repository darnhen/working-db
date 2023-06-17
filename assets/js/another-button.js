
var studioButton = document.querySelector(".studioButton")
var commissionButton = document.querySelector(".commissionButton")
var projects = document.querySelectorAll(".project")

studioButton.addEventListener("click", function() {

    projects.forEach(function(project) {
        console.log(project);

        if (project.classList.contains("Commission")){
            project.style.display = "none";
        }
        else if (project.classList.contains("Studio") && project.style.display === "none") {
            project.style.display = "initial"
        }
        else
         {
            project.style.display = "initial";
         }
    
    });

})

commissionButton.addEventListener("click", function() {

    projects.forEach(function(project) {
        console.log(project);

        if (project.classList.contains("Studio")){
            project.style.display = "none";
        }
        else if (project.classList.contains("Commission") && project.style.display === "none") {
            project.style.display = "initial"
        }
        else
         {
            project.style.display = "initial";
         }
    
    });
})