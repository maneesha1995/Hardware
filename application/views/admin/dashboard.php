<?php
if (!($this->session->userdata('loggedin'))){
    redirect('Welcome/login');
}?>
<?php
include 'includes/header_content.php'
?>

<?php
if ($this->session->flashdata('welcome')){
    echo "<h3>".$this->session->flashdata('welcome')."</h3>";
}
echo $this->session->userdata('fname')." ".$this->session->userdata('lname');?>