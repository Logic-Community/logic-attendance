<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIC COMMUNITY</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div class="container">
        <div class="login-box">
            <h1>Welcome</h1>
            <p>Logic member!</p>
            <form id="loginForm">
                <input type="number" id="nisn" placeholder="NISN" required>
                <input type="number" id="roomCode" placeholder="Room Code" required>
                <button type="submit">Enroll Now</button>
            </form>
        </div>
    </div>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/enroll.js') }}"></script>
</body>
</html>
