
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BloodBridge - Request Blood</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/requests.css')}}">

</head>
<body>

    <div class="container">
        <div class="row form-container">
            <div class="col-md-8 col-lg-6 mx-auto">
                <div class="card request-card">
                    <div class="request-card-body">
                        <div class="text-center mb-4">
                            <i class="fas fa-hand-holding-medical fa-3x mb-3" style="color: #e74c3c;"></i>
                            <h2 class="fw-bold">Make a Blood Request</h2>
                            <p class="text-muted">Fill out the form below to notify nearby donors.</p>
                        </div>

                        <!-- Blood Request Form -->
                        <form method="POST" action="{{route('blood-request.store')}}">
                            @csrf
                            <!-- Blood Group Dropdown -->
                            <div class="mb-3">
                                <label for="blood_group" class="form-label">Blood Group</label>
                                <select class="form-select" id="blood_group" name="blood_group" required>
                                    <option selected disabled value="">Select Blood Group...</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>
                            </div>

                            <!-- Units Required Input -->
                            <div class="mb-3">
                                <label for="unitsRequired" class="form-label">Units Required</label>
                                <input type="number" class="form-control" name="units" id="unitsRequired" placeholder="e.g., 2" min="1" required>
                            </div>

                            <!-- Urgency Level Dropdown -->
                            <div class="mb-3">
                                <label for="urgencyLevel" class="form-label">Urgency Level</label>
                                <select class="form-select" name="urgency_level" id="urgencyLevel" required>
                                    <option selected disabled value="">Select Urgency...</option>
                                    <option value="low">Low</option>
                                    <option value="medium">Medium</option>
                                    <option value="high">High</option>
                                </select>
                            </div>

                            <!-- Hospital Name Input -->
                            <div class="mb-3">
                                <label for="hospitalName" class="form-label">Hospital Name</label>
                                <input type="text" class="form-control" name="hospital_name" id="hospitalName" placeholder="Enter hospital name" required>
                            </div>

                             <!-- Location Input -->
                             <div class="mb-3">
                                <label for="location" class="form-label">Location</label>
                                <input type="text" class="form-control" name="location" id="location" placeholder="e.g., City, State or Hospital Address" required>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary">Submit Request</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

