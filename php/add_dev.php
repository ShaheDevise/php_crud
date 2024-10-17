<?php

// connect config file
require_once('./config.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Developer</title>

    <!-- 
    -- custom css file -->
    <link rel="stylesheet" href="./../css/style.css">


    <!-- 
    -- favicon image -->
    <link rel="shortcut icon" href="./../favicon.svg" type="image/svg+xml">

    <!-- 
    -- boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


</head>

<body>

    <header class="w_100">
        <nav class="mx_auto">
            <!-- 
        -- logo -->
            <a href="./../index.php">
                <img src="./../logo.svg" alt="CodeChums" width="150" class="logo" style="pointer-events: none;">
            </a>

            <!-- 
            -- nav right -->
            <div class="nav_right">
                <a href="#" target="_blank" rel="noopener noreferrer">গিটহাব <i class='bx bxl-github'></i></a>
            </div>
        </nav>
    </header>

    <!-- 
    --- from
     -->

    <div class="form_container w_100">
        <form action="./submit.php" method="POST" class="mx_auto">

            <div class="form_title">
                <h3>নতুন ডেভেলপার যোগ করুন</h3>
            </div>
            <!-- 
            -- input grid
             -->
            <div class="input_grid">
                <div class="input_group">
                    <input type="text" name="full_name" id="fullname" placeholder="সম্পূর্ণ নাম" required>
                </div>

                <div class="input_group">
                    <input type="email" name="email" id="email" placeholder="ইমেইল" required>
                </div>
            </div>

            <div class="input_grid">
                <div class="input_group">
                    <input type="text" name="phone" id="phone" placeholder="মোবাইল নম্বর" required>
                </div>

                <div class="input_group">
                    <select name="gender" id="gender" required>
                        <option selected disabled>লিঙ্গ সিলেক্ট করুন</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
            </div>

            <div class="input_grid">
                <div class="input_group">
                    <input type="text" name="skills" id="skills" placeholder="ভাষায় দক্ষ, যেমন: HTML, CSS, PHP ইত্যাদি" required>
                </div>

                <div class="input_group">
                    <select name="experience_level" id="experience_level" required>
                        <option selected disabled>অভিজ্ঞতা স্তর</option>
                        <option value="Junior Level">Junior Level</option>
                        <option value="Mid Level">Mid Level</option>
                        <option value="Senior Level">Senior Level</option>
                    </select>
                </div>
            </div>

            <div class="input_group">
                <input type="url" name="github_profile" id="github_profile" placeholder="আপনার গিটহাব প্রোফাইল লিংক" required>
            </div>

            <div class="input_group">
                <input type="url" name="portfolio_website" id="portfolio_website" placeholder="আপনার পোর্টফোলিও লিংক" required>
            </div>

            <div class="input_group">
                <input type="text" name="current_job_title" id="current_job_title" placeholder="বর্তমান পেশা (যদি থাকে)">
            </div>

            <div class="button_group">
                <button type="submit">সাবমিট করুন</button>
                <button type="reset">রিসেট করুন</button>
            </div>
        </form>
    </div>


</body>

</html>