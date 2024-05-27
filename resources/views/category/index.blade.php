<x-layouts.admin>
    <!-- Bosh saxifa -->
    <div class="container-fluid">

        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card">
                    <h3>Kategoriyalar ro'yhati</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">mahsulot nomi</th>
                                <th scope="col">o'lchami</th>
                                <th scope="col">nazariya</th>
                                <th scope="col">ishlab chiqarilgan</th>
                                <th scope="col">birligi</th>
                                <th scope="col">narxi</th>
                                <th scope="col">photo</th>
                                <th scope="col">operatsiyalar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name_uz }}</td>
                                    <td>{{ $category->size }}</td>
                                    <td>{{ $category->theory }}</td>
                                    <td>{{ $category->manufacturer }}</td>
                                    <td>{{ $category->unit }}</td>
                                    <td>{{ $category->price }}</td>
                                    <td><img src="{{ asset('storage/' . $category->photo)  }}" alt="" style="width: 80px;"></td>
                                    <td>
                                        <div class="d-flex tools">
                                            <a href="{{ route('categories.show', ['category' => $category->id]) }}" class="mx-3"><i class="fa fa-eye"></i></a>
                                            <a href="{{ route('categories.edit', ['category' => $category->id]) }}" class="mr-1"><i class="fa fa-edit"></i></a>
                                            @auth
                                                <form action="{{ route('categories.destroy', ['category'=> $category->id]) }}" method="post" onsubmit="return confirm('Ochirishga ruxsat berasizmi')">
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
                    </div>
                    <div class="card-footer clearfix">
                        <a href="{{ route('categories.create') }}" type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Yaratish </a>
                    </div>
                </div>
            </section>
        </div>

    </div>
</x-layouts.admin>
