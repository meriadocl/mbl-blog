<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Register!</h1>
            <form method="POST" action="/register" class="mt-10">
                @csrf
                <!-- Name-->
                <x-form.input name="name" />

                <!-- Username -->
                <x-form.input name="username" />

                <!-- Email -->
                <x-form.input name="email" type="email" />

                <!-- Password -->
                <x-form.input name="password" type="password" />

                <!-- Submit button-->
                <x-form.button>Submit</x-form.button>

            </form>
        </main>
    </section>
</x-layout>
