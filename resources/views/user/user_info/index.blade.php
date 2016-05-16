@extends('layout.master')
@section('sidebar')
@parent
@include('layout.sidebar')
@stop

@section('content')

        <!-- page start-->
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <div class="box-header" style="background-color: #0490a6">
                <h3 class="text-center text-green"><b style="color: #f5f5f5">User Profile</b></h3>
            </div>
            <span class="text-muted ">Please fillup the following fields and be an registered user.</span>
            <span class="text-muted "><em style="color:midnightblue"><span style="color:red;">(*)</span> Marked are required fields </em></span>

            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            @if(Session::has('flash_message'))
                <div class="alert alert-success">
                    <p>{{ Session::get('flash_message') }}</p>
                </div>
            @endif
            @if(Session::has('flash_message_error'))
                <div class="alert alert-danger">
                    <p>{{ Session::get('flash_message_error') }}</p>
                </div>
            @endif


            {!! Form::model($userProfile, ['files'=>'true','method' => 'PATCH', 'route'=> ['user-signup.update', $userProfile->id]]) !!}


            <div class="panel-body">
                <div class="adv-table">
                    {{--<div class="form-group">
                        <li><p>Password : <a href="{{ route('user-signup.reset_password', $userProfile->id) }}" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#etsbModal"><ins>Change Password</ins></a></p></li>
                   </div>--}}
                    <div class="form-group">
                        {!! Form::label('first_name', 'First Name:', ['class' => 'control-label']) !!}<span style="color:red;">*</span>
                        {!! Form::text('first_name', $userProfile->first_name, ['id'=>'first_name', 'class' => 'form-control', 'minlength'=>'2', 'required'=>'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('last_name', 'Last Name:', ['class' => 'control-label']) !!}
                        {!! Form::text('last_name', $userProfile->last_name, ['id'=>'last_name', 'class' => 'form-control', 'minlength'=>'2']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('address', 'Address:', ['class' => 'control-label']) !!}
                        {!! Form::text('address', $userProfile->address, ['id'=>'address', 'class' => 'form-control', 'minlength'=>'2']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('phone_number', 'Phone Number:', ['class' => 'control-label']) !!}
                        {!! Form::text('phone_number', $userProfile->phone_number, ['id'=>'phone_number', 'class' => 'form-control', 'minlength'=>'2']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('state', 'State:', ['class' => 'control-label']) !!}
                        {!! Form::text('state', $userProfile->state, ['id'=>'state', 'class' => 'form-control', 'minlength'=>'2']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('country_id', 'Country:', ['class' => 'control-label']) !!}
                        {!! Form::Select('country_id',$countryList,Input::old('country_id'),['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Image Upload
                            <small class="required">(Required)</small></label>
                        <div class="col-md-9">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail image-size">
                                    @if($userProfile['image'] != '')
                                        <a href="{{ route('slider_image.image.show', $userProfile['id']) }}" class="btn btn-info btn-xs" data-toggle="modal" data-target="#imageView"><img src="{{ URL::to($userProfile['image']) }}" class="img-src" alt="{{$userProfile['image']}}" />
                                        </a>
                                    @else
                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                    @endif
                                </div>
                                <div class="fileupload-preview fileupload-exists thumbnail file-thumbnail"></div>
                                <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="icon-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                                       <input type="file" name="image" id="image" class="" required/>
                                       </span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i> Remove</a>
                                    <p> &nbsp; </p>
                                </div>
                            </div>
                            <span class="label label-danger">NOTE!</span>
                                             <span>
                                             Attached image thumbnail is
                                             supported in Latest Firefox, Chrome, Opera,
                                             Safari and Internet Explorer 10 only
                                             </span>
                        </div>
                    </div>
                    <p> &nbsp; </p>
                    {!! Form::hidden('id', $user_id) !!}
                    {!! Form::submit('Save changes', ['class' => 'btn btn-success']) !!}
                </div>
            </div>
            {!! Form::close() !!}
        </section>
    </div>
</div>
<!-- page end-->

<!-- Modal  -->
<div class="modal fade" id="etsbModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
</div>
<!-- modal -->

<!--script for this page only-->
@if($errors->any())
    <script type="text/javascript">
        $(function(){
            $("#addData").modal('show');
        });
    </script>
@endif
<style>
    .image-size{
        width:150px;
        height:150px;
    }
    .img-src{
        width:131px;
        height:139px;

    }
    .file-thumbnail{
        max-width: 200px;
        max-height: 150px;
        line-height: 20px;
    }
</style>
@stop