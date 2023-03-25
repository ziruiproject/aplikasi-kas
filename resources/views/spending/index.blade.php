@include('components.head')
@include('components.topbar')

<body class="px-7 pb-6">
    @if (Auth::user()->is_admin)
        <button class="text-white font-semibold bg-primary rounded-xl outline-none py-2 px-4">
            <a href="{{ route('history.create') }}">Buat Pengeluaran</a>
        </button>
    @endif
    <h3 class="text-3xl py-5">Pengeluaran</h3>
    @foreach ($spendings as $spending)
        <div class="flex flex-col pb-2">
            <span
                class="font-light">{{ \Carbon\Carbon::parse($spending->created_at)->translatedFormat('l, j F Y') . ' pukul ' . \Carbon\Carbon::parse($spending->created_at)->translatedFormat('h:m:s') }}
                by {{ ucfirst(strtolower(strtok($spending->student->name, ' '))) }}
            </span>
            <span class="font-light text-lg">Keterangan: {{ $spending->desc }}</span>
            <span class="font-light text-lg">
                Jumlah:
                <span class="font-semibold">
                    Rp.{{ $spending->amount }}
                </span>
            </span>
        </div>
    @endforeach
</body>
