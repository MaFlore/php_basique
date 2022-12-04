<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="wrapper">
    <div class="registration_form">
        <div class="title">
            Registration Form
        </div>
        <form>
            <div class="form_wrap">
                <div class="input_grp"></div>
                    <div class="input_wrap">
                        <label for="fname">First Name</label>
                        <input type="text" id="fname">
                    </div>
                    <div class="input_wrap">
                        <label for="lname">Last Name</label>
                        <input type="text" id="lname">
                    </div>
                    <div class="input_wrap">
                        <label for="email">Email Address</label>
                        <input type="email" id="email">
                    </div>
                    <div class="input_wrap">
                        <label>Gender</label>
                        <ul>
                            <li>
                                <label class="radio_wrap">
                                    <input type="radio" name="gender" value="male" class="input_radio" checked>
                                    <span>Male</span>
                                </label>
                            </li>
                            <li>
                                <label class="radio_wrap">
                                    <input type="radio" name="gender" value="female" class="input_radio">
                                    <span>Female</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="input_wrap">
                        <label for="city">City</label>
                        <input type="text" id="city">
                    </div>
                    <div class="input_wrap">
                        <label for="country">Country</label>
                        <input type="text" id="contry">
                    </div>
                    <div class="input_wrap">
                        <input type="submit" value="Register Now" class="submit_btn">
                    </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>