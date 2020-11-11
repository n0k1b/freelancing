@extends('layout.bootstrap')

@section('body')
    <!-- Post Content -->
<div class="container padding-top-40">
	<div class="row">
        <!-- Inner Content -->
        <div class="col-12 mb-5">
            <h3 class="mb-2">Write a post</h3>
            <form method="POST" action="{{ route('createBlogPost') }}" id="creatingPost" enctype="multipart/form-data">
                <input id="category" type="hidden" value="{{Request::route('id')}}">
                <textarea class="with-border m-0" id="text" value=""></textarea>
                <div class="uploadButton margin-top-10 align-items-center">
                    <input class="uploadButton-input" type="file" id="upload"/>
                    <label class="uploadButton-button ripple-effect" for="upload">Upload Files</label>
                    <span class="uploadButton-file-name">Images or documents that might be helpful in describing your post</span>
                    <button type="submit" class="button ripple-effect big"><i class="icon-feather-plus"></i> Post</button>
                </div>
            </form>
        </div>
	</div>
    <div id="posts" class="row"></div>
</div>
@endsection

@section('page-js')
<script>
$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    console.log("Jquery running!");
    readPost();
})


function readPost() {
   var id= "{{Request::route('id')}}";
   var formdata = new FormData();
   formdata.append('id',id);
    $.ajax({
        processData:false,
        contentType:false,
        type:'GET',
        url:"{{url('read-blog-post/'.Request::route('id'))}}",
        data:formdata,
        success: function (response) {
            // $("#posts").html('')
            $("#posts").html(response)
        },
    });
}

$("#creatingPost").submit(function (event) {
    
    data = new FormData();
    data.append('text',$("#text").val());
    data.append('category',$("#category").val());
    data.append('upload',$("#upload")[0].files[0]);
    $.ajax({
        processData:false,
        contentType:false,
        url:"create-blog-post",
        type:post,
        data:data,
        success: function (response) {
            alert('Success fully created your post');
            $("#text").val('')
            $("#upload").val('')
            $(".uploadButton-file-name").text('')
            readPost();
        },
    });
});
</script>
@endsection
