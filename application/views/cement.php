<html>
<head>
    <style>
        div.scroll{
            width: 1000px;
            height: 500px;
            overflow: scroll;
        }
    </style>
</head>
<body>
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

        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal" align="right"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>  Add New Item</button>

        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Add New Item</h4>
                    </div>
                    <div class="modal-body">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo validation_errors(); ?>
                                <?php echo form_open('Admin/AddItem');?>
                                <input type="hidden" name="num" value="01">
                                <div class="form-group">
                                    <label for="inputfname3" class="col-sm-12 control-label">Item Name</label>
                                    <div class="col-sm-12">
                                    <select class="form-control" name="name">
                                        <?php
                                        foreach ($item_array as $key=>$val){

                                            echo "
                                            <option>".$val['Type_Name']."</option>
                                            ";
                                        }
                                        ?>
                                    </select>
<!--                                    <div class="col-sm-12">-->
<!--                                        <input type="text" class="form-control" id="inputfname3" placeholder="Item Name" name="name">-->
<!--                                    </div>-->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputfname4" class="col-sm-12 control-label">Item Category</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="inputfname3" value="Cement" name="category" style="background-color: white" readonly>
<!--                                        <select class="form-control" name="category">-->
<!--                                            <option value="Cement">Cement</option>-->
<!--                                        </select>-->
                                    </div>
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
                                    <label for="inputMobile" class="col-sm-12 control-label">Buying Price in Rs.</label>
                                    <div class="col-sm-12">
                                        <input type="number" class="form-control" id="inputEmail3" placeholder="Buying Price" name="price">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputMobile" class="col-sm-12 control-label">Selling Price in Rs.</label>
                                    <div class="col-sm-12">
                                        <input type="number" class="form-control" id="inputEmail3" placeholder="Selling Price" name="sprice">
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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
<br>
    <hr>
    <div class=scroll >
        <table class="table table-bordered">
            <tr>
            <th>Product Date</th>
            <th>Product Name</th>
<!--            <th>Product Description</th>-->

            <th>Quantity</th>
            <th>Buying Price (Rs.)</th>
                <th>Selling Price (Rs.)</th>
                <th>Total Value (Rs.)</th>
                <th colspan="3" style="align-content: center">Actions</th>

            </tr>
            <tr>
                <?php if (count($cement_array)): ?>
                <?php
                foreach ($cement_array as $value){
                    $product=$value['Product_Quantity']*$value['Product_price'];
                    echo "<tr>
                    <td>".$value['Product_Date']."</td>
                    <td>".$value['Product_Name']."</td>
                   
                    <td>".$value['Product_Quantity']."</td>
                    <td>".$value['Product_price']."</td>
                    <td>".$value['Selling_Price']."</td>
                    <td>".$product."</td>";?>

                    <td><a href="">
                            <button type='submit' class='btn btn-primary' ><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>  View</button></a></td>

                    <td><a href="<?php echo site_url('Admin/EditProduct/'.$value["Product_ID"].'')?>">
         <button type='submit' class='btn btn-warning' ><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>  Update</button></a></td>
         <td><a href="<?php echo site_url('Admin/deleteproduct/'.$value["Product_ID"].'')?>">
         <button type='submit' class='btn btn-danger' name="delete"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>  Delete</button></a></td>
                   <?php
                   echo " </tr>";
                }
                ?>


                <?php else: ?>
                    <p style="margin-bottom: 50px;">No users in the database</p>
                <?php endif ?>

            </tr>
        </table>
    </div>
</div>

<?php
include 'includes/footer.php'
?>