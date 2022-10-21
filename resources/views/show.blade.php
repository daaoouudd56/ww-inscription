<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show</title>
</head>
<body>
    @if(isset(Auth::user()->email))
    <div class="alert alert-danger success-block">
    <h1>show page</h1>
    <a href="/download" name="download" value="download">télécharger</a>
    @foreach($students as $student)
    <h2>etudiant</h2>
    <label>votre nom:</label>
    {{$student->nom}}
    <br>
    <label>votre mail:</label>
    {{$student->email}}
    <br>
    <label>votre telephone:</label>
    {{$student->numero}}
    <br>
    <label>votre formation:</label>
    {{$student->formation_a}}
    <br>
    @endforeach
    <br>
    <a href="{{ url('/logout') }}">Logout</a>
    </div>
    @else
    <h1>not logged in</h1>
    <h1>try again</h1>
    @endif
</body>
</html>