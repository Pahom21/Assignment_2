<?php 
  class forms {
    function signinform() {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign In</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
        <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                background-color: #222; /* Light black background */
            }

            .container {
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                text-align: center;
            }

            .form-label {
                font-size: 18px;
                font-weight: 600;
            }

            .form-control {
                width: 80%;
                padding: 10px;
                margin: 10px 0;
                border: 1px solid #ddd;
                border-radius: 5px;
                font-size: 16px;
                outline: none;
                transition: border 0.3s; /* Add transition for border changes */
            }

            .form-control:hover {
                border: 2px solid black; /* Bolder and black border on hover */
            }
            

            .btn-primary {
                background-color: #ff3a3a;
                color: #fff;
                border: none;
                padding: 10px 20px;
                border-radius: 5px;
                font-size: 18px;
                cursor: pointer;
                transition: background-color 0.3s;
            }

            .btn-primary:hover {
                background-color: #ff0000;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Sign Into Account</h1>
            <form action="ClassAutoLoad.php" method="POST">
                <div class="mb-3">
                    <label for="exampleInputName1" class="form-label">Name</label>
                    <input type="text" name="Name" class="form-control" required id="exampleInputName1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="Email" class="form-control " required id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <button type="submit" name="Signin" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </body>
    </html>
    <?php
  }
}
?>