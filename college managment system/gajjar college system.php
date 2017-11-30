<!DOCTYPE html>
<html>
<style>
    form {
        border: 3px solid #f1f1f1;
    }

    input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        opacity: 0.8;
    }

    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }

    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
    }

    img.avatar {
        width: 40%;
        border-radius: 50%;
    }

    .container {
        padding: 16px;
    }

    span.psw {
        float: right;
        padding-top: 16px;
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
        .cancelbtn {
            width: 100%;
        }
    }
    .colleage{color: black;}
    .colleage:hover{color: #9c27b0;}
 #myId
 {
     background-color: #4176AF;
     width: 100%;
     height: 70px;
 }
    .fghf{color: #202050}
    .fghf:hover{color: red;}

</style>
<body bgcolor="#deb887">
<form action="colleage1.php" method="post">
<div id="myId">
    <h1 align="center" class="fghf">college mangment system</h1>
</div>
<h2>Login Form</h2>
    <div class="imgcontainer">
        <img class="rg_ic rg_i" data-src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRh1iwix1NKc4pfhCZw0ILxwuARwilsfrw3iethzVX60ZugBabXAQ" data-sz="f" name="Jjq5a5o5G80fpM:" alt="Image result for avatar from login form" jsaction="load:str.tbn" onload="google.aft&amp;&amp;google.aft(this)" style="width: 176px; height: 175px; margin-left: -41px; margin-right: 0px; margin-top: 0px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRh1iwix1NKc4pfhCZw0ILxwuARwilsfrw3iethzVX60ZugBabXAQ">
    </div>


     <div class="container" id="darsh">
	 <table>
        <label class="colleage"><b>Username</b></label>
        <input type="text" placeholder="Enter gajjar darshit system" name="username" required>
		<script>
    function darshit(f)
    {
        var dd=f.password.value,ee=f.confirmation_password.value;
        if(dd==ee)
        {
            window.location="colleage1.html";
        }
        else
        {
            document.write("<h1 align='center' class='fghf'>sorry!please type right password</h1>")
        }
    }
</script>
        <label class="colleage"><b>Password</b></label>
        <input type="password" placeholder="Enter gajjar darshit system Password" name="password" required/>
    <br/>
        <label class="colleage"><b>confirm Password</b></label>
        <input type="password" placeholder="Enter gajjar darshit system confirm Password" name="confirmation_password" required/>
		
    <button type="submit" value="value" />Login</button>
	</table>
        <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <button type="reset" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
</form>
</body>
</html>
