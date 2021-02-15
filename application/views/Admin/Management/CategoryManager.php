<div class="row ">
	<div class="col-8">
		<a href="<?php echo base_url('admin/index');?> " class="btn btn-danger">< BACK</a>
        

	</div>
    <div class="col-4">
        <h2 style="text-align: right; color:black;">จัดการหมวดหมู่</h2>
    </div>
</div>
<div class="dropdown-divider"></div>
<div class="row">

    <div class="col-5 border-right "  >
        <h2>Add Category</h2>
        <form action="#" method="post" name="AddCategoryForm">
            <table class="table table-borderless">
                <tr>
                    <td><b>Category ID</b></td>
                    <td><input class="form-control" type="text" name="catID"></td>
                </tr>
                <tr>
                    <td><b>Category Name</b></td>
                    <td><input class="form-control" type="text" name="catName"></td>
                </tr>
                <tr>
                    <td colspan="2"><a href="<?php echo base_url('admin/index');?> "class="btn btn-outline-success btn-block my-3">ADD</a></td>
                </tr>
            </table>
            
        </form>
    </div>

	<div class="col-7">
        <h2 style="text-align: right;">Category</h2>
         <form action="#" method="post" name="manageCategoryForm">
            <table class="table table-striped ">
                <tr>
                    <td><b>Category ID</b></td>
                    <td><b>Categry Name</b></td>
                    <td colspan="2"></td>
                </tr>
                
                <?php foreach($categories as $category){?>
                <tr>
                    <td><?php echo $category->category_id;?></td>
                    <td><?php echo $category->category_name;?></td>
                    <td colspan="2"><a href="#" class="btn btn-warning">แก้ไข</a>&nbsp;<a href="#" class="btn btn-danger">ลบ</a></td>
                </tr>
                <?php } ?>
            </table>
        </form>   
    </div>
	
</div>