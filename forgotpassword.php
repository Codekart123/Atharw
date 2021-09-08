<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .modal-window>div {
            width: 400px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 2em;
            background: white;
            box-shadow: 5px 10px 40px #38383868;
            border: 1px solid #aaa;
        }

        .modal-close {
            color: #aaa;
            line-height: 50px;
            font-size: 80%;
            position: absolute;
            right: 10px;
            text-align: center;
            top: 0;
            width: 70px;
            text-decoration: none;
        }

        .modal-close:hover {
            color: black;
        }

        /* Demo Styles */

        html,
        body {
            height: 100%;
            font-size: 18px;
            line-height: 1.4;
        }

        body {
            font-family: apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
                Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
            font-weight: 600;
            background-image: linear-gradient(to right, orangered 0, #657ced 100%);
            color: black;
        }

        .modal-window>div {
            border-radius: 1rem;
        }
    </style>
</head>

<body>
    <div class="modal-window">
        <div>
            <a href="./register.html" class="modal-close">Go Back</a>
            <form action="./process/passwordlink.php" method="post">
                <label for="" style="font-size: 12px; background-color: #fff; padding: 2px; position: absolute; left: 50px; top: 45px;">Enter
                    your
                    Email</label>
                <input style="width: 100%; height: 2rem; font-size: 16px;  border-radius: 5px; margin-top: 20px; outline: none;" id="email" type="email" autocomplete="false" name="email" onsubmit="return validateEmail()">
                <button style="padding: 10px 20px; border-radius:5px; background-color: #000; color: #fff; border: none; margin-top: 10px;" type="submit" name="emailsubmit">Recover
                    Password</button><br>
            </form>
            <!-- <small style="color: orangered;">*Recover link sent to you email address.</small> -->
        </div>
    </div>


    <script>
        function validateEmail(){
            email = document.getElementById('email').value;
            if(email == ""){
                alert ("Please Enter your mail id");    
                return false;
            }
            if(email.indexOf('@') <= 0){
                alert ("invalid position of @");    
                return false;
            }
            if((email.charAt(mail.length-4) != '.') && (email.charAt(email.length-3) != '.')){
                alert("invalid '.' position");    
                return false;
            }

            return true;
        }
    </script>
</body>

</html>