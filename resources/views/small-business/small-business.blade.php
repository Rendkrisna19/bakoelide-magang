<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz Form</title>
    @vite('resources/css/app.css') {{-- pastikan ini ada --}}
</head>
<body class="bg-gray-100 py-10">
    <div class="max-w-3xl mx-auto bg-white p-8 rounded shadow">
        <h2 class="text-center text-2xl font-bold text-orange-600 mb-6">KETAHUI BISNIS ANDA</h2>

        <form method="POST" action="{{ route('quiz.submit') }}" class="space-y-6">
            @csrf

            <div>
                <label class="block font-semibold mb-2">Apa Jenis Bisnis Anda?<span class="text-red-500">*</span></label>
                <select name="jenis_bisnis" class="w-full border border-gray-300 rounded px-4 py-2" required>
                    <option value="">Pilih jenis bisnis</option>
                    <option value="produk">Produk</option>
                    <option value="jasa">Jasa</option>
                </select>
            </div>

            <div>
                <label class="block font-semibold mb-2">Tujuan Utama?<span class="text-red-500">*</span></label>
                <div class="space-y-2">
                    <label class="flex items-center gap-2">
                        <input type="radio" name="tujuan" value="social" class="accent-orange-500" required>
                        Saya ingin memulai social commerce
                    </label>
                    <label class="flex items-center gap-2">
                        <input type="radio" name="tujuan" value="konten" class="accent-orange-500">
                        Saya ingin belajar membuat konten menarik
                    </label>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white font-semibold px-6 py-2 rounded">
                    Submit
                </button>
            </div>
        </form>
    </div>
</body>
</html>
