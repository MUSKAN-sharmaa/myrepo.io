
<!doctype html>
<html>
<head>
    <style>
        form {
            width: 250px;
            height: 300px;
            background-color: pink;
            border: 2px solid black;
        }
        span {
            color: red;
        }
        .message1 {
            color: red;
            background-color: black;
            display: none;
        }
    </style>
</head>
<body>
    <form name="studentform" onsubmit="return validateform()" action="edituser.php?id=<?php echo $id; ?>" method="post">
        Name<span>*</span><input type="text" name="name" id="name" placeholder="muskan" value="<?php echo htmlspecialchars($row['name']); ?>"> 
        <div id="nameerror" class="message1">Name is required</div><br><br>

        E-mail<span>*</span><input type="text" name="email" id="email" placeholder="abc@gmail.com" value="<?php echo htmlspecialchars($row['email']); ?>">
        <div id="nameerror1" class="message1">Please enter a valid email address</div><br><br>

        Contact<span>*</span><input type="text" name="phone" id="phone" maxlength="10" placeholder="9010001000" value="<?php echo htmlspecialchars($row['phone']); ?>">
        <div id="nameerror2" class="message1">Please enter valid Phone number(contains 10 digit number)</div><br><br><br><br>
        
        <center><input type="submit" name="submit" id="submit" value="Submit"></center>
    </form>
    <div id="response" class="message1"></div>

    <script>
    function validateform() {
        var name = document.forms["studentform"]["name"].value;
        var email = document.forms["studentform"]["email"].value;
        var phone = document.forms["studentform"]["phone"].value;

        if (name.trim() === "") {
            document.getElementById("nameerror").style.display = "block";
            return false;
        } else {
            document.getElementById("nameerror").style.display = "none";
        }
        
        var validemail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,6}$/;
        if (!validemail.test(email)) {
            document.getElementById("nameerror1").style.display = "block";
            return false;
        } else {
            document.getElementById("nameerror1").style.display = "none";
        }

        var contact = /^[0-9]{10}$/;
        if (!contact.test(phone)) {
            document.getElementById("nameerror2").style.display = "block";
            return false;
        } else {
            document.getElementById("nameerror2").style.display = "none";
        }

        return true;
    }
    </script>
</body>
</html>
