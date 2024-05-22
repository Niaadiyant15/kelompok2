<!-- 
<?php 
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
    <style>
        *{
            margin: 0;
        }
        .login{
            margin: auto;
            margin-top: 25px;
            width: 50%;
            height:320px;
            max-width: 1000px;
            /* background: red; */
            border: 2px solid black;
            border-radius: 5px;
        }

        .login h2{
            margin: 10% 0 8px 35%;
        }

        .register{
            margin-top: 10%;
            margin-left: 10%;
            width: 85%;
            display: grid;
            gap: 5px;
            /* background: red; */
        }
        label{
            margin-left: 2px;
        }
        input{
            margin: 0 0 5px 0;
            width: 80%;
            height: 25px;
            margin-left: 5px;
        }
        /* #username-label{
            font-size: 13px;
            /* opacity: 0; */
        /* } */
        #username-label:hover{
            animation: moveText 4s;
            animation-fill-mode: forwards;
           
        } */

        input:hover{
            border: 2px solid blue;
        }

        /* @keyframes moveText{
            to{
            opacity: 1;
            position: relative;
            background: white;
            top: 13px;
            left:15px;
            width: 70px;
            text-align: center;
            color: grey;
            }
        } */
        #daftar{
            width: 50%;
            height:30px;
            border-radius: 8px;
            border: none;
            margin: 15px 0 0 20%;
            /* min-width: none; */
            /* max-width: 100%; */
        }

        #daftar:hover{
            box-shadow: 0 0 5px black;
        }

    </style>
<body>
    <!-- Login Information -->
    <form action="" class="login">
        <h2>Register</h2>
        <div class="register">
            <label for="username" id="username-label">Username :</label>
            <input type="text" id="username" placeholder="username">
            <label for="password">Password</label>
            <input type="password" id="username">
            <button id="daftar">Daftar</button>
        </div>
    </form>
</body>
</html>