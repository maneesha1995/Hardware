<html>
<head>
    <style>
        div.scroll{
            width: 975px;
            height: 450px;
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
    <div class="col-sm-2">
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal" align="right"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>  Add New Item</button>
    </div>
    <div class="col-sm-7">
<!--        <form class="form-inline">-->
<!--        <div class="form-group">-->
<!--            <label for="exampleInputName2">Name</label>-->
<!--            <input type="text" class="form-control" id="itemname" placeholder="Search By Name" name="keyword">-->
<!--        </div>-->

<!---->
<!--        <button type="submit" class="btn btn-default" name="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search</button>-->
<!--    </form>-->
        <label class="control-lable" style="color: #fff;">Country Name</label>
        <input  type="text" id="country" autocomplete="off" name="country" class="form-control" placeholder="Search By Item Name">
        <ul class="dropdown-menu txtcountry" style="margin-left:15px;margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownCountry"></ul>
    </div>
    <br>
    <br>
    <br>

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
                <?php echo form_open('Admin/AddItemType');?>

                <div class="form-group">
                    <label for="inputfname3" class="col-sm-12 control-label">Item Type Name</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="inputfname3" placeholder="Item Name" name="name">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputname3" class="col-sm-12 control-label">Item Type Category</label>
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
                    <label for="inputname3" class="col-sm-12 control-label">Location Rack</label>
                    <div class="col-sm-12">
                        <select class="form-control" name="location_rack">
                            <option value="-">None</option>
                            <option value="Rack 1">Rack 1</option>
                            <option value="Rack 2">Rack 2</option>
                            <option value="Rack 3">Rack 3</option>
                            <option value="Rack 4">Rack 4</option>
                            <option value="Deltex Rack">Deltex Rack</option>
                            <option value="Paint Brush Rack">Paint Brush Rack</option>
                            <option value="Pipe Rack">Pipe Rack</option>



                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputname3" class="col-sm-12 control-label">Location Row</label>
                    <div class="col-sm-12">
                        <select class="form-control" name="location_row">
                            <option value="G">G</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="-">None</option>




                        </select>
                    </div>
                </div>
<!--                <div class="form-group">-->
<!--                    <label for="inputname3" class="col-sm-12 control-label">Item Key</label>-->
<!--                    <div class="col-sm-12">-->
<!--                        <input type="text" class="form-control" id="inputname3" placeholder="Item Key (Eg:CT for Cement)" name="key">-->
<!--                    </div>-->
<!--                </div>-->

                <div class="form-group" >
                    <div class="row"></div>
                </div>
                <div class="form-group">
                    <div >

                        <button type="submit" class="btn btn-default ">Add Item Type</button>
                    </div>
                </div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>
            </div>
        </div>

<br>

<div class=scroll >
    <table class="table table-bordered">
        <tr>
            <th>Item Name</th>
            <th>Category</th>


            <th>Location</th>


        </tr>
        <tr>

            <?php
            foreach ($cement_array as $value){

                echo "<tr>
                    <td>".$value['Type_Name']."</td>
                    <td>".$value['Type_Category']."</td>
                   
                    <td>".$value['Location_Rack']."</td>";?>
                <td><a href="">
                        <button type='submit' class='btn btn-warning' ><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>  Update</button></a></td>
                <td><a href="<?php echo site_url('Admin/deleteitemtype/'.$value["Type_Name"].'')?>">
                        <button type='submit' class='btn btn-danger' name="delete"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>  Delete</button></a></td>
                <?php
                echo " </tr>";
            }
            ?>
        </tr>
    </table>
</div>
</div>


<?php
include 'includes/footer.php'
?>