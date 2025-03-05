<!DOCTYPE html>
<html lang="en">

</html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $slot }} Page</title>
</head>

<body>
    <x-sideNav />

    <h1>Hello from {{ $slot }} Page</h1>
    <h2>Another way to say hello from <?php echo $slot; ?> Page</h2>

</body>

</html>
