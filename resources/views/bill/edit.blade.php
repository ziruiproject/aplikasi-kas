@include('components.head')
@include('components.topbar')

<body class="px-7 pb-6">
    <form action="{{ route('invoice.update', $bill->id) }}" method="post" id='bill'>
        @csrf
        @method('PUT')
        <div class="flex flex-col w-full text-text">
            <label for="title" class="pb-3">Nama Tagihan</label>
            <input
                class="font-semibold rounded-xl outline outline-1 py-2 px-4 outline-text focus:outline-primary focus:outline-2"
                type="text" id="title" name="title" value="{{ $bill->title }}">
        </div>
        <div class="flex flex-col text-text">
            <label class="py-3" for="amount">Jumlah</label>
            <input
                class="appearance-none font-semibold rounded-xl outline outline-1 py-2 px-4 outline-text focus:outline-primary focus:outline-2"
                type="number" id="amount" name="amount" value="{{ $bill->amount->amount }}">
        </div>
        <div class="flex flex-row-reverse justify-end pt-3">
            <label class="pl-1" for="all">Semua siswa</label><br>
            <input type="checkbox" id="all" name="all" value="all">
        </div>
        <div class="flex flex-col w-full">
            <button type="submit" id="#submit"
                class="text-white font-semibold bg-primary rounded-xl outline-none py-2 mt-4">Buat
                Tagihan</button>
        </div>
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full">
                            <thead class="border-b">
                                <tr>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Pilih
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        No
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Nama
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                    <tr class="border-b">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            <input type="checkbox" id="student" name="student"
                                                value="{{ $student->id }}">
                                            <label for="student"></label>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            {{ $student->id }}</td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $student->name }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </form>
    {{-- Menjadikan checked value menjadi 1 array --}}
    @vite('resources/js/checkbox.js')
</body>
