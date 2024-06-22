<!DOCTYPE html>
<html>
<head>
    <title>Prime Number Finder</title>
    <link rel="stylesheet" href="css/primenumber.css">
</head>

<body>
    <h1>Prime Number Finder</h1>
    <form method="POST" action="/prime">
        @csrf
        <label for="start">Start Number:</label>
        <input type="number" id="start" name="start" required value="{{ old('start', $start ?? '') }}">
        <br>
        <label for="end">End Number:</label>
        <input type="number" id="end" name="end" required value="{{ old('end', $end ?? '') }}">
        <br>
        <button type="submit">Submit</button>
    </form>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @isset($primes)
        <h2>Prime numbers between {{ $start }} and {{ $end }}:</h2>
        @if (count($primes) > 0)
            <ul>
                @foreach ($primes as $prime)
                    <li>{{ $prime }}</li>
                @endforeach
            </ul>
        @else
            <p>No prime numbers found in this range.</p>
        @endif
    @endisset
</body>
</html>
