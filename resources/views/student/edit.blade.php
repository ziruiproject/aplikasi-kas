@include('components.head')
@include('components.topbar')

<body class="px-7 pb-6">
    <h3 class="text-3xl py-5">Edit Profile</h3>

    <form action="{{ route('student.update', $student->username) }}" method="POST" class="bg-white rounded-xl"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        {{-- USERNAME --}}
        <div class="flex flex-col w-full text-grey">
            <label for="username" class="pb-3">Username</label>
            <input type="text" id="username" name="username" value="{{ $student->username }}"
                class="font-semibold rounded-xl outline outline-1 py-2 px-4 outline-text focus:outline-primary focus:outline-2">
        </div>
        {{-- EMAIL --}}
        <div class="flex flex-col w-full text-grey">
            <label for="email" class="py-3">Email</label>
            <input type="email" id="email" name="email" value="{{ $student->email }}"
                class="font-semibold rounded-xl outline outline-1 py-2 px-4 outline-text focus:outline-primary focus:outline-2">
        </div>
        {{-- IMAGE --}}
        <div class="flex flex-col w-full text-grey">
            <label for="image" class="py-3">Photo Profile</label>
            <input type="file" id="image" name="image"
                class="font-semibold rounded-xl outline outline-1 outline-black file:py-2 file:px-4 file:bg-primary file:outline-none file:border-none file:text-white focus:outline-primary focus:outline-2">
        </div>
        <div class="flex flex-col w-full">
            <button type="submit"
                class="text-white font-semibold bg-primary rounded-xl outline-none py-2 mt-4">Submit</button>
        </div>
    </form>
</body>

</html>
