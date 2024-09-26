<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="82313681050-4k9vrhn907gv2p2lgvjdeok7hebhvivu.apps.googleusercontent.com.apps.googleusercontent.com">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        .container {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login with Google</h2>
        <div class="g_id_signin" data-type="standard" data-shape="rectangular" data-theme="outline" data-text="sign_in_with" data-size="large" data-logo_alignment="left"></div>
    </div>

    <script>
        function onSignIn(googleUser) {
            var profile = googleUser.getBasicProfile();
            // Send ID token to your server for verification
            var id_token = googleUser.getAuthResponse().id_token;
            // Redirect to your server-side login handler
            window.location.href = 'handle_login.php?id_token=' + id_token;
        }
    </script>
</body>
</html>
