<?php
include('./maininclude/header.php');
?>

<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./image/payment1.png" alt="courses"
        style="height:500px; width:200%; object-fit:cover;
        box-shadow:10px;"/>
        </div>
</div>
<h1>Payment</h1>
<div class="container">
    <h2 class="text-center my-4">PAYMENT STATUS</h2>
    <form method="post" action="">
        <div class="form-group row">
            <label class="offset-sm-3 col-form-label">Order ID: </label>
            <div>
                <input type="text" class="form-control mx-3" >
</div>
<div>
    <input type="submit" class="btn btn-primary mx-4"
    value="View">
</div>
</div>
</form>
</div>


<!-- start contact us-->
<?php
include('./contact.php');
?>
<!-- end contact us-->




<?php
include('./maininclude/footer.php');
?>