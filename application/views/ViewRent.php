<html>
<head>
    <style>
        div.scroll{
            width: 1090px;
            height: 470px;
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
include 'includes/rentsidebar.php'
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

    <!-- Trigger the modal with a button -->
    <div class="col-sm-2">
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal" align="right"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>  Add New Item</button>
    </div>
    <div class="col-sm-7">
        <form class="form-inline">
            <div class="form-group">
                <label for="exampleInputName2">Name</label>
                <input type="text" class="form-control" id="exampleInputName2" placeholder="Search By Name">
            </div>

            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search</button>
        </form>
    </div>


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
                            <?php echo form_open('Rent/AddItem');?>

                            <div class="form-group">
                                <label for="inputfname3" class="col-sm-12 control-label">Item Name</label>
                                <div class="col-sm-12">
                                <input type="text" class="form-control" id="inputfnam"  name="name" placeholder="Item name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputNIC" class="col-sm-12 control-label">Description</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="inputNIC" placeholder="Description" name="des">
                                </div>
                            </div>
<!--                            <div class="form-group">-->
<!--                                <label for="inputadd" class="col-sm-12 control-label">Purchased Date</label>-->
<!--                                <div class="col-sm-12">-->
<!--                                    <input type="date" class="form-control" id="inputEmail3" placeholder="Date" name="date">-->
<!--                                </div>-->
<!--                            </div>-->
                            <div class="form-group">
                                <label for="inputMobile" class="col-sm-12 control-label">Rent Price in Rs.</label>
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
<!--            <th>Rent ID</th>-->
            <th>Item Name</th>
            <th>Item Description</th>


            <th>Price per Day (Rs.)</th>
            <th>Status</th>


        </tr>
        <tr>

            <?php
            foreach ($rent_array as $value){

                echo "<tr>
                    
                    <td>".$value['Item_Name']."</td>

                    <td>".$value['Item_Description']."</td>
                    <td>".$value['Rent_Price']."</td>
                    <td style='color: #9e0505'>".$value['Status']."</td>
                    ";?>
                <td><a href="<?php echo site_url('Rent/AddRentItem/'.$value["Rent_ID"].'')?>">
                        <button type='submit' class='btn btn-primary' ><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>  Rent Out</button></a></td>

                <td><a href="">
                        <button type='submit' class='btn btn-warning' ><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>  Update</button></a></td>
                <td><a href="<?php echo site_url('Rent/DeleteItem/'.$value["Rent_ID"].'')?>">
                        <button type='submit' class='btn btn-danger' name="delete"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>  Delete</button></a></td>
                <?php
                echo " </tr>";
            }
            ?>
        </tr>
    </table>
</div>


<?php
include 'includes/footer.php'
?>