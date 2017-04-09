<!DOCTYPE html>
<!-- saved from url=(0047)https://accounts.generalassemb.ly/users/sign_in -->
<html>

<head>
    <link rel="stylesheet" href="css/signin.css">
</head>

<body>

    <header class="masthead" role="banner">
        <a class="masthead-title" href="https://generalassemb.ly/">General Assembly</a>
    </header>
    <main class="main-content" role="main">
        <div class="page">
            <div class="g-row login-form">
                <div class="g-column large-6 large-centered">
                    <h2>Sign In</h2>
                    <form class="new_user" id="new_user" action="login.php" accept-charset="UTF-8" method="post">
                    
                        <input placeholder="Your Email" autofocus="autofocus" type="text" name="username" id="user_email">
                        <label for="user_password">Password</label>
                        <input placeholder="Your Password" type="password" name="password" id="user_password">
                        <input type="submit" name="commit" value="Sign In" class="button -fluid" data-working-message="Working…">
                        <div class="g-row">
                            <div class="g-column medium-6">
                                <label>
<input name="user[remember_me]" type="hidden" value="0"><input type="checkbox" value="1" name="user[remember_me]" id="user_remember_me">
Remember me
</label>
                            </div>
                            <div class="g-column medium-6">
                                <div class="login-form_forgot-password">
                                    <a href="https://accounts.generalassemb.ly/users/password/new">Forgot your password?</a>
                                </div>
                            </div>
                        </div>
                        <div class="g-row">
                            <div class="g-column">
                                <div class="login-form_alternate-login-panel">
                                    Don't have an account?
                                    <a href="https://accounts.generalassemb.ly/users/sign_up">Sign Up</a>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </main>
</body>

</html>
