<?php include 'inc/check_session.php'; ?>
<?php include 'inc/fetch_user.php'; ?>

<?php  
    if (isset($_GET['ref'])) {
        if ($_GET['ref'] == 'Dashboard') {
            $title = "Dashboard";
        }elseif ($_GET['ref'] == 'Profile') {
            $title = "Profile";
        }elseif ($_GET['ref'] == 'Message') {
            $title = "Message";
        }elseif ($_GET['ref'] == 'Notification') {
            $title = "Notification";
        }elseif ($_GET['ref'] == 'Members') {
            $title = "Members";
        }elseif ($_GET['ref'] == 'Feedback') {
            $title = "Feedback";
        }elseif ($_GET['ref'] == 'new_user') {
            $title = "New User";
        }elseif ($_GET['ref'] == 'Archive') {
            $title = "Archive";
        }elseif ($_GET['ref'] == 'View_Archived') {
            $title = "View Archived";
        }else{
            $title = "Admin Panel";
        }

    }else{
        $title = "VU Alumni";
    }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- title logo -->
    <link href='../images/vu-title-logo.png' rel='icon' type='image/x-icon' />

    <!-- custom css-->
    <link rel="stylesheet" href="css/style.css">

    <title><?php echo $title ?></title>
</head>

<body>