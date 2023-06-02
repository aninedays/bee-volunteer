<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | BeeVolunteer</title>
    <link rel="stylesheet" href="css/join_services.css">
</head>
<body>
    <div class="regform"><h1>Registration Form</h1></div>
    <div class="main">
        <form>
            <div id="name">
                <h2 class="name">Name</h2>
                <input class="firstname" type="text" name="first_name" required><br>
                <label class="firstlabel">first name</label>
                <input class="lastname" type="text" name="last_name">
                <label class="lastlabel">last name</label>
            </div>

            <h2 class="name">Age</h2>
            <input class="age" type="text" name="age" required>

            <h2 class="name">Gender</h2>
            <div class="genderDetails">
                <input type="radio" name="gender" id="dot1">
                <input type="radio" name="gender" id="dot2">
                <div class="category">
                    <label for="dot1">
                        <span class="dot one"></span>
                        <span class="gender">Male</span>
                    </label>

                    <label for="dot2">
                        <span class="dot two"></span>
                        <span class="gender">Female</span>
                    </label>
                </div>
            </div>

            <h2 class="name">Address</h2>
            <input class="address" type="text" name="address" required>

            <h2 class="name">Email</h2>
            <input class="email" type="email" name="email" required>

            <h2 class="name">Phone</h2>
            <input class="code" type="text" name="area_code" required>
            <label class="area-code">Area Code</label>
            <input class="number" type="text" name="phone" required>
            <label class="phone-number">Phone Number</label>

            <h2 class="name">Occupation</h2>
            <select class="option" name="subject">
            <option disabled="disabled" selected="selected">--Choose Occupation</option>
            <option>Student</option>
            <option>Private Sector Employee</option>
            <option>Entrepreneur</option>
            <option>Government Employees</option>
            <option>Others</option>
            </select>

            <h2 class="name">Interest Category</h2>
            <select class="option" name="subject">
            <option disabled="disabled" selected="selected">--Choose Option</option>
            <option>Sport</option>
            <option>Art</option>
            <option>Education</option>
            <option>Health</option>
            <option>Environment</option>
            </select>

            <h2 class="name">Reasons to Join</h2>
            <input class="reasons" type="text" name="reasons" required>


            <button type="submit">Register</button>
        </form>
    </div>

</body>
</html>
