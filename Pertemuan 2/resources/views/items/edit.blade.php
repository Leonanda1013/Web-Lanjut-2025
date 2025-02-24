<!DOCTYPE html> <!-- Menentukan tipe dokumen sebagai HTML -->
<html> <!-- Membuka tag HTML -->
<head> <!-- Bagian kepala dokumen -->
    <title>Edit Item</title> <!-- Menetapkan judul halaman -->
</head>
<body> <!-- Bagian isi halaman -->
    <h1>Edit Item</h1> <!-- Judul utama halaman -->

    <form action="{{ route('items.update', $item) }}" method="POST"> <!-- Form untuk mengupdate item, mengarah ke route 'items.update' dengan metode POST -->
        @csrf <!-- Token keamanan untuk mencegah CSRF (Cross-Site Request Forgery) -->
        @method('PUT') <!-- Mengubah metode request menjadi PUT sesuai dengan standar update pada RESTful API -->

        <label for="name">Name:</label> <!-- Label untuk input nama -->
        <input type="text" name="name" value="{{ $item->name }}" required> <!-- Input field untuk nama dengan nilai default dari item yang sedang diedit -->
        <br> <!-- Baris baru -->

        <label for="description">Description:</label> <!-- Label untuk input deskripsi -->
        <textarea name="description" required>{{ $item->description }}</textarea> <!-- Textarea untuk deskripsi dengan nilai default dari item -->
        <br> <!-- Baris baru -->

        <button type="submit">Update Item</button> <!-- Tombol untuk mengirim form dan memperbarui item -->
    </form>

    <a href="{{ route('items.index') }}">Back to List</a> <!-- Link untuk kembali ke daftar item -->
</body>
</html> <!-- Menutup tag HTML -->
