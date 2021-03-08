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
        .custom-control.custom-checkbox{padding-left: 0;}

        label.custom-control-label {
            position: relative;
            padding-right: 1.5rem;
        }

        label.custom-control-label::before, label.custom-control-label::after{
            right: 0;
            left: auto;
        }
    </style>
</head>
<body>
<?php include "../includes/admin/navbar.php"?>
<div class="container mt-5 mb-2">
    <form action="" method="post">
        <div class="card shadow-sm">
            <div class="card-header bg-white text-right">
                <h5 class="persian">افزودن کاربر</h5>
            </div>
            <div class="card-body">
<div class="row d-flex flex-row-reverse">
    <div class="col-md-3">
        <div class="form-group">
            <label for="name" class="persian float-right" dir="rtl">نام :</label>
            <input type="text" name="name" id="name" class="form-control persian text-right">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="last_name" class="persian float-right" dir="rtl">نام خانوادگی:</label>
            <input type="text" name="last_name" id="last_name" class="form-control persian text-right">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="personnel_code" class="persian float-right" dir="rtl">کد پرسنلی:</label>
            <input type="text" name="personnel_code" id="personnel_code" class="form-control persian ">
        </div>
    </div>
    <div class="col-md-3">
        <label for="education" class="persian float-right" dir="rtl">تحصیلات :</label>
        <select id="education" name="education" class="custom-select persian text-right" dir="rtl">
            <option selected disabled>انتخاب کنید...</option>
            <option value="volvo">لیسانس</option>
            <option value="fiat">فوق لیسانس</option>
            <option value="audi">دکترا</option>
        </select>
    </div>
    <div class="col-md-3 mt-3 mt-md-0">
        <label for="orginization_level" class="persian float-right" dir="rtl">سمت سازمانی :</label>
        <select id="education" name="orginization_level" class="custom-select persian text-right" dir="rtl">
            <option selected disabled>انتخاب کنید...</option>
            <option value="volvo">کارشناس</option>
            <option value="fiat">کارشناس ارشد </option>
            <option value="audi">کارشناس خبره</option>
        </select>
    </div>

    <div class="col-md-3 mt-3 mt-md-0">
        <div class="form-group">
            <label for="phone" class="persian float-right" dir="rtl"> حوزه حراست :</label>
            <input type="text" name="phone" id="personnel_code" class="form-control persian text-right">
        </div>
    </div>

    <div class="col-md-3 mt-md-0">
        <div class="form-group">
            <label for="phone" class="persian float-right" dir="rtl"> شماره موبایل :</label>
            <input type="text" name="phone" id="personnel_code" class="form-control persian ">
        </div>
    </div>

<div class="col-md-3 d-flex align-items-center justify-content-end">
    <div class="custom-control custom-checkbox " >
        <input type="checkbox" class="custom-control-input ml-auto" id="customCheck" name="example1">
        <label class="custom-control-label persian" for="customCheck">گروه ادمین </label>
    </div>
</div>

</div>
            </div>
            <div class="card-footer bg-white">
                <input type="submit" value="افزودن" class=" btn btn-success persian">
            </div>
        </div>
    </form>
</div>
<script src="../js/jquery-3.5.1.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
