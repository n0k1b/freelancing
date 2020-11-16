<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog_post;
use App\Models\blog_comment;
use App\Models\blog_category;
use App\Models\User;

class UserController extends Controller
{
    public function approveUser(Request $Request)
    {
        $user = User::where('id',$Request->id)->update(['status'=>0]);
        return redirect()->back()->with('message',"Account has been activated successfully");
    }

    public function readUserList()
    {
        return view('admin.userList',['users'=>User::where('status','1')->get()]);
    }

    public function read_blog_category()
    {
        $categories = blog_category::orderBy('id','DESC')->get();
        return view('my_blog_category',['categories'=>$categories]);
    }

    public function deleteBlogPost(Request $Request)
    {
        $data = blog_post::where('id',$Request->id)->first();
        if ($data->image!='') {
            unlink("images/".$data->image);
        }
        $data->delete();
    }

    public function readBlogPost(Request $Request)
    {
        $id = auth()->check()?auth()->user()->id:1;
        $variable = blog_post::where('user_id',$id)->where('category_id',$Request->id)->get();
        if (count($variable)!=0) {
            foreach ($variable as $value) {
                ?>
                <div class="col-12">
                    <!-- Blog Post -->
                    <div class="card">
                        <div class="card-header pt-4 d-flex align-item-center justify-content-between">
                            <h2 class="card-title"><?php echo $value->user->name ?></h2>
                            <p>
                            <?php echo $value->created_at!=''?$value->created_at:'unknow' ?>
                            <a href="<?php echo url('user/edit-blog-post/'.$value->id) ?>" class="mx-2"><i class="icon-feather-edit"></i></a>
                            <a href="javascript:void(0)" onclick="delete_post(<?php echo $value->id ?>)" class="mx-2"><i class="icon-feather-delete"></i></a>
                            </p>
                        </div>
                        <?php
                        if ($value->image!='') {
                            ?>
                            <img src="<?php echo asset('images') ?>/<?php echo $value->image ?>" class="card-img-top" alt="" height="200px">
                            <?php
                        }
                        ?>
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
                            url:"<?php echo url('read-blog-comment/'.$value->id) ?>",
                            type:'GET',
                            success:function(data){
                                $("#comment_of_post_no_<?php echo $value->id ?>").html(data);
                            }
                        })
                    }
                </script>
                <?php
            }

        }else{
            ?>
            <h1 class="text-center">No post available</h1>
            <?php
        }
    }

    public function editBlogPost(Request $Request)
    {
        $data = blog_post::where('id',$Request->id)->first();
        return view('editPost',['post'=>$data]);
    }

    public function updateBlogPost(Request $Request)
    {
        $data = blog_post::where('id',$Request->id)->first();
        // $data->category_id;
        if ($Request->hasFile('image')) {
            // if ($data->image!='') {
            //     unlink("images/".$data->image);
            // }
            $fileName = time().'.'.$Request->image->extension();
            $Request->image->move(public_path('../images'), $fileName);
            $data->image = $fileName;
        }
        $data->post = $Request->post;
        $data->update();
        return redirect('user_blog/'.$data->category_id);
    }
}
