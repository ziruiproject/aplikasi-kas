@foreach ($student->bills as $bill)
    <div
        class="outline outline-1 outline-primary rounded-2xl flex justify-center flex-col align-middle text-center p-10 mx-16 my-5 text-text">
        <div class="flex justify-center">
            <span class="font-semibold text-text text-lg pr-1">Rp</span>
            <p class="font-extrabold text-5xl">{{ $bill->pivot->amount }}</p>
        </div>
        <span class="font-light text-text pt-1">{{ $bill->title }}</span>
    </div>
@endforeach
