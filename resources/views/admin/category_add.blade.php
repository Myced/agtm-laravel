@extends('layouts.admin')

@section('title')
    Add Category
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h2 class="page-header">
                Add New Category
            </h2>

            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal" method="POST" action="{{ route('category.store') }}">
                        @csrf
                        <div class="form-group">
                            <label class="control-label col-md-5">Category Name: </label>
                            <div class="col-md-7">
                                <input type="text" name="name" class="form-control"
                                placeholder="Category Name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-lable col-md-5">Status</label>
                            <div class="col-md-7">
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
            </div>
        </div>
    </div>
</div>
@endsection
