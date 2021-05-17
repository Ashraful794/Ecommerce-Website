<!DOCTYPE html>
<html lang="en">
<head>
    <title>Account Activation</title>
</head>
<body>
    <p>
        Dear {{$name}},<br>
        Please click the link below to activate your account<br>
        <a href="{{ url('confirm/'.$code) }}" target="blank">Activate Account</a> <br>
        Regards, <br>
        Wayshop Team
 
    </p>
</body>
</html>