@include('components.head')
@include('components.topbar')

<body class="px-7 pb-6">
    <div class="flex flex-row justify-around pb-8">
        <a href="{{ route('payment.index') }}">
            <div
                class="w-48 h-48 outline outline-1 outline-primary rounded-2xl flex justify-center flex-col align-middle text-center p-10 text-text">

                <i class="fa-solid fa-clock-rotate-left text-5xl"></i>
                <p class="font-extrabold pt-4">Riwayat Pembayaran</p>
            </div>
        </a>
        <a href="{{ route('student.index') }}">
            <div
                class="w-48 h-48 outline outline-1 outline-primary rounded-2xl flex justify-center flex-col align-middle text-center p-10 text-text">
                <i class="fa-solid fa-users text-5xl"></i>
                <p class="font-extrabold pt-4">Semua Siswa</p>
            </div>
        </a>
    </div>
    <div class="flex flex-row justify-around">
        <a href="{{ route('invoice.index') }}">
            <div
                class="w-48 h-48 outline outline-1 outline-primary rounded-2xl flex justify-center flex-col align-middle text-center p-10 text-text">
                <i class="fa-solid fa-file-invoice-dollar text-5xl"></i>
                <p class="font-extrabold pt-4">Semua Tagihan</p>
            </div>
        </a>
        <a href="{{ route('invoice.create') }}">
            <div
                class="w-48 h-48 outline outline-1 outline-primary rounded-2xl flex justify-center flex-col align-middle text-center p-10 text-text">
                <i class="fa-solid fa-file-pen text-5xl"></i>
                <p class="font-extrabold pt-4">Buat Tagihan</p>
            </div>
        </a>
    </div>

</body>
