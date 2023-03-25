@include('components.head')

<body class="font-sans p-10 h-screen pt-20">
    <h2 class="font-bold text-4xl pb-5 text-black">Please, Login</h2>
    <form action="{{ route('actionlogin') }}" method="POST" class="bg-white rounded-xl">
        @csrf
        @method('POST')
        <div class="flex flex-col w-full text-text">
            <label for="username" class="pb-3">Username</label>
            <input type="text" id="username" name="username"
                class="font-semibold rounded-xl outline outline-1 py-2 px-4 outline-black focus:outline-primary focus:outline-2">
        </div>
        <div class="flex flex-col w-full text-text">
            <label for="password" class="py-3">Password</label>
            <input type="password" id="passwowrd" name="password"
                class="font-semibold rounded-xl outline outline-1 py-2 px-4 outline-black focus:outline-primary focus:outline-2">
            {{-- <i class="fa-regular fa-eye absolute inset-y-0 right-0 pr-6 "></i> --}}
        </div>
        <div class="flex flex-col w-full">
            <span class="pt-3 pb-4 text-sm font-light text-primary cursor-pointer">Lupa password?</span>
            <button type="submit"
                class="text-white font-semibold bg-primary rounded-xl outline-none py-2">Login</button>
        </div>
    </form>
    @if (session('error'))
        <div>
            <b>Opps!</b> {{ session('error') }}
        </div>
    @endif
</body>

</html>
