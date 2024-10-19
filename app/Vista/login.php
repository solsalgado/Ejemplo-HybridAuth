<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"crossorigin="anonymous">

    <style>
        .bg-custom {
            background-color: #f0f4f8; 
        }
    </style>

</head>
<body class="bg-custom bg-light d-flex justify-content-center align-items-center min-vh-100">
    <div class="card p-5 shadow-lg" style="max-width: 470px;">
        <div class="text-center mb-4">
            <h1 class="h3 mb-3">Bienvenido</h1>
        </div>
        <form>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" placeholder="Contraseña" required>
                <label for="password">Contraseña</label>
            </div>
            <div class="d-flex justify-content-between mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me">
                    <label class="form-check-label" for="remember-me">Recordarme</label>
                </div>
                <a href="#" class="text-decoration-none ms-5">¿Olvidaste tu contraseña?</a>
            </div>
            <button type="submit" class="btn btn-primary w-100">Iniciar sesion</button>
        </form>
        <div class="text-center my-4">
            <hr>
            <p class="text-muted">O</p>
        </div>
        <div class="d-grid gap-2">
            <button class="btn btn-outline-secondary d-flex align-items-center justify-content-center">
                <img src="./Images/pngegg.png" alt="" width="20" class="me-2"><a href="/index.php?route=auth/login">Iniciar sesión con Google</a>
            </button>
        </div>
        <div class="text-center mt-4">
            <p>¿No tienes una cuenta? <a href="#" class="text-decoration-none">Registrate</a></p>
        </div>
    </div>

    <!-- Bootstrap JS -->
       <!-- Bootstrap JS -->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
