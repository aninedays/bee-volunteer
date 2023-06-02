<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | BEEVOLUNTEER</title>
    <link rel="stylesheet" type="text/css" href="css/signin.css">
</head>

<body>
    <div id="Card">
        <div id="cardContent">
            <div id="cardTitle">
                <h2>SIGN IN AS ORGANIZATION</h2>
                <div class="title_underline"></div>
            </div>
            <form action="/signin" method="POST" class="form">
                @csrf
                <label for="user_email" style="padding-top: 13px">&nbsp;
                    Email
                </label>
                <input id="user_email" class="form-control" type="email" name="user_email" required />
                <div class="formBorder"></div>

                <label for="password" style="padding-top: 22px">&nbsp;
                    Password
                </label>
                <input id="password" class="form-control rounded-bottom" type="password" name="password" required />
                <div class="formBorder"></div>

                <input id="btnSubmit" type="submit" name="submit" value="SIGN IN">

                <a href="/signup" id="signUp">Create an Account ?</a>
            </form>
        </div>
    </div>
</body>

</html>
