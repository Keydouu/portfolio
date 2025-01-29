document.addEventListener("DOMContentLoaded", function() {
    const frontendSkills = [
      "HTML / CSS / Js", "Angular"
    ];
  
    const backendSkills = [
      "Java | Springboot", "Python", "MySQL | PostgreSQL", "AWS"
    ];
  
    const aiSkills = [
      "Machine Learning", "Deep Learning", "Natural Language Processing"
    ];
  
    const frontendIcons = [
      "html.png", "angular.png"
    ];
  
    const backendIcons = [
      "java.png", "python.png", "mysql.png", "aws.png"
    ];
  
    const aiIcons = [
      "ml.png", "deep_learning.png", "nlp.png"
    ];
  
    // Get containers for frontend, backend, and AI sections
    const frontendContainer = document.getElementById('frontend-experience');
    const backendContainer = document.getElementById('backend-experience');
    const aiContainer = document.getElementById('ai-experience');
  
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
  