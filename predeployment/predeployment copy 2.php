<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre-Deployment Requirements</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../predeployment/css/predeployment.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Left Sidebar -->
            <div class="col-md-3 sidebar">
                <div class="header d-flex align-items-center">
                    <button class="back-button me-2"><i class="fas fa-arrow-left"></i> Back</button>
                    <h5 class="mb-0">Pre-Deployment</h5>
                </div>
                <input type="text" placeholder="Search..." class="search-bar">
                <div class="card">
                    <img src="profile.jpg" alt="Profile" class="profile-image">
                    <div class="card-content">
                        <p class="student-id">Student ID: 12345</p>
                        <p class="full-name">John Doe</p>
                        <p class="course">Course: Computer Science</p>
                        <p class="company">Company: Tech Corp</p>
                    </div>
                    <div class="arrow-right"><i class="fas fa-arrow-right"></i></div>
                </div>
            </div>
            
            <!-- Main Content Full Width -->
            <div class="col-md-9 main-content">
                <div class="table-container">
                    <!-- Header Row -->
                    <div class="table-header">
                        <div class="table-cell">Date</div>
                        <div class="table-cell">Track</div>
                        <div class="table-cell">Upload Files</div>
                        <div class="table-cell">Status</div>
                        <div class="table-cell">Action</div>
                        <div class="table-cell">Comment</div>
                        <div class="table-cell">Feedback</div>
                    </div>
                    
                    <!-- Data Row 1 -->
                    <div class="table-row">
                        <div class="table-cell" rowspan="2">Mar 11, 2025 2:53 PM</div>
                        <div class="table-cell">
                            <div class="dot green small-dot"></div>
                            <div class="line"></div>
                        </div>
                        <div class="table-cell">Lorem Ipsum is simply dummy text.</div>
                        <div class="table-cell text-success fw-bold">Accepted</div>
                        <div class="table-cell icon-group">
                            <i class="fas fa-download text-primary icon" data-bs-toggle="tooltip" title="Download"></i>
                            <i class="fas fa-magnifying-glass text-info icon" data-bs-toggle="tooltip" title="View"></i>
                            <i class="fas fa-edit text-warning icon" data-bs-toggle="tooltip" title="Edit"></i>
                            <div class="form-check form-switch d-inline-block">
                                <input class="form-check-input" type="checkbox">
                            </div>
                        </div>
                        <div class="table-cell">Lorem Ipsum is simply dummy text.</div>
                        <div class="table-cell">Lorem Ipsum is simply dummy text.</div>
                    </div>

                    <!-- Data Row 2 (Second entry under same timestamp) -->
                    <div class="table-row">
                    <div class="table-cell">Mar 12, 2025 10:15 AM</div>
                        <div class="table-cell">
                            <div class="dot red"></div>
                            <div class="line"></div>
                        </div>
                        <div class="table-cell">Another file uploaded.</div>
                        <div class="table-cell text-danger fw-bold">Rejected</div>
                        <div class="table-cell icon-group">
                            <i class="fas fa-download text-primary icon" data-bs-toggle="tooltip" title="Download"></i>
                            <i class="fas fa-magnifying-glass text-info icon" data-bs-toggle="tooltip" title="View"></i>
                            <i class="fas fa-edit text-warning icon" data-bs-toggle="tooltip" title="Edit"></i>
                            <div class="form-check form-switch d-inline-block">
                                <input class="form-check-input" type="checkbox">
                            </div>
                        </div>
                        <div class="table-cell">Lorem Ipsum is simply dummy text.</div>
                        <div class="table-cell">Lorem Ipsum is simply dummy text.</div>
                    </div>

                    <!-- Data Row 3 (New timestamp) -->
                    <div class="table-row">
                        <div class="table-cell">Mar 12, 2025 10:15 AM</div>
                        <div class="table-cell">
                            <div class="dot red"></div>
                            <div class="line"></div>
                        </div>
                        <div class="table-cell">Different file upload</div>
                        <div class="table-cell text-warning fw-bold">Pending</div>
                        <div class="table-cell icon-group">
                            <i class="fas fa-download text-primary icon" data-bs-toggle="tooltip" title="Download"></i>
                            <i class="fas fa-magnifying-glass text-info icon" data-bs-toggle="tooltip" title="View"></i>
                            <i class="fas fa-edit text-warning icon" data-bs-toggle="tooltip" title="Edit"></i>
                            <div class="form-check form-switch d-inline-block">
                                <input class="form-check-input" type="checkbox">
                            </div>
                        </div>
                        <div class="table-cell">Lorem Ipsum is simply dummy text.</div>
                        <div class="table-cell">Lorem Ipsum is simply dummy text.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Tooltip Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    </script>
</body>
</html>