<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font.css">
    <style>
        .custom-file-control:before{
            content: "Browse";
        }
        .custom-file-control:after{
            content: "Add files..";
        }
    </style>
</head>
<body>
<?php include '../includes/user/navbar.php'?>

<div class="container mt-5 mb-3">
    <form action="">
        <div class="card shadow-sm">
            <div class="card-header bg-white text-right">
                <h4 class="persian">نظرات و پیشنهادات</h4>
            </div>
            <div class="card-body">
<div class="row flex-row-reverse">
   <div class="col-md-6">
       <div class="form-group">
           <label for="title" class="persian text-right float-right" >عنوان</label>
           <input type="text" name="title" id="title" class="form-control text-right persian">
       </div>
   </div>
</div>

                <div class="row flex-row-reverse">
                    <div class="col-md-12">
                      <div class="form-group">
                          <label for="description" class="persian text-right float-right">توضیحات</label>
                          <textarea name="description" id="description"
                                    cols="30" rows="5" class="form-control text-right persian"></textarea>
                      </div>
                    </div>
                </div>

                <div class="row flex-row-reverse">
                    <div class="col-md-12">
                        <h6 class="persian text-right float-right">انتخاب فایل</h6>
                        <div class="custom-file ">

                            <input type="file" class="custom-file-input" id="file">
                            <label class="custom-file-label " for="file"></label>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-footer bg-white">
                <input type="submit" value="ثبت" class="btn btn-info persian">
            </div>
        </div>
    </form>
</div>



<script src="../js/jquery-3.5.1.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
