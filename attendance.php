
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        body {
            font-family: sans-serif;
            background-color: #ffffffff;

            background-image: url('attendance6.png'); 
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
            width: 100%;
            max-width: 450px;
            height: 560px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(233, 230, 230, 0.1);
            border-radius: 25px;
            padding: 20px;
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.3);
            box-sizing: border-box;

            
        }
    
        label {
            font-size: 30px;
            margin-top: 40px;
            margin-bottom: 30px;
            color: #2d6dceff;
            text-align: center;
            font-family: sans-serif;
        }
        input[type="password"] {
            padding: 5px;
            margin-top: 5px;
            /* margin-bottom: 15px; */
            border: 1px solid #000000ff;
            border-radius: 15px;
            font-size: 50px;
            text-align: center;
            
        }
        button {
            margin-top: 30px;           /* push to bottom */
            /* margin-bottom: 10px;        space from bottom */
            align-self: center;         /* center horizontally */
            width: 80%;                 /* make button wide */
            padding: 12px;
            font-size: 18px;
            font-weight: bold;
            color: white;
            background: linear-gradient(90deg, #6fc3f7, #2563eb); 
            border: none;
            border-radius: 10px;
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
            ;    
        }
        
         .time-logo {
            text-align: center;
            margin-bottom: 5px;
            
        }
        .time-logo img {
            max-width: 50%;
            height: 50;
        
        }
        
        .form-toggle a {
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
            
        }
        .form-toggle a:hover {
            text-decoration: underline;
        }
       
        
    </style>
</head>
<body>
        
<div class="container">
    <div class="time-logo">
        <img src="time_logo.png" alt=" ">
        </div>

    <!-- Login Form -->
    <div class="form-container active">
        <form method="POST" action="">
            <label> <strong>ENTER YOU'RE CODE</strong></label>
            <input type="password" name="pin" placeholder = "0 0 0 0 0 0" maxlength="6" pattern = "\d{6}" required><br>
             <button type="submit">Attendance</button>   
             
             <div class="form-toggle">
                <a href="index.php">Back to Home page</a>
                </div>
        
        </form>
        </div>
        </div>
        
</body>
</html>
