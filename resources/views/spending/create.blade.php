@include('components.head')
@include('components.topbar')

<body class="px-7 pb-6 font-sans">
    <h3 class="text-3xl py-5">Buat Pengeluaran</h3>
    <form action="{{ route('history.store') }}" method="POST">
        @csrf
        @method('POST')

        <div class="flex flex-col text-text">
            <label class="text-xl pb-2" for="spending">Hal</label>
            <select
                class="appearance-none font-semibold rounded-xl outline outline-1 py-2 px-4 outline-text focus:outline-primary focus:outline-2"
                name="spending" id="spending">
                <option value="0">Kas</option>
                @foreach ($bills as $bill)
                    <option value="{{ $bill->id }}">{{ $bill->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="flex flex-col text-text">
            <label class="text-xl py-2" for="amount">Jumlah</label>
            <input
                class="appearance-none font-semibold rounded-xl outline outline-1 py-2 px-4 outline-text focus:outline-primary focus:outline-2"
                type="number" id="amount" name="amount" placeholder="27500">
        </div>

        <div class="flex flex-col text-text">
            <label class="text-xl py-2" for="desc">Keterangan</label>
            <textarea
                class="appearance-none font-semibold rounded-xl outline outline-1 py-2 px-4 outline-text focus:outline-primary focus:outline-2"
                placeholder="Masukan keterangan disini" name="desc" id="desc" cols="20" rows="5"></textarea>
        </div>
        <div class="flex flex-col w-full pt-4"><button type="submit"
                class="text-white font-semibold bg-primary rounded-xl outline-none py-2">Buat Pengeluaran</button></div>
    </form>
</body>
