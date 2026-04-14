<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Basis Pengetahuan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-3xl">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Edit Pengetahuan</h1>
            <a href="{{ route('knowledge-base.index') }}" class="text-gray-600 hover:underline">Kembali</a>
        </div>

        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
            <form action="{{ route('knowledge-base.update', $knowledgeBase->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Ikon (Emoji)</label>
                    <input type="text" name="icon" value="{{ old('icon', $knowledgeBase->icon) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('icon') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                </div>
                
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Judul</label>
                    <input type="text" name="title" value="{{ old('title', $knowledgeBase->title) }}" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('title') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Kategori</label>
                    <input type="text" name="category" value="{{ old('category', $knowledgeBase->category) }}" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('category') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Deskripsi Singkat</label>
                    <textarea name="description" rows="2" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('description', $knowledgeBase->description) }}</textarea>
                    @error('description') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Konten / Isi Panduan</label>
                    <textarea name="content" rows="8" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('content', $knowledgeBase->content) }}</textarea>
                    @error('content') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
                </div>

                <div class="flex items-center justify-end">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded focus:outline-none focus:shadow-outline transition-colors">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
