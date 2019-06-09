@extends('layouts.admin')

@section('title')
    {{ __("All Products") }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="">
            <h1 class="page-header">
                Product List ({{ $products->count() }})
            </h1>

            <br><br>
            @if($products->count() == 0)
            <br><br>
                <div class="row">
                    <div class="col-md-12">
                        <h2>You have no products</h2>
                    </div>
                </div>
            @else
            <div class="row">
                @foreach($products as $product)

                    <div class="col-md-6 col-lg-4">
                        <!-- Simple card -->
                        <div class="card m-b-30">
                            <img class="card-img-top img-fluid thumbnail"
                            src="{{ $product->photo }}" alt="Product Image" width="100px" height="100px">
                            <div class="card-body">
                                <h4 class="card-title">
                                    {{ $product->name }}
                                </h4>
                                <p class="card-text">
                                    Category: <strong> <?php echo $product->category->name; ?> </strong>

                                    <br>
                                    Price: <strong><?php echo $product->price; ?> </strong>

                                    <br>

                                    Quantity: <strong> <?php echo $product->quantity; ?> </strong>

                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                    Units : <strong> <?php echo $product->unit; ?> </strong>
                                </p>
                                <a href="{{ route('product', ['product' => $product->id ]) }}"
                                    class="btn btn-custom waves-effect waves-light"> Details</a>
                                <a href="{{ route('product.edit', ['product' => $product->id ]) }}"
                                    class="btn btn-primary waves-effect waves-light">
                                    <i class="fa fa-pencil"></i>
                                    Edit
                                </a>
                                <a href="javascript:void(0)"
                                    data-id="{{ $product->id }}"
                                    class="btn btn-danger waves-effect waves-light delete">
                                    <i class="fa fa-trash"></i>
                                    Delete
                                </a>
                            </div>
                        </div>
                    </div><!-- end col -->

                @endforeach
            </div>
            @endif

        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('.delete').click(function(){
            var id  = $(this).data('id');

            if(confirm('Do You want to delete this Product ??'))
            {
                url = '/admin/product/' + id + '/destroy';

                window.location.href = url;
            }
        });
    })
</script>
@endsection
