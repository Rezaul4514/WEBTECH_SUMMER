<!DOCTYPE html>
<html>
<head>
    <title>MID_Task_2</title>
 </head>   
<body>
    <Center>
        <h1><b>Bank Management System</b></h1>
        <h3>Your Trusted Financialer Partner</h3>
    </Center>
    <h3>Customer Registration Form</h3>
  <form>
    <style>
        body {
            background-color: rgba(203, 223, 219, 0.37);
        }
        h1, h3 {
            color: rgba(21, 39, 72, 1);
        }
        table {
            background-color: #ffffffff;   
            border: 1px solid #ffffffff;
            margin: 20px ;
            padding: 20px;
        }
        </style>
    <table>
        <tr>
            <td>Full name:</td>
            <td><input type="text" name="customer_name" required></td>
        </tr>
        <tr>
            <td>
               Date of Birth:</td> 
                <td> <input type="date" name="dob" required></td>
           
        </tr>
        <tr>
            <td>Gender:</td>
            <td><input type="radio" name="des" >Male
            <input type="radio" name="des">Female
            <input type="radio" name="des">Other</td>
        </tr> 
        <tr>
            <td>Maritial Status:</td>
            <td><select name="">
                <option value="single">Single</option>
                <option value="married">Married</option>
                <option value="divorced">Divorced</option>
            </select> 
            </td>
        </tr>
        <tr>
            <td>Account Type:</td>
            <td>
                <select name="" >
                    <option value="savings">Savings</option>
                    <option value="current">Current</option>
                    <option value="fixed">Fixed Deposit</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Initial Deposit Amount:</td>
            <td><input type="number" name="initial_deposit" required></td>
        </tr>
        <tr>
            <td>Mobile Number:</td>
             <td><input type="text" ></td>
        </tr>
        <tr>
            <td>Email Adress:</td>
            <td><input type="email"  required></td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><textarea name="address" rows="3" cols="30" required></textarea></td>
        </tr>
        <tr>
            <td>
                Occupation:</td>
                <td><input type="text"></td>
        </tr>
        <tr>
            <td>
                National ID (NID):</td>
                <td><input type="text" ></td>
        </tr>
        <tr>
            <td>
                Set Password:</td>
                <td><input type="text" ></td>
        </tr>
        <tr>
            <td>
                Confirm Password:</td>
                <td><input type="text" ></td>   
        </tr>
        <tr>
            <td>
                Update Id Proof:
            </td>
            <td>
                <input type="file" >
            </td>
        <tr>
            <td colspan="2"><input type="submit" value="Register"
             colspan="3" ><input type="submit" value="clear"></td>
        </tr>
    </table>
  </form>  
</body>
</html>