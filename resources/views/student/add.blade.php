<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Tagihan</title>
</head>
<body>
    <h1>{{ $student->name }}</h1>
    <h1>{{ $student->id }}</h1>
    <h1>{{ $student }}</h1>
    <form action={{ route('actionadd', $student->id) }}  method="POST">
        @csrf
        @method('PUT')
        <label for="amount">Jumlah</label><br>
        <input type="text" id="amount" name="amount" placeholder="10000"><br>
        <input type="submit" value="Tambah">
    </form>
</body>
</html>
