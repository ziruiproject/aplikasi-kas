@include('components.head')
@include('components.topbar')

<body class="px-7 pb-6">
    <form action={{ route('actionpay', $student->id) }} method="POST">
        @csrf
        @method('PUT')

        <div class="flex flex-col text-text">
            <label class="text-xl pb-2" for="payment">Bayar</label>
            <select
                class="appearance-none font-semibold rounded-xl outline outline-1 py-2 px-4 outline-text focus:outline-primary focus:outline-2"
                name="payment" id="payment">
                <option value="0">Kas</option>
                @foreach ($student->bills as $bill)
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
        <div class="flex flex-col w-full pt-4"><button type="submit"
                class="text-white font-semibold bg-primary rounded-xl outline-none py-2">Bayar</button></div>
    </form>
</body>

</html>
