<!DOCTYPE html>
<html>
<head>
    <title>Employee Page</title>
</head>
<body>

    <h2>Employee Page</h2>

    <hr>

    <h4>Welcome to Our Site</h4>
    <p>This is Employee page - index</p>

    <?php

    foreach($employeedatas as $employeedata){
        echo $employeedata . "<br/>";
    }

    ?>


    @php
    foreach($employeedatas as $employeedata){
        echo $employeedata . "<br/>";
    }
    @endphp

    @foreach($employeedatas as $employeedata)
    {{ $employeedata}}
    @endforeach

    @foreach($employeedatas as $employeedata)
    {!! $employeedata !!}
    @endforeach

    <ul>
        @foreach($employeedatas as $employeedata)
         <li> {!! $employeedata !!} </li>
        @endforeach
    </ul>

    <?php
    $city = "Mandalay";
    ?>

    @php
        echo $city;
    @endphp

    @if($city === "Yangon")
        <h3>You Correct</h3>
    @else
        <h3>You wrong</h3>
    @endif


    @php
        echo "<pre>".print_r($employeedatas,true)."</pre>";
        echo $employeedatas['name'] . "<br/>";
        echo $employeedatas['email'] . "<br/>";
        echo $employeedatas['phone'] . "<br/>";
    @endphp

</body>
</html>
