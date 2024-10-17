<?php

// connect config file
require_once('./php/config.php');

$data = "SELECT * FROM personal
INNER JOIN about ON personal.id = about.id";

$sql = mysqli_query($con, $data);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application || Developed By SHAHED👨🏻‍🦰</title>

    <!-- 
    -- custom css file -->
    <link rel="stylesheet" href="./css/style.css">


    <!-- 
    -- favicon image -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!-- 
    -- boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


</head>

<body>

    <header class="w_100">
        <nav class="mx_auto">
            <!-- 
        -- logo -->
            <a href="./index.php">
                <img src="./logo.svg" alt="CodeChums" width="150" class="logo" style="pointer-events: none;">
            </a>

            <!-- 
            -- nav right -->
            <div class="nav_right">
                <a href="#" target="_blank" rel="noopener noreferrer">গিটহাব <i class='bx bxl-github'></i></a>
            </div>
        </nav>
    </header>


    <!-- 
    ---------- table section -->
    <div class="wrapper w_100">
        <div class="table_container mx_auto">
            <div class="add_button" style="margin-bottom: 1.2rem;">
                <a href="./php/add_dev.php">ডেভেলপার যোগ করুন <i class='bx bx-folder-plus'></i></a>
            </div>
            <!--
            -- table -->
            <table>
                <thead>
                    <tr>
                        <th>আইডি নং</th>
                        <th>নাম</th>
                        <th>ইমেল ঠিকানা</th>
                        <th>ফোন নম্বর</th>
                        <th>লিঙ্গ</th>
                        <th>পরিচালনা</th>
                    </tr>
                </thead>
                <!--
                --tbody -->
                <tbody>

                    <!-- যদি কোনো ডেটা না থাকে -->
                    <?php
                    if (mysqli_num_rows($sql) == 0) {
                    ?>

                        <tr>
                            <td colspan="6">No data available🙍</td>
                        </tr>

                        <?php
                    } else {

                        // যদি ডেটা থাকে
                        while ($all_data = mysqli_fetch_array($sql)) {

                        ?>
                            <tr>
                                <td data-cell="আইডি নং">
                                    <?php echo $all_data['id']; ?>
                                </td>
                                <td data-cell="নাম">
                                    <?php echo $all_data['fullname']; ?>
                                </td>
                                <td data-cell="ইমেল ঠিকানা">
                                    <?php echo $all_data['email']; ?>
                                </td>
                                <td data-cell="ফোন নম্বর">
                                    <?php echo $all_data['mobile']; ?>
                                </td>
                                <td data-cell="লিঙ্গ">
                                    <?php echo $all_data['gender']; ?>
                                </td>
                                <td class="manage" data-cell="পরিচালনা">
                                    <a href="./php/single_view.php?slug=<?php echo $all_data['slug']; ?>" title="View <?php echo $all_data['fullname']; ?>"><i class='bx bx-street-view'></i></a>

                                    <a href="./php/single_edit.php?slug=<?php echo $all_data['slug']; ?>" title="Edit <?php echo $all_data['fullname']; ?>"><i class='bx bxs-edit'></i></a>

                                    <a href="./php/delete_user.php?slug=<?php echo $all_data['slug']; ?>" title="Delete <?php echo $all_data['fullname']; ?>"><i class='bx bx-trash'></i></a>
                                </td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>