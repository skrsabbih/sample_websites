<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sample Websites Demo</title>
    {{-- Bootstrap css cdn including this project --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- Add custom css link --}}
    <link rel="stylesheet" href="{{ 'assets/css/style.css' }}">
</head>

<body>

    @yield('content')

    {{-- Bootstrap javascript cdn including this project --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
