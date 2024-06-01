<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/footer.css">
     
     <!-- Font awesome icon link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- font awesome icoon link end -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/dist/boxicons.js" integrity="sha512-Dm5UxqUSgNd93XG7eseoOrScyM1BVs65GrwmavP0D0DujOA8mjiBfyj71wmI2VQZKnnZQsSWWsxDKNiQIqk8sQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <title>Udemy Signup Clone</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f9fa;
            display: flex;
            /*justify-content: center;
            align-items: center;*/
            flex-direction: column;
            height: 100vh;
            margin: 0;
        }

        .signup-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            margin-top: 70px;
            margin-bottom: 70px;
            align-self: center;
        }

        .signup-form h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .signup-btn {
            width: 100%;
            padding: 10px;
            background-color: #a435f0;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .signup-btn:hover {
            background-color: #7a2fce;
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
        }

        .login-link a {
            color: #a435f0;
            text-decoration: none;
            font-weight: bold;
        }

        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>


    <?php require "header.php";?>
    <!-- sign up part -->
    <div class="signup-container">
        <div class="signup-form">
            <h2>Sign Up and Start Learning</h2>
            <form METHOD="post" action="../BackEnd/register.php">
                <div class="form-group" >
                    <label for="fullname">Full Name</label>
                    <input type="text" id="fullname" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="signup-btn">Sign Up</button>
                </div>
            </form>
            <hr>
            <div class="login-link">
                <p>Already have an account? <a href="login.php">Log In</a></p>
            </div>
        </div>
    </div>
    <!-- sign up ends-->
   
    <?php require "footer.php"?>
</body>
</html>
