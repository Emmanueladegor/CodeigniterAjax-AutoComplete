<!DOCTYPE html>
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/custom.js"></script>
    </head>
    <body style="background-color: #000000;">
        <div class="row">
        <center><h2 style="color: #fff;">AUTOCOMPLETE FORM FROM DATABASE USING CODEIGNITER AND AJAX</h2></center>
            <div class="col-md-4 col-md-offset-4" style="margin-top: 200px;">
                
                    <label class="control-lable" style="color: #fff;">Country Name</label>
                    <input style="height:70px" type="text" id="country" autocomplete="off" name="country" class="form-control" placeholder="Type to get an Ajax call of Countries">        
                    <ul class="dropdown-menu txtcountry" style="margin-left:15px;margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownCountry"></ul>

                
            </div>
        </div>
    </body>
</html>
