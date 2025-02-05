document.addEventListener("DOMContentLoaded", function() {
    const noBtn = document.getElementById("no-button");
    let escapeSpeed = 10;
    
    document.addEventListener("mousemove", function(event) {
        const rect = noBtn.getBoundingClientRect();
        const mouseX = event.clientX;
        const mouseY = event.clientY;
        const btnX = rect.left + rect.width / 2;
        const btnY = rect.top + rect.height / 2;
        const distance = Math.hypot(mouseX - btnX, mouseY - btnY);
        
        if (distance < 100) {
            let newX = rect.left + (mouseX < btnX ? escapeSpeed : -escapeSpeed);
            let newY = rect.top + (mouseY < btnY ? escapeSpeed : -escapeSpeed);
            
            newX = Math.max(0, Math.min(window.innerWidth - rect.width, newX));
            newY = Math.max(0, Math.min(window.innerHeight - rect.height, newY));
            
            noBtn.style.left = newX + "px";
            noBtn.style.top = newY + "px";
        }
    });
});

const bocchi = document.getElementById("Bocchi");

var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
        bocchi.style.top= "75px"; 
        bocchi.style.right= -"25px";
    }
}