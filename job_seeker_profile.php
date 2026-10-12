
<?php
// JobPortal UI prototype — no database connection.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0b0e11">
    <title>Job Seeker Profile | JobPortal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="profile-page">
    <header class="topbar">
        <a class="brand" href="index.php">
            <span class="brand-mark">J<span>.</span></span>
            <span>JobPortal<span class="brand-dot">.</span></span>
        </a>
        <span class="step-label"><span class="status-dot"></span> PROFILE SETUP</span>
    </header>

    <main class="profile-container">
        <div class="profile-intro">
            <span class="eyebrow">YOUR NEXT CHAPTER</span>
            <h1>Create your profile<span class="accent">.</span></h1>
            <p>Tell employers a little about yourself.</p>
        </div>

        <form class="profile-card" id="seekerForm" action="index.php" method="get">
            <div class="section-heading">
                <span class="section-index">01</span>
                <div>
                    <h2>Personal information</h2>
                    <p>Help employers get to know you.</p>
                </div>
            </div>

            <div class="field">
                <label for="photo">Profile photo <span class="optional">OPTIONAL</span></label>
                <label class="upload-box" for="photo">
                    <span class="upload-icon">↑</span>
                    <span class="upload-copy">
                        <strong id="photoLabel">Choose a profile photo</strong>
                        <small>JPG, PNG or WEBP · Optional</small>
                    </span>
                    <span class="upload-action">Browse files</span>
                </label>
                <input class="file-input" type="file" id="photo" name="photo"
                       accept="image/jpeg,image/png,image/webp">
            </div>

            <div class="form-grid">
                <div class="field">
                    <label for="fullName">Full name <span class="required">*</span></label>
                    <input type="text" id="fullName" name="fullName"
                           placeholder="e.g. Alex Morgan" autocomplete="name" required>
                </div>

                <div class="field">
                    <label for="age">Age <span class="required">*</span></label>
                    <input type="number" id="age" name="age" min="19" max="120"
                           step="1" placeholder="19 or older" required>
                    <small class="field-error" id="ageError"></small>
                </div>

                <div class="field field-wide">
                    <label for="experience">Experience <span class="optional">OPTIONAL</span></label>
                    <textarea id="experience" name="experience" rows="4"
                              placeholder="Share your experience, skills, previous roles or career goals..."></textarea>
                </div>

                <div class="field">
                    <label for="industry">Industry <span class="required">*</span></label>
                    <select id="industry" name="industry" required>
                        <option value="">Select your industry</option>
                        <option>Information Technology</option>
                        <option>Finance</option>
                        <option>Healthcare</option>
                        <option>Education</option>
                        <option>Marketing</option>
                        <option>Design</option>
                        <option>Manufacturing</option>
                        <option>Other</option>
                    </select>
                </div>

                <div class="field">
                    <label for="qualification">Qualification <span class="required">*</span></label>
                    <input type="text" id="qualification" name="qualification"
                           placeholder="e.g. B.Tech, MBA" required>
                </div>

                <div class="field">
                    <label for="nationality">Nationality <span class="required">*</span></label>
                    <input type="text" id="nationality" name="nationality"
                           placeholder="e.g. Indian" autocomplete="country-name" required>
                </div>

                <div class="field">
                    <label for="location">Location <span class="required">*</span></label>
                    <input type="text" id="location" name="location"
                           placeholder="City, country" autocomplete="address-level2" required>
                </div>
            </div>

            <div class="form-notice">
                <span aria-hidden="true">✳</span>
                Your information is only used for this UI demonstration and is not saved.
            </div>

            <button class="btn btn-primary btn-full" type="submit">
                Create Account <span aria-hidden="true">→</span>
            </button>

            <p class="switch-text">
                Already have an account? <a class="text-link" href="index.php">Sign in</a>
            </p>
        </form>
        <footer class="simple-footer">© 2026 JobPortal</footer>
    </main>

    <script>
        const seekerForm = document.getElementById('seekerForm');
        const age = document.getElementById('age');

        seekerForm.addEventListener('submit', event => {
            document.getElementById('ageError').textContent = '';

            if (age.value === '' || !Number.isInteger(Number(age.value)) ||
                Number(age.value) < 19 || Number(age.value) > 120) {
                event.preventDefault();
                document.getElementById('ageError').textContent =
                    'Enter a whole-number age between 19 and 120.';
                age.focus();
            }
        });

        document.getElementById('photo').addEventListener('change', event => {
            const file = event.target.files[0];
            document.getElementById('photoLabel').textContent =
                file ? file.name : 'Choose a profile photo';
        });
    </script>
</body>
</html>
