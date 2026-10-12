
<?php
// JobPortal UI prototype — no database connection.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0b0e11">
    <title>Sign In | JobPortal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="auth-layout">
        <section class="brand-panel">
            <a class="brand" href="index.php">
                <span class="brand-mark">J<span>.</span></span>
                <span>JobPortal<span class="brand-dot">.</span></span>
            </a>

            <div class="brand-copy">
                <span class="eyebrow"><span class="status-dot"></span> YOUR NEXT CHAPTER STARTS HERE</span>
                <h1>Make your next<br>move <span>matter.</span></h1>
                <p>One place for ambitious people and the teams ready to meet them.</p>
                <div class="feature-line">
                    <span class="feature-icon">↗</span>
                    <span>Discover opportunities. Build your future.</span>
                </div>
            </div>

            <div class="brand-footer">A better way to work. A smarter way to hire.</div>
        </section>

        <section class="form-panel">
            <div class="auth-card">
                <div class="mobile-brand">
                    <a class="brand" href="index.php">
                        <span class="brand-mark">J<span>.</span></span>
                        <span>JobPortal<span class="brand-dot">.</span></span>
                    </a>
                </div>

                <div class="form-heading">
                    <span class="eyebrow">WELCOME BACK</span>
                    <h2>Welcome back<span class="accent">.</span></h2>
                    <p>Sign in to continue to your account</p>
                </div>

                <form id="loginForm">
                    <div class="field">
                        <label for="loginEmail">Email address</label>
                        <input type="email" id="loginEmail" name="email"
                               placeholder="you@example.com" autocomplete="email" required>
                    </div>

                    <div class="field">
                        <div class="label-row">
                            <label for="loginPassword">Password</label>
                        </div>
                        <div class="password-wrap">
                            <input type="password" id="loginPassword" name="password"
                                   placeholder="Enter your password"
                                   autocomplete="current-password" required>
                            <button class="password-toggle" type="button"
                                    data-toggle="loginPassword"
                                    aria-label="Show password">Show</button>
                        </div>
                    </div>

                    <p class="form-error" id="loginMessage" role="status"
                       aria-live="polite"></p>

                    <button class="btn btn-primary btn-full" type="submit">
                        Sign in <span aria-hidden="true">→</span>
                    </button>
                </form>

                <div class="divider"><span>OR</span></div>

                <p class="switch-text">Don't have an account?</p>
                <a href="signup.php" class="btn btn-secondary btn-full">
                    Create an account <span aria-hidden="true">↗</span>
                </a>

                <p class="form-note">
                    This is a UI prototype. Sign-in authentication will be added later.
                </p>
            </div>

            <footer class="page-footer">
                <span>© 2026 JobPortal</span>
                <span>Built for what's next <span class="accent">✳</span></span>
            </footer>
        </section>
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

        document.getElementById('loginForm').addEventListener('submit', event => {
            event.preventDefault();
            document.getElementById('loginMessage').textContent =
                'Sign-in is not connected yet. Complete the UI first; authentication will be added later.';
        });
    </script>
</body>
</html>
