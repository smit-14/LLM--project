
<?php
// JobPortal UI prototype — no database connection.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0b0e11">
    <title>Employer Profile | JobPortal</title>
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
            <span class="eyebrow">BUILD YOUR TEAM</span>
            <h1>Create your profile<span class="accent">.</span></h1>
            <p>Tell us about yourself and your company.</p>
        </div>

        <form class="profile-card" id="employerForm" action="index.php" method="get">
            <div class="section-heading">
                <span class="section-index">01</span>
                <div>
                    <h2>Personal information</h2>
                    <p>Introduce yourself and your organization.</p>
                </div>
            </div>

            <div class="field">
                <label for="employerPhoto">Profile photo <span class="optional">OPTIONAL</span></label>
                <label class="upload-box" for="employerPhoto">
                    <span class="upload-icon">↑</span>
                    <span class="upload-copy">
                        <strong id="employerPhotoLabel">Choose a profile photo</strong>
                        <small>JPG, PNG or WEBP · Optional</small>
                    </span>
                    <span class="upload-action">Browse files</span>
                </label>
                <input class="file-input" type="file" id="employerPhoto"
                       name="employerPhoto" accept="image/jpeg,image/png,image/webp">
            </div>

            <div class="form-grid">
                <div class="field">
                    <label for="name">Name <span class="required">*</span></label>
                    <input type="text" id="name" name="name"
                           placeholder="Your full name" autocomplete="name" required>
                </div>

                <div class="field">
                    <label for="age">Age <span class="required">*</span></label>
                    <input type="number" id="age" name="age" min="19" max="120"
                           step="1" placeholder="19 or older" required>
                    <small class="field-error" id="ageError"></small>
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
                    <label for="location">Location <span class="required">*</span></label>
                    <input type="text" id="location" name="location"
                           placeholder="City, country" required>
                </div>

                <div class="field field-wide">
                    <label for="companyName">Company's name <span class="required">*</span></label>
                    <input type="text" id="companyName" name="companyName"
                           placeholder="e.g. Acme Technologies" autocomplete="organization" required>
                </div>
            </div>

            <div class="field logo-field">
                <label for="companyLogo">Company's logo <span class="optional">OPTIONAL</span></label>
                <label class="upload-box" for="companyLogo">
                    <span class="upload-icon">↑</span>
                    <span class="upload-copy">
                        <strong id="companyLogoLabel">Upload your company logo</strong>
                        <small>JPG, PNG or WEBP · Optional</small>
                    </span>
                    <span class="upload-action">Browse files</span>
                </label>
                <input class="file-input" type="file" id="companyLogo" name="companyLogo"
                       accept="image/jpeg,image/png,image/webp">
            </div>

            <div class="form-notice">
                <span aria-hidden="true">✳</span>
                Your information is not saved. Database integration will be added later.
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
        const employerForm = document.getElementById('employerForm');
        const age = document.getElementById('age');

        employerForm.addEventListener('submit', event => {
            document.getElementById('ageError').textContent = '';

            if (age.value === '' || !Number.isInteger(Number(age.value)) ||
                Number(age.value) < 19 || Number(age.value) > 120) {
                event.preventDefault();
                document.getElementById('ageError').textContent =
                    'Enter a whole-number age between 19 and 120.';
                age.focus();
            }
        });

        [
            ['employerPhoto', 'employerPhotoLabel', 'Choose a profile photo'],
            ['companyLogo', 'companyLogoLabel', 'Upload your company logo']
        ].forEach(([inputId, labelId, defaultText]) => {
            document.getElementById(inputId).addEventListener('change', event => {
                const file = event.target.files[0];
                document.getElementById(labelId).textContent =
                    file ? file.name : defaultText;
            });
        });
    </script>
</body>
</html>
