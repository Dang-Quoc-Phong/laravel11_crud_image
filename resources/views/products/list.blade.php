<!doctype html>
<html lang="en">

<head>
    <title>`</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <div class="bg-dark py-3">`
        <h3 class="text-white text-center">Simple laravel 11 crud</h3>
    </div>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-10 d-flex justify-content-end">
                <a href="{{ route('products.create') }}" class="btn btn-dark">Create</a>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            @if (Session::has('success'))
                <div class="col-md-10 mt-5">
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                </div>
            @endif
            <div class="col-md-10">
                <div class="card borde-0 shadow-lg my-4">
                    <div class="card-header bg-dark ">
                        <h3 class="text-white"> Products</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Sku</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </tr>
                            @if ($products->isNotEmpty())
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>
                                            @if ($product->image != '')
                                                <img width="50" src="{{ asset('uploads/products/' . $product->image) }}"
                                                    alt="">
                                            @endif
                                        </td>

                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->sku }}</td>
                                        <td>${{ $product->price }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>{{ \Carbon\Carbon::parse($product->create_at)->format('d M,Y') }}</td>
                                        <td>
                                            <a href="{{route('products.edit', $product->id)}}" class="btn btn-success">Edit</a>
                                            <a href="#" onclick="deleteProduct({{$product->id}})" class="btn btn-primary">Delete</a>
                                            <form id="delete-product-from-{{$product->id}}" action="{{route('products.destroy', $product->id)}}" method="post">
                                                @csrf
                                            @method('delete')
                                            </form>

                                            {{-- <form action="{{route('products.destroy', $product->id)}}">
                                                <a href="{{route('products.edit', $product->id)}}" class="btn btn-success">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure {{$product->name}} delete')">Xoa</button>
                                            </form> --}}
                                        </td>
                                    </tr>
                                @endforeach

                            @endif
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>


</html>
<script>
    function deleteProduct(id) {
        if(confirm("Are you sure ")) {
            document.getElementById("delete-product-from-"+id).submit();
            
        }
    }
</script>
