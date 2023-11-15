<?php

use App\Models\Banner;
$list = Banner::where('status', '!=', 0)
   ->orderBY('created_at', 'DESC')
   ->get();
?>

<?php require_once '../views/backend/header.php'; ?>
<!-- CONTENT -->
<form action="index.php?option=banner&cat=process" method="post" enctype="multipart/form-data">
   <div class="content-wrapper">
      <section class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-sm-12">
                  <h1 class="d-inline">Tất cả banner</h1>
                  <a href="banner_create.html" class="btn btn-sm btn-primary">Thêm banner</a>
               </div>
            </div>
         </div>
      </section>
      <!-- Main content -->
      <section class="content">
         <div class="card">
            <div class="card-header ">
               <div class="row">
                  <div class="col-12">
                     <a class="btn btn-sm btn-info text-left " href="index.php?option=banner">Tất cả</a>
                     <a class="btn btn-sm btn-warning text-left" href="index.php?option=banner&cat=trash">
                        Thùng rác</a>
                  </div>
               </div>
            </div>
            <div class="card-body">
               <?php require_once '../views/backend/message.php'; ?>
               <table class="table table-bordered" id="mytable">
                  <thead>
                     <tr>
                        <th class="text-center" style="width:30px;">
                           <input type="checkbox">
                        </th>
                        <th class="text-center" style="width:130px;">Hình ảnh</th>
                        <th>Tên banner</th>
                        <th>Liên kết</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php if (count($list) > 0) : ?>
                        <?php foreach ($list as $item) : ?>
                           <tr class="datarow">
                              <td>
                                 <input type="checkbox">
                              </td>
                              <td>
                                 <img class="img-fluid w-100" src="../public/images/banner/<?= $item->image; ?>" alt="<?= $item->image; ?>">
                              </td>
                              <td>
                                 <div class="name">
                                    <?= $item->name; ?>
                                 </div>
                                 <div class="function_style">
                                    <?php if ($item->status == 1) : ?>
                                       <a href="index.php?option=banner&cat=status&id=<?= $item->id; ?>" class="btn btn-success btn-xs">
                                          <i class="fas fa-toggle-on"></i> Hiện</a>
                                    <?php else : ?>
                                       <a href="index.php?option=banner&cat=status&id=<?= $item->id; ?>" class="btn btn-danger btn-xs">
                                          <i class="fas fa-toggle-on"></i> Ẩn</a>
                                    <?php endif; ?>
                                    <a href="index.php?option=banner&cat=edit&id=<?= $item->id; ?>" class="btn btn-warning btn-xs">
                                       <i class="fas fa-edit"></i> Chỉnh sửa</a>
                                    <a href="index.php?option=banner&cat=show&id=<?= $item->id; ?>" class="btn btn-info btn-xs">
                                       <i class="fas fa-eye"></i> Chi tiết</a>
                                    <a href="index.php?option=banner&cat=delete&id=<?= $item->id; ?>" class="btn btn-danger btn-xs">
                                       <i class="fas fa-trash"></i> Xoá</a>
                                 </div>
                              <td><?= $item->link; ?></td>
                           </tr>
                        <?php endforeach; ?>
                     <?php endif; ?>
                  </tbody>
               </table>
            </div>
         </div>
      </section>
   </div>
</form>

<!-- END CONTENT-->
<?php require_once '../views/backend/footer.php'; ?>
