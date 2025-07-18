<div>
    <h2>Edit Product</h2>
</div>
<div>
    <a href="{{ route('products.index') }}">Back</a>
</div>

<form action="{{ route('products.update', $product->id) }}" method="post">
    @csrf
    @method('put')

    <div>
        <strong>Name:</strong>
        <input type="text" name="name" value="{{ $product->name }}" placeholder="Name">
    </div>
    <div>
        <strong>Description:</strong>
        <textarea style="height:150px" name="description" placeholder="Description">{{ $product->description }}</textarea>
    </div>
    <div>
        <strong>Price</strong>
        <input type="number" name="price" value="{{ $product->price }}">
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>

</form>
