@extends('layouts.admin')

@section('title')
    {{ __("Add Chat Room") }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h3>Edit Chat Room</h3>

            <br>
            <div class="row">
                <div class="col-md-6">
                    <form class="form-horizontal" method="POST"
                        action="{{ route('chat.room.update', ['id' => $chatroom->id ]) }}">
                        @csrf
                        <div class="form-group">
                            <label class="control-label col-md-5">Chat Room Name: </label>
                            <div class="col-md-12">
                                <input type="text" name="name" class="form-control"
                                value="{{ $chatroom->name }}"
                                placeholder="Chat Room Name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-5">Chat Room Description: </label>
                            <div class="col-md-12">
                                <textarea name="description" rows="8" class="form-control"
                                    placeholder="This is optional"
                                    >{!! $chatroom->description !!}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-lable col-md-5">Status</label>
                            <div class="col-md-12">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="active" name="status"
                                        class="custom-control-input" value="1"
                                            {{ ($chatroom->active) ? "checked" : "" }}>
                                    <label class="custom-control-label" for="active">Active</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="inactive" name="status"
                                        class="custom-control-input" value="-1"
                                            {{ !($chatroom->active) ? "checked" : "" }} >
                                    <label class="custom-control-label" for="inactive">InActive</label>
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-5"></label>
                            <div class="col-md-7">
                                <input type="submit" name="save" class="btn btn-primary" value="Save">
                                <a href="{{ route('chat.rooms') }}"
                                    class="btn btn-warning">
                                    <i class="fa fa-list"></i>
                                    Back to Chat Rooms
                                </a>
                            </div>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
