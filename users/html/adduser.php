<!doctype html>
<html>
<head>
    <style>
         body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #fdf5e6; /* Light cream background */
            font-family: Arial, sans-serif;
        }
        
        form {
            width: 450px;
            background-color: #ffe4e1; /* Soft pink */
            border: 2px solid #ff69b4; /* Hot pink border */
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2); /* Adding shadow */
            text-align: center;
        }

        /* Form title styling */
        h2 {
            color: #ff1493; /* Deep pink color */
            margin-bottom: 20px;
        }

        /* Styling input fields */
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ff69b4; /* Soft pink border */
            border-radius: 10px;
            outline: none;
            font-size: 18px;
            color: #333;
        }

        /* Placeholder styling */
        input::placeholder {
            color: #ff69b4; /* Placeholder pink color */
        }

        /* Submit button styling */
        input[type="submit"] {
            width: 100%;
            background-color: #ff69b4; /* Hot pink */
            color: white;
            padding: 12px;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-bottom:100px;
        }

        /* Hover effect on the submit button */
        input[type="submit"]:hover {
            background-color: #ff1493; /* Darker pink */
        }

        /* Error message styling */
        .message1 {
            color: white;
            background-color: #ff6347; /* Tomato color for visibility */
            padding: 8px;
            border-radius: 8px;
            margin-top: 8px;
            display: none; /* Hidden by default */
        }

        /* Required field indicator */
        span {
            color: #ff6347; /* Red to indicate required fields */
        }
        a.btn-back {
    background-color: #28a745; /* Bootstrap success green */
    color: white;
    padding: 10px 90px;
    border-radius: 8px;
    font-size: 16px;
    font-weight: bold;
    text-decoration: none; /* Remove underline */
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); /* Add shadow */
    transition: background-color 0.3s, box-shadow 0.3s;
}

a.btn-back:hover {
    background-color: #218838; /* Darker green on hover */
    box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.3); /* Deepen shadow on hover */
}
button.btn-submit {
    background-color: #ff69b4; /* Hot pink background */
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); /* Adding shadow */
    transition: background-color 0.3s, box-shadow 0.3s;
}

button.btn-submit:hover {
    background-color: #ff1493; /* Darker pink on hover */
    box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.3); /* Deepen shadow on hover */
}

button.btn-submit:active {
    background-color: #c71585; /* Even darker pink on click */
    box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.2); }


        </style>
        </head>
<body>
        <form name="studentform" id="studentform" onsubmit="return validateform()" action="adduser.php" method="post">
        Name<span>*</span><input type="text" name="name" id="name" placeholder="muskan" > 
            <div id="nameerror" class="message1">Name is required</div><br><br>

        E-mail<span>*</span> <input type="text" name="email" id="email" placeholder="abc@gmail.com" >
        <div id="nameerror1" class="message1">Please enter a valid email address</div><br><br>

        Contact<span>*</span> <input type="text" name="phone" id="phone" maxlength="10" placeholder="9010001000">
        <div id="nameerror2" class="message1">Please enter valid Phone number(contains 10 digit number)</div><br><br><br><br>
        
        <center> <input type="submit" name="submit" id="submit" value="save"></center>
        <button type="button" class="btn-submit" onclick="saveDataWithoutReload()">Submit</button>

       <a href="index.php" class="btn-back">Back</a>
        </form>
        <div id="response" class="message1"></div>


<script>
function validateform(){
    var name = document.forms["studentform"]["name"].value;
    var email = document.forms["studentform"]["email"].value;
    var phone = document.forms["studentform"]["phone"].value;

 


    if(name.trim() === "")
    {
        //alert("Name is required");
        document.getElementById("nameerror").style.display="block";
        return false;
    }
    else
    {
        document.getElementById("nameerror").style.display="none";
    }
    
    var validemail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA_Z]{2,6}$/;
    //if(email.trim() ==="")
    if(!validemail.test(email))
    {
        //alert("Please enter a valid email address");
        document.getElementById("nameerror1").style.display="block";
        return false;
    }
    else
    {
        document.getElementById("nameerror1").style.display="none";
    }

    var contact = /^[0-9]{10}/;
    if(!contact.test(phone))
    {
        //alert("Please enter valid Phone number");
        document.getElementById("nameerror2").style.display="block";
        return false;
    
    }
    else
    {
        document.getElementById("nameerror2").style.display="none";
    }
   console.log("heloo");
   return true;
    
}

/*creating ajax
function submitform(name,email,phone)
{
            const request = XMLHttpRequest();
            request.open("POST","welcome.php",true);
             request.setRequestHeader("Content-type","application/x-www-form-urlencoded");

request.onload=function()
{
    if(request.status === 200)
    { 
        document.getElementById("response").innerHTML=request.reposneText;
        document.getelementById("response").stlye.display="block";
        

    }

}
};
const formData = `name=${encodeURIComponent(name)}&email=${encodeURIComponent(email)}&phone=${encodeURIComponent(phone)}`;
xhr.send(formData);
request.send(formdata);
document.getElementById("studentform").onsubmit = function(event) {
    event.preventDefault();
}*/

function saveDataWithoutReload() {
          
   
            var form = document.getElementById('studentform');
           if(form){console.log('dt');
            var dt = new FormData(form);
           
            fetch('adduser_ajax.php', {
                method: 'POST',
                body: dt
            })
            .then(response => response.text())
            .then(data => {
               var hlo= JSON.parse(data);
                document.getElementById("response").innerHTML = hlo.message;
                document.getElementById("response").style.display = "block";
                form.reset();
            })
            .catch(error => console.error('Error:', error));
        }
}
       

</script>

</body>
</html>