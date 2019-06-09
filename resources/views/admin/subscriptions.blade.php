@extends('layouts.admin')

@section('title')
    {{ __("Mailing List") }}
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h1 class="page-header">
                Mailing List
            </h1>

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>S/N</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>

                            <?php
                            if(is_null(request()->page) || request()->page == 1)
                            {
                                $count = 1;
                            }
                            else {
                                $page = request()->page;

                                $perPage = 30;

                                $start = ($page - 1) * $perPage;

                                $count = ++$start;
                            }

                            ?>
                            @foreach($emails as $email)
                            <tr>
                                <td> <?php echo $count++; ?> </td>
                                <td> <?php echo $email->email; ?> </td>

                                <td>
                                    <a href="{{ route('subscription.edit', ['id' => $email->id ]) }}"
                                        class="btn btn-primary waves-light waves-effect btn-xs" >
                                        <i class="fa fa-pencil"></i>
                                        Edit
                                    </a>

                                    <a href="javascript:void(0)"
                                        data-id="{{ $email->id }}"
                                        class="btn btn-xs btn-danger delete">
                                        <i class="fa fa-trash"></i>
                                        Delete
                                    </a>


                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="pull-right">
                            {{ $emails->links() }}
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

            if(confirm('Do You want to delete this Email Address ??'))
            {
                url = '/admin/subscription/' + id + '/destroy';

                window.location.href = url;
            }
        });
    })
</script>
@endsection
