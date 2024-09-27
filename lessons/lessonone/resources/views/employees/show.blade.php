<!DOCTYPE html>
<html>
<head>
    <title>Employee Show</title>
</head>
<body>

    <h2>Employee Show</h2>

    <hr>

    <h4>Welcome to Our Site</h4>
    <p>This is Employee page - Show</p>

    @php
        echo "<pre>".print_r($employees,true)."</pre>";
        echo $employees[0] . "<br/>";
        echo $employees[1] . "<br/>";
        echo $employees[2] . "<br/>";
    @endphp

    <ul>
    @foreach($employees as $employee)
        <li>{{$employee}}</li>
    @endforeach
    </ul>

</body>
</html>
