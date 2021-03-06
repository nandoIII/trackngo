<!doctype html>
<html>
    <head>
        <title><?php echo ucfirst($class) ?> - Track'n Go</title>

        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/css/bootstrap.css"> 
        <link rel="stylesheet" href="<?php echo base_url() ?>public/third-party/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>public/third-party/css/font-awesome/css/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/third-party/css/jquery.datetimepicker.css"/>
        <!-- Metro vibes style -->
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/css/cusel.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/css/animate.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/css/chosen.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/css/jquery-ui-1.8.20.custom.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/css/jplayer.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/css/jslider.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/css/prettyPhoto.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/css/video-js.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/css/style.css">            
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/style.css">

        <script src="<?php echo base_url() ?>public/third-party/js/jquery.js"></script>
        <script src="<?php echo base_url() ?>public/third-party/js/bootstrap.js"></script>
        <script src="<?php echo base_url() ?>public/third-party/js/jquery.datetimepicker.js"></script>
        <script src="<?php echo base_url() ?>public/third-party/js/jquery.ajaxfileupload.js"></script>
        <script src="<?php echo base_url() ?>public/third-party/js/bootbox.min.js"></script>
        <script src="<?php echo base_url() ?>public/third-party/js/jquery.form.js"></script>
        <!--<script type = "text/javascript" src = "//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.js"></script>-->
        <script src="<?php echo base_url() ?>public/js/<?php echo $class ?>/result.js"></script>
        <script src="<?php echo base_url() ?>public/js/<?php echo $class ?>/event.js"></script>
        <script src="<?php echo base_url() ?>public/js/<?php echo $class ?>/template.js"></script>
        <script src="<?php echo base_url() ?>public/js/<?php echo $class ?>.js"></script>

        <!-- HEADER STYLE -->

        <script language="JavaScript1.2" type="text/javascript">

            function MM_findObj(n, d) { //v4.01
                var p, i, x;
                if (!d)
                    d = document;
                if ((p = n.indexOf("?")) > 0 && parent.frames.length) {
                    d = parent.frames[n.substring(p + 1)].document;
                    n = n.substring(0, p);
                }
                if (!(x = d[n]) && d.all)
                    x = d.all[n];
                for (i = 0; !x && i < d.forms.length; i++)
                    x = d.forms[i][n];
                for (i = 0; !x && d.layers && i < d.layers.length; i++)
                    x = MM_findObj(n, d.layers[i].document);
                if (!x && d.getElementById)
                    x = d.getElementById(n);
                return x;
            }
            function MM_swapImage() { //v3.0
                var i, j = 0, x, a = MM_swapImage.arguments;
                document.MM_sr = new Array;
                for (i = 0; i < (a.length - 2); i += 3)
                    if ((x = MM_findObj(a[i])) != null) {
                        document.MM_sr[j++] = x;
                        if (!x.oSrc)
                            x.oSrc = x.src;
                        x.src = a[i + 2];
                    }
            }
            function MM_swapImgRestore() { //v3.0
                var i, x, a = document.MM_sr;
                for (i = 0; a && i < a.length && (x = a[i]) && x.oSrc; i++)
                    x.src = x.oSrc;
            }

            function MM_preloadImages() { //v3.0
                var d = document;
                if (d.images) {
                    if (!d.MM_p)
                        d.MM_p = new Array();
                    var i, j = d.MM_p.length, a = MM_preloadImages.arguments;
                    for (i = 0; i < a.length; i++)
                        if (a[i].indexOf("#") != 0) {
                            d.MM_p[j] = new Image;
                            d.MM_p[j++].src = a[i];
                        }
                }
            }

        </script>




        <script>
            $(function () {
                // Init the class name Application
                var <?php echo $class ?> = new <?php echo ucfirst($class) ?>();
            });
        </script>        

    </head>
    <body style="background: #999" onload="MM_preloadImages('<?php echo base_url() ?>/public/img/images/loads-bt_s2.png', '<?php echo base_url() ?>/public/img/images/drivers-bt_s2.png', '<?php echo base_url() ?>/public/img/images/carriers-bt_s2.png', '<?php echo base_url() ?>/public/img/images/customers-bt_s2.png');">
        <div id="container7">
            <div id="header7">
                <div id="logo7"><a href="<?php echo site_url('load'); ?>"><img src="<?php echo base_url() ?>/public/img/images/logo.png" width="210" height="70" alt="Smith Cargo - Track N Go" /></a></div>
                <?php if ($user) { ?>
                    <div id="login7"><span class="welcome">Welcome, <?php echo $user ?></span><br />
                        <a href="<?php echo site_url('dashboard/logout'); ?>">[Log Out]</a></div>
                <?php } ?>
            </div>






            <div id="menu7" style="background-image: url(<?php echo base_url() ?>/public/img/images/menu-bg.png);">
                <table style="display: inline-table;" border="0" cellpadding="0" cellspacing="0" width="1000">
                    <!-- fwtable fwsrc="menu.fw.png" fwpage="Page 1" fwbase="menu2.png" fwstyle="Dreamweaver" fwdocid = "1567127844" fwnested="0" -->

                    <tr>
                        <td><img name="menu2_r1_c1" src="<?php echo base_url() ?>/public/img/images/menu2_r1_c1.png" width="26" height="50" id="menu2_r1_c1" alt="" /></td>
                        <td><a href="<?php echo site_url('load'); ?>" onmouseout="MM_swapImgRestore();" onmouseover="MM_swapImage('loadsbt', '', '<?php echo base_url() ?>/public/img/images/loads-bt_s2.png', 1);"><img name="loadsbt" src="<?php echo base_url() ?>/public/img/images/loads-bt.png" width="120" height="50" id="loadsbt" alt="" /></a></td>
                        <?php
                        if (in_array("driver/index", $roles)) {
                            ?>
                            <td><img name="menu2_r1_c3" src="<?php echo base_url() ?>/public/img/images/menu2_r1_c3.png" width="84" height="50" id="menu2_r1_c3" alt="" /></td>
                            <td><a href="<?php echo site_url('driver'); ?>" onmouseout="MM_swapImgRestore();" onmouseover="MM_swapImage('driversbt', '', '<?php echo base_url() ?>/public/img/images/drivers-bt_s2.png', 1);"><img name="driversbt" src="<?php echo base_url() ?>/public/img/images/drivers-bt.png" width="120" height="50" id="driversbt" alt="" /></a></td>

                        <?php } ?>

                        <?php
                        if (in_array("carrier/index", $roles)) {
                            ?>
                            <td><img name="menu2_r1_c5" src="<?php echo base_url() ?>/public/img/images/menu2_r1_c5.png" width="90" height="50" id="menu2_r1_c5" alt="" /></td>
                            <td><a href="<?php echo site_url('carrier'); ?>" onmouseout="MM_swapImgRestore();" onmouseover="MM_swapImage('carriersbt', '', '<?php echo base_url() ?>/public/img/images/carriers-bt_s2.png', 1);"><img name="carriersbt" src="<?php echo base_url() ?>/public/img/images/carriers-bt.png" width="120" height="50" id="carriersbt" alt="" /></a></td>

                        <?php } ?>

                        <?php
                        if (in_array("customer/index", $roles)) {
                            ?>
                            <td><img name="menu2_r1_c7" src="<?php echo base_url() ?>/public/img/images/menu2_r1_c7.png" width="90" height="50" id="menu2_r1_c7" alt="" /></td>
                            <td><a href="<?php echo site_url('customer'); ?>" onmouseout="MM_swapImgRestore();" onmouseover="MM_swapImage('customersbt', '', '<?php echo base_url() ?>/public/img/images/customers-bt_s2.png', 1);"><img name="customersbt" src="<?php echo base_url() ?>/public/img/images/customers-bt.png" width="120" height="50" id="customersbt" alt="" /></a></td>

                        <?php } ?>

                        <?php
                        if (in_array("user/index", $roles)) {
                            ?>
                            <td><img name="menu2_r1_c9" src="<?php echo base_url() ?>/public/img/images/menu2_r1_c9.png" width="83" height="50" id="menu2_r1_c9" alt="" /></td>
                            <td><a href="<?php echo site_url('user'); ?>" onmouseout="MM_swapImgRestore();" onmouseover="MM_swapImage('usersbt', '', '<?php echo base_url() ?>/public/img/images/users-bt_s2.png', 1);"><img name="usersbt" src="<?php echo base_url() ?>/public/img/images/users-bt.png" width="120" height="50" id="usersbt" alt="" /></a></td>
                            <td><img name="menu2_r1_c11" src="<?php echo base_url() ?>/public/img/images/menu2_r1_c11.png" width="27" height="50" id="menu2_r1_c11" alt="" /></td>
                        <?php } ?>                           

                    </tr>
                </table>
            </div>
            <div id="content7">          
                <!--Start wrapper-->
                <div class="container" style="padding: 0px 20px; width: auto">

                    <div id="error" class="alert alert-error hide"></div>
                    <div id="success" class="alert alert-success hide"></div>