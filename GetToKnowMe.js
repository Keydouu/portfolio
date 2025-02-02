function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();

document.addEventListener("DOMContentLoaded", function() {
    const frontendSkills = [
      "HTML / CSS / Js", "Angular"
    ];
  
    const backendSkills = [
      "Java | Springboot", "Python", "MySQL | PostgreSQL", "AWS"
    ];
  
    const frontendIcons = [
      "html.png", "angular.png"
    ];
  
    const backendIcons = [
      "java.png", "python.png", "mysql.png", "aws.png"
    ];
  
    const frontendContainer = document.getElementById('frontend-experience');
    const backendContainer = document.getElementById('backend-experience');
  
    // Function to create and append skill articles
    function populateSkills(skills, icons, container) {
      skills.forEach((skill, index) => {
        const article = document.createElement('article');
        article.innerHTML = `
          <img src="./assets/icons/${icons[index]}" alt="${skill} icon" class="icon">
        `;
        container.appendChild(article);
      });
    }
  
    // Populate all sections
    populateSkills(frontendSkills, frontendIcons, frontendContainer);
    populateSkills(backendSkills, backendIcons, backendContainer);
    //populateSkills(aiSkills, aiIcons, aiContainer);
  });
  