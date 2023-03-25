<div>
    @foreach ($changes as $change)
        <div class="flex flex-col pb-2">
            <span
                class="font-light">{{ \Carbon\Carbon::parse($change->created_at)->translatedFormat('l, j F Y') . ' pukul ' . \Carbon\Carbon::parse($change->created_at)->translatedFormat('h:m:s') }}
                by {{ ucfirst(strtolower(strtok($change->admin_name, ' '))) }}
            </span>
            <span class="font-light text-lg">
                Kas anda diubah sebanyak
                <span class="font-semibold">
                    @php
                        $amount = (string) $change->amount;
                    @endphp
                    @if ($amount[0] == '-')
                        {{ $amount[0] }}Rp{{ substr($amount, 1) }}
                    @else
                        Rp{{ substr($amount, 1) }}
                    @endif
                </span>
            </span>
            <p class="font-light text-lg">Alasan: Karena {{ $change->desc }}</p>
        </div>
    @endforeach
</div>
