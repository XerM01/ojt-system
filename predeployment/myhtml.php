<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CodePen - Timeline | CodePen Challenge </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="../predeployment/css/predeployment.css">

</head>

<body>
    <div class="container">
        <div class="left-column">
            <div class="header">
                <button class="back-button"><i class="fas fa-arrow-left"></i> Back</button>
                <h5>Pre-Deployment</h5>
            </div>
            <input type="text" placeholder="Search..." class="search-bar">

            <!-- Profile Card (Only this part is in a card) -->
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
            <div class="timeline-column">
                <ol class="timeline">
                    <!-- ############################################################# -->
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
                                <span><a href="#">Certificate of Earned Units</a> Submmitted on <time datetime="20-01-2021 ">Jan 20, 2021 | 7:00PM</time></span>
                            </div>
                            <div>
                                <button class="button" style="color: green;">Accepted</button>
                                <button class="button | square">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
                                        <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2"></path>
                                        <path d="M7 11l5 5l5 -5"></path>
                                        <path d="M12 4l0 12"></path>
                                    </svg>
                                </button>
                                <button class="button | square">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
                                        <path d="M4 8v-2a2 2 0 0 1 2 -2h2"></path>
                                        <path d="M4 16v2a2 2 0 0 0 2 2h2"></path>
                                        <path d="M16 4h2a2 2 0 0 1 2 2v2"></path>
                                        <path d="M16 20h2a2 2 0 0 0 2 -2v-2"></path>
                                        <path d="M8 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                        <path d="M16 16l-2.5 -2.5"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="comment">
                                <h5>Student</h5>
                                <p>I've sent him the assignment we discussed recent posted and we'll debrief it all together!😊</p>

                            </div>
                            <div class="comment">
                                <h5>Coordinator</h5>
                                <p>I've sent him the assignment we discussed recently, he is coming back to us this week. we'll debrief it all together!😊</p>
                                <button class="button | square">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
                                        <path d="M4 7l16 0"></path>
                                        <path d="M10 11l0 6"></path>
                                        <path d="M14 11l0 6"></path>
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                    </svg>
                                </button>

                            </div>
                            <button class="show-replies">
                                <div class="new-comment">
                                    <input type="text" placeholder="Add a comment..." />
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
                                    <path d="M15 10l-4 4l6 6l4 -16l-18 7l4 2l2 6l3 -4"></path>
                                </svg>
                            </button>
                    </li>
                </ol>

            </div>
        </div>

        <!-- partial -->
        <script src="./script.js"></script>

</body>

</html>