<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sharpside Barber Registration</title>
        <link rel="stylesheet" href="css/register.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>

    <body>

        <video id="background-video" autoplay muted loop>
            <source src="video/ssb_register_bg.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        
        <div class="container">
            <form action="register_process.php" method="POST">

                <div class="input-box">
                    <input type="text" name="r_fullname" placeholder="Full Name" required/>
                    <input type="text" name="r_username" placeholder="Username" required/>
                    <input type="password" name="r_passwrd" placeholder="Password" required/>
                    <input type="text" name="r_age" placeholder="Age" required/>
                    <input type="text" name="r_contact" placeholder="Contact Number" required/>
                    <input type="text" name="r_address" placeholder="Address" required/>
                    <input type="text" name="r_email" placeholder="Email Address" required/>

                    <div class="sex" placeholder="Sex">
                        <select name="r_sex" required>
                            <option value="" disabled selected>Select your sex</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                    <div class="user_type" placeholder="User Type">
                        <select name="r_type" required>
                            <option value="" disabled selected>Select your user type</option>
                            <option value="Customer">Customer</option>
                            <option value="Barber">Barber</option>
                        </select>
                    </div>

                    <button type="submit" class="btn">Register</button>

                    <div class="login-link">
                        <p>Already have an account? <a href="login.php" style="color: rgb(212, 175, 55);">Login</a></p>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>