<x-layout>
    <x-setting heading="Publish New Post">
        <form method="POST" action="/admin/posts" enctype="multipart/form-data">
            @csrf
            <!-- Title -->
            <x-form.input name="title" />

            <!-- Slug -->
            <x-form.input name="slug" />

            <!-- Thumbnail -->
            <x-form.input name="thumbnail" type="file" />

            <!-- Excerpt -->
            <x-form.textarea name="excerpt" />

            <!-- Body -->
            <x-form.textarea name="body" />

            <!-- Category -->
            <x-form.field>
                <x-form.label name="category" />
                <select name="category_id" id="category_id">
                    @foreach (\App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ ucwords($category->name) }}</option>
                    @endforeach
                </select>
                <x-form.error name="category" />
            </x-form.field>

            <!-- Submit -->
            <x-form.button>Publish</x-form.button>
        </form>
    </x-setting>

</x-layout>
