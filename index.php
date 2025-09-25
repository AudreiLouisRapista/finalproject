<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

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
            
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            font-family: sans-serif;
            width: 100%;
            max-width: 450px;
            height: 400px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(233, 230, 230, 0.1);
            border-radius: 25px;
            padding: 20px;
            margin-left: 300px;
            margin-right: auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            box-sizing: border-box;

            
        }
        h2 {
            font-family: sans-serif;
            text-align: center;
            color: #090909ff;
            margin-bottom: 30px;
        }

        button {
            margin-top: auto;           /* push to bottom */
            margin-bottom: 10px;        /* space from bottom */
            align-self: center;         /* center horizontally */
            width: 80%;                 /* make button wide */
            padding: 50px;
            font-size: 18px;
            font-weight: bold;
            color: white;
            background: linear-gradient(90deg, #6fc3f7, #2563eb); 
            border: none;
            border-radius: 15px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            opacity: 0.9;
        }

        form {
            display: flex;
            flex-direction: column;
            flex: 1;
        }
        .form-toggle {
            text-align: center;
            margin-top: 20px;
        }
        .form-toggle a {
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
            
        }
        .form-toggle a:hover {
            text-decoration: underline;
        }
        .form-container {
            display: none;
        }
        .form-container.active {
            display: block;
            color: black;
        }
        
       
    </style>
</head>
<body>
        
<div class="container">
    <h2>WELCOME</h2>

    <!-- Choosing Form -->
        <div class="form-container active">
            <form method="POST" action="admin.php">
                    <button type="submit"> <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-fill-lock" viewBox="0 0 16 16">
                        <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1"/>
                            </svg>
                       ADMIN
                    </button> 
                </form>

                <form method="POST" action="attendance.php">
                        <button type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                                <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0"/>
                                 <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
                                    </svg>
                                        ATTENDANCE
                                        </button>  
            </form>
            </div>
            </div>
        
</body>
</html>




 
        


 