<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>larevel-primi-passi</title>
</head>
<body>
    <header>
        <h1>
            Hello World
        </h1>
    </header>

    <main>
        <ul>
            @foreach ($users as $user)
                <li>
                    <h4>
                        {{ $user['firstName'] }} {{ $user['lastName'] }}
                    </h4>
                </li>
            @endforeach
        </ul>
    </main>
</body>
</html>