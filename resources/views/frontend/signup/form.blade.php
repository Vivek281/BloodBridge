<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BloodBridge - Sign Up</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/signup.css')}}">
</head>

<body>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

    <div class="container-fluid">
        <div class="row signup-container">
            <div class="col-lg-8 mx-auto">
                <div class="card signup-card">
                    <div class="row g-0">
                        <!-- Left Side: Informational Text -->
                        <div class="col-md-5 signup-info-side d-flex flex-column align-items-center justify-content-center text-center">
                           <div>
                                <i class="fas fa-heartbeat fa-3x mb-4 text-white"></i>
                                <h1 class="fw-bold text-white">Join Our Lifesaving</h1>
                                <h1 class="fw-bold text-white mb-4">Community.</h1>
                                <p class="lead text-white-50">Become a hero today. Your registration is the first step towards saving a life.</p>
                           </div>
                        </div>

                        <!-- Right Side: Form -->
                        <div class="col-md-7">
                            <div class="signup-form-side">
                                <div class="text-center mb-4">
                                    <h2 class="fw-bold">Create an Account</h2>
                                    <p class="text-muted">Join BloodBridge to help save lives.</p>
                                </div>

                                <!-- Signup Form -->
                                <form action = "{{route('signup')}}" method='POST'>
                                    @csrf
                                    <!-- Full Name Input -->
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" required>
                                    </div>

                                    <!-- Email Input -->
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                                    </div>

                                    <!-- Register As Dropdown -->
                                    <div class="mb-3">
                                        <label for="role" class="form-label">Register as</label>
                                        <select class="form-select" id="role" name="role" required>
                                            <option selected disabled value="">Choose...</option>
                                            <option value="donor" >Donor</option>
                                            <option value="recipient" >Recipient</option>
                                        </select>
                                    </div>

                                    <!-- Password Input -->
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Create a Password" required>
                                    </div>

                                     <!-- Confirm Password Input -->
                                     <div class="mb-3">
                                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm your Password" required>
                                    </div>

                                    <!-- Signup Button -->
                                    <div class="d-grid mt-4">
                                        <button type="submit" class="btn btn-primary">Create Account</button>
                                    </div>

                                </form>

                                <!-- Login Link -->
                                <div class="text-center mt-4">
                                    <p class="text-muted">Already have an account? <a href="{{route('login.form')}}" class="fw-bold text-decoration-none">Sign In</a></p>
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
