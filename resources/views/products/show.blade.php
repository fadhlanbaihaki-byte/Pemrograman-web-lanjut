<h1>{{ $product->name }}</h1>

<p>Kategori: {{ $product->category->name }}</p>

<p>{{ $product->description }}</p>

<p>{{ $product->specification }}</p>

<a href="{{ $whatsappLink }}" target="_blank">
    Tanya Produk via WhatsApp
</a>

<br><br>

<a href="{{ route('products.index') }}">
    Kembali ke Produk
</a>