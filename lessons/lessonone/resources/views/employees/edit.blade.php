<!DOCTYPE html>
<html>
<head>
    <title>Employee Edit</title>
</head>
<body>

    <h2>Employee Edit</h2>

    <hr>

    <h4>Welcome to Our Site</h4>
    <p>This is Employee page - Edit</p>

    @php
        echo "<pre>".print_r($data['employees'],true)."</pre>";
        echo $data['employees'][0] . "<br/>";
        echo $data['employees'][1] . "<br/>";
        echo $data['employees'][2] . "<br/>";
    @endphp

    <ul>
    @foreach($data['employees'] as $employee)
        <li>{{$employee}}</li>
    @endforeach
    </ul>

</body>
</html>
