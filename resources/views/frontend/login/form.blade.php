<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BloodBridge - Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/login.css')}}">
</head>
<body>

    <div class="container-fluid">
        <div class="row login-container">
            <div class="col-lg-8 mx-auto">
                <div class="card login-card">
                    <div class="row g-0">
                        <!-- Left Side: Informational Text -->
                        <div class="col-md-5 login-image-side d-flex flex-column align-items-center justify-content-center text-center">
                           <div>
                                <i class="fas fa-tint fa-3x mb-4 text-white"></i>
                                <h1 class="fw-bold text-white">Connect. Donate.</h1>
                                <h1 class="fw-bold text-white mb-4">Save Lives.</h1>
                                <p class="lead text-white-50">Your single act of kindness can bring a lifetime of happiness to someone in need.</p>
                           </div>
                        </div>

                        <!-- Right Side: Form -->
                        <div class="col-md-7">
                            <div class="login-form-side">
                                <div class="text-center mb-4">
                                    <h2 class="fw-bold">Welcome to BloodBridge</h2>
                                    <p class="text-muted">Sign in to connect with donors and recipients.</p>
                                </div>

                                <!-- Login Form -->
                                <form>
                                    <!-- Email Input -->
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
                                    </div>

                                    <!-- Password Input -->
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" placeholder="Password" required>
                                    </div>

                                    <!-- Remember Me & Forgot Password -->
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">
                                                Remember me
                                            </label>
                                        </div>
                                        <a href="#" class="text-decoration-none">Forgot password?</a>
                                    </div>

                                    <!-- Login Button -->
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Sign In</button>
                                    </div>
                                    
                                    <div class="divider-text">
                                        <span>OR</span>
                                    </div>

                                    <!-- Social Login Buttons -->
                                    <div class="d-grid gap-2">
                                         <button class="btn btn-light border" type="button">
                                            <i class="fab fa-google me-2"></i> Continue with Google
                                        </button>
                                         <button class="btn btn-light border" type="button">
                                            <i class="fab fa-facebook-f me-2"></i> Continue with Facebook
                                        </button>
                                    </div>

                                </form>

                                <!-- Sign Up Link -->
                                <div class="text-center mt-4">
                                    <p class="text-muted">Don't have an account? <a href="#" class="fw-bold text-decoration-none">Register to save lives</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>