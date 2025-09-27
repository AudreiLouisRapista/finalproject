    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <style>
            body {
                background-color: #ffffffff;
                background-image: url('background2.png'); 
                background-size: cover;       
                background-repeat: no-repeat; 
                background-position: center; 
                margin: 0;
                padding: 0;
                font-family: sans-serif;
            }

            /* Sidebar Styles */
            .sidebar {
                height: 100vh;
                background-color: rgba(255, 255, 255, 0.95); /* Semi-transparent white for overlay on background */
                backdrop-filter: blur(10px); /* Optional: Blur effect for modern look */
                box-shadow: 2px 0 8px rgba(0, 0, 0, 0.1);
                padding-top: 20px;
                position: fixed; /* Fixed to stay in place on scroll */
                top: 0;
                left: 0;
                width: 250px; /* Fixed width for sidebar */
                z-index: 1000;
                overflow-y: auto; /* Scroll if sidebar content is long */
            }

            .sidebar .nav-link {
                color: #333;
                padding: 15px 20px;
                border-radius: 10px;
                margin: 5px 10px;
                transition: background-color 0.3s;
            }

            .sidebar .nav-link:hover,
            .sidebar .nav-link.active {
                background-color: #6fc3f7;
                color: white;
            }

            .sidebar h5 {
                padding: 0 20px;
                color: #2563eb;
                font-weight: bold;
            }

            /* Main Content Area */
            .main-content {
                margin-left: 250px; /* Offset for fixed sidebar */
                padding: 20px;
                min-height: 100vh;
            }

                .container {
                font-family: sans-serif;
                width: 18%;
                position: absolute;
                margin-top: 50px;
                top: 20px;
                right:20px;
                max-width: 450px;
                height: 600px;
                background-color: white;
                box-shadow: 0 4px 8px rgba(233, 230, 230, 0.1);
                border-radius: 25px;
                padding: 15px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
                box-sizing: border-box;

                
            }
            

            /* button { */
                margin-top: auto;           /* push to bottom */
                margin-bottom: 10px;        /* space from bottom */
                align-self: center;         /* center horizontally */
                width: 80%;                 /* make button wide */
                padding: 15px;              /* Reduced padding for better fit */
                font-size: 18px;
                font-weight: bold;
                color: white;
                background: linear-gradient(90deg, #6fc3f7, #2563eb); 
                border: none;
                border-radius: 15px;
                cursor: pointer;
                transition: background-color 0.3s;
            /* } */

            /* button:hover { */
                opacity: 0.9;
            /* } */

            .search{
                position: center;
                margin-top: 5%;
                transform: translateY(-50%);
                color: #6c757d;
                font-size: 18px;
            }

            .search-input {
                padding-left: 50px; /* Space for icon */
                /* border: 5px ; */
                border-radius: 25px;  /* Fully rounded pill shape */ */
                border: 1px solid #ced4da;
                width: 60%;
                padding: 2%;    
                /* transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; */
            }

            .search-input:focus {
                border-color: #86b7fe;
                /* box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25); */
            }
            .search-btn {
                border-radius: 25px; /* Match input rounding */
                margin-left: 5px;
                color: white;
                background: linear-gradient(90deg, #6fc3f7, #2563eb); 
                border-color: #6fc3f7;
                padding: 1%;
            }
            .search-btn:hover {
                background-color: #0056b3;
                border-color: #53a5fdff;
            }

            
             .card-one {
             
                padding: 5rem; 
                position: center;  
                 background: linear-gradient(90deg, #134bc2ff, #2563eb); 
                 color: white;
                
                }


            .card-two {
                padding: 5rem; 
                position: center;  
                 background: linear-gradient(90deg, #134bc2ff, rgba(78, 181, 245, 1));
                 color: white;
                
                
                }

            .card-three {
                padding: 60px; 
                position: center;  
                 background: linear-gradient(80deg, rgba(46, 143, 222, 1), rgba(151, 208, 243, 1));
                 color: white;
                 height: 215px;
                
                }
            

            h2 {
                font-size: 25px;
                color: #1a6bc3ff;
                margin-top: 5%;
                
            }

            .table{
                margin-top: 2%;
                width: 1000px;
                 /* border-collapse: collapse; */
            }

          
           th {
                    text-align: center;
                    background: linear-gradient(90deg, #6fc3f7, #53a3ffff);
                    color: white !important;
                    padding: 12px;
                    font-weight: bold;
                    border: 1px solid #dee2e6;
                }

           
            
        </style>
    </head>
    <body>
        <!-- Mobile Toggle Button (hidden on desktop) -->
        <button class="toggle-btn d-md-none" onclick="toggleSidebar()" title="Toggle Sidebar">
            <i class="bi bi-list"></i>
        </button>

        <!-- Sidebar -->
        <nav class="sidebar d-md-block" id="sidebar">
            <h5 class="text-center mb-4">Menu</h5>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link " href="#"><i class="bi bi-house-door me-2"></i>Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-book me-2"></i>Subjects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-calendar3 me-2"></i>Schedule</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-people me-2"></i>Teachers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-gear me-2"></i>Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-box-arrow-right me-2"></i>Logout</a>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <main class="main-content">
            <div class="search">
                <nav class="navbar bg-dark.bg-gradient">
                        <form class="search-input">
                        <input class="search-input" type="search" placeholder="Search" aria-label="Search"/>
                        <button class="search-btn" type="submit">Search</button>
                        </form>
                    </nav>
                    
               <h2>Subject</h2>    
                <div class="row g-4">
        <!-- Subject1 -->
    <div class="col-md-6 col-lg-3">
    <div class="card h-10 shadow-sm card-one text-center rounded-4">
        <h5 class="card-title">Ace Dela Cruz</h5>
        <p class="card-text">Owner of the club</p>
    </div>
    </div>

        <!--  Subject2 -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-10 shadow-sm card-two text-center rounded-4 ">
                <h5 class="card-title">Ken Adlaon</h5>
                <p class="card-text">Fuck Boy of the Club</p>
    </div>
    </div>

    <!--  Subject3 -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-10 shadow-sm card-three text-center rounded-4  ">  
                <h5 class="card-title">Elijah Dela Cruz</h5>
                <p class="card-text">Bola gani ampingan
                ikaw pakaya</p>
    </div>
    </div>
    </div>      
                <h2>Lesson</h2>    
                <table class="table table-striped">
                                        <thead>
                                            <tr>
                                            <th scope="col">Subject</th>
                                            <th scope="col">Teacher</th>
                                            <th scope="col">Total Students</th>
                                            <th scope="col">Starting</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                        </tbody>
                                        </table>
        


            <div class="container">calendar</div>

            </div>
            </div>
        </main>

    </body>
    </html>