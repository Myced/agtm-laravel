@extends('layouts.admin')

@section('title')
    {{ __("Add Chat Room") }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h3>Add New Chat Room</h3>

            <br>
            <div class="row">
                <div class="col-md-6">
                    <form class="form-horizontal" method="POST" action="{{ route('chat.room.store') }}">
                        @csrf
                        <div class="form-group">
                            <label class="control-label col-md-5">Chat Room Name: </label>
                            <div class="col-md-12">
                                <input type="text" name="name" class="form-control"
                                placeholder="Chat Room Name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-5">Chat Room Description: </label>
                            <div class="col-md-12">
                                <textarea name="description" rows="8" class="form-control"
                                    placeholder="This is optional"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-lable col-md-5">Status</label>
                            <div class="col-md-12">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="active" name="status"
                                        class="custom-control-input" value="1" checked>
                                    <label class="custom-control-label" for="active">Active</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="inactive" name="status"
                                        class="custom-control-input" value="-1">
                                    <label class="custom-control-label" for="inactive">InActive</label>
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-5"></label>
                            <div class="col-md-7">
                                <input type="submit" name="save" class="btn btn-primary" value="Save">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-6">
                    <h4>Latest Chat Rooms</h4>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <tr>
                                        <th> S/N </th>
                                        <th> Chat Room </th>
                                        <th> Status </th>
                                        <th> Action </th>
                                    </tr>

                                    <?php $count = 1; ?>
                                    @foreach($chatRooms as $chatroom)
                                        <tr>
                                            <td> {{ $count++ }} </td>
                                            <td> {{ $chatroom->name }} </td>
                                            <td>

                                                @if($chatroom->active)
                                                    <strong class="badge badge-success">Active</strong>
                                                @else
                                                    <strong class="badge badge-danger">InActive</strong>
                                                @endif
                                            </td>

                                            <td>
                                                <a href="{{ route('chat.room.edit', ['id' => $chatroom->id]) }}"
                                                    class="btn btn-xs btn-primary"
                                                    data-toggle="tooltip" data-placement="top" title="Edit"
                                                    data-original-title="Edit">
                                                    <span class="icon-pencil"></span>
                                                </a>

                                                <a href="#" class="btn btn-xs btn-danger delete"
                                                    data-toggle="tooltip" data-placement="top" title="Delete"
                                                    data-original-title="Delete">
                                                    <span class=" icon-trash"></span>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
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
