<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link rel="stylesheet" href="{{ 'assets/css/style.css' }}">
    <title>Document</title>
</head>
<body>
    <div class="login-box">
        <div class="login-header">
            <h1 style="font-size: 50px">LOGIN</h1>
        </div>
        <div class="input-box">
            <input type="text" class="input-field" placeholder="Masukan Email" autocomplete="off" required>
        </div>
        <div class="input-box">
            <input type="password" class="input-field" placeholder="Masukan Password" autocomplete="off" required>
        </div> 
        <div class="btn">
            <button  class="submit-btn">Login</button>
        </div> <br>
        <div class="input-submit">
            <p>belum punya akun?    <a style="color: rgb(85, 107, 117)" href="/register">register</a></p>
        </div>
    </div>
</body>
</html>