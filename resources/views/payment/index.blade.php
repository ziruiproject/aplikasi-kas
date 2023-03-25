@include('components.head')
@include('components.topbar')

<body class="px-7 pb-6">
    <h3 class="text-3xl py-5">Pembayaran</h3>
    @foreach ($payments as $payment)
        <div class="flex flex-col pb-2">
            <span
                class="font-light">{{ \Carbon\Carbon::parse($payment->created_at)->translatedFormat('l, j F Y') . ' pukul ' . \Carbon\Carbon::parse($payment->created_at)->translatedFormat('h:m:s') }}
                by {{ ucfirst(strtolower(strtok($payment->admin_name, ' '))) }}
            </span>
            <span class="font-light text-lg">Nama: {{ ucwords(strtolower($payment->student->name)) }}</span>
            <span class="font-light text-lg">Hal: {{ $payment->title }}</span>
            <span class="font-light text-lg">
                Jumlah:
                <span class="font-semibold">
                    Rp.{{ $payment->amount }}
                </span>
            </span>
        </div>
    @endforeach
</body>

</html>
