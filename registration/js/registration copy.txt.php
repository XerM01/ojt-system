<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="css/registration.css">
    <script defer src="js/registration.js"></script>
</head>

<body>

    <div class="container">
        <!-- ✅ Row 1: Back Button & System Title -->
        <div class="header">
            <a href="../login/login.php" class="back-btn">← Back to Login</a>
            <span class="system-title">Student Internship Program <br> Management System</span>
        </div>

        <!-- ✅ Row 2: Registration Form Title -->
        <h2 class="title">Student Registration Form</h2>

        <!-- ✅ Row 3-7: Correctly Aligned Form Fields -->
        <form action="register_process.php" method="POST" id="registrationForm">

            <div class="row">
                <div>
                    <label>School ID Number</label>
                    <input type="text" name="school_id" class="w-school-id" required>
                </div>
                <div class="w-sex">
                    <label>Sex</label>
                    <select name="sex" required>
                        <option value="">Choose..</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div>
                    <label>Email Address</label>
                    <input type="email" name="email" class="w-email" required>
                </div>
            </div>

            <div class="row">
                <div><label>First Name</label><input type="text" name="fname" class="w-first-name" required></div>
                <div><label>Middle Name</label><input type="text" name="mname" class="w-middle-name"></div>
                <div><label>Last Name</label><input type="text" name="lname" class="w-last-name" required></div>

                <div><label>Username</label><input type="text" name="username" class="w-username" required></div>
            </div>

            <div class="row">
                <div><label>Phone Number</label><input type="text" name="phone" class="w-phone" required></div>
                <div><label>Address</label><input type="text" name="address" class="w-address" required></div>

                <div><label>Password</label><input type="password" name="password" class="w-password" required></div>
            </div>

            <div class="row">
                <div><label>Institute</label>
                    <select name="institute" class="w-institute" required>
                        <option value="">Select Institute..</option>
                        <option value="Engineering">Institute of Engineering</option>
                        <option value="Management">Institute of Management</option>
                    </select>
                </div>
                <div><label>Confirm Password</label><input type="password" name="confirm_password" class="w-confirm-password" required></div>
            </div>

            <div class="row">
                <div><label>Course</label><select name="course" class="w-course" required>
                        <option value="">Select Course..</option>
                    </select></div>
                <div><label>Year & Section</label><select name="year_section" class="w-year-section" required>
                        <option value="">Choose..</option>
                    </select></div>
                <button type="submit" class="register-btn w-register">REGISTER</button>
            </div>

        </form>
    </div>

</body>

</html>