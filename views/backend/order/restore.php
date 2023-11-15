<?php
 use App\Models\Order;
 use App\Libraries\MyClass;
 
 $id= $_REQUEST['id'];
 $order= Order::find($id);

 if($order==NULL)
 {
    MyClass::set_flash('message',['msg'=>'Lỗi trang 404','type'=>'danger']);
    header("location:index.php?option=order&cat=trash");
 }
 
 $order->status = 2;

 $order->created_at = date('Y-m-d H:i:s');
 $order->save();
 MyClass::set_flash('message',['msg'=>'Khôi phục thành công','type'=>'success']);
 header("location:index.php?option=order&cat=trash");
