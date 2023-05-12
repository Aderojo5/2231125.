@extends('layouts.app')

@section('content')
 <div class="flex justify-center p-9 m-6">
    <div class="w-8/12 bg-white p-6 rounded-md">

        <div class="flex justify-center">
            <div class="w-8/12 bg-white p-6 rounded-lg">
                <form action="{{ route ('posts') }}" method="POST" class="mb-4">
                    @csrf
                    <div mb-4>
                        <label for="body" class="sr-only">Body</label>
                        <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-100
                         border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror"
                         placeholder="Your Blog Post!"></textarea>

                         @error('body')
                         <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                         </div>
                         @enderror
                    </div>

                    <div>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded-medium" type="submit">
                            Post
                        </button>
                    </div>
                </form>

                @if($posts->count())
                @foreach ($posts as $post )
                    <div >
                        <a href="" class="font-bold">{{ $post->user->name }}</a> <span class="text-gray-600
                        text-sm">{{ $post->created_at->diffForHumans() }}</span>
                        <p class="mb-2">{{ $post->body }}</p>
                    </div>
                     <div class="mb-4">
                <form action="{{ route('posts.destroy', $post) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-blue-500">Dlete</button>
                </form>
            </div>
                @endforeach

                @else
                <p>There are no posts</p>
                @endif
            </div>

        </div>

    </div>
 </div>
@endsection
