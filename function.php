<?php
require('./connection.php');


if (isset($_GET['deleteid'])) {
    // echo "hello";
    $card_details = $mysqli->query('DELETE FROM `card_details` where `id`=' . $_GET['deleteid'] . ' ');
    header('Location:index.php');
}

if (isset($_POST['login'])) {
    $query = "SELECT * FROM `admin_login` WHERE `email`='" . $_POST['email'] . "' AND `password`='" . $_POST['password'] . "'";
    $result = mysqli_query($mysqli, $query);

    if (mysqli_num_rows($result) == 1) {

        $_SESSION['id'] = $_POST['email'];
        header("location:./index.php");
    } else {
        echo "Hello";
        header("location:./login.php?error=1");
    }
}

if (isset($_POST['addcard'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $mobile_number = $_POST['mobile_number'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $website_link = $_POST['website_link'];
    $linkden_link = $_POST['linkden_link'];
    $youtube_link = $_POST['youtube_link'];
    $division = $_POST['division'];
    $job_profile = $_POST['job_profile'];
    $color = $_POST['color'];
    $text_color = $_POST['text_color'];
    $heading_p_tag = $_POST['heading_p_tag'];
    $header_color = $_POST['header_color'];
    $profile_pic = '';
    $background_img = '';
    $address = $_POST['address'];
    $profile = '';
    $bgimg = '';

    // cheke the background and uploda query
    if (isset($_FILES['background_img'])) {
        $fileName = basename($_FILES["profile_pic"]["name"]);
        if (move_uploaded_file($_FILES['profile_pic']['tmp_name'], 'uploads/' . $fileName)) {
            $profile_pic = $fileName;
            if (isset($_POST['id'])) {
                unlink('uploads/' . $_POST['profile_pic']);
                $profile = ",`profile_pic`='" . $profile_pic . "'";
            }
        }
    }

    // cheke the background and uploda query
    if (isset($_FILES['background_img'])) {
        $fileName = basename($_FILES["background_img"]["name"]);
        if (move_uploaded_file($_FILES['background_img']['tmp_name'], 'uploads/' . $fileName)) {
            $background_img = $fileName;
            if (isset($_POST['id'])) {
                unlink('uploads/' . $_POST['background_img']);
                $bgimg = ",`background_img`='" . $background_img . "'";
            }
        }
    }

    // add data and delete data
    if (isset($_POST['id'])) {
        $query = " UPDATE `card_details` SET `first_name`='" . $first_name . "',`last_name`='" . $last_name . "',`mobile_number`='" . $mobile_number . "',`phone_number`='" . $phone_number . "',`email`='" . $email . "',`website_link`='" . $website_link . "',`linkden_link`='" . $linkden_link . "',`youtube_link`='" . $youtube_link . "',`division`='" . $division . "',`job_profile`='" . $job_profile . "'" . $profile . " " . $bgimg . ",`address`='" . $address . "' ,`color`='" . $color . "' ,`text_color`='" . $text_color . "' ,`heading_p_tag`='" . $heading_p_tag . "',`header_color`='" . $header_color . "' WHERE id=" . $_POST['id'];
        $mysqli->query($query);
    } else {
        $mysqli->query("INSERT INTO `card_details`(`first_name`, `last_name`, `mobile_number`, `phone_number`, `email`, `website_link`, `linkden_link`, `youtube_link`, `division`, `job_profile`, `profile_pic`, `background_img`, `address` , `color` ,`text_color`,`heading_p_tag`,`header_color`) VALUES ('" . $first_name . "','" . $last_name . "','" . $mobile_number . "','" . $phone_number . "','" . $email . "','" . $website_link . "','" . $linkden_link . "','" . $youtube_link . "','" . $division . "','" . $job_profile . "','" . $profile_pic . "','" . $background_img . "','" . $address . "','" . $color . "','" . $text_color . "','" . $heading_p_tag . "','" . $header_color . "')");
    }
    header('Location:index.php');
}
