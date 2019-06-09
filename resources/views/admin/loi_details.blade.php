@extends('layouts.admin')

@section('title')
    {{ $loi->title }}
@endsection

@section('styles')
<link href="/adminn/plugins/custombox/css/custombox.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card-box">
            <h2 class="page-header">
                LOI Details

                <div class="pull-right">
                    <a href="{{ route('loi.edit', ['loi' => $loi->id]) }}"
                        class="btn btn-primary btn-xs"
                        title="Edit this LOI">
                        <strong>
                            <i class="fa fa-pencil"></i>
                            Edit
                        </strong>
                    </a>

                    <a href="{{ route('loi.destroy2', ['loi' => $loi->id]) }}"
                        class="btn btn-danger btn-xs"
                        title="Delete this LOI">
                        <strong>
                            <i class="fa fa-trash"></i>
                            Delete
                        </strong>
                    </a>
                </div>
            </h2>


            <div class="row">
                <div class=" col-xs-12 col-md-6">
                    <h4>LOI Image</h4>
                    <div class="image">
                        <img src="{{ $loi->image }}"
                            alt="LOI image" width="100%" height="100%" >
                    </div>
                </div>

                <div class=" col-xs-12 col-md-6">
                    <h3 class="loi-title"> {{ $loi->title }} </h3>

                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <strong>LOI Status:</strong>
                        </div>
                        <div class="col-md-6">
                            <?php

                            if($loi->status == \App\LoiStatus::AVAILABLE)
                            {
                                ?>
                            <div class="badge badge-success">
                                AVAILABLE
                            </div>
                                <?php
                            }
                            elseif ($loi->status == \App\LoiStatus::CLOSED) {
                                ?>
                            <div class="badge badge-danger">
                                CLOSED
                            </div>
                                <?php
                            }
                            elseif ($loi->status == \App\LoiStatus::PENDING) {
                                ?>
                            <div class="badge badge-warning">
                                PENDING
                            </div>
                                <?php
                            }
                             ?>
                        </div>
                    </div>

                    <br><br>
                    <div class="row">
                        <div class="col-md-12">
                            {!! $loi->description !!}
                        </div>
                    </div>
                </div>
            </div>

            <br><br>
            <div class="card-box">
                <a href="#custom-modal" class="btn btn-custom btn-rounded w-md waves-effect waves-light pull-right" data-animation="flip" data-plugin="custommodal"
                   data-overlaySpeed="100" data-overlayColor="#36404a">
                   <i class="mdi mdi-upload"></i>
                   Upload Files
               </a>

                <h4 class="header-title m-b-30">LOI Files</h4>

                <div class="row">
                    @if($loi->files->count() == 0)
                        <div class="col-md-12">
                            <strong>
                                No Loi Files have been uploaded
                            </strong>
                        </div>
                    @else
                        @foreach($loi->files as $file)

                            <?php
                                $path = "adminn/assets/images/file_icons/" . $file->type . ".svg";
                                if(file_exists($path))
                                {
                                    $path = "/adminn/assets/images/file_icons/" . $file->type . ".svg";
                                }
                                else {
                                    $path = "/adminn/assets/images/file_icons/doc.svg";
                                }
                            ?>

                            <div class="col-lg-4 col-xl-3">
                                <div class="file-man-box">
                                    <a href="{{ route('loi.file.destroy', ['id' => $file->id ]) }}"
                                        class="file-close" title="Delete this file">
                                        <i class="mdi mdi-close-circle"></i>
                                    </a>
                                    <div class="file-img-box">
                                        <img src="{{ $path }}" alt="icon">
                                    </div>
                                    <a href="{{ $file->location }}"
                                        class="file-download">
                                        <i class="mdi mdi-download"></i>
                                    </a>
                                    <div class="file-man-title">
                                        <h5 class="mb-0 text-overflow">
                                            {{ $file->name }}
                                        </h5>
                                        <p class="mb-0">
                                            <small>{{ $file->size }}</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif


                </div>
            </div>


        </div>

        </div>

        <div class="col-md-12">
            <div class="text-center">
                <div class="pull-left">
                    @if(!is_null($loi->previous()))
                        <a href="{{ route('loi', ['loi' => $loi->previous()->id ]) }}"
                                class="btn btn-info">
                            <i class="fa fa-chevron-left"></i>
                            Previous
                        </a>
                    @endif
                </div>

                <?php
                    $status = $loi->status;

                    if($status != \App\LoiStatus::AVAILABLE)
                    {
                        ?>
                    <a href="{{ route('loi.available', ['loi' => $loi->id ]) }}" class="btn btn-success">
                        <i class="fa fa-check"></i>
                        Make Available
                    </a>
                        <?php
                    }

                    if($status != \App\LoiStatus::CLOSED)
                    {
                        ?>
                    <a href="{{ route('loi.close', ['loi' => $loi->id ]) }}" class="btn btn-danger">
                        <i class="fa fa-times"></i>
                        Close
                    </a>
                        <?php
                    }

                    if($status != \App\LoiStatus::PENDING)
                    {
                        ?>
                    <a href="{{ route('loi.pending', ['loi' => $loi->id]) }}" class="btn btn-warning">
                        <i class="fa fa-clock-o"></i>
                        Set to Pending
                    </a>
                        <?php
                    }
                ?>

                <div class="pull-right">
                    @if($loi->next())
                        <a href="{{ route('loi', ['loi' => $loi->next()->id ]) }}" class="btn btn-info">
                            Next
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    @endif
                </div>
            </div>
        </div>

    </div>



<!-- Modal -->
<div id="custom-modal" class="modal-demo">
    <button type="button" class="close" onclick="Custombox.close();">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
    <h4 class="custom-modal-title">Upload LOI Documents</h4>
    <div class="custom-modal-text">
        <form class="form-horizontal" action="{{ route('loi.file.store', ['loi' => $loi->id]) }}"
            method="post" enctype="multipart/form-data">

            @csrf

            <div class="form-group m-b-25">
                <div class="col-12">
                    <label for="file" class="control-label pull-left">Select File</label>
                    <input class="form-control" type="file" id="file" required name="file">
                </div>
            </div>

            <!-- <br>
            <div class="form-group m-b-25">
                <div class="col-12">
                    <a href="#" class="text-muted pull-right font-14">Select the document Type</a>
                    <label  class="pull-left">Document Type</label>
                    <select class="form-control select2" name="type">
                        <option value="jpg"> Photo</option>
                        <option value="jpg">JPG (Photo)</option>
                        <option value="png">PNG (Photo)</option>
                        <option value="gif">GIF (Photo)</option>
                        <option value="pdf">PDF</option>
                        <option value="ppt">PowerPoint</option>
                        <option value="doc">Word Document</option>
                        <option value="xls">Excel Document</option>
                        <option value="jpg">Unknown Type</option>
                    </select>
                </div>
            </div> -->


            <div class="form-group account-btn text-center m-t-10">
                <div class="col-12">
                    <button class="btn w-lg btn-rounded btn-custom waves-effect waves-light" type="submit" name="upload">Upload</button>
                </div>
            </div>

        </form>
    </div>
</div>
@endsection

@section('scripts')
<!-- Modal-Effect -->
<script src="/adminn/plugins/custombox/js/custombox.min.js"></script>
<script src="/adminn/plugins/custombox/js/legacy.min.js"></script>
@endsection
