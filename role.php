
<?php
// JobPortal UI prototype — no database connection.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0b0e11">
    <title>Choose Your Path | JobPortal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="center-page">
    <main class="role-page">
        <a class="brand centered-brand" href="index.php">
            <span class="brand-mark">J<span>.</span></span>
            <span>JobPortal<span class="brand-dot">.</span></span>
        </a>

        <header class="role-heading">
            <span class="eyebrow"><span class="status-dot"></span> YOUR JOURNEY BEGINS</span>
            <h1>What are you<br>looking <span>for?</span></h1>
            <p>Choose how you want to use JobPortal. We'll help you take the next step.</p>
        </header>

        <div class="role-grid">
            <a class="role-card" href="job_seeker_profile.php">
                <div class="role-card-top">
                    <span class="role-icon">
                        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <circle cx="10.8" cy="10.8" r="6.8"
                                    stroke="currentColor" stroke-width="1.7"/>
                            <path d="m16 16 4.2 4.2M8 11l1.8 1.8L14 8.5"
                                  stroke="currentColor" stroke-width="1.7"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    <span class="card-arrow" aria-hidden="true">↗</span>
                </div>
                <span class="role-number">01 / JOB SEEKER</span>
                <h2>Looking for<br>a Job<span class="accent">.</span></h2>
                <p>Find opportunities and connect with employers.</p>
                <span class="role-action">Build your profile <span>→</span></span>
            </a>

            <a class="role-card" href="employer_profile.php">
                <div class="role-card-top">
                    <span class="role-icon">
                        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <rect x="3.5" y="7" width="17" height="13"
                                  rx="2" stroke="currentColor" stroke-width="1.7"/>
                            <path d="M9 7V4.5h6V7M3.5 12h17M10 12v2h4v-2"
                                  stroke="currentColor" stroke-width="1.7"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    <span class="card-arrow" aria-hidden="true">↗</span>
                </div>
                <span class="role-number">02 / EMPLOYER</span>
                <h2>Looking for<br>Employees<span class="accent">.</span></h2>
                <p>Find talented people for your organization.</p>
                <span class="role-action">Build your company profile <span>→</span></span>
            </a>
        </div>

        <p class="role-back">Already have an account? <a href="index.php">Sign in</a></p>
        <footer class="simple-footer">© 2026 JobPortal · Find your next possibility.</footer>
    </main>
</body>
</html>
