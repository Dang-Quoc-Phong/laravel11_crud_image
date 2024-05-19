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
                <a href="{{ route('products.index') }}" class="btn btn-dark">Back</a>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card borde-0 shadow-lg my-4">
                    <div class="card-header bg-dark ">
                        <h3 class="text-white">Edit Product</h3>
                    </div>
                    <form action="{{route('products.update', $product->id)}}" enctype="multipart/form-data" method="post" >
                         @method('put')
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="" class="form-label h5">Name</label>
                                <input type="text" value="{{old('name', $product->name )}}" name="name"class=" @error('name') is-invalid @enderror form-control form-control-lg"
                                    placeholder="Name...">
                                    @error('name')
                                        <p class="invalid-feedback">{{$message}}</p>
                                    @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label h5">Sku</label>
                                <input type="text" value="{{old('sku', $product->sku)}}"  name="sku"class=" @error('sku') is-invalid @enderror form-control form-control-lg"
                                    placeholder="Sku...">
                                    @error('sku')
                                    <p class="invalid-feedback">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label h5">Price</label>
                                <input type="text" value="{{old('price', $product->price)}}"  name="price"class="  @error('price') is-invalid @enderror form-control form-control-lg"
                                    placeholder="Price...">
                                    @error('price')
                                    <p class="invalid-feedback">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label h5">Description</label>
                                <textarea name="description" cols="30" rows="5" class="form-control" placeholder="description...">{{old('description', $product->description)}}</textarea>

                            </div>
                          
                            <div class="mb-3">
                                <label for="" class="form-label">Image</label>
                                <input type="file" name="image"class="form-control form-control-lg">
                                @if ($product->image != '')
                                <img class="w-50 my-3" src="{{ asset('uploads/products/' . $product->image) }}"
                                    alt="">
                            @endif
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-lg btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
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
