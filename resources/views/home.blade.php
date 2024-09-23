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
        <div class="vh-100 d-flex flex-column justify-content-center align-items-center">
            <h1 class="text-center text-white pb-2">
                LOGIC COMMUNITY
            </h1>

            <div class="box-login text-black mx-auto">
                <div class="form-group">
                    <label for="nisn">NISN</label>
                    <input type="text" class="form-control" id="nisn" aria-describedby="nisnHelp" placeholder="Enter your NISN">
                    <small id="nisnHelp" class="form-text text-muted">Make sure to enter your NISN correctly.</small>
                </div>
                <div class="form-group mt-2">
                    <label for="roomCode">Room Code</label>
                    <input type="text" class="form-control" id="roomCode" placeholder="Enter the Room Code">
                </div>
                <div class="d-grid gap-2 col-6 mx-auto mt-4">
                    <button class="btn btn-primary" type="button">Enroll</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
