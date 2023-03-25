<div>
    @foreach ($payments as $payment)
        <div class="flex flex-col pb-2">
            <span
                class="font-light">{{ \Carbon\Carbon::parse($payment->created_at)->translatedFormat('l, j F Y') . ' pukul ' . \Carbon\Carbon::parse($payment->created_at)->translatedFormat('h:m:s') }}
                by {{ ucfirst(strtolower(strtok($payment->admin_name, ' '))) }}
            </span>
            <span class="font-light text-lg">Hal:
            </span>
            <span class="font-light text-lg">Anda membayar sebesar
                <span class="font-semibold">
                    Rp.{{ $payment->amount }}
                </span>
            </span>
        </div>
    @endforeach
</div>
