<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>

    <h2>Profile</h2>

    <hr>

    <h4>Welcome to Our Site</h4>
    <p>This is Profile page</p>

    <ul>
        <li><a href="{{ URL::to('/') }}">Home</a></li>
        <li><a href="{{ URL::to('/about') }}">About</a></li>
        <li><a href="{{ URL::to('/contact') }}">About</a></li>
        <li><a href="{{ URL::to('/about/company/linhtet') }}">Company</a></li>
        <li><a href="{{ route('prof') }}">Profile</a></li>
    </ul>

</body>
</html>