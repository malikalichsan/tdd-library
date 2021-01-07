@extends ('layouts.app')

@section ('content')
    <div class="w-2/3 bg-purple-200 mx-auto p-6 shadow">
        <form method="POST" action="/authors"
              class="flex flex-col items-center"
        >
            @csrf

            <h1 class="mb-4 text-2xl font-bold">
                Add new author
            </h1>

            <div class="mb-4">
                <input type="text" name="name" placeholder="Full Name" autocomplete="off"
                       class="rounded-lg px-4 py-2 text-sm border border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent transition duration-500 shadow"
                >
                @error ('name')
                    <p class="text-sm text-red-600 mt-2 font-bold">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <input type="text" name="dob" placeholder="Date of Birth" autocomplete="off"
                       class="rounded-lg px-4 py-2 text-sm border border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent transition duration-500 shadow"
                >
                @error ('dob')
                    <p class="text-sm text-red-600 mt-2 font-bold">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <button type="submit"
{{--                        class="rounded text-white px-4 py-2 hover:bg-blue-600 transition duration-500 ease-in-out bg-blue-600 transform hover:-translate-y-1 hover:scale-110 text-sm"--}}
                    class="bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-opacity-50 rounded-lg text-white px-4 py-2 text-sm"
                >
                    Add Author
                </button>
            </div>
        </form>
    </div>
@endsection
