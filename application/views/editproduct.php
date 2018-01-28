
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


                            <?php echo validation_errors(); ?>
                            <?php foreach($row as $value) ?>
                            <?php echo form_open('Admin/EditProduct'.$value["Product_ID"].'');?>

<!--                            --><?php //echo form_open('Admin/EditProduct'.$row["Product_ID"].'');?>
<!--                            --><?php //foreach($row as $value) ?>
<!--                            <form method="post" action="--><?php //echo site_url('Admin/EditProduct/'.$data['Product_ID'].''); ?><!--">-->
                            <div class="form-group">
                                <label for="ID" class="col-sm-12 control-label">Product ID</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="inputID" style="background-color: white" value="<?php echo $value['Product_ID'] ?>" name="ID" readonly="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputfname3" class="col-sm-12 control-label">Item Name</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="inputname" style="background-color: white" value="<?php echo $value['Product_Name'] ?>" name="des" readonly>
                                </div>
                                <!--                                    <div class="col-sm-12">-->
                                <!--                                        <input type="text" class="form-control" id="inputfname3" placeholder="Item Name" name="name">-->
                                <!--                                    </div>-->
                            </div>

                            <!--
                            <!--                                <div class="form-group">-->
                            <!--                                    <label for="inputname3" class="col-sm-12 control-label">Barcode Number</label>-->
                            <!--                                    <div class="col-sm-12">-->
                            <!--                                        <input type="text" class="form-control" id="inputname3" placeholder="Item barcode" name="barcode">-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <div class="form-group">
                                <label for="inputNIC" class="col-sm-12 control-label">Description</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="inputNIC" value="<?php echo $value['Product_Description'] ?>" name="des">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputadd" class="col-sm-12 control-label">Quantity</label>
                                <div class="col-sm-12">
                                    <input type="number" class="form-control" id="inputEmail3" value="<?php echo $value['Product_Quantity'] ?>" name="qty">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputMobile" class="col-sm-12 control-label">Price in Rs.</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="inputEmail3" value="<?php echo $value['Product_price'] ?>" name="price">
                                </div>
                            </div>
                            <div class="form-group" >
                                <div class="row"></div>
                            </div>

                            <div class="form-group">
                                <div >

                                    <button type="submit" class="btn btn-default " name="update">Update Item</button>
                                </div>
                            </div>
                            <?php echo form_close();?>
<!--                        </form>-->
                        </div>

    <br>
    <hr>




<?php
include 'includes/footer.php'
?>