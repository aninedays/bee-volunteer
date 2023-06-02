<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | BeeVolunteer</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/manage_profile.css">
</head>

<body>

    <div class="icons">
        <div class="fas fa-arrow-left" id="back-btn"></div>
    </div>
    <section class="heading" id="heading">
        <h1 class="heading"> Manage <span>Profile</span> </h1>
    </section>

    <center>
        <div class="box">
            <img src="images/team.png">
            <input type="file" name="" id="file" accept="image/*">
            <label for="file">EDIT PICTURE</label>
            <input type="text" name="" placeholder="diisyaa">
            <input type="text" name="" placeholder="Female">
            <input type="email" name="" placeholder="dindaAlisya@gmail.com">
            <h4>Date Of Birth</h4>
            <input type="date" name="" placehoder="Date Of Birth">
            <a href={{ url('/') }}><button style="float: left;margin: 0 20px 20px 18.2%;">Cancel</button></a>
            <a href={{ url('/') }}><button style="float: left;margin: 0 18.2% 0 0;">Save</button></a>
        </div>
    </center>
</body>

</html>
