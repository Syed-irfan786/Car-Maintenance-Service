<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    
    <style>
       body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: url('{{ asset('Images/img1.png') }}') center/cover no-repeat;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

label {
    display: block;
    margin-bottom: 10px;
}

input {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #555;
}

.error-box {
    background-color: #ffcccc;
    color: #990000;
    padding: 10px;
    border: 1px solid #990000;
    border-radius: 5px;
    margin-top: 10px;
}

       
       
    </style>
</head>
<body>
    

    <div class="login-container">
        <h2>Login</h2>

        <form action="/login" method="post">
            @csrf <!-- Laravel CSRF token -->

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name ="password" required>

            <button type="submit">Log In</button>
          
        </form>
        New User? Register here <a onclick="window.location='/createaccount'" style="color:blue; cursor:pointer;"> REGISTER</a>

        @if(session('error'))
        <div class="error-box">
            {{ session('error') }}
        </div>
    @endif
    </div>

</body>
</html>
