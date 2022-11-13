<?php 
include_once 'db.php';
include_once 'function.php';
HeaderTop();
Sidebar();
?>

<div class="panel panel-primary">
    <div class="panel-heading">
        <div class="col-md-9 heading_title">
            Personal Information
            </div>
            <div class="col-md-3 text-right">
            <a href="table.html" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> All Information</a>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="panel-body">
        <div class="col-md-1">
        </div>
        <div class="col-md-9">
        <table class="table table-hover table-striped table-responsive view_table_cus">
            <tr>
                <td>Name</td>
                <td>:</td>
                <td>Rasel Islam</td>
            </tr>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td>adadad@aasa.cxc</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>+880 17171717</td>
            </tr>
            <tr>
                <td>Number</td>
                <td>:</td>
                <td>Dhaka, Bangladesh.</td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td>29.04.2017 10:40:15</td>
            </tr>
        </table>
        </div>
        <div class="col-md-2">
        </div>
    </div>
    <div class="panel-footer">
    <div class="col-md-4">
        <a href="#" class="btn btn-sm btn-primary">PDF</a>
        <a href="#" class="btn btn-sm btn-success">PRINT</a>
    </div>
    <div class="col-md-4">
    </div>
    <div class="col-md-4 text-right">
        
    </div>
    <div class="clearfix"></div>
    </div>
</div>
<?php Footer() ?>