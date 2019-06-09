@extends('layouts.admin')

@section('title')
    {{ __("Categories") }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h2 class="page-header">
                All Categories
            </h2>

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>S/N </th>
                                <th> Category Name </th>
                                <th> Status </th>
                                <th> Action </th>
                            </tr>

                            @if($categories->count() == 0)
                            <tr>
                                <th class="text-center" colspan="4">
                                    <strong class="text-primary">
                                        No Categories
                                    </strong>
                                </th>
                            </tr>
                            @else
                                <?php $count = 1; ?>
                                @foreach($categories as $category)
                                    <tr>
                                        <td> {{ $count++ }}</td>
                                        <td> {{ $category->name }} </td>
                                        <td>
                                            @if($category->status == 1)
                                                {{ __("Active") }}
                                            @else
                                                {{ __("InActive") }}
                                            @endif
                                        </td>

                                        <td>
                                            <a href="{{ route('category.edit', ['id' => $category->id]) }}" class="btn btn-primary btn-xs"
                                                title="Edit Category">
                                                <i class="fa fa-pencil"></i>
                                                Edit
                                            </a>

                                            <a href="javascript:void(0)"
                                            data-id="{{ $category->id }}"
                                             class="btn btn-danger btn-xs delete"
                                                title="Delete Category">
                                                <i class="fa fa-trash"></i>
                                                Delete
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
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('.delete').click(function(){
            var id  = $(this).data('id');

            if(confirm('Do You want to delete this category ??'))
            {
                url = '/admin/category/' + id + '/destroy';

                window.location.href = url;
            }
        });
    })
</script>
@endsection
