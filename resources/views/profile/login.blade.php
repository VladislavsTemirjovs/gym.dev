<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            background-color: black;
            color: yellow;
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .form-group {
            margin-bottom: 20px;
            width: 480px;
        }
        .form-group label {
            display: block;
        }
        .form-group input[type="text"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid yellow;
            border-radius: 4px;
            background-color: black;
            color: yellow;
        }
        .button-group {
            display: flex;
            justify-content: space-between;
            width: 500px;
        }
        .button-group button {
            flex: 1;
            margin-right: 10px;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            background-color: yellow;
            color: black;
            cursor: pointer;
        }
        .button-group button:last-child {
            margin-right: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>RMI GYM</h1>
        <form method="POST" action="#">
            @csrf
            <div class="form-group">
                <label for="login">Lietotājvārds</label>
                <input type="text" id="login" name="login" required>
            </div>
            <div class="form-group">
                <label for="password">Parole</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="button-group">
                <button type="submit">Pieslēgties</button>
                <button type="button" onclick="window.location.href='{{ route('profile.create') }}'">Reģistrēties</button>
                <button type="button">Ienākt kā ciemiņš</button>
            </div>
        </form>
    </div>
</body>
</html>