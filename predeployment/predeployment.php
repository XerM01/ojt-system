<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Timeline | CodePen Challenge</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="icon" type="image/png" href="../resources/siplogo.ico">
    <link rel="stylesheet" href="../predeployment/css/predeployment.css">
</head>

<body>
    <div class="container">
        <!-- Left Column -->
        <div class="left-column">
            <!-- First Row: Back Button & Title -->
            <div class="header">
                <button class="button" onclick="window.location.href='../1admin/admindashboard.php'">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
                        <path d="M5 12l14 0"></path>
                        <path d="M5 12l6 6"></path>
                        <path d="M5 12l6 -6"></path>
                    </svg>
                    <span>Back</span>
                </button>

                <h5>Pre-Deployment</h5>
            </div>

            <!-- Second Row: Search Bar -->
            <input type="text" placeholder="Search..." class="search-bar">

            <!-- Scrollable Card Container -->
            <div class="card-container">
                <div class="card">
                    <img src="profile.jpg" alt="Profile" class="profile-image">
                    <div class="card-content">
                        <p class="student-id">School ID</p>
                        <p class="full-name">concatenate First and last name</p>
                        <p class="course">Course: Computer Science</p>
                        <p class="company">Company: Tech Corp</p>
                    </div>
                    <div class="arrow-right"><i class="fas fa-arrow-right"></i></div>
                </div>

                <div class="card">
                    <img src="profile.jpg" alt="Profile" class="profile-image">
                    <div class="card-content">
                        <p class="student-id">Student ID: 67890</p>
                        <p class="full-name">Jane Doe</p>
                        <p class="course">Course: IT</p>
                        <p class="company">Company: DevCorp</p>
                    </div>
                    <div class="arrow-right"><i class="fas fa-arrow-right"></i></div>
                </div>

                <!-- Add more cards here to test scrolling -->
            </div>


        </div>


        <!-- Timeline Column (Moved OUT of Left Column) -->
        <div class="timeline-column">
            <ol class="timeline">
                <li class="timeline-item | extra-space">
                    <span class="timeline-item-icon | filled-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
                            <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                            <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                            <path d="M9 15l2 2l4 -4"></path>
                        </svg>
                    </span>

                    <div class="timeline-item-wrapper">
                        <div class="timeline-item-description">
                            <i class="avatar | small">
                                <img src="../resources/profile.png" />
                            </i>
                            <span><a href="#">Certificate of Earned Units</a> Submitted on <time datetime="20-01-2021 ">Jan 20, 2021 | 7:00PM</time></span>
                        </div>

                        <div class="button-group">
                            <div class="status-badge">Accepted</div>
                            <!-- First Button with Tooltip -->
                            <button class="button square" onclick="window.location.href='../1admin/'" data-tooltip="Download">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
                                    <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2"></path>
                                    <path d="M7 11l5 5l5 -5"></path>
                                    <path d="M12 4l0 12"></path>
                                </svg>
                            </button>

                            <!-- Second Button with Tooltip -->
                            <button class="button square" onclick="window.location.href='../1admin/'" data-tooltip="View">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
                                    <path d="M4 8v-2a2 2 0 0 1 2 -2h2"></path>
                                    <path d="M4 16v2a2 2 0 0 0 2 2h2"></path>
                                    <path d="M16 4h2a2 2 0 0 1 2 2v2"></path>
                                    <path d="M16 20h2a2 2 0 0 0 2 -2v-2"></path>
                                    <path d="M8 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                    <path d="M16 16l-2.5 -2.5"></path>
                                </svg>
                            </button>

                            <!-- Third Button with Tooltip -->
                            <button class="button square" onclick="window.location.href='../1admin/'" data-tooltip="Edit">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                    <path d="M16 5l3 3"></path>
                                </svg>
                            </button>

                            <!-- Toggle Switch with Tooltip -->
                            <div class="form-check form-switch" data-tooltip="Response">
                                <input class="form-check-input" type="checkbox" id="toggleSwitch">
                                <label for="toggleSwitch" class="form-check-label"></label>
                            </div>


                        </div>


                        <div class="comment">
                            <h5>Student</h5>
                            <p>I've sent him the assignment we discussed recently posted and we'll debrief it all together!😊</p>
                        </div>
                        <div class="comment">
                            <h5>Coordinator</h5>
                            <p>I've sent him the assignment we discussed recently, he is coming back to us this week. We'll debrief it all together!😊

                                <button class="button square" onclick="window.location.href='../1admin/'" data-tooltip="Remove">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
                                        <path d="M4 7l16 0"></path>
                                        <path d="M10 11l0 6"></path>
                                        <path d="M14 11l0 6"></path>
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                    </svg>
                                </button>
                            </p>
                        </div>
                        <button class="show-replies">
                            <div class="new-comment">
                                <input type="text" placeholder="Add a comment..." />
                            </div>
                            <span data-tooltip="Send">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
                                    <path d="M4.698 4.034l16.302 7.966l-16.302 7.966a.503 .503 0 0 1 -.546 -.124a.555 .555 0 0 1 -.12 -.568l2.468 -7.274l-2.468 -7.274a.555 .555 0 0 1 .12 -.568a.503 .503 0 0 1 .546 -.124z"></path>
                                    <path d="M6.5 12h14.5"></path>
                                </svg>
                            </span>
                        </button>
                    </div>
                </li>
            </ol>
        </div>
    </div>

    <!-- <script src="./script.js"></script> -->
</body>

</html>