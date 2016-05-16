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



            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        {{$pageTitle}}
                    </header>
                    <div class="panel-body">
                        {!! Form::model($data, ['files'=>'true','method' => 'PATCH', 'route'=> ['blog_item-update', $data->slug]]) !!}
                        <div class="form-group">
                            {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
                            <small class="required">(Required)</small>
                            {!! Form::text('title', null, ['id'=>'title', 'class' => 'form-control','required','onkeyup'=>"sel_url()"]) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('slug', 'Slug:', ['class' => 'control-label']) !!}
                            <small class="required">(Required)</small>
                            {!! Form::text('slug', null, ['id'=>'slug', 'class' => 'form-control','required']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('blog_cat_id', 'Category:', ['class' => 'control-label']) !!}
                            <small class="required">(Required)</small>
                            {!! Form::select('blog_cat_id', $blog_cat_id,Input::old('blog_cat_id'),['class' => 'form-control','required']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('desc', 'Description:', ['class' => 'control-label']) !!}
                            {!! Form::textarea('desc', null, ['id'=>'desc', 'class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Image Upload
                                <small class="required">(Required)</small></label>
                            <div class="col-md-9">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail image-size">
                                        @if($data['image'] != '')
                                            <a href="{{ route('slider_image.image.show', $data['id']) }}" class="btn btn-info btn-xs" data-toggle="modal" data-target="#imageView"><img src="{{ URL::to($data['image']) }}" class="img-src" alt="{{$data['image']}}" />
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
                                       <input type="file" name="image" id="image" class="default"/>
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
                        <div class="form-group">
                            {!! Form::label('meta_title', 'Meta Title:', ['class' => 'control-label']) !!}
                            {!! Form::text('meta_title', null, ['id'=>'meta_title', 'class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('meta_keyword', 'Meta Keyword:', ['class' => 'control-label']) !!}
                            {!! Form::text('meta_keyword', null, ['id'=>'meta_keyword', 'class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('meta_desc', 'Meta Description:', ['class' => 'control-label']) !!}
                            {!! Form::textarea('meta_desc', null, ['id'=>'meta_desc', 'class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('status', 'Status:', ['class' => 'control-label']) !!}
                            <small class="required">(Required)</small>
                            {!! Form::Select('status',array('active'=>'Active','inactive'=>'Inactive'),Input::old('status'),['class'=>'form-control ','required']) !!}
                        </div>

                        <p> &nbsp; </p>

                        <a href="{{ route('blog_item-index') }}"  class="btn btn-default" type="button"> Close </a>

                        {!! Form::submit('Submit', ['class' => 'btn btn-success']) !!}

                    </div>

                </section>
            </div>



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
        width: 132px;
        height: 137px;
    }
    .file-thumbnail{
        max-width: 200px;
        max-height: 150px;
        line-height: 20px;
    }
</style>
@stop