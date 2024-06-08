<x-layouts.admin>
    <!-- Main Content -->
    <div class="container-fluid">

        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card">
                    <h3>Orders</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Total Price</th>
                                    <th scope="col">Total Length</th>
                                    <th scope="col">Total Weight</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                <tr>

                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->product->name_ru }}</td>
                                    <td>{{ $order->name }}</td>
                                    <td>{{ $order->phone_number }}</td>
                                    <td>{{ $order->total_price }}</td>
                                    <td>{{ $order->total_length }}</td>
                                    <td>{{ $order->total_weight }}</td>
                                    <td> <a href="{{ route('orders.show', ['order' => $order->id]) }}">
                                            @if($order->status == 'yangi')
                                                <p style="color:red">{{$order->status}}</p>
                                            @else
                                                <p style="color:blue">{{$order->status}}</p>
                                            @endif
                                        </a></td>
                                    <td>
                                        <div class="d-flex tools">
                                            <form action="{{ route('orders.destroy', ['order'=> $order->id]) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this order?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn text-danger" style="margin-top: -6px;"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$orders->links()}}

                    </div>

                </div>
            </section>
        </div>

    </div>
</x-layouts.admin>