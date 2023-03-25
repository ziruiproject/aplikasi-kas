@include('components.head')
@include('components.topbar')

<body class="px-7 pb-6">
    <section>
        {{-- TITLE --}}
        <h3 class="text-3xl py-5">Total Kas</h3>
        {{-- TOTAL KAS --}}
        <div
            class="outline outline-1 outline-primary rounded-2xl flex justify-center flex-col align-middle text-center p-10 mx-16 my-5 text-text">
            <div class="flex justify-center">
                <span class=" font-semibold text-text text-lg pr-1">Rp</span>
                <p class="font-extrabold text-5xl">{{ $kas->amount }}</p>
            </div>
            <span class=" font-light text-text pt-1">Kas Kelas</span>
        </div>
    </section>
    @include('components.bank')
    <section>
        {{-- TITLE --}}
        <h3 class="text-3xl py-5">Tagihan Anda</h3>
        {{-- TAGIHAN KAS --}}
        <div
            class="outline outline-1 outline-primary rounded-2xl flex justify-center flex-col align-middle text-center p-10 mx-16 my-5 text-text">
            <div class="flex justify-center">
                <span class=" font-semibold text-text text-lg pr-1">Rp</span>
                <p class="font-extrabold text-5xl">{{ $student->kas_bill }}</p>
            </div>
            <span class=" font-light text-text pt-1">Kas Kelas - Terlewat {{ $student->kas_bill / 2500 }} Hari</span>
        </div>
        @include('components.invoices')
    </section>
    <section>
        {{-- TITLE --}}
        <h3 class="text-3xl py-5">Riwayat Pembayaran</h3>
        @include('components.records')
    </section>
    <section>
        <h3 class="text-3xl py-5">Riwayat Pengubahan</h3>
        @include('components.changes')
    </section>
</body>

</html>
