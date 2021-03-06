<html>
<head>
    <title><?php echo $Page['title'] ?></title>
    <meta content=<?php echo "'" . $Page['title'] . "'" ?> property="og:title">
    <meta content="A place to view your Spotify stats." property="og:description">
    <!-- Favicon -->
    <link rel="icon" href="assets/img/favicon.ico">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.15/css/mdb.min.css" rel="stylesheet">
    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark black">
    <a class="navbar-brand" href="index.php">mySpotify</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarOptions" aria-controls="navbarOptions" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarOptions">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="tracks.php">Tracks</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="artists.php">Artists</a>
        </li>
        </ul>
        <span class="navbar-text white-text">
            <?php 
            echo $User['username']; ?>
            <?php if ($User['valid']) { ?>
                <a href='logout.php' class='ml-2'><i class='fas fa-sign-out-alt'></i></a> 
            <?php } ?>
        </span>
    </div>
</nav>