<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Laporan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-3xl">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Data Laporan</h1>
            <button class="bg-blue-500 text-white px-4 py-2 rounded">+ Tambah Laporan Baru</button>
        </div>
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Judul</th>
                    <th class="py-2 px-4 border-b">Deskripsi</th>
                    <th class="py-2 px-4 border-b">Tanggal</th>
                    <th class="py-2 px-4 border-b">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-2 px-4 border-b">1</td>
                    <td class="py-2 px-4 border-b">Laporan A</td>
                    <td class="py-2 px-4 border-b">Deskripsi Laporan A</td>
                    <td class="py-2 px-4 border-b">2023-10-01</td>
                    <td class="py-2 px-4 border-b">
                        <button class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</button>
                        <button class="bg-red-500 text-white px-2 py-1 rounded">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border-b">2</td>
                    <td class="py-2 px-4 border-b">Laporan B</td>
                    <td class="py-2 px-4 border-b">Deskripsi Laporan B</td>
                    <td class="py-2 px-4 border-b">2023-10-02</td>
                    <td class="py-2 px-4 border-b">
                        <button class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</button>
                        <button class="bg-red-500 text-white px-2 py-1 rounded">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border-b">3</td>
                    <td class="py-2 px-4 border-b">Laporan C</td>
                    <td class="py-2 px-4 border-b">Deskripsi Laporan C</td>
                    <td class="py-2 px-4 border-b">2023-10-03</td>
                    <td class="py-2 px-4 border-b">
                        <button class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</button>
                        <button class="bg-red-500 text-white px-2 py-1 rounded">Hapus</button>
                    </td>
                </tr>
                <!-- Tambahkan baris laporan lainnya di sini -->
            </tbody>
        </table>
    </div>
</body>
</html>