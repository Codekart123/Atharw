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


        /*  */
        .password-check-inp {
            width: 100%;
            height: 2rem;
            font-size: 16px;
            border-radius: 5px;
            margin-top: 20px;
            outline: none;
        }

        .inp-label {
            font-size: 12px;
            background-color: #fff;
            padding: 2px;
            position: absolute;
        }

        .label-position1 {
            left: 50px;
            top: 45px;
        }

        .label-position2 {
            left: 50px;
            top: 5.8rem;
        }
    </style>
</head>

<body>
    <div class="modal-window">
        <div>
            <a href="./register.html" class="modal-close">Login</a>
            <form action="./process/updatepassword.php" method="post">
                <label class="inp-label label-position1" for="">New Password</label>
                <input class="password-check-inp" type="password" name="password" autocomplete="false" minlength="8" required>
                <label class="inp-label label-position2" for="">Confirm Password</label>
                <input class="password-check-inp" type="password" name="cpassword" autocomplete="false" minlength="8" required>
                <button type="submit" name="updatepassword" style="padding: 10px 20px; border-radius:5px; background-color: #000; color: #fff; border: none; margin-top: 10px;">Reset Password</button><br>
            </form>
        </div>
    </div>

</body>
</html>