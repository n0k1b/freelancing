@extends('layout.bootstrap')

@section('body')
    <!-- Post Content -->
<div class="container padding-top-40">
	<div class="row" id="posts">
        <!-- Inner Content -->


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


function readPost() {
   var id= "{{Request::route('id')}}";
   var formdata = new FormData();
   formdata.append('id',id);
    $.ajax({
        processData:false,
        contentType:false,
        type:'POST',
        url:"{{url('read-blog-post')}}",
        data:formdata,
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
