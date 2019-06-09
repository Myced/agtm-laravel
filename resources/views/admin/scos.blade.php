@extends('layouts.admin')

@section('title')
    {{ __("All SCOs") }}
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
                                <th>SCO Image</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>

                            @if($scos->count() == 0)
                                <tr>
                                    <th class="text-center" colspan="9">
                                        <strong class="text-info">No SCOs availabe</strong>
                                    </th>
                                </tr>

                            @else
                                <?php $count = 1; ?>
                                @foreach($scos as $sco)
                                    <tr>
                                        <td> {{ $count++ }} </td>
                                        <td> {{ $sco->created_at->toFormattedDateString() }} </td>
                                        <td>
                                            <img src="{{ $sco->image }}" alt="sco Image"
                                                width="200px" height="200px">
                                         </td>
                                        <td> {{ $sco->title }} </td>
                                        <td> {{ substr($sco->description, 0, 100) }} </td>
                                        <td class="text-center">
                                            <?php
                                            $status = $sco->status;

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
                                            <a href="{{ route('sco', ['sco' => $sco->id ]) }}"
                                                class="btn btn-info  waves-light waves-effect" >
                                                Details
                                            </a>
                                            <a href="javascript:void(0)"
                                                data-id="{{ $sco->id }}"
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

            if(confirm('Do You want to delete this SCO ??'))
            {
                url = '/admin/sco/' + id + '/destroy';

                window.location.href = url;
            }
        });
    })
</script>
@endsection
