
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
            text-align: center;
            color: #090909ff;
        }
        label {
            font-size: 14px;
            margin-bottom: 5px;
            color: #000000ff;
        }
        input[type="text"], input[type="password"], input[type="tel"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #000000ff;
            border-radius: 8px;
            font-size: 16px;
        }
        button {
            margin-top: auto;           /* push to bottom */
            margin-bottom: 10px;        /* space from bottom */
            align-self: center;         /* center horizontally */
            width: 80%;                 /* make button wide */
            padding: 12px;
            font-size: 18px;
            font-weight: bold;
            color: white;
            background: linear-gradient(90deg, #6fc3f7, #2563eb); 
            border: none;
            border-radius: 8px;
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
        
        .back-btn{
            margin-top: auto;           /* push to bottom */
            margin-bottom: 3px;        space from bottom
            margin-left: 10px;  
            align-self: flex-start;      
            width: 20%;                 /* make button wide */
            padding: 10px;
            font-size: 12px;
            font-weight: bold;
            color: white;
            background: linear-gradient(90deg, #6fc3f7, #2563eb); 
            border: none;
            border-radius: 15px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
       
        
    </style>
</head>
<body>
        
<div class="container">

<form method="POST" action="index.php">
    <button type="submit" class="back-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="12" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                    <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1"/>
                        </svg>
        Back</button> 
    </form>

         <h2>ADMIN</h2>
    
    <!-- Login Form -->
    <div class="form-container active">
        <form method="POST" action="">
            <label></label>
            <input type="text" name="username" placeholder = "username"required><br>
            <label></label>
            <input type="password" name="password" placeholder = "password" required><br>

             <button type="submit">Login</button>   
          
        <div class="form-toggle">
          <a href="register.php">Forgot password?</a>
          </div>
        
        </form>
        </div>
        </div>
        
</body>
</html>
