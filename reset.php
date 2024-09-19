<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="icon" type="image/x-icon" href="/assets/fav.ico">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.3/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .container {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .logo {
            text-align: center;
            font-size: 40px;
            margin-bottom: 20px;
            color: #0d47a1;
        }
        .logo i {
            margin-right: 10px;
        }
        .social-links {
            margin-top: 20px;
            text-align: center;
        }
        .social-links a {
            margin: 0 10px;
            color: #0d47a1;
            text-decoration: none;
        }
        .social-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="form-container">
        <!-- Logo -->
        <div class="logo">
            <i class="bi bi-book"></i> Library
        </div>

        <!-- Forgot Password Form -->
        <h2 class="text-center mb-4">Forgot Your Password?</h2>
        <p class="text-center mb-4">Enter your email address to receive a password reset link.</p>
        <form class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" required>
                <div class="invalid-feedback">
                    Please enter a valid email address.
                </div>
            </div>
            <button class="btn btn-primary w-100" type="submit">Send Reset Link</button>
        </form>

        <!-- Social Media Links -->
        <div class="social-links">
            <p class="mt-4">Need help? Contact us:</p>
            <a href="https://wa.me/yourphonenumber" target="_blank">
                <i class="bi bi-whatsapp"></i> WhatsApp
            </a>
            <a href="https://t.me/yourusername" target="_blank">
                <i class="bi bi-telegram"></i> Telegram
            </a>
        </div>
    </div>
</div>

<script>
    (() => {
        'use strict'

        const form = document.querySelector('.needs-validation')

        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
    })()
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
</body>
</html>