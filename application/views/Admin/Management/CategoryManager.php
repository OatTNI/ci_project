<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ลบข้อมูล</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">ต้องการที่จะลบหรือไม่</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">ไม่ลบ</button>
                <a class="btn btn-primary" href="">ลบ</a>
            </div>
        </div>
    </div>
</div>
<div class="row ">
    <div class="col-8">
        <a href="<?php echo base_url('admin/index'); ?> " class="btn btn-danger">
            < BACK</a>
    </div>
    <div class="col-4">
        <h2 style="text-align: right; color:black;">จัดการหมวดหมู่</h2>
    </div>
</div>
<div class="dropdown-divider"></div>
<div class="row">
    <div class="col mb-2">
        <form action="#" method="post" name="AddCategoryForm">
            <span class="HDText">Add Category</span>
            <div class="row">
                <div class="col-9"><input class="form-control" type="text" name="catName" placeholder="Category Name"></div>
                <div class="col-3"><button class="btn btn-outline-success btn-block" type="submit">+ ADD</button></div>
            </div>
        </form>
    </div>
</div>
<div class="dropdown-divider"></div>
<div class="row">
    <div class="col">
        <form action="#" method="post" name="manageCategoryForm">
            <table class="table table-striped ">
                <tr>
                    <td><b>Category ID</b></td>
                    <td><b>Categry Name</b></td>
                    <td></td>
                </tr>
                <?php foreach ($categories as $category) { ?>
                    <tr>
                        <td><?php echo $category->category_id; ?></td>
                        <td><?php echo $category->category_name; ?></td>
                        <td style="float: right;"><a href="#" class="btn btn-warning">แก้ไข</a>&nbsp;
                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#logoutModal">ลบ</a></td>
                    </tr>
                <?php } ?>
            </table>
        </form>
    </div>
</div>