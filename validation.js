function validateForm() {
    var name = document.getElementById("name").value;
    var matric = document.getElementById("matric").value;
    var email = document.getElementById("email").value;
    var Mphone = document.getElementById("Mphone").value;
    var Hphone = document.getElementById("Hphone").value;
    // var dob = document.getElementById("dob").value;
    // var gender = document.querySelector('input[name="gender"]:checked');
  
    var nameRegex = /^[A-Za-z ]{3,}$/;
    var matricRegex = /^[0-9]{7}$/;
    var emailRegex = /^[a-z0-9._]+@[gmail]+\.[com]{2,}$/;
    var phoneRegex = /^[0-9]{10}$/;
  
    var isValid = true;
  
    if (!nameRegex.test(name)) {
      document.getElementById("nameError").innerHTML = "Please enter a valid name (at least 3 characters long and contains only alphabets and spaces)";
      isValid = false;
    } else {
      document.getElementById("nameError").innerHTML = "";
    }

    if (!matricRegex.test(matric)) {
        document.getElementById("matricError").innerHTML = "Please enter a valid matric number (7 digits)";
        isValid = false;
      } else {
        document.getElementById("matricError").innerHTML = "";
      }
  
    if (!emailRegex.test(email)) {
      document.getElementById("emailError").innerHTML = "Please enter a valid email";
      isValid = false;
    } else {
      document.getElementById("emailError").innerHTML = "";
    }
  
    if (!phoneRegex.test(phone)) {
      document.getElementById("MphoneError").innerHTML = "Please enter a valid phone number (10 digits)";
      isValid = false;
    } else {
      document.getElementById("MphoneError").innerHTML = "";
    }

    if (!phoneRegex.test(phone)) {
        document.getElementById("HphoneError").innerHTML = "Please enter a valid phone number (10 digits)";
        isValid = false;
      } else {
        document.getElementById("HphoneError").innerHTML = "";
      }
  
    if (gender == null) {
      document.getElementById("genderError").
    }
}