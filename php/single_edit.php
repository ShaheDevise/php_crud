<?php

// connect config file
require_once('./config.php');

$user_slug = $_GET['slug'];

$sql = "SELECT * FROM personal INNER JOIN about ON personal.slug = about.slug WHERE personal.slug = '$user_slug'";

$view_user_data = mysqli_query($con, $sql);

if (mysqli_num_rows($view_user_data) == 0) {
    header('Location: ./../index.php');
}

$view_userdata = mysqli_fetch_array($view_user_data);

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
        <form action="./update_user.php" method="POST" class="mx_auto">

            <div class="form_title">
                <h3>Hi🙋‍♂️ <span><?php echo $view_userdata['fullname']; ?></span></h3>
            </div>
            <!-- 
            -- input grid
             -->

            <div class="input_group">
                <input type="hidden" name="id" id="id" placeholder="আইডি" value="<?php echo $view_userdata['id']; ?>" required>
            </div>
            <div class="input_grid">
                <div class="input_group">
                    <input type="text" name="full_name" id="fullname" placeholder="সম্পূর্ণ নাম" value="<?php echo $view_userdata['fullname']; ?>" required>
                </div>

                <div class="input_group">
                    <input type="email" name="email" id="email" placeholder="ইমেইল" value="<?php echo $view_userdata['email']; ?>" required>
                </div>
            </div>

            <div class="input_grid">
                <div class="input_group">
                    <input type="text" name="phone" id="phone" placeholder="মোবাইল নম্বর" value="<?php echo $view_userdata['mobile']; ?>" required>
                </div>

                <div class="input_group">
                    <select name="gender" id="gender" required>
                        <option selected disabled>লিঙ্গ সিলেক্ট করুন</option>
                        <option value="Male" <?php if ($view_userdata['gender'] == 'Male') echo 'selected'; ?>>Male</option>
                        <option value="Female" <?php if ($view_userdata['gender'] == 'Female') echo 'selected'; ?>>Female</option>
                        <option value="Others" <?php if ($view_userdata['gender'] == 'Others') echo 'selected'; ?>>Others</option>
                    </select>
                </div>
            </div>

            <div class="input_grid">
                <div class="input_group">
                    <input type="text" name="skills" id="skills" placeholder="ভাষায় দক্ষ, যেমন: HTML, CSS, PHP ইত্যাদি" value="<?php echo $view_userdata['skills']; ?>" required>
                </div>

                <div class="input_group">
                    <select name="experience_level" id="experience_level" required>
                        <option selected disabled>অভিজ্ঞতা স্তর</option>
                        <option value="Junior Level" <?php if ($view_userdata['experience_level'] == 'Junior Level') echo 'selected'; ?>>Junior Level</option>
                        <option value="Mid Level" <?php if ($view_userdata['experience_level'] == 'Mid Level') echo 'selected'; ?>>Mid Level</option>
                        <option value="Senior Level" <?php if ($view_userdata['experience_level'] == 'Senior Level') echo 'selected'; ?>>Senior Level</option>
                    </select>
                </div>
            </div>

            <div class="input_group">
                <input type="url" name="github_profile" id="github_profile" placeholder="আপনার গিটহাব প্রোফাইল লিংক" value="<?php echo $view_userdata['github_profile']; ?>" required>
            </div>

            <div class="input_group">
                <input type="url" name="portfolio_website" id="portfolio_website" placeholder="আপনার পোর্টফোলিও লিংক" value="<?php echo $view_userdata['portfolio_website']; ?>" required>
            </div>

            <div class="input_group">
                <input type="text" name="current_job_title" id="current_job_title" placeholder="বর্তমান পেশা (যদি থাকে)" value="<?php echo $view_userdata['current_job_title']; ?>">
            </div>

            <div class="button_group">
                <button type="submit">সংরক্ষণ এবং পরিবর্তন</button>
                <button type="reset">রিসেট করুন</button>
            </div>
        </form>
    </div>


</body>

</html>