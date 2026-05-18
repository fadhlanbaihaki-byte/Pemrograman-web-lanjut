<h1>Produk Kami</h1>

<form method="GET" action="{{ route('products.index') }}">
    <input type="text" name="search" placeholder="Cari produk" value="{{ request('search') }}">

    <select name="category_id">
        <option value="">Semua Kategori</option>

        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>

    <button type="submit">Cari</button>
</form>

@foreach ($products as $product)
    <div>
        <h3>{{ $product->name }}</h3>

        <p>Kategori: {{ $product->category->name }}</p>

        <p>{{ $product->description }}</p>

        <a href="{{ route('products.show', $product->slug) }}">
            Detail Produk
        </a>
    </div>

    <hr>
@endforeach

{{ $products->links() }}