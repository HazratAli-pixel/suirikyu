const activePage = window.location.pathname;
// alert(activePage);
const navLinks = document.querySelectorAll('nav a');
navLinks.forEach(link => {
    // console.log("link :", link);    
    if(link.href.includes(`${activePage}`)){
        link.classList.add('active');
    }
});

function validateForm() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm_password").value;
  
    if (password !== confirmPassword) {
      alert("Passwords do not match");
      return false;
    }
    return true;
  }