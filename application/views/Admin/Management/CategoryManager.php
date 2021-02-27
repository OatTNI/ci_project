<!--Modal Start-->

<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">เพิ่มข้อมูล</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">ต้องการที่จะเพิ่มหรือไม่</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
                <button class="btn btn-primary" form="AddCategoryForm" type="submit">เพิ่ม</button>
            </div>
        </div>
    </div>
</div>

<!--Modal End-->

<div class="row ">
    <div class="col-8">
        <a href="<?php echo base_url('admin/index'); ?> " class="btn btn-danger">BACK</a>
    </div>
    <div class="col-4">
        <h2 style="text-align: right; color:black;">จัดการหมวดหมู่</h2>
    </div>
</div>
<div class="dropdown-divider"></div>
<div class="row">
    <div class="col mb-2">
        <form action="<?= base_url("admins/categoryManagement/add")?>" method="post" name="AddCategoryForm" id="AddCategoryForm">
            <span class="HDText">Add Category</span>
            <div class="row">
                <div class="col-9"><input class="form-control" type="text" name="catName" id="catName" placeholder="Category Name"></div>
                <div class="col-3"><a class="btn btn-outline-success btn-block" name="addButton" id="addButton" data-toggle="modal" data-target="#addModal">ADD</a></div>
            </div>
        </form>
    </div>
</div>
<?php if($this->session->flashdata('flash_errors')){?>
    <div class="col-12 col-sm-6">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <div><?=$this->session->flashdata('flash_errors')?></div>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
    </div>
    <?php } ?>
    <?php if($this->session->flashdata('flash_success')){?>
        <div class="col-12 col-sm-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <div><?=$this->session->flashdata('flash_success')?></div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        </div>
<?php }?>
<div class="dropdown-divider"></div>
<div class="row">
    <div class="col">
        <form action="#" method="post" name="manageCategoryForm">
            <table class="table table-striped ">
                <tr>
                    <td><b>Category ID</b></td>
                    <td><b>Category Name</b></td>
                    <td class="text-center"><b>Product in Category</b></td>
                    <td></td>
                </tr>
                <?php $i=0; foreach ($categories as $category) { ?>
                    <tr>
                        <td><?php echo $category->category_id; ?></td>
                        <td><label id="editText<?=$category->category_id;?>"><?php echo $category->category_name; ?></label>
                        <input class="form-control editData" id="editInput<?=$category->category_id;?>" value="<?php echo $category->category_name; ?>"></td>
                        <td class="text-center"><?php echo count($Product[$i]);?></td>
                        <td style="float: right;"><a href="#" class="btn btn-warning editButton" id="editButton_<?=$category->category_id;?>">EDIT</a>&nbsp;
                        <a href="#" class="btn btn-danger deleteButton" data-toggle="modal" data-target="#deleteModal<?=$category->category_id;?>" id="deleteButton_<?=$category->category_id;?>">DELETE</a></td>
                    </tr>
                <?php $i++;} ?>
            </table>
        </form>
    </div>
</div>

<?php foreach ($categories as $category) { ?>

<div class="modal fade" id="deleteModal<?=$category->category_id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
                <button class="btn btn-primary" id="deleteConfirm<?=$category->category_id;?>">ลบ</button>
            </div>
        </div>
    </div>
</div>
<?php } ?>