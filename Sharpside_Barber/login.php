<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sharpside Barber Login</title>
        <link rel="stylesheet" href="css/login.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>

    <body>
        <section class="login-page">
            <div class="logo">
                <img src="images/sharpside_logo.png" height="350" width="350" alt="Logo">
            </div>

            <video id="background-video" autoplay muted loop>
                <source src="video/ssb_login_bg.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            <div class="container">
                <form action="login_process.php" method="POST">
                    <div class="input-box">
                        <input type="text" name="l_username" placeholder="Username" required/>
                    </div>
                    <div class="input-box">
                        <input type="password" name="l_password" placeholder="Password" required/>
                    </div>
                    <button type="submit" class="btn">Login</button>
                    <div class="register-link">
                        <p>Don't have an account? <a href="register.php">Register Here!</a></p>
                    </div>
                </form>
            </div>
        </section>
    </body>

    <script>
    // Check if error message is present in URL
    const urlParams = new URLSearchParams(window.location.search);
    const error = urlParams.get('error');

    // If error message is present, show pop-up
    if (error === 'user_does_not_exist') {
        alert('User does not exist!');
    } else if (error === 'user_banned') {
        alert('Your account is banned because your subscription ended.');
    }
    </script>
</html>

