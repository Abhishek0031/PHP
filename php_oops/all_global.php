    <?php
    // Start a session
    session_start();

    // Check if the user has submitted the form
    if (isset($_POST['submit'])) {
        // Retrieve the username from the form
        $username = $_POST['username'];

        // Set a session variable to store the username
        $_SESSION['username'] = $username;

        // Set a cookie to store the username for one hour
        setcookie('username', $username, time() + 3600);
    }

    // Check if the user is already logged in using session
    if (isset($_SESSION['username'])) {
        $usernameFromSession = $_SESSION['username'];
        echo "Welcome back, $usernameFromSession (Using Session)!<br>";
    } else {
        echo "You are not logged in using session.<br>";
    }

    // Check if the user is already logged in using cookie
    if (isset($_COOKIE['username'])) {
        $usernameFromCookie = $_COOKIE['username'];
        echo "Welcome back, $usernameFromCookie (Using Cookie)!<br>";
    } else {
        echo "You are not logged in using cookie.<br>";
    }
    ?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Session and Cookie Example</title>
    </head>

    <body>
        <h1>Session and Cookie Example</h1>
        <?php
        // If the user is not logged in, display the login form
        if (!isset($_SESSION['username']) && !isset($_COOKIE['username'])) {
        ?>
            <form method="post" action="">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" required>
                <input type="submit" name="submit" value="Log In">
            </form>
        <?php
        } else {
            // If the user is already logged in, provide a logout option
        ?>
            <form method="post" action="">
                <input type="submit" name="logout" value="Log Out">
            </form>
        <?php
        }

        // Handle logout request
        if (isset($_POST['logout'])) {
            // Clear the session data and destroy the session
            session_unset();
            session_destroy();

            // Clear the cookie by setting an expiration time in the past
            setcookie('username', '', time() - 3600);

            // Redirect to the same page to refresh the content
            header('Location: ' . $_SERVER['PHP_SELF']);
            exit();
        }
        ?>
    </body>

    </html>
