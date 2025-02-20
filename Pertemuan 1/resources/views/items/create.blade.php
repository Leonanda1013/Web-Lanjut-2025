<!DOCTYPE html> <!-- Menentukan tipe dokumen sebagai HTML -->
<html> <!-- Membuka tag HTML -->
<head> <!-- Bagian kepala dokumen -->
    <title>Add Item</title> <!-- Menetapkan judul halaman -->
</head>
<body> <!-- Bagian isi halaman -->
    <h1>Add Item</h1> <!-- Judul utama halaman -->

    <form action="{{ route('items.store') }}" method="POST"> <!-- Form untuk menambahkan item, mengarah ke route 'items.store' dengan metode POST -->
        @csrf <!-- Token keamanan untuk mencegah CSRF (Cross-Site Request Forgery) -->
        
        <label for="name">Name:</label> <!-- Label untuk input nama -->
        <input type="text" name="name" required> <!-- Input field untuk nama, wajib diisi -->
        <br> <!-- Baris baru -->

        <label for="description">Description:</label> <!-- Label untuk input deskripsi -->
        <textarea name="description" required></textarea> <!-- Textarea untuk deskripsi, wajib diisi -->
        <br> <!-- Baris baru -->

        <button type="submit">Add Item</button> <!-- Tombol untuk mengirim form -->
    </form>

    <a href="{{ route('items.index') }}">Back to List</a> <!-- Link untuk kembali ke daftar item -->
</body>
</html> <!-- Menutup tag HTML -->
