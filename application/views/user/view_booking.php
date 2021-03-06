<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>event</title>
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('admin/css/styleapp.css');?>">
    <script type="text/javascript" src="<?php echo base_url('admin/js/appjs.js');?>"></script>
    <style>
        .multiselect {
            width: 200px;
        }

        .selectBox {
            position: relative;

        }

        .selectBox select {
            width: 100%;
            font-weight: bold;
        }

        .overSelect {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
        }

        .checkboxes {
            display: none;
            border: 1px #dadada solid;
        }

        #checkboxes label {
            display: block;
        }

        #checkboxes label:hover {
            background-color: #1e90ff;
        }

    </style>
    <script type="text/javascript">
        var expanded = [false, false, false];
        var checkboxes;

        function showCheckboxes(i) {
            var checkboxes = checkboxes || document.getElementsByClassName("checkboxes");
            if (!expanded[i]) {
                checkboxes[i].style.display = "block";
                expanded[i] = true;
            } else {
                checkboxes[i].style.display = "none";
                expanded[i] = false;
            }
        }

    </script>
</head>
<body>
<script src="<?php echo base_url('js/date_picker.js')?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

<div class="page-wrapper">
    <div class="left-wrapper">
        <?php echo user_menu('dashboard');?>
    </div>
    <nav class="top-wrapper">
        <div class="sidebar-top">
            <button class="humburger pull-left">
                <i class="fa fa-bars fa-2x center-block"></i>
            </button>
            <ul class="menu-top pull-right">
                <li>
                    <a href="#"><i class="fa fa-envelope-o fa-lg"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bell-o fa-lg"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" id="settings" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog fa-lg"></i></a>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="settings">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url($_SESSION['username'].'/logout');?>">logout</a>
                </li>
            </ul>
        </div>
    </nav>

<?php if(isset($booking))
{
    echo $booking;

} ?>
</div>
</body>
</html>