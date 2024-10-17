<?php

// connect databse
require_once('./config.php');

$user_slug = $_GET['slug'];

$select_user_data = "SELECT * FROM personal
INNER JOIN about ON personal.slug = about.slug WHERE personal.slug = '$user_slug'";

$print_data = mysqli_query($con, $select_user_data);

// যদি url এর slug না মিলে
if(mysqli_num_rows($print_data) == 0){
    header('Location: ./../index.php');
}

$user_all_data = mysqli_fetch_array($print_data);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application || Developed By SHAHED👨🏻‍🦰</title>

    <!-- 
    -- custom css file -->
    <link rel="stylesheet" href="./../css/style.css">
    <link rel="stylesheet" href="./../css/data.view.css">


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

    <!-- table -->
    <div class="data_table_container w_100">
        <table>
            <div class="table_data">

                <tr>
                    <th style="text-align: center; font-size: 1.2rem;" colspan="9">Hey🙋‍♂️ <span class="user_main"><?php echo $user_all_data['fullname']; ?></span></th>
                </tr>
                <tr class="tx_left">
                    <th>আপনার নাম</th>
                    <th>:</th>
                    <td>
                        <?php echo $user_all_data['fullname']; ?>
                    </td>
                </tr>

                <tr class="tx_left">
                    <th>আপনার ইমেইল</th>
                    <th>:</th>
                    <td><?php echo $user_all_data['email']; ?></td>
                </tr>

                <tr class="tx_left">
                    <th>আপনার মোবাইল</th>
                    <th>:</th>
                    <td><?php echo $user_all_data['mobile']; ?></td>
                </tr>

                <tr class="tx_left">
                    <th>আপনার লিঙ্গ</th>
                    <th>:</th>
                    <td><?php echo $user_all_data['gender']; ?></td>
                </tr>

                <tr class="tx_left">
                    <th>আপনার দক্ষতা</th>
                    <th>:</th>
                    <td><?php echo $user_all_data['skills']; ?></td>
                </tr>

                <tr class="tx_left">
                    <th>আপনার অভিজ্ঞতার স্তর</th>
                    <th>:</th>
                    <td><?php echo $user_all_data['experience_level']; ?></td>
                </tr>

                <tr class="tx_left">
                    <th>আপনার গিটহাব</th>
                    <th>:</th>
                    <td><?php echo $user_all_data['github_profile']; ?></td>
                </tr>

                <tr class="tx_left">
                    <th>আপনার পোর্টফোলিও</th>
                    <th>:</th>
                    <td><?php echo $user_all_data['portfolio_website']; ?></td>
                </tr>

                <tr class="tx_left">
                    <th>বর্তমান পেশা</th>
                    <th>:</th>
                    <td><?php echo $user_all_data['current_job_title']; ?></td>
                </tr>

            </div>
        </table>
    </div>

</body>

</html>