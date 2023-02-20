<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hall details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style type="text/css">
    .form {
        margin: 0;
        width: 50%;
        padding: 70px 100px 50px 150px;


    }
  </style>

</head>
<body><div class="form"/>
       
        <div>
            <?php if(Session::has('success')): ?>
            <div class="alert alert-success">
                <?php echo e(Session::get('success')); ?>

            </div>
            <?php endif; ?>
        </div>

        <form action="add" method="POST"/>
            <?php echo csrf_field(); ?>
            <div class="container p-5 mb-3 mt-3 border " style="background:#6faf81 ;">
            <div class="row">
            <div class="col">
            <p class="h1 text-black">Hall Enrollment</p>
            <label class="h5 text-white">Hall Number</label>
            <input type="text" class="form-control"name="hallno" id="hallnumber">
<label class="h5 text-white">No. of rows</label>
            <input type="text" class="form-control"name="rows" id="No_of_rows">
            <label class="h5 text-white">No. of columns</label>
            <input type="text" class="form-control"name="columns" id="No_of_columns"><br>
            <button type="submit" class="btn btn-warning">Add</button>
        <button type="cancel" class="btn btn-danger">Cancel</button>
           </div></div></div>
        
</body>
</html><?php /**PATH C:\xampp\htdocs\laravell\projectn\resources\views/halldetails.blade.php ENDPATH**/ ?>