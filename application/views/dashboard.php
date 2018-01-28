
<?php
include 'includes/header_content.php'
?>
<?php
//        if ($this->session->flashdata('welcome')){
//        echo "<h3>".$this->session->flashdata('welcome')."</h3>";
//        }
////      echo $this->session->userdata('fname')." ".$this->session->userdata('lname');
//        ?>
<?php
include 'includes/sidebar.php'
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-sm-2"></div>
    <div class="col-sm-7" style="font-size: large">
        <h2>Add New Item</h2>
        <div class="panel panel-default">
            <div class="panel-body">
    <?php echo validation_errors(); ?>
    <?php echo form_open('Admin/AddItem');?>

    <div class="form-group">
        <label for="inputfname3" class="col-sm-12 control-label">Item Name</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" id="inputfname3" placeholder="Item Name" name="name">
        </div>
    </div>
    <div class="form-group">
        <label for="inputname3" class="col-sm-12 control-label">Item Category</label>
        <div class="col-sm-12">
            <select class="form-control" name="category">
                <option value="Cement">Cement</option>
                <option value="PVC Items">PVC Items</option>
                <option value="Nails">Nails</option>
                <option value="Hardware Items">Hardware Items</option>
                <option value="Paint Items">Paint Items</option>
                <option value="Electric Items">Electric Items</option>
                <option value="Household Items">Household Items</option>
                <option value="Carpenter Items">Carpenter Items</option>
                <option value="Other Items">Other Items</option>

            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="inputname3" class="col-sm-12 control-label">Barcode Number</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="inputname3" placeholder="Item barcode" name="barcode">
            </div>
    </div>
    <div class="form-group">
        <label for="inputNIC" class="col-sm-12 control-label">Description</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" id="inputNIC" placeholder="Description" name="des">
        </div>
    </div>
    <div class="form-group">
        <label for="inputadd" class="col-sm-12 control-label">Quantity</label>
        <div class="col-sm-12">
            <input type="number" class="form-control" id="inputEmail3" placeholder="Quantity" name="qty">
        </div>
    </div>
    <div class="form-group">
        <label for="inputMobile" class="col-sm-12 control-label">Price in Rs.</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Price" name="price">
        </div>
    </div>
                <div class="form-group" >
                    <div class="row"></div>
                </div>

    <div class="form-group">
        <div >

            <button type="submit" class="btn btn-default ">Add Item</button>
        </div>
    </div>
    <?php echo form_close();?>
    </div>
        </div>
    </div>
</div>

<?php
include 'includes/footer.php'
?>