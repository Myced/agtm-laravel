@extends('layouts.user')

@section('title')
    {{ __("My Profile") }}
@endsection

@section('styles')
<!-- TAGS INPUT-->
<link rel="stylesheet" href="/userfiles/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
@endsection

@section('content')
<div class="row">
    <div class="col-xl-4">
    <!-- START card-->
        <div class="row">
            <div class="col-md-12">
                <div class="card animated zoomIn">
                    <div class="half-float ie-fix-flex">
                        <img class="img-fluid" src="/userfiles/img/bg3.jpg" alt="">
                        <div class="half-float-bottom">
                            <img class="img-thumbnail circle thumb128"
                                src="{{ $user->avatar }}" alt="Image">
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <h3 class="m-0">
                            <strong>
                                {{ !is_null($user->data) ? $user->data->prefix : '' }}
                            </strong>

                            {{ $user->name }}
                        </h3>

                        <p class="text-muted"> {{ $user->email }} </p>
                        <p>
                            Some Information here
                        </p>
                    </div>

                    <div class="card-body text-center bg-gray-dark">
                        <div class="row">
                            <div class="col-6">
                                <h3 class="m-0">4</h3>
                                <p class="m-0">Orders</p>
                            </div>

                            <div class="col-6">
                                <h3 class="m-0">5</h3>
                                <p class="m-0">Recruits</p>
                            </div>

                            <!-- <div class="col-4">
                                <h3 class="m-0">500</h3>
                                <p class="m-0">Following</p>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 animated bounce">

                <a href="{{ route('user.profile.edit') }}" class="btn btn-primary btn-block"
                    data-toggle="tooltip" data-placement="top" title=""
                    data-original-title="Edit Profile">
                    <i class="fa fa-pencil-alt"></i>
                    <strong>Edit Profile</strong>
                </a>
            </div>
        </div>
        <br>
    <!-- END card-->
    </div>

    <!-- //next column -->
    <div class="col-md-6">
        <div class="card animated slideInUp">
            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>Country</td>
                            <th> {{ $user->data->country->name }} </th>
                        </tr>
                        <tr>
                            <td>Company Name</td>
                            <th> {{ $user->data->company_name }} </th>
                        </tr>
                        <tr>
                            <th>Your Position </th>
                            <th>{{ $user->data->position }}</th>
                        </tr>
                        <tr>
                            <td> Year Created </td>
                            <th> {{ $user->data->year_created }} </th>
                        </tr>
                        <tr>
                            <td>Company Address</td>
                            <th>{{ $user->data->company_address }}</th>
                        </tr>
                        <tr>
                            <td>Fax</td>
                            <th>{{ $user->data->fax }}</th>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <th>{{ $user->data->email }}</th>
                        </tr>
                        <tr>
                            <td>Company Address</td>
                            <th>{{ $user->data->company_address }}</th>
                        </tr>
                        <tr>
                            <td>Telephone Numbers</td>
                            <th> {{ $user->data->tel_numbers }} </th>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end of column -->

</div>

<br><br>
<h3>Complete Your profile Below</h3>

<br><br>
<section class="">
    <!-- Page content-->
    <div class="">
       <div class="row">
          <div class="col-lg-12">
             <div class="container">

                 <!-- //start the accordion that will handle the profile pages  -->
                 <div id="accordion">


                     <!-- //foreach account type, -->
                     <!-- //show its information -->
                     <?php $count = 1; ?>
                     @foreach(\App\Models\AccountType::all() as $accountType)

                        @if($user->is($accountType->id))

                            <div class="card b mb-2">
                               <div class="card-header">
                                  <h4 class="card-title">
                                     <a class="text-inherit" data-toggle="collapse"
                                        data-parent="#accordion" href="#account{{ $accountType->id }}">
                                        {{ $count++ }}.

                                        {{ $accountType->name }} Info

                                        &nbsp; &nbsp;
                                        <?php $userTypeInfo = $user->getUserAccountTypeInfo($accountType->id);?>

                                        @if($userTypeInfo != false)
                                            @if($userTypeInfo->filled == true)
                                                <i class="icon-check text-success"></i>
                                                @if($userTypeInfo->approved)
                                                    <i class="icon-check text-success"></i>
                                                @endif
                                            @else
                                                <i class="icon-clock text-warning"></i>
                                            @endif
                                        @endif

                                    </a>
                                  </h4>
                               </div>
                               <div class="collapse" id="account{{ $accountType->id }}">
                                  @if($accountType->id == 1)
                                        @include('includes.user.profile_field_agents')
                                  @elseif($accountType->id == 2)
                                        @include('includes.user.profile_mandate')
                                  @elseif($accountType->id == 3)
                                        @include('includes.user.profile_supplier')
                                  @elseif($accountType->id == 4)
                                        @include('includes.user.profile_buyer')
                                  @endif
                               </div>
                            </div>
                        @endif
                     @endforeach


                 </div>


             </div>
          </div>
       </div>
    </div>
 </section>


@endsection

@section('scripts')
    <!-- TAGS INPUT-->
   <script src="/userfiles/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.js"></script>
@endsection
