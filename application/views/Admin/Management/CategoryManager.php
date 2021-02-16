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
                <?php foreach($categories as $category){?>
                <tr>
                    <td><?php echo $category->category_id;?></td>
                    <td><?php echo $category->category_name;?></td>
                    <td style="float: right;"><a href="#" class="btn btn-warning">แก้ไข</a>&nbsp;<a href="#" class="btn btn-danger">ลบ</a></td>
                </tr>
                <?php } ?>
            </table>
        </form>   
    </div>  
</div>