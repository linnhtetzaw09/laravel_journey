<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
</head>
<body>

    <h3>Welcome to our site</h3>
    <p>This is @yield('heading')</p>

    @yield('content')

    <div>
        <h4>This is our company info from fixed Index Page</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque consequatur, itaque sunt libero ad culpa facilis magni, quod blanditiis quasi dignissimos quidem illum, est ducimus dolore deleniti voluptatum voluptas? Commodi.</p>
    </div>

    @yield('footer')
    
</body>
</html>