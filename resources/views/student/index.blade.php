@include('components.head')
@include('components.topbar')

<body class="px-7 pb-6 font-sans">
    <a href="{{ route('payment.index') }}">
        <button>Record Pembayaran</button>
    </a>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full">
                        <thead class="border-b">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    No
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Nama
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Username
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Email
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Kas
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Saldo
                                </th>
                                @foreach ($bills as $bill)
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        {{ $bill->title }}
                                    </th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr class="border-b">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ $student->id }}</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $student->name }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ '@' . $student->username }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $student->email }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        Rp.{{ $student->kas_bill }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        Rp.{{ $student->wallet }}
                                    </td>
                                    @for ($i = 1; $i <= count($bills); $i++)
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            @php
                                                $amount = $student->bills->find($i)->pivot->amount ?? '-';
                                            @endphp
                                            {{ $amount !== '-' ? 'Rp' . $amount : $amount }}
                                        </td>
                                    @endfor

                                    {{-- <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        <a href={{ route('student.add', $student->id) }}>
                                            <button>Tambah Kas</button>
                                        </a>
                                    </td> --}}
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        <a href={{ route('pay', $student->id) }}>
                                            <button
                                                class="rounded-full bg-primary w-16 h-10 font-semibold text-white">Bayar</button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
