<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        *{
            margin: 0;
            padding:0;
        }
        .img_login{
            width: 100%;
            
        }
        .body-login{ 
            width: 100%;
            overflow: hidden;
            animation: ease-in 5s;
        }
        .login-card {
            background-color: rgb(255, 255, 255); /* Lapisan transparan untuk kotak login */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-top: 12%;
            margin-left: 40%;
            padding: 30px;
            animation: ease-in 5s;
            width: 300px; /* Lebar kotak login */
        }
        @media screen and (min-width: 1024px) {
            .img_login{
                position: absolute;
                transition: all 0.3s ease-in-out;
            }
        }
        @media screen and (min-width: 768px) and (max-width: 1023px) {
            .img_login {
                width: 240%;
                max-width:  230%;
                margin-left: -150px;
                transition: all 0.3s ease-in-out;
            }
            .login-card{
                margin-top: -90%;
                margin-left:30%;
                transition: all 0.3s ease-in-out;
            }
        }
        @media screen and (max-width: 767px) {
            .img_login {
                width: 380%;
                max-width:  350%;
                margin-left: -150px;
                transition: all 0.3s ease-in-out;
            }
            .login-card{
                margin-top: -120%;
                margin-left:12%;
                transition: all 0.3s ease-in-out;
            }
        }
    </style>
</head>
<body>
    <div class="body-login">
        <img class="img_login  " src="LOGIN - 1.png" alt="">
        <div class="card login-card position-absolute">
            <div class="card-header text-center">
                Login
            </div>
            <div class="card-body">
                <form action="{{ route('post.login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter your password">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

