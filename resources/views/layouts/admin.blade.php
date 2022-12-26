<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel Restaurent Application </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <a href="{{ route('admin.categories.create') }}">New Category</a>
    <a href="{{ route('admin.categories.index') }}">View All Categories</a>
    <a href="{{ route('admin.menus.create') }}">New Menu</a>
    <a href="{{ route('admin.menus.index') }}">View All Menus </a>

@yield('content')
</body>
</html>
