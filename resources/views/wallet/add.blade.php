<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bayar</title>
</head>
<body>
    <h1>{{ $student->name }}</h1>
    <h1>{{ $student->id }}</h1>
    <h1>Kas</h1>
    <h1>Rp{{ $student->kas_bill }}</h1>
    @foreach ($student->bills as $bill )
        <h1>{{ $bill->title }}</h1>
        <h1>Rp{{ $bill->amount }}</h1>
    @endforeach
    <form action={{ route('action.wallet.add', $student->id) }}  method="POST">
        @csrf
        @method('PUT')
        <label for="payment">Bayar</label><br>

        <select name="payment" id="payment">
        <option value="0">Kas</option>
        @foreach ($student->bills as $bill)
        <option value="{{ $bill->id }}">{{ $bill->title }}</option>
        @endforeach
        </select><br>

        <label for="amount">Jumlah</label><br>
        <input type="text" id="amount" name="amount" placeholder="10000"><br>
        <input type="submit" value="Tambah">
    </form>
</body>
</html>
