<!DOCTYPE html>
<html>
<head>
    <title>Employee Page</title>
</head>
<body>

    <h2>Employee Page</h2>

    <hr>

    <h4>Welcome to Our Site</h4>
    <p>This is Employee page - dataone</p>

    <h3>Hi , {{$greet}} , {{$hi}}</h3>

    @php
        echo "<pre>".print_r($staffs,true)."</pre>";
        echo $staffs[0] . "<br/>";
        echo $staffs[1] . "<br/>";
        echo $staffs[2] . "<br/>";
    @endphp

    <ul>
    @foreach($staffs as $staff)
        <li>{{$staff}}</li>
    @endforeach
    </ul>

</body>
</html>
