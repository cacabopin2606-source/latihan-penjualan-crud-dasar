<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
</head>
<body>

    <h1>Daftar Produk</h1>

    @foreach ($products as $product)
        <div>
            <h3>{{ $product->name }}</h3>
            <p>Harga: Rp{{ $product->price }}</p>
            <p>Stok: {{ $product->stock }}</p>
        </div>

        <hr>
    @endforeach

</body>
</html>