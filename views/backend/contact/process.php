<?php
use App\Models\Contact;
use App\Libraries\MyClass;

if(isset($_POST['CAPNHAT'])){

   $id= $_POST['id'];
   $contact=contact::find($id);
   if($contact==NULL)
 {
    header("location:index.php?option=contact");
 }
   //lấy từ form
   $contact->name = $_POST['name'];
   $contact->phone = $_POST['phone'];
   $contact->email = $_POST['email'];
   $contact->title = $_POST['title'];
   $contact->status = $_POST['status'];
   //xử lí upload file hình ảnh
   //tự sinh ra
   $contact->updated_at = date('Y-m-d H:i:s');
   $contact->updated_by = (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : 1 ;
   var_dump($contact);
   //lưu vào CSDL
   //INSERT INTO ...
   $contact->save();
  //chuyển hướng về index
   header("location:index.php?option=contact");
}
