<?php
use App\Models\Category;
$list = Category::where('status','!=',0)->select('image')->OrderBy('created_at','DESC')->get();
?>
<?php require_once '../views/backend/header.php';?>
      <!-- CONTENT -->
      <div class="content-wrapper">
         <section class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-12">
                     <h1 class="d-inline">Tất cả liên hệ</h1>
                  </div>
               </div>
            </div>
         </section>
         <!-- Main content -->
         <section class="content">
            <div class="card">
               <div class="card-header text-right">
                  Noi dung
               </div>
               <div class="card-body">
                  <table class="table table-bordered" id="mytable">
                     <thead>
                        <tr>
                           <th class="text-center" style="width:30px;">
                              <input type="checkbox">
                           </th>
                           <th>Họ tên</th>
                           <th>Điện thoại</th>
                           <th>Email</th>
                           <th>Tiêu đề</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr class="datarow">
                           <td>
                              <input type="checkbox">
                           </td>
                           <td>
                              <div class="name">
                                 Hồ Diên Lơij
                              </div>
                              <div class="function_style">
                                 <?php if($item->status == 1):?>
                                    <a class="text-success" href="index.php?option=contact&cat=status&id=<? $item->id;?>">Hiện</a> |
                                    <?php else:?>
                                    <a class="text-danger" href="index.php?option=contact&cat=status&id=<? $item->id;?>">Ẩn</a> |
                                    <?php endif;?>
                                    <a class="text-success" href="index.php?option=contact&cat=edit&id=<? $item->id;?>">Chỉnh sửa</a> |
                                    <a class="text-success" href="index.php?option=contact&cat=show&id=<? $item->id;?>">Chi tiết</a> |
                                    <a class="text-success" href="index.php?option=contact&cat=delete&id=<? $item->id;?>">Xoá</a>
                              </div>
                           </td>
                           <td>098765432</td>
                           <td>dienloisoft@gmail.com</td>
                           <td>Tieu đề</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </section>
      </div>
      <!-- END CONTENT-->
<?php require_once '../views/backend/header.php';?>
     