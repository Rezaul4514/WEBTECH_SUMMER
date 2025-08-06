function validateForm() {
    const email= document.forms["patientForm"]["email"].value;
    if (email == "") {
        alert("Email must be filled out");
        return false;
    }
    const phone = document.forms["patientForm"]["phone"].value; 
    if (phone == "") {
        alert("Phone number must be filled out");
    const password = document.forms["patientForm"]["password"].value;
    if (password == "") {
        alert("Password must be filled out");
    const name = document.forms["patientForm"]["name"].value;
     if (isNaN(age) || age < 0) {
        alert("Please enter a valid age");
        return false;
    }
    if (name == "") {
        alert("Name must be filled out");   
    const age = document.forms["patientForm"]["age"].value;
    if (age == "") {
        alert("Age must be filled out");
        return false;
    }
    const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{6,}$/;
    const phoneRegex = /^\d{11}$/;  


    var name = document.forms["patientForm"]["name"].value;
    var age = document.forms["patientForm"]["age"].value;
    var email = document.forms["patientForm"]["email"].value;
    var password = document.forms["patientForm"]["password"].value;
    var phone = document.forms["patientForm"]["phone"].value;

    if (name == "" || age == "" || email == "") {
        alert("All fields must be filled out");
        return false;
    }

    


    return true;
}

