<!DOCTYPE html>
<html>
<head>
    <title>Staff Page</title>
</head>
<body>

    <h2>Staff Page</h2>

    <hr>

    <h4>Welcome to Our Site</h4>
    <p>This is Staff page - PartyTotalConfirm is {{ $total }} and they are {{ $status }}</p>

    <ul>
        <li><a href="{{ URL::to('/staffs') }}">Home</a></li>
        <li><a href="{{ URL::to('/staffsparty') }}">Party</a></li>
        
    </ul>

</body>
</html>
