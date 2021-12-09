<ul>
    @foreach($products as $product)
    <a href="{!! route('product', ['id' => $product->id ]) !!}">
        <li>{{ $product->name }}</li>
    </a>
    @endforeach
</ul>