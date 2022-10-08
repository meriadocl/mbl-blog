@auth
    <x-panel>
        <form method="POST" action="/posts/{{ $post->slug }}/comments">
            @csrf
            <header class="flex items-center mb-6">
                <img src="https://i.pravatar.cc/40?u={{ auth()->id() }}" width="40" height="40" alt="" class="rounded-full" />
                <h2 class="ml-3">Want to participate?</h2>
            </header>
           <x-form.field>
                <textarea
                    name="body"
                    class="w-full text-sm focus:outline-none focus:ring"
                    rows="5"
                    placeHolder="Quick, think of something to say!"
                    required>
                </textarea>
           </x-form.field>
            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
{{--                <button type="submit" class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-xl hover:bg-blue-600">Post</button>--}}
                <x-form.button>Submit</x-form.button>
            </div>
        </form>
    </x-panel>
@else
    <p>
        <a href="/register" class="hover:underline text-blue-600">Register</a> or
        <a href="/login" class="hover:underline text-blue-600">log in</a> to comment.
    </p>
@endauth
