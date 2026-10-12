
<?php
// JobPortal UI prototype — no database connection.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0b0e11">
    <title>Create Account | JobPortal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="center-page">
    <main class="single-page">
        <a class="brand centered-brand" href="index.php">
            <span class="brand-mark">J<span>.</span></span>
            <span>JobPortal<span class="brand-dot">.</span></span>
        </a>

        <section class="auth-card standalone-card">
            <div class="form-heading">
                <span class="eyebrow">GET STARTED</span>
                <h2>Create your<br>account<span class="accent">.</span></h2>
                <p>A few details are all it takes to get moving.</p>
            </div>

            <form id="signupForm" novalidate>
                <div class="field">
                    <label for="email">Email address</label>
                    <input type="email" id="email" name="email"
                           placeholder="you@example.com" autocomplete="email" required>
                    <small class="field-error" id="emailError"></small>
                </div>

                <div class="field">
                    <label for="password">Password</label>
                    <div class="password-wrap">
                        <input type="password" id="password" name="password"
                               placeholder="At least 6 characters"
                               minlength="6" autocomplete="new-password" required>
                        <button class="password-toggle" type="button"
                                data-toggle="password" aria-label="Show password">Show</button>
                    </div>
                    <small class="field-error" id="passwordError"></small>
                </div>

                <div class="field">
                    <label for="confirmPassword">Confirm password</label>
                    <div class="password-wrap">
                        <input type="password" id="confirmPassword"
                               name="confirmPassword" placeholder="Enter password again"
                               autocomplete="new-password" required>
                        <button class="password-toggle" type="button"
                                data-toggle="confirmPassword"
                                aria-label="Show confirm password">Show</button>
                    </div>
                    <small class="field-error" id="confirmError"></small>
                </div>

                <p class="form-error" id="signupMessage" role="alert"></p>

                <button class="btn btn-primary btn-full" type="submit">
                    Sign up <span aria-hidden="true">→</span>
                </button>
            </form>

            <div class="divider"><span>ALREADY A MEMBER?</span></div>

            <p class="switch-text">
                Already have an account?
                <a href="index.php" class="text-link">Sign in</a>
            </p>

            <p class="form-note">
                Your details won't be stored until database integration is added.
            </p>
        </section>

        <footer class="simple-footer">© 2026 JobPortal · Your next chapter starts here.</footer>
    </main>

    <script>
        document.querySelectorAll('.password-toggle').forEach(button => {
            button.addEventListener('click', () => {
                const input = document.getElementById(button.dataset.toggle);
                const showing = input.type === 'text';
                input.type = showing ? 'password' : 'text';
                button.textContent = showing ? 'Show' : 'Hide';
                button.setAttribute(
                    'aria-label',
                    showing ? 'Show password' : 'Hide password'
                );
            });
        });

        const signupForm = document.getElementById('signupForm');
        const email = document.getElementById('email');
        const password = document.getElementById('password');
        const confirmPassword = document.getElementById('confirmPassword');

        signupForm.addEventListener('submit', event => {
            event.preventDefault();

            document.querySelectorAll('.field-error').forEach(el => {
                el.textContent = '';
            });
            document.getElementById('signupMessage').textContent = '';

            let valid = true;

            if (!email.value.trim()) {
                document.getElementById('emailError').textContent =
                    'Please enter your email address.';
                valid = false;
            } else if (!email.validity.valid) {
                document.getElementById('emailError').textContent =
                    'Enter a valid email address.';
                valid = false;
            }

            if (!password.value) {
                document.getElementById('passwordError').textContent =
                    'Please enter a password.';
                valid = false;
            } else if (password.value.length < 6) {
                document.getElementById('passwordError').textContent =
                    'Password must contain at least 6 characters.';
                valid = false;
            }

            if (!confirmPassword.value) {
                document.getElementById('confirmError').textContent =
                    'Please confirm your password.';
                valid = false;
            } else if (confirmPassword.value !== password.value) {
                document.getElementById('confirmError').textContent =
                    'Passwords do not match.';
                valid = false;
            }

            if (!valid) {
                document.getElementById('signupMessage').textContent =
                    'Please correct the highlighted fields.';
                return;
            }

            window.location.href = 'role.php';
        });
    </script>
</body>
</html>
