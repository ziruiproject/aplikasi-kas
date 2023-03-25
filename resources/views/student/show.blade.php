<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Development</title>
</head>
<body>
    <h1>Nama: {{$student['name']}}</h1>
    <h1>Absen: {{$student['id']}}</h1>
    <h1>Kas: Rp{{$student['bill']}}</h1>
    <h1>Email: {{$student['email']}}</h1>
    <h1>{{ asset('storage/images/photo_profile.png') }}</h1>
    <h1>{{ url('storage/images/photo_profile.png') }}</h1>
    <img src="{{url('storage/images/photo_profile.png')}}" alt="" height="150px">
    <div>
        <form method="post" action="">
            <input type="text" name="" id="">
            <a href="">
                <button>Tambah Kas</button>
            </a>
        </form>
    </div>
</body>
</html>
