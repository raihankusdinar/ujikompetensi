<!DOCTYPE html> 
</html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1">
    <title>website galeri foto</title>
    <link rel="stylesheet" typr="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">web galeri foto</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbrNavAltMarkup" aria-controls="#navbrNavAltMarkup" aria-expanded="false aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 24 24">
                    <path d="M 3 5 A 1.0001 1.0001 0 1 0 3 7 L 21 7 A 1.0001 1.0001 0 1 0 21 5 L 3 5 z M 3 11 A 1.0001 1.0001 0 1 0 3 13 L 21 13 A 1.0001 1.0001 0 1 0 21 11 L 3 11 z M 3 17 A 1.0001 1.0001 0 1 0 3 19 L 21 19 A 1.0001 1.0001 0 1 0 21 17 L 3 17 z">
                    </path>
                </svg>
            <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse mt-2" id="#navbrNavAltMarkup">
    <div class="navbar-nav me-auto">
</div>
<a href="register.php" class="btn btn-outline-primary m-1">daftar</a>
<a href="login.php" class="btn btn-outline-primary m-1">masuk</a>
</div>
</div>
</nav>

    <hr>
    <br><br>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body bg-light">
                        <div class="text-center">
                            <h5>Login Aplikasi</h5>
                        </div>
                        <form action="config/proses_login.php" method="post">
                            <label for="" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" required>
                            <label for="" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" required>
                            <div class="d-grid mt-2">
                                <button class="btn btn-primary" type="submit" name="kirim">Login</button>
                            </div>
                        </form>
                        <hr>
                        <p>Belum punya akun? <a href="register.php">Daftar disini!</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <br><br>

<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
    <p>&copy; ukk 2024</P>
</footer>

<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>