@extends('layouts.app')

@section('title')
Blog
@endsection

@section('brandname')
Blog
@endsection

@section('content')
<!--------------for Blogs------------>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="w3-theme panel-heading">Add Blog</div>

                <div class="w3-theme-l4 panel-body">
                
                    {!!Form::open(array('route'=>'blog.store','class'=>'form-horizontal'))!!}
                         
                        <div class="form-group">
                        {!!Form::label('category','Category',['class'=>'col-md-4 control-label'])!!}    

                            <div class="col-md-6">
                               <!-- {!!Form::text('category',null,['class'=>'form-control','required'])!!}
                               -->
                            <div class="form-group">
                                    {!!Form::select('blog_id',$cat,null, ['class'=>'form-control'])!!}
                            </div>
                        </div>

                            {!!Form::label('title','Title',['class'=>'col-md-4 control-label'])!!}

                            <div class="col-md-6">
                                {!!Form::textarea('title',null,['class'=>'form-control','style'=>'margin-top:20px','required'])!!}
                            </div>

                            {!!Form::label('content','Content',['class'=>'col-md-4 control-label'])!!}

                            <div class="col-md-6">
                                {!!Form::textarea('content',null,['class'=>'form-control','style'=>'margin-top:20px','required'])!!}
                            </div>
    
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                {!!Form::submit('Add Blog',['class'=>'btn btn-primary'])!!}    
                        </div>
                        </div>
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
<!--End blog section -->
@endsection