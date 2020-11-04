@extends('layout.bootstrap')

@section('body')
    <!-- Post Content -->
<div class="container padding-top-40">
	<div class="row">
        <!-- Inner Content -->
        <div class="col-12 mb-5">
            <h3 class="mb-2">Write a post</h3>
            <form action="{{route('createBlogPost')}}" method="post" id="creatingPost">
                <textarea cols="10" rows="2" class="with-border m-0" name="post"></textarea>
                <div class="uploadButton margin-top-10 align-items-center">
                    <input class="uploadButton-input" type="file" name="image" id="upload"/>
                    <label class="uploadButton-button ripple-effect" for="upload">Upload Files</label>
                    <span class="uploadButton-file-name">Images or documents that might be helpful in describing your post</span>
                    <button type="submit" class="button ripple-effect big"><i class="icon-feather-plus"></i> Post</button>
                </div>
            </form>
        </div>
		<div class="col-12">
            <!-- Blog Post -->
            <div class="card">
                <div class="card-header pt-4 d-flex align-item-center justify-content-between">
                    <h2 class="card-title">Sany</h2>
                    <p>2:40</p>
                </div>
                <img src="{{ asset('assets') }}/images/blog-04.jpg" class="card-img-top" alt="" height="200px">
                <div class="card-body">
                    <div class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, vitae beatae. Quos quidem dolor iusto. Rerum quos, reiciendis fuga provident, impedit molestias in magni tempora, possimus rem voluptate earum laudantium!
                    </div>
                </div>
                <div class="card-footer">
                    <form method="post" id="add-comment">
						<textarea style="" name="comment-content"  placeholder="Comment"></textarea>
					</form>

					<!-- Button -->
                    <button class="button button-sliding-icon ripple-effect " type="submit" form="add-comment">Add Comment <i class="icon-material-outline-arrow-right-alt"></i></button>
                    <hr>
                    <div class="text-center" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><a href="javascript:void(0)">Comments</a></div>

                    <div class="accordion" id="accordionExample">

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <section class="comments">
                                <div class="card">
                                    <div class="card-body pt-4">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h2 class="card-title">Sany</h2>
                                            <span>time</span>
                                        </div>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat voluptatibus, harum, labore laboriosam officiis itaque sequi neque quam cupiditate nisi expedita nam? Cum iusto provident voluptates explicabo ad at molestiae.</p>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
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
})

$("#creatingPost").submit(function (event) {
    event.preventDefault();
    $.ajax({
        // url: $("#creatingPost").attr('action'),
        // method: $("#creatingPost").attr('method'),
        data: $("#creatingPost").serialize(),
        success: function (response) {
            console.log(response);
        },
    });
});
</script>
@endsection
