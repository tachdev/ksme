 <!--notification menu start -->
 <div class="header-section" >
        <div class="menu-left  no-padding" >
            <ul class="notification-menu no-padding">
                <li class="hidden-lg hidden-md"><a class="toggle-btn"><i class="fa fa-bars"></i></a></li>
                <li class="bell">
                    <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="badge">4</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-head pull-left left-drop notification">
                        <h5 class="title">Notifications</h5>
                        <ul class="dropdown-list normal-list">
                            <li class="new">
                                <a href="">
                                    <span class="thumb"><img src="assets/images/photos/user1.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">John Doe <span class="badge badge-success">new</span></span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="thumb"><img src="assets/images/photos/user2.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jonathan Smith</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="thumb"><img src="assets/images/photos/user3.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jane Doe</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="thumb"><img src="assets/images/photos/user4.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Mark Henry</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="thumb"><img src="assets/images/photos/user5.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jim Doe</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                </a>
                            </li>
                            <li class="new"><a href="">Read All Mails</a></li>
                        </ul>
                    </div>
                </li>


            </ul>
        </div>   
        <!--search start-->
        <form class="searchform hidden-xs hidden-sm hidden-md visible-lg" action="<?php echo url('search') ?>" method="post" >
            <div class="col-lg-6">
                <div class="iconic-input right col-lg-6 no-padding" style="margin-left:20%;">
                    <i class="fa fa-search" style="color:#666;top:8px;"></i>
                    <input type="text" class="form-control" placeholder="Search">                    
                </div>
                <div class="btn-group col-lg-3 no-padding" style="margin-top:7px;">
                    <button class="btn btn-default btn-xs a-search" type="button">Advance Search    <i class="fa fa-caret-down"></i></button>
                </div>

            </div>
        </form>
        <!--search end-->

        <!--notification menu start -->
        <div class="menu-right">
            <ul class="notification-menu">
                <li>
                    <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <img src="assets/images/photos/user-avatar.png" alt="" />John Doe
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                        <li><a href="#"><i class="fa fa-user"></i>  Profile</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i>  Settings</a></li>
                        <li><a href="#"><i class="fa fa-sign-out"></i> Log Out</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#myModal" class="btn btn-default info-number message-modal"  data-toggle="modal">
                        <img src="assets/images/icon/message_icon.png" alt="" >
                    </a>
                </li>
            </ul>
        </div>
        <!--notification menu end -->
</div>