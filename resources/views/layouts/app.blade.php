<!DOCTYPE html>
<html lang="en" class="h-full bg-white">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To-Do List</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full">
    <div id="app" class="h-full bg-gray-100 overflow-scroll">

        <form action="{{ route('auth.logout') }}" method="POST">
            @csrf

            <a href="javascript:void(0)" onclick="logout(this)">logout</a>
        </form>

        {{ $slot }}

    </div>

    <input type="hidden" id="access_token" value="{{ access_token() }}">

    @vite(['resources/js/frontend.js'])
</body>


<script>
    function logout(e) {
        localStorage.clear();
        e.closest('form').submit();
    }
</script>

</html>
