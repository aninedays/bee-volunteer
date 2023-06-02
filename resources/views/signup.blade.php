<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | BEEVOLUNTEER</title>
    <link rel="stylesheet" href="css/signup.css">
</head>

<body>
    <div class="container">
        <div class="title">SIGN UP</div>
        <form action="{{ route('actionregister') }}" method="POST">
            @csrf
            <div class="userDetails">

                <div class="boxInput">
                    <span class="details">User Name</span>
                    <input type="text" class="form-control" placeholder="Enter Your Name" name="user_name"
                        id="user_name" required>
                </div>

                <div class="boxInput">
                    <span class="details">Email</span>
                    <input type="email" class="form-control" placeholder="Enter Your Email" name="user_email"
                        id="user_email" required>
                </div>

                <div class="boxInput">
                    <span class="details">Password</span>
                    <input type="password" class="form-control" placeholder="Enter Your Password" name="password"
                        id="password" required>
                </div>

                <div class="boxInput">
                    <span class="details">Address</span>
                    <input type="text" class="form-control" name="user_address" id="user_address"
                        placeholder="Enter Your Address" required>
                </div>

                <div class="boxInput">
                    <span class="details">Phone Number</span>
                    <input type="number" class="form-control" name="user_phone" id="user_phone"
                        placeholder="Enter Your Phone Number" required>
                </div>

                <div class="boxInput">
                    <span class="details">Date Of Birth</span>
                    <input type="date" placeholder="Enter Your Date Of Birth" name="user_dob" id="user_dob"
                        required>
                </div>
            </div>

            <div class="genderDetails">
                <input type="radio" name="user_role" id="user_role1">
                <input type="radio" name="user_role" id="user_role2">
                <span class="genderTitle">Role</span>
                <div class="category">
                    <label for="user_role1">
                        <span class="user_role one"></span>
                        <span class="gender">Organization</span>
                    </label>

                    <label for="user_role2">
                        <span class="user_role two"></span>
                        <span class="gender">Volunteer</span>
                    </label>
                </div>
            </div>

            <div class="submitButton">
                <input type="submit" value="SIGN UP">
            </div>
        </form>
    </div>

</body>

</html>
