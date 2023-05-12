@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-4/12 bg-white rounded-md m-6 p-9">
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="name" class="sr-only">Name</label>
                <input type="text" name="name" id="name" placeholder="Your Name"
                class="bg-gray-100 border-2 w-full p-4 rounded-lg" @error('name') border-red-500 @enderror value="">
                @error('name')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>

             <div class="mb-4">
                <label for="username" class="sr-only">User Name</label>
                <input type="text" name="username" id="username" placeholder="Your User Name"
                class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                 @error('username')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="sr-only">Email</label>
                <input type="text" name="email" id="email" placeholder="Your Email"
                class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                 @error('email')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password "class="sr-only">Password</label>
                <input type="password" name="password" id="Password" placeholder="Password"
                class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                 @error('password')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password_confirmation "class="sr-only">Password</label>
                <input type="password" name="password_confirmation" id="Password" placeholder="Password"
                class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                 @error('password_confirmation')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full" >
                    Register
                </button>
            </div>
        </form>

    </div>
</div>
@endsection
