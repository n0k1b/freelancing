@extends('layout.bootstrap')

@section('body')
    <!-- Post Content -->
<div class="container padding-top-40">
	<div class="row mb-3">
        @if (session()->has('message'))
            <div class="col-12">
            <div class="alert alert-success">{{session('message.msg')}} <a href="{{url('blog/'.$post->category->id)}}">{{session('message.link')}}</a></div>
            </div>
        @endif
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-header pt-4 d-flex align-item-center justify-content-between">
                    <h2 class="card-title"><?php echo $post->user->name ?></h2>
                    <p><?php echo $post->created_at!=''?$post->created_at:'unknow' ?>
                </div>
                <?php
                if ($post->image!=='') {
                ?>
                <img src="<?php echo asset('images') ?>/<?php echo $post->image ?>" class="card-img-top" alt="" height="200px">
                <?php
                }
                ?>
                <div class="card-body">
                    <div class="card-text">
                    <?php echo $post->post ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inner Content -->
        <div class="col-md-6 col-12">
            <form method="POST" action="{{ url('create-report-post') }}">
                @csrf
                <input name="post" type="text" value="{{Request::route('id')}}">
                <textarea class="with-border m-0" name="report" placeholder="Describe your report here"></textarea>
                <div class="uploadButton margin-top-10 align-items-center">
                    <button type="submit" class="button ripple-effect big">Submit</button>
                </div>
            </form>
        </div>
	</div>
    <div id="posts" class="row"></div>
</div>
@endsection

