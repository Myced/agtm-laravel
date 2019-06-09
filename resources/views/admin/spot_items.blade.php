@extends('layouts.admin')

@section('title')
    {{ __("Spot Items") }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h2 class="page-header">
                Spot Items
            </h2>

            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>S/N</th>
                            <th>Item</th>
                            <th>Quantity</th>
                            <th>Unit</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>

                        @if($items->count() == 0)
                            <tr>
                                <th class="text-center" colspan="9">
                                    <strong>No Spot Prices Yet</strong>
                                </th>
                            </tr>
                        @else
                            <?php $count = 1; ?>

                            @foreach($items as $item)
                                <tr>
                                    <td> {{ $count++ }} </td>
                                    <td> {{ $item->name }} </td>
                                    <td> {{ $item->quantity }} </td>
                                    <td> {{ $item->unit }} </td>
                                    <td> {{ $item->price }} </td>
                                    <td>
                                        @if($item->status)
                                            <div class="badge badge-success">
                                                Active
                                            </div>
                                        @else
                                            <div class="badge badge-danger">
                                                Disabled
                                            </div>
                                        @endif
                                    </td>

                                    <td>
                                        @if($item->status)
                                        <a href="{{ route('spot.item.deactivate', ['id' => $item->id]) }}"
                                            class="btn btn-xs btn-warning" title="Disable This Item">
                                            <i class="fa fa-times"></i>
                                            Disable
                                        </a>
                                        @else
                                        <a href="{{ route('spot.item.activate', ['id' => $item->id]) }}"
                                            class="btn btn-xs btn-success" title="Enable This Item">
                                            <i class="fa fa-check"></i>
                                            Activate
                                        </a>
                                        @endif

                                        <a href="{{ route('spot.item.edit', ['id' => $item->id]) }}"
                                            class="btn btn-xs btn-primary" title="Edit This Item">
                                            <i class="fa fa-pencil"></i>
                                            Edit
                                        </a>

                                        <a href="javascript:void(0)"
                                            data-id="{{ $item->id }}"
                                            class="btn btn-xs btn-danger delete" title="Delete This Item">
                                            <i class="fa fa-trash"></i>
                                            Del
                                        </a>

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
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('.delete').click(function(){
            var id  = $(this).data('id');

            if(confirm('Do You want to delete this Spot Item ??'))
            {
                url = '/admin/spot-item/' + id + '/destroy';

                window.location.href = url;
            }
        });
    })
</script>
@endsection
