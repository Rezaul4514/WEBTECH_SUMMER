<!DOCTYPE html>
<html>
<head>
    <title>Registration Form for Clinic</title>
    <link rel="stylesheet"  href="../Patient_CSS/patient.css">
</head>
    <body>
        <center>
        <h2>Patient Registration Form</h2>
        
        <form id="Registation form">
            <br>
            <b>
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required><br>
            <label for="nameerror" id="nameError" style="color:brown;"></label>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required><br>
            <label for="ageerror" id="ageError" style="color:brown;"></label>
            <label for="Phone">Phone Number:</label>
            <input type="tel" id="Phone" name="Phone" required><br> 
            <label for="phoneerror" id="phoneError" style="color:brown;"></label>
            <label for="email">Email Adress:</label>
            <input type="email" id="email" name="email" required><br>
            <label for="emailerror" id="emailError" style="color:brown;"></label>
            <label for="insurance">Insurance Provider:</label><br>
            <select id="insurance" name="insurance" required><br>
                <option value="none">Select Insurance Provider</option>
                <option value="provider1">Provider 1</option>
                <option value="provider2">Provider 2</option>
                <option value="provider3">Provider 3</option>
                </select><br>
            <label for="insuranceerror" id="insuranceError" style="color:brown;"></label>
            <label for="policy">Policy Number:</label>
            <input type="text" id="policy" name="policy"><br>
            <label for="policyerror" id="policyError" style="color:brown;"></label>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>
            <label for="usernameerror" id="usernameError" style="color:brown;"></label>
            <label for="password">Password:</label>     
            <input type="password" id="password" name="password" required><br>
            <label for="passworderror" id="passwordError" style="color:brown;"></label>
            <label for="confirmPassword">Confirm Password:</label>  
            <input type="password" id="confirmPassword" name="confirmPassword" required><br><br>
            <label for="confirmPassworderror" id="confirmPasswordError" style="color:brown;"></label>
            <input type="submit" value="Register">      
            <input type="reset" value="Reset">
            <br><br>    
           </b>
           </form>
           </center>
           <script src="../Patient_JS/patient.js"></script>
    </body>
</html>