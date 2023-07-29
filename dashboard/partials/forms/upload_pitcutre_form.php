
    <div class="card-body rounded shadow-sm border" style="border-left: 4px solid blue !important;">
    <h3 class="mb-2 text-secondary">Upload Picture to gallary</h3>
       <form action="galary.php" method="POST" enctype="multipart/form-data">
       <input type="text" name="descriptions" required  placeholder="Picture caption or description"  class="mb-4 form-control-lg form-control form-lg">
        <div class="row mt-4">
            <div class="col-md-4">
            <input required name="featureImg" type="file" class="form-control form-lg">
            </div>
            <div class="col-md-4">
                <input type="submit" onClick="submitForm()" name="save_img" class="btn-block btn btn-primary" value="Upload Picture to galary">
            </div>
        </div>
       </form>
    </div>