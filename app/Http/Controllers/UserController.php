<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog_post;
use App\Models\blog_comment;
use App\Models\User;

class UserController extends Controller
{
    public function deleteBlogPost(Request $Request)
    {
        blog_post::where('id',$Request->id)->delete();
    }

    public function createBlogPost(Request $Request)
    {
        $fileName = time().'.'.$Request->upload->extension();
        $Request->upload->move(public_path('../images'), $fileName);
        blog_post::create(['user_id'=>auth()->user()->id,'category_id'=>1,'post'=>$Request->text,'image'=>$fileName,'status'=>1]);
    }

    public function readBlogPost(Request $Request)
    {
        $id = auth()->check()?auth()->user()->id:1;
        $variable = blog_post::where('user_id',$id)->skip($Request->skip)->take($Request->take)->get();

        foreach ($variable as $value) {
            ?>
            <div class="col-12">
                <!-- Blog Post -->
                <div class="card">
                    <div class="card-header pt-4 d-flex align-item-center justify-content-between">
                        <h2 class="card-title"><?php echo $value->user->name ?></h2>
                        <p>
                        <?php echo $value->created_at!=''?$value->created_at:'unknow' ?>
                        <a href="javascript:void(0)" onclick="edit_post(<?php echo $value->id ?>)" class="mx-2"><i class="icon-feather-edit"></i></a>
                        <a href="javascript:void(0)" onclick="delete_post(<?php echo $value->id ?>)" class="mx-2"><i class="icon-feather-delete"></i></a>
                        </p>
                    </div>
                    <img src="<?php echo asset('images') ?>/<?php echo $value->image ?>" class="card-img-top" alt="" height="200px">
                    <div class="card-body">
                        <div class="card-text">
                        <?php echo $value->post ?>
                        </div>
                    </div>
                    <div class="card-footer">
                        <form id="add_comment_<?php echo $value->id ?>">
                            <input type="hidden" name="postId" value="<?php echo $value->id ?>">
                            <textarea id="commentContent_<?php echo $value->id ?>" name="commentContent"  placeholder="Comment" required></textarea>
                        <!-- Button -->
                        <button class="button button-sliding-icon ripple-effect " type="submit">Add Comment <i class="icon-material-outline-arrow-right-alt"></i></button>
                        </form>
                        <hr>
                        <div id="accordion">
                            <div class="card">
                            <div class="card-header text-center" data-toggle="collapse" data-target="#collapse_<?php echo $value->id ?>" aria-expanded="true" aria-controls="collapseOne" style="cursor:pointer;">Comments</div>

                                <div id="collapse_<?php echo $value->id ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body"  id="comment_of_post_no_<?php echo $value->id ?>">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $(function() {
                    readComment<?php echo $value->id ?>();
                })
                $("#add_comment_<?php echo $value->id ?>").submit(function(e){
                    e.preventDefault()
                    $.ajax({
                        url:'create-blog-comment',
                        data:$("#add_comment_<?php echo $value->id ?>").serialize(),
                        type:'POST',
                        success:function(data){

                            readComment<?php echo $value->id ?>();
                            $("#commentContent_<?php echo $value->id ?>").val('');
                            $("#collapse_<?php echo $value->id ?>").show().scrollTop();
                        }
                    })
                })
                function readComment<?php echo $value->id ?>() {
                    $.ajax({
                        url:'read-blog-comment/'+<?php echo $value->id ?>,
                        type:'GET',
                        success:function(data){
                            $("#comment_of_post_no_<?php echo $value->id ?>").html(data);
                        }
                    })
                }
            </script>
            <?php
        }
    }

    public function readBlogComment(Request $Request)
    {
        $comments = blog_comment::where('post_id',$Request->id)->get();
        if (count($comments)>0) {
            foreach ($comments as $comment) {
                ?>
                <div class="card">
                    <div class="card-body pt-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <h2 class="card-title"><?php echo $comment->user->name ?></h2>
                            <span><?php echo $comment->created_at ?></span>
                        </div>
                        <p class="card-text"><?php echo $comment->comment ?></p>
                    </div>
                </div>
                <?php
            }
        }else{
            ?>
            <h1 class="text-center pt-4 pb-3">No comment</h1>
            <?php
        }
    }

    public function createBlogComment(Request $Request)
    {
        $user_id = auth()->user()?auth()->user()->id:1;
        $postId = $Request->postId;
        $commentContent = $Request->commentContent;
        blog_comment::create(['user_id'=>$user_id,'post_id'=>$postId,'comment'=>$commentContent,'status'=>0]);
    }
}
