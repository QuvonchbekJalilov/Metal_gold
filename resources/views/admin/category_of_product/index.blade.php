<x-layouts.admin>
    <div class="container-fluid">
        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card">
                    <h3>Mahsulot turlari</h3>
                    <div class="card-footer clearfix">
                        <a href="{{ route('category_of_product.create') }}" type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Yaratish </a>
                    </div>

                    <div class="card-body">
                        <form class="form-inline" method="get" action="{{ route('category_of_product.index')}}">
                            @csrf
                            <div class="form-group mr-3">
                                <select id="categorySelect" name="category_id" class="form-control">
                                    <option value="all" {{ $request->category_id === 'all' ? 'selected' : '' }}>All Categories</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $request->category_id == $category->id ? 'selected' : '' }}>{{ $category->name_uz }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                    </div>

                    <div class="table-responsive">
                        <table class="table" id="productsTable">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Metr - Tonna</th>
                                    <th scope="col">Tonna - Metr</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($category_of_product as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->category->name_uz }}</td>
                                    <td>{{ $product->name_uz }}</td>
                                    <td>{{ $product->metr_tonna }}</td>
                                    <td>{{ $product->tonna_metr }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>
                                        <div class="d-flex tools">
                                            <a href="{{ route('category_of_product.show', ['category_of_product' => $product->id]) }}" class="mx-3"><i class="fa fa-eye"></i></a>
                                            <a href="{{ route('category_of_product.edit', ['category_of_product' => $product->id]) }}" class="mr-1"><i class="fa fa-edit"></i></a>
                                            @auth
                                            <form action="{{ route('category_of_product.destroy', ['category_of_product'=> $product->id]) }}" method="post" onsubmit="return confirm('Ochirishga ruxsat berasizmi')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn text-danger" style="margin-top: -6px;"><i class="fa fa-trash"></i></button>
                                            </form>
                                            @endauth
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $category_of_product->links() }}
                    </div>
                </div>
            </section>
        </div>
    </div>
    
    <script>
        $(document).ready(function() {
            $('#categorySelect').change(function() {
                var selectedCategory = $(this).find(":selected").text();
                if (selectedCategory === 'All Categories') {
                    selectedCategory = '';
                }
                $(this).siblings('label').text(selectedCategory);
            });
        });
    </script>
</x-layouts.admin>