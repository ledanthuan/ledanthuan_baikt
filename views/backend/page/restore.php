<?php
 use App\Models\Page;
 use App\Libraries\MyClass;
 
 $id= $_REQUEST['id'];
 $page= Page::find($id);

 if($page==NULL)
 {
    MyClass::set_flash('message',['msg'=>'Lỗi trang 404','type'=>'danger']);
    header("location:index.php?option=page&cat=trash");
 }
 
 $page->status = 2;

 $page->created_at = date('Y-m-d H:i:s');
 $page->save();
 MyClass::set_flash('message',['msg'=>'Khôi phục thành công','type'=>'success']);
 header("location:index.php?option=page&cat=trash");
