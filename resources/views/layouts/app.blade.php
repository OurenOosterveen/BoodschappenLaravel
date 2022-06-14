<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Boodschappen</title>
        <style>
            * {
                font-family: sans-serif;
                margin: 2px;
            }

            table {
                border-collapse: collapse;
            }

            th {
                text-align: left;
            }

            th,
            td {
                border: 1px solid #888;
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <div>
            <a href={{ route('groceries.index') }}>Homepage</a>
            <a href={{ route('groceries.create') }}>Product aanmaken</a>
        </div>

        @yield('content')
    </body>
</html>