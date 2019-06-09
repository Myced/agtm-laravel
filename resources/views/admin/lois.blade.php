@extends('layouts.admin')

@section('title')
    {{ __("All LOIs") }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h2 class="page-header">
                {{ $title }}
            </h2>

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>S/N</th>
                                <th style="width: 130px;">Date</th>
                                <th>LOI Image</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>

                            @if($lois->count() == 0)
                                <tr>
                                    <th class="text-center" colspan="9">
                                        <strong class="text-info">No LOIs availabe</strong>
                                    </th>
                                </tr>

                            @else
                                <?php $count = 1; ?>
                                @foreach($lois as $loi)
                                    <tr>
                                        <td> {{ $count++ }} </td>
                                        <td> {{ $loi->created_at->toFormattedDateString() }} </td>
                                        <td>
                                            <img src="{{ $loi->image }}" alt="LOI Image"
                                                width="200px" height="200px">
                                         </td>
                                        <td> {{ $loi->title }} </td>
                                        <td> {{ substr($loi->description, 0, 100) }} </td>
                                        <td class="text-center">
                                            <?php
                                            $status = $loi->status;

                                            if($status == \App\LoiStatus::AVAILABLE)
                                            {
                                                ?>
                                            <div class="badge badge-success">
                                                AVAILABLE
                                            </div>
                                                <?php
                                            }
                                            elseif ($status == \App\LoiStatus::CLOSED) {
                                                ?>
                                            <div class="badge badge-danger">
                                                CLOSED
                                            </div>
                                                <?php
                                            }
                                            elseif ($status == \App\LoiStatus::PENDING) {
                                                ?>
                                            <div class="badge badge-warning">
                                                PENDING
                                            </div>
                                                <?php
                                            }
                                             ?>
                                        </td>

                                        <td>
                                            <a href="{{ route('loi', ['loi' => $loi->id ]) }}"
                                                class="btn btn-info  waves-light waves-effect" >
                                                Details
                                            </a>
                                            <a href="javascript:void(0)"
                                                data-id="{{ $loi->id }}"
                                                class="btn btn-danger  waves-light waves-effect delete">
                                                <i class="icon icon-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                            @endif

                        </table>
                    </div>
                </div>
            </div>
            <!-- end lois row -->

            <div class="row">
                <div class="col-md-12">

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

            if(confirm('Do You want to delete this LOI ??'))
            {
                url = '/admin/loi/' + id + '/destroy';

                window.location.href = url;
            }
        });
    })
</script>
@endsection
