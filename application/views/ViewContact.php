
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
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal" align="right"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>  Add New Contact</button>
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
                    <h4 class="modal-title"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>   Add New Contact</h4>
                </div>
                <div class="modal-body">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <?php echo validation_errors(); ?>
                            <?php echo form_open('Contact/AddItem');?>

                            <div class="form-group">
                                <label for="inputfname3" class="col-sm-12 control-label">Contact Name</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="inputfname3" placeholder="" name="name">
                                </div>
                            </div>
<!--                            <div class="form-group">-->
<!--                                <label for="inputfname3" class="col-sm-12 control-label">Contact Name</label>-->
<!--                                <div class="col-sm-12"-->
<!--                            <input type="text" list="cars" class="form-control">-->
<!--                            <datalist id="cars">-->
<!--                                --><?php
//                                    foreach ($contact_array as $key=>$val){
//                                    echo "
//                                    <option>".$val['Contact_Name']."</option>
//                                    ";}
//                                ?>
<!--                            </datalist>-->
<!--                            </div>-->

                            <div class="form-group">
                                <label for="inputfname4" class="col-sm-12 control-label">Contact Number 1</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="inputfname3" placeholder="Eg : 071 xxxxxxx" name="num1">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputNIC" class="col-sm-12 control-label">Contact Number 2</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="inputNIC" placeholder="Eg : 071 xxxxxxx" name="num2">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputadd" class="col-sm-12 control-label">Email</label>
                                <div class="col-sm-12">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="" name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputMobile" class="col-sm-12 control-label">Address</label>
                                <div class="col-sm-12">
                                    <input type="textarea" class="form-control" id="inputEmail3" placeholder="" name="address">
                                </div>
                            </div>
                            <div class="form-group" >
                                <div class="row"></div>
                            </div>

                            <div class="form-group">
                                <div >

                                    <button type="submit" class="btn btn-default ">Add Contact</button>
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

    <div  style="font-size: large">
        <table class="table table-bordered">
            <tr>
                <th>Contact Name</th>
                <th>Number 1</th>
                <!--            <th>Product Description</th>-->

                <th>Number 2</th>
                <th>Email</th>
                <th>Address</th>

            </tr>
            <tr>

                <?php
                foreach ($contact_array as $key=>$value){

                    echo "<tr>
                    <td>".$value['Contact_Name']."</td>
                    <td>".$value['Contact_Num1']."</td>
                   
                    <td>".$value['Contact_Num2']."</td>
                    <td>".$value['Contact_email']."</td>
                    <td>".$value['Contact_Address']."</td>
                    <td><a href=''>
         <button type='submit' class='btn btn-warning'>Update</button></td></a>
         <td><a href=''>
         <button type='submit' class='btn btn-danger'>Delete</button></td></a>
                    
                    </tr>";
                }
                ?>
            </tr>
        </table>
    </div>
</div>

<?php
include 'includes/footer.php'
?>