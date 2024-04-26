<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bee Game</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Bee Game</h1>

        <form action="{{ route('hit-random-bee') }}" method="POST" class="mb-3">
            @csrf
            <button type="submit" class="btn btn-primary">Hit Random Bee</button>
        </form>

        <h2>Bees:</h2>
        <ul class="list-group">
            @foreach ($bees as $bee)
                <li class="list-group-item">{{ $bee->type }} - Hit Points: {{ $bee->hit_points }}</li>
            @endforeach
        </ul>
    </div>

    <!-- Bootstrap JS (optional, if you need JavaScript components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
