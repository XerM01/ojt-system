<?php
session_start();
include("../0config/session.php");

// Dummy user data (Replace with actual session data)
$username = $_SESSION["username"] ?? "Admin";
$userImage = "../resources/logo.jpg"; // Profile image path
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcement</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Custom CSS (Separate Files) -->
    <link rel="stylesheet" href="../announcement/css/topbar.css">
    <link rel="stylesheet" href="../announcement/css/leftsidebar.css">
    <link rel="stylesheet" href="../announcement/css/dashboard_body.css">
    <link rel="stylesheet" href="../announcement/css/announcement.css">
    <link rel="stylesheet" href="../announcement/css/announcement_table.css">

</head>

<body>

    <!-- Top Navigation Bar -->
    <nav class="navbar navbar-expand-lg topbar-container">
        <div class="container-fluid">
            <div class="d-flex align-items-center">
                <img src="../resources/logo.jpg" alt="Logo" class="logo me-2">
                <span class="system-name">Student Internship Program<br>Management System</span>
            </div>

            <div class="d-flex align-items-center topbar-right">
                <div class="notification-container" data-bs-toggle="modal" data-bs-target="#notificationModal">
                    <i class="fa-solid fa-bell text-warning fs-5 notification-icon"></i>
                    <span class="notification-badge">99</span>
                </div>

                <div class="dropdown">
                    <div class="d-flex align-items-center dropdown-toggle" id="userDropdown" data-bs-toggle="dropdown">
                        <img src="<?php echo htmlspecialchars($userImage); ?>" alt="User Profile" class="profile-img me-2">
                        <span class="fw-normal"> <?php echo htmlspecialchars($username); ?> </span>
                    </div>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="profile.php">View Profile</a></li>
                        <li><a class="dropdown-item text-danger" href="../0config/logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Notification Modal -->
    <div class="modal fade" id="notificationModal" tabindex="-1" aria-labelledby="notificationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-end">
            <div class="modal-content notification-modal">
                <div class="modal-header">
                    <h5 class="modal-title" id="notificationModalLabel">Notifications</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="list-group">
                        <div class="list-group-item border-bottom">
                            <div class="d-flex justify-content-between">
                                <strong>Announcement</strong>
                                <small class="text-muted">03-02-2025 ; 11:53PM</small>
                            </div>
                            <p class="small text-muted m-0">New Announcement from admin</p>
                        </div>
                        <div class="list-group-item border-bottom">
                            <div class="d-flex justify-content-between">
                                <strong>Chat Room</strong>
                                <small class="text-muted">03-02-2025 ; 11:53PM</small>
                            </div>
                            <p class="small text-muted m-0">New Announcement from Medel</p>
                        </div>
                        <div class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <strong>Comment</strong>
                                <small class="text-muted">03-02-2025 ; 11:53PM</small>
                            </div>
                            <p class="small text-muted m-0">New Announcement from trainer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sidebar  ####################################################################################################### -->
    <div class="container-fluid main-container">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-auto sidebar">
                <ul class="sidebar-menu">
                    <li><a href="../../1admin/admindashboard.php" data-bs-toggle="tooltip" title="Dashboard"><i class="fa-solid fa-th-large"></i></a></li>
                    <li><a href="dashboard.php" data-bs-toggle="tooltip" title="Home"><i class="fa-solid fa-house"></i></a></li>
                    <li><a href="analytics.php" data-bs-toggle="tooltip" title="Analytics"><i class="fa-solid fa-chart-line"></i></a></li>
                    <li><a href="orders.php" data-bs-toggle="tooltip" title="Orders"><i class="fa-solid fa-box"></i></a></li>
                    <li><a href="../../1admin/user_account/user_account.php" data-bs-toggle="tooltip" title="Customers"><i class="fa-solid fa-users"></i></a></li>
                    <li><a href="settings.php" data-bs-toggle="tooltip" title="Settings"><i class="fa-solid fa-cog"></i></a></li>
                    <li><a href="notifications.php" data-bs-toggle="tooltip" title="Notifications"><i class="fa-solid fa-bell"></i></a></li>
                    <li><a href="messages.php" data-bs-toggle="tooltip" title="Messages"><i class="fa-solid fa-envelope"></i></a></li>
                    <li><a href="profile.php" data-bs-toggle="tooltip" title="Profile"><i class="fa-solid fa-user"></i></a></li>
                    <li><a href="logout.php" data-bs-toggle="tooltip" title="Logout"><i class="fa-solid fa-sign-out-alt"></i></a></li>
                </ul>
            </div>
            <!-- Middle Dashboard (Dynamic Width) =======================================================================================================================-->
            <!-- ===================== Dashboard Main Layout (Ensuring Fixed Width) ===================== -->

            <div class="dashboard-container">
                <!-- ✅ Full Width Good Day Admin -->
                <h5 class="dashboard-header">
                    <div class="dashboard-main">
                        <!-- Middle Content - Dashboard -->
                        <div class="dashboard-content">
                            <br>
                            <div class="d-flex justify-content-between align-items-center mb-3 announcement-header">
                                <h5 class="announcement-title">Announcement</h5>
                                <div class="d-flex align-items-center">
                                    <input type="text" class="form-control search-input" id="searchInput" placeholder="Search...">
                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-tooltip="Add New Announcement">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" width="20" height="20" stroke-width="3" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor">
                                            <path d="M12 5l0 14"></path>
                                            <path d="M5 12l14 0"></path>
                                        </svg>
                                    </a>

                                </div>
                            </div>
                            <!-- ✅ Announcement Modal -->
                            <div class="modal fade" id="announcementModal" tabindex="-1" aria-labelledby="announcementModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="announcementModalLabel">Create New Post</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="announcementForm">
                                                <!-- ✅ Title Input -->
                                                <div class="mb-3">
                                                    <label for="title" class="form-label">Title</label>
                                                    <input type="text" class="form-control" id="title" placeholder="Enter title">
                                                </div>

                                                <!-- ✅ Dropdowns (To & Status) -->
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="to" class="form-label">To</label>
                                                        <select class="form-select" id="to">
                                                            <option value="All">All</option>
                                                            <option value="Students">Students</option>
                                                            <option value="Teachers">Teachers</option>
                                                            <option value="Admins">Admins</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="status" class="form-label">Status</label>
                                                        <select class="form-select" id="status">
                                                            <option value="Draft">Draft</option>
                                                            <option value="Published">Published</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <!-- ✅ Content Input -->
                                                <div class="mb-3">
                                                    <label for="content" class="form-label">Content</label>
                                                    <textarea class="form-control" id="content" rows="4" placeholder="Enter content here..."></textarea>
                                                </div>

                                                <!-- ✅ Buttons -->
                                                <div class="d-flex justify-content-end">
                                                    <!-- <button type="button" class="btn btn-danger me-2" data-bs-dismiss="modal">Cancel</button> -->
                                                    <button type="submit" class="btn btn-success">Post</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <!-- ✅ Announcements Table -->
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="announcementTable">
                                    <thead class="table-dark">
                                        <tr>
                                            <th onclick="sortTable(0)">No. <i class="fa-solid fa-sort"></i></th>
                                            <th onclick="sortTable(1)">Title <i class="fa-solid fa-sort"></i></th>
                                            <th onclick="sortTable(2)">Content <i class="fa-solid fa-sort"></i></th>
                                            <th onclick="sortTable(3)">To <i class="fa-solid fa-sort"></i></th>
                                            <th onclick="sortTable(4)">Posted <i class="fa-solid fa-sort"></i></th>
                                            <th onclick="sortTable(5)">Status <i class="fa-solid fa-sort"></i></th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-label="No.">1</td>
                                            <td data-label="Title"><strong>Maintenance System</strong></td>
                                            <td data-label="Content">Lorem Ipsum is simply dummy text...</td>
                                            <td data-label="To">All</td>
                                            <td data-label="Posted">Mar 10, 2025 - 11:53PM</td>
                                            <td data-label="Status"><span class="badge bg-success">Posted</span></td>
                                            <td data-label="Action">
                                                <div class="action-group">
                                                    <button class="btn btn-outline-secondary btn-sm" data-bs-toggle="tooltip" title="Update Post">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <div class="form-check form-switch" data-bs-toggle="tooltip" title="Post / Draft Response">
                                                        <input class="form-check-input" type="checkbox" checked>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td data-label="No.">2</td>
                                            <td data-label="Title"><strong>Maintenance System</strong></td>
                                            <td data-label="Content">Lorem Ipsum is simply dummy text...</td>
                                            <td data-label="To">All</td>
                                            <td data-label="Posted">Mar 10, 2025 - 11:53PM</td>
                                            <td data-label="Status"><span class="badge bg-danger">draft</span></td>
                                            <td data-label="Action">
                                            <div class="action-group">
                                                    <button class="btn btn-outline-secondary btn-sm" data-bs-toggle="tooltip" title="Update Post">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <div class="form-check form-switch" data-bs-toggle="tooltip" title="Post / Draft Response">
                                                        <input class="form-check-input" type="checkbox" checked>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                        </div>

                        <!-- ✅ Announcements Section -->
                        <div class="announcements">
                            <div class="announcement-header" style=" margin-top:30px;">
                                <h5>Announcement</h5>
                                <!-- <button class="manage-btn" onclick="window.location.href='../announcement/announcement.php';">Manage</button> -->
                                <button class="btn btn-secondary back-btn" onclick="history.back()">
                                    Back
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="20" height="20" stroke-width="2">
                                        <path d="M5 12l14 0"></path>
                                        <path d="M13 18l6 -6"></path>
                                        <path d="M13 6l6 6"></path>
                                    </svg>
                                </button>

                            </div>

                            <!-- ✅ Announcement Item (Fixed Profile Image Positioning) -->
                            <div class="announcement-item">
                                <div class="announcement-profile">
                                    <img src="../resources/profile.png" alt="User">
                                    <div class="announcement-info">
                                        <div>Medel Bunalade</div>
                                        <div class="announcement-role">Admin</div>
                                        <div class="announcement-time">03-02-2025 ; 11:53PM</div>
                                    </div>
                                </div>
                                <p class="announcement-title">Maintenance system</p>
                                <p class="announcement-text">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of type and scrambled it to make a type
                                    specimen book. It has survived not only five centuries, but also the leap into
                                    electronic typesetting.
                                </p>
                            </div>

                            <!-- ✅ Separator -->
                            <hr class="separator">

                            <!-- ✅ Comment Section -->
                            <div class="comment-section">
                                <h5 class="comment-label">Comment Section</h5>

                                <!-- ✅ Comment Item -->
                                <div class="comment-item">
                                    <div class="comment-profile">
                                        <img src="../resources/profile.png" alt="User">
                                        <div class="comment-details">
                                            <div>Medel Bunalade</div>
                                            <div class="comment-role">Admin</div>
                                            <div class="comment-time">03-02-2025 ; 11:53PM</div>
                                        </div>
                                    </div>
                                    <p class="comment-text">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                                    </p>
                                </div>

                                <!-- ✅ Separator -->
                                <hr class="separator">

                                <div class="comment-item">
                                    <div class="comment-profile">
                                        <img src="../resources/profile.png" alt="User">
                                        <div class="comment-details">
                                            <div>Medel Bunalade</div>
                                            <div class="comment-role">Admin</div>
                                            <div class="comment-time">03-02-2025 ; 11:53PM</div>
                                        </div>
                                    </div>
                                    <p class="comment-text">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                                        <a href="../2coordinator/coordinatordashboard.php" data-bs-toggle="tooltip" title="Remove">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="red" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
                                                <path d="M4 7h16"></path>
                                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                <path d="M10 12l4 4m0 -4l-4 4"></path>
                                            </svg>
                                        </a>
                                    </p>
                                </div>
                            </div>

                            <!-- ✅ Separator -->
                            <hr class="separator">

                            <!-- ✅ Comment Input -->
                            <div class="comment-input">
                                <input type="text" placeholder="Comment here...">
                                <!-- <button class="send-comment"><i class="fas fa-paper-plane"></i></button> -->
                                <a href="../2coordinator/coordinatordashboard.php" data-bs-toggle="tooltip" title="Send">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
                                        <path d="M4.698 4.034l16.302 7.966l-16.302 7.966a.503 .503 0 0 1 -.546 -.124a.555 .555 0 0 1 -.12 -.568l2.468 -7.274l-2.468 -7.274a.555 .555 0 0 1 .12 -.568a.503 .503 0 0 1 .546 -.124z"></path>
                                        <path d="M6.5 12h14.5"></path>
                                    </svg>
                                </a>
                            </div>

                            <!-- ✅ View All History -->
                            <a href="#" class="view-history" onclick="toggleAnnouncements(event)">
                                View all history <i class="fa-solid fa-arrow-right"></i>
                            </a>

                            <!-- ✅ Hidden Additional Announcements -->
                            <div id="extra-announcements" class="extra-announcements" style="display: none;">
                                <div class="announcement-header">
                                    <h5>Recent Announcements</h5>
                                </div>

                                <!-- Additional Announcement 1 -->
                                <!-- ✅ Announcement Item -->
                                <!-- ✅ Announcement Item (Fixed Profile Image Positioning) -->
                                <div class="announcement-item">
                                    <div class="announcement-profile">
                                        <img src="../resources/profile.png" alt="User">
                                        <div class="announcement-info">
                                            <div>Medel Bunalade</div>
                                            <div class="announcement-role">Admin</div>
                                            <div class="announcement-time">03-02-2025 ; 11:53PM</div>
                                        </div>
                                    </div>
                                    <p class="announcement-title">Maintenance system</p>
                                    <p class="announcement-text">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley of type and scrambled it to make a type
                                        specimen book. It has survived not only five centuries, but also the leap into
                                        electronic typesetting.
                                    </p>
                                </div>

                                <!-- ✅ Separator -->
                                <hr class="separator">

                                <!-- ✅ Comment Section -->
                                <div class="comment-section">
                                    <h5 class="comment-label">Comment Section</h5>

                                    <!-- ✅ Comment Item -->
                                    <div class="comment-item">
                                        <div class="comment-profile">
                                            <img src="../resources/profile.png" alt="User">
                                            <div class="comment-details">
                                                <div>Medel Bunalade</div>
                                                <div class="comment-role">Admin</div>
                                                <div class="comment-time">03-02-2025 ; 11:53PM</div>
                                            </div>
                                        </div>
                                        <p class="comment-text">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                                        </p>
                                    </div>

                                    <!-- ✅ Separator -->
                                    <hr class="separator">

                                    <div class="comment-item">
                                        <div class="comment-profile">
                                            <img src="../resources/profile.png" alt="User">
                                            <div class="comment-details">
                                                <div>Medel Bunalade</div>
                                                <div class="comment-role">Admin</div>
                                                <div class="comment-time">03-02-2025 ; 11:53PM</div>
                                            </div>
                                        </div>
                                        <p class="comment-text">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                                            <a href="../2coordinator/coordinatordashboard.php" data-bs-toggle="tooltip" title="Remove">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="red" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
                                                    <path d="M4 7h16"></path>
                                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                    <path d="M10 12l4 4m0 -4l-4 4"></path>
                                                </svg>
                                            </a>
                                        </p>
                                    </div>
                                </div>

                                <!-- ✅ Separator -->
                                <hr class="separator">

                                <!-- ✅ Comment Input -->
                                <div class="comment-input">
                                    <input type="text" placeholder="Comment here...">
                                    <!-- <button class="send-comment"><i class="fas fa-paper-plane"></i></button> -->
                                    <a href="../2coordinator/coordinatordashboard.php" data-bs-toggle="tooltip" title="Send">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
                                            <path d="M4.698 4.034l16.302 7.966l-16.302 7.966a.503 .503 0 0 1 -.546 -.124a.555 .555 0 0 1 -.12 -.568l2.468 -7.274l-2.468 -7.274a.555 .555 0 0 1 .12 -.568a.503 .503 0 0 1 .546 -.124z"></path>
                                            <path d="M6.5 12h14.5"></path>
                                        </svg>
                                    </a>
                                </div>


                                <br>
                                <!-- Additional Announcement 2 -->
                                <!-- ✅ Announcement Item -->

                                <!-- ✅ Announcement Item (Fixed Profile Image Positioning) -->
                                <div class="announcement-item">
                                    <div class="announcement-profile">
                                        <img src="../resources/profile.png" alt="User">
                                        <div class="announcement-info">
                                            <div>Medel Bunalade</div>
                                            <div class="announcement-role">Admin</div>
                                            <div class="announcement-time">03-02-2025 ; 11:53PM</div>
                                        </div>
                                    </div>
                                    <p class="announcement-title">Maintenance system</p>
                                    <p class="announcement-text">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                        when an unknown printer took a galley of type and scrambled it to make a type
                                        specimen book. It has survived not only five centuries, but also the leap into
                                        electronic typesetting.
                                    </p>
                                </div>

                                <!-- ✅ Separator -->
                                <hr class="separator">

                                <!-- ✅ Comment Section -->
                                <div class="comment-section">
                                    <h5 class="comment-label">Comment Section</h5>

                                    <!-- ✅ Comment Item -->
                                    <div class="comment-item">
                                        <div class="comment-profile">
                                            <img src="../resources/profile.png" alt="User">
                                            <div class="comment-details">
                                                <div>Medel Bunalade</div>
                                                <div class="comment-role">Admin</div>
                                                <div class="comment-time">03-02-2025 ; 11:53PM</div>
                                            </div>
                                        </div>
                                        <p class="comment-text">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                                        </p>
                                    </div>

                                    <!-- ✅ Separator -->
                                    <hr class="separator">

                                    <div class="comment-item">
                                        <div class="comment-profile">
                                            <img src="../resources/profile.png" alt="User">
                                            <div class="comment-details">
                                                <div>Medel Bunalade</div>
                                                <div class="comment-role">Admin</div>
                                                <div class="comment-time">03-02-2025 ; 11:53PM</div>
                                            </div>
                                        </div>
                                        <p class="comment-text">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...
                                            <a href="../2coordinator/coordinatordashboard.php" data-bs-toggle="tooltip" title="Remove">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="red" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
                                                    <path d="M4 7h16"></path>
                                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                    <path d="M10 12l4 4m0 -4l-4 4"></path>
                                                </svg>
                                            </a>
                                        </p>
                                    </div>
                                </div>

                                <!-- ✅ Separator -->
                                <hr class="separator">

                                <!-- ✅ Comment Input -->
                                <div class="comment-input">
                                    <input type="text" placeholder="Comment here...">
                                    <!-- <button class="send-comment"><i class="fas fa-paper-plane"></i></button> -->
                                    <a href="../2coordinator/coordinatordashboard.php" data-bs-toggle="tooltip" title="Send">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
                                            <path d="M4.698 4.034l16.302 7.966l-16.302 7.966a.503 .503 0 0 1 -.546 -.124a.555 .555 0 0 1 -.12 -.568l2.468 -7.274l-2.468 -7.274a.555 .555 0 0 1 .12 -.568a.503 .503 0 0 1 .546 -.124z"></path>
                                            <path d="M6.5 12h14.5"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <!-- veiw all histor recent announcemnt ####################################################################################################### -->

                        </div>
                    </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Initialize Bootstrap tooltips and auto-adjust placement
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl, {
                    boundary: 'window', // Prevents tooltip from going off-screen
                    fallbackPlacements: ['top', 'bottom', 'left', 'right'], // Auto-adjust
                    html: true // Allows <br/> tags inside tooltips
                });
            });

            // Hide Bootstrap tooltip on click
            document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(function(element) {
                element.addEventListener("click", function() {
                    var tooltipInstance = bootstrap.Tooltip.getInstance(this);
                    if (tooltipInstance) {
                        tooltipInstance.hide();
                    }
                });
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll("[data-tooltip]").forEach(element => {
                const originalTooltip = element.getAttribute("data-tooltip"); // Store original text

                // ✅ Detect tooltip length and add `data-tooltip-length` attribute
                if (originalTooltip && originalTooltip.length > 25) {
                    element.setAttribute("data-tooltip-length", "long"); // Mark long tooltips
                }

                // ✅ Hide tooltip on click
                element.addEventListener("click", function() {
                    this.removeAttribute("data-tooltip"); // Remove only for clicked element

                    // Restore tooltip after 500ms
                    setTimeout(() => {
                        if (!this.getAttribute("data-tooltip")) { // Restore only if still missing
                            this.setAttribute("data-tooltip", originalTooltip);

                            // Reapply length detection
                            if (originalTooltip.length > 25) {
                                this.setAttribute("data-tooltip-length", "long");
                            }
                        }
                    }, 500); // Adjust delay as needed
                });
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let searchInput = document.getElementById("searchInput");
            let table = document.getElementById("announcementTable");
            let tbody = table.getElementsByTagName("tbody")[0];

            searchInput.addEventListener("keyup", function() {
                let filter = searchInput.value.toLowerCase();
                let rows = tbody.getElementsByTagName("tr");

                for (let i = 0; i < rows.length; i++) {
                    let cells = rows[i].getElementsByTagName("td");
                    let match = false;

                    for (let j = 0; j < cells.length; j++) {
                        if (cells[j].textContent.toLowerCase().includes(filter)) {
                            match = true;
                            break;
                        }
                    }

                    rows[i].style.display = match ? "" : "none";
                }
            });
        });
    </script>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let table = document.getElementById("announcementTable"); // ✅ Correct Table ID
            let headers = table.querySelectorAll("thead th"); // ✅ Select headers
            let tbody = table.querySelector("tbody");
            let sortOrder = {}; // Track sorting order

            headers.forEach((header, columnIndex) => {
                header.addEventListener("click", function() {
                    let rows = Array.from(tbody.rows);

                    // ✅ Toggle Sorting Order (Ascending <-> Descending)
                    sortOrder[columnIndex] = !sortOrder[columnIndex];

                    rows.sort((a, b) => {
                        let aValue = a.cells[columnIndex].textContent.trim().toLowerCase();
                        let bValue = b.cells[columnIndex].textContent.trim().toLowerCase();

                        // ✅ Convert to numbers if applicable
                        if (!isNaN(aValue) && !isNaN(bValue)) {
                            return sortOrder[columnIndex] ? aValue - bValue : bValue - aValue;
                        }

                        return sortOrder[columnIndex] ? aValue.localeCompare(bValue) : bValue.localeCompare(aValue);
                    });

                    tbody.append(...rows);
                });
            });
        });
    </script>

    <!-- ✅ FontAwesome Icons (Make sure you include this in your project) -->
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <script>
        function toggleAnnouncements(event) {
            event.preventDefault();
            let extraAnnouncements = document.getElementById("extra-announcements");
            let toggleText = document.querySelector(".view-history");

            if (extraAnnouncements.style.display === "none" || extraAnnouncements.style.display === "") {
                extraAnnouncements.style.display = "block";
                toggleText.innerHTML = "See less <i class='fa-solid fa-arrow-up'></i>";
            } else {
                extraAnnouncements.style.display = "none";
                toggleText.innerHTML = "View all history <i class='fa-solid fa-arrow-right'></i>";
            }
        }
    </script>
</body>

</html>