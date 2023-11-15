<?php
use App\Models\Post;

$id= $_REQUEST['id'];
$post= Post::find($id);

if($post==NULL)
{
   header("location:index.php?option=post&cat=trash");
}
?>



<?php require_once '../views/backend/header.php' ;?>

      <!-- CONTENT -->
  <div class="content-wrapper">
         <section class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-12">
                     <h1 class="d-inline">Chi tiết thương hiệu</h1>
                  </div>
               </div>
            </div>
         </section>
         <!-- Main content -->
         <section class="content">
            <div class="card">
               <div class="card-header">
                  <div class="row">
                     <div class="col-md-12 text-right ">
                     <a href="index.php?option=post" class="btn btn-sm btn-info">
                     <i class="fa fa-arrow-left" aria-hidden="true"></i>
                     Về danh sách
                     </a>
                     </div>
                  </div>
               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col-md-12">
                        <table class="table table-bordered">
                           <thead>
                              <tr>
                                 <th>Tên trường</th>
                                 <th>giá trị</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>ID</td>
                                 <td><?=$post->id?></td>
                              </tr>
                              <tr>
                                 <td>topic_id</td>
                                 <td><?=$post->topic_id?></td>
                              </tr>
                              <tr>
                                 <td>title</td>
                                 <td><?=$post->title?></td>
                              </tr>
                              <tr>
                                 <td>Hình ảnh</td>
                                 <td>
                                    <img class="img-fluid w-100" src="../public/images/post/<?= $post->image;?>"
                                     alt="<?= $post->image;?>">
                                 </td>
                              </tr>
                              <tr>
                                 <td>slug</td>
                                 <td><?=$post->slug?></td>
                              </tr>
                              <tr>
                                 <td>detail</td>
                                 <td><?=$post->detail?></td>
                              </tr>
                              <tr>
                                 <td>type</td>
                                 <td><?=$post->type?></td>
                              </tr>
                              <tr>
                                 <td>description</td>
                                 <td><?=$post->description?></td>
                              </tr>
                              <tr>
                                 <td>created_at</td>
                                 <td><?=$post->created_at?></td>
                              </tr>
                              <tr>
                                 <td>created_by</td>
                                 <td><?=$post->created_by?></td>
                              </tr>
                              <tr>
                                 <td>updated_at</td>
                                 <td><?=$post->updated_at?></td>
                              </tr>
                              <tr>
                              <tr>
                                 <td>updated_by</td>
                                 <td><?=$post->updated_by?></td>
                              </tr>
                                 <td>status</td>
                                 <td><?=$post->status?></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
      <!-- END CONTENT-->

<?php require_once '../views/backend/footer.php' ;?>


  
