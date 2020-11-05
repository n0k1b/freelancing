@extends('layout.bootstrap')

@section('body')
    <!-- Post Content -->
<div class="container padding-top-40">
	<div class="row" id="posts">
        <!-- Inner Content -->
        <div class="col-12 mb-5">
            <h3 class="mb-2">Write a post</h3>
            <form method="POST" action="{{ route('createBlogPost') }}" id="creatingPost" enctype="multipart/form-data">
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
    readPost(0,2);
})
var scroll = 0;
var total = 0
$(window).scroll(function() {
    if($(window).scrollTop() == $(document).height() - $(window).height()) {
        total = 2+scroll+total;
        readPost(total,2);
    }
});


function readPost(total,take) {
    $.ajax({
        processData:false,
        contentType:false,
        url:'read-blog-post/'+total+"/"+take,
        type:'get',
        success: function (response) {
            $("#posts").append(response)
        },
    });
}

$("#creatingPost").submit(function (event) {
    event.preventDefault();
    data = new FormData();
    data.append('text',$("#text").val());
    data.append('upload',$("#upload")[0].files[0]);
    $.ajax({
        processData:false,
        contentType:false,
        url:$("#creatingPost").attr('action'),
        type:$("#creatingPost").attr('method'),
        data:data,
        success: function (response) {
            alert('Success fully created your post');
            $("#text").val('')
            $("#upload").val('')
            $(".uploadButton-file-name").text('')
        },
    });
});
</script>
@endsection
