@extends('layouts.admin')

@section('title')
    {{ __("Categories") }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h2 class="page-header">
                All Chat Rooms
            </h2>

            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>S/N </th>
                                <th> Chat Room </th>
                                <th> Status </th>
                                <th> Action </th>
                            </tr>

                            @if($chatRooms->count() == 0)
                            <tr>
                                <th class="text-center" colspan="4">
                                    <strong class="text-primary">
                                        No Chat Rooms
                                    </strong>
                                </th>
                            </tr>
                            @else
                                <?php $count = 1; ?>
                                @foreach($chatRooms as $room)
                                    <tr>
                                        <td> {{ $count++ }}</td>
                                        <td> {{ $room->name }} </td>
                                        <td>
                                            @if($room->status == 1)
                                                <strong class="badge badge-success">Active</strong>
                                            @else
                                                <strong class="badge badge-danger">InActive</strong>
                                            @endif
                                        </td>

                                        <td>
                                            <a href="{{ route('chat.room.edit', ['id' => $room->id]) }}"
                                                class="btn btn-primary btn-xs"
                                                title="Edit"
                                                data-toggle="tooltip" data-placement="top">
                                                <i class="fa fa-pencil"></i>
                                                Edit
                                            </a>

                                            <a href="javascript:void(0)"
                                            data-id="{{ $room->id }}"
                                             class="btn btn-danger btn-xs delete"
                                                title="Delete room"
                                                data-toggle="tooltip" data-placement="top">
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

            if(confirm('Do You want to delete this Chat Room ??'))
            {
                url = '/admin/chat-room/' + id + '/destroy';

                window.location.href = url;
            }
        });
    })
</script>
@endsection
