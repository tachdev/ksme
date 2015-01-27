 <!--logo and iconic logo start-->
 <div class="left-side sticky-left-side">
        <div class="logo">
            <a class="toggle-btn hidden-lg hidden-md" style="color:green"><i class="fa fa-bars"></i></a>
            <a href="<?php echo url('/'); ?>"><img src="assets/images/logo.png" alt=""></a>
        </div>

        <!--<div class="logo-icon text-center">
            <a href="index.html"><img src="assets/images/logo_icon.png" alt=""></a>
        </div>-->
        <!--logo and iconic logo end-->
        <div class="left-side-inner mobile-left">

            <!-- visible to small devices only -->
            <div class="col-lg-12 no-padding">
                    <div class="panel" style="box-shadow:none;">
                        <div class="panel-header" style="overflow:hidden">
                            <ul class="user-states font-green small-tab-icon">
                                <li>
                                    <a href="<?php echo url('/'); ?>"><span class="home-icon"></span></a>
                                </li>
                                <li>
                                   <a href="<?php echo url('/'); ?>"><span class="people-icon"><i style="background:red;color:#fff;font-style:normal;font-size:12px;padding:2px 6px;border-radius:10px;">50</i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            <div class="media usr-info">
                                <a href="<?php echo url('profile'); ?>" class="pull-left">
                                    <img class="thumb" src="assets/images/photos/user2.png" alt="">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="<?php echo url('profile'); ?>">Mila Watson</a></h4>
                                    <span class="money-icon">:50 Coins</span>
                                    <span style="margin-bottom:3px">Login: <strong>18 times</strong></span>
                                    <span style="margin-bottom:3px">Last Login: <strong>18/10/2014</strong></span>

                                </div>
                            </div>
                        </div>
                        
                    </div>
            </div>


            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="border-bottom"><a href="<?php echo url('profile_user'); ?>"><span class="profile-icon">My Profile</span></a></li>
                <li class="menu-list border-bottom"><a href=""><span class="business-icon">My Group</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="<?php echo url('group'); ?>"> Group 1 </a></li>
                        <li><a href="<?php echo url('group'); ?>"> Group 2</a></li>
                        <li><a href="<?php echo url('group'); ?>"> Group 3</a></li>
                    </ul>
                </li>
                <li class="border-bottom"><a href="<?php echo url('group_region'); ?>"><span class="network-icon">Ksme Network</span></a></li>
                <li class="border-bottom"><a href="<?php echo url('directory'); ?>"><span class="club-icon">Ksme Club</span></a></li>
                <li class="border-bottom"><a href="<?php echo url('group_list'); ?>"><span class="hand-icon">Business</span></a></li>
                <li class="border-bottom"><a href="<?php echo url('event_list'); ?>"><span class="calendar-icon">Event</span></a></li>
                <li class="border-bottom"><a href="<?php echo url('contact'); ?>"><span class="contact-icon">Contact</span></a></li>


            </ul>
            <!--sidebar nav end-->

        </div>

</div>