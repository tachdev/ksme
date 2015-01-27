<div class="panel">
<header class="panel-heading custom-tab" style="padding:0;">
    <ul class="nav nav-tabs">
        <li class="active rank-icon" >
            <a href="#rank" data-toggle="tab" style="border-right:1px solid #ccc;"><span class="rank-icon">Ranking</span></a>
        </li>
        <li>
            <a href="#hottag" data-toggle="tab" style="border-right:1px solid #ccc;"><span class="hash-icon">Tag Hit</span></a>
        </li>
        <li class="">
            <a href="#Review" data-toggle="tab" style="border-right:1px solid #ccc;"><span class="comment-icon">Recent Review</span></a>
        </li>
    </ul>
</header>
<div class="panel-body bg-rank">
    <div class="tab-content">
        <div class="tab-pane active" id="rank">
            <ul class="goal-progress rank">
                <?php for ($i=1; $i < 5 ; $i++) { ?>

                    <li class="mg-t-md mg-b-lg">
                        <div class="prog-avatar mg-b-lg">
                            <img src="assets/images/photos/user1.png" alt="">
                        </div>
                        <div class="details mg-l-md" style="font-size:12px;">
                            <div class="pull-right">Rank <?php echo $i ?></div>
                            <div class="title mg-l-md" style="margin-bottom:0;">
                                <a href="#"><strong>John Doe</strong></a>
                                <div class="progress progress-xs mg-t-md">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $i/0.02 ?>" aria-valuemin="0" aria-valuemax="100" style="width: 91%">
                                        <span class=""><?php echo $i*10 ?> Score</span>
                                    </div>
                                </div>
                            </div>                        
                            
                        </div>
                        
                    </li>

                <?php } ?>
               

            </ul>
        </div>
        <div class="tab-pane" id="hottag">

            <?php for($i=1; $i <= 5; $i++) { ?>
                <a href="#" class="btn btn-danger btn-sm mg-r-sm mg-b-sm" type="button" ># Hot Tag <?php echo $i; ?></a>
            <?php } ?>
            
        </div>
        <div class="tab-pane" id="Review">                    
            <div class="media">
                <div class="avatar pull-left mg-r-sm"><img src="assets/images/photos/user1.png" class="avatar-sm avatar-circle" alt=""></div>
                <div class="media-body">
                    <h5 class="media-heading"><a href="#"><strong>Myname</strong></a></h5>
                    <small class="font-small"><i class="fa fa-clock-o"></i>  20/11/2014</small>
                    <p class="font-normal">
                        Donec id elit non mi porta gravida at eget metus amet int
                    </p>
                </div>
            </div>
            <div class="media">
                <div class="avatar pull-left mg-r-sm"><img src="assets/images/photos/user1.png" class="avatar-sm avatar-circle" alt=""></div>
                <div class="media-body">
                    <h5 class="media-heading"><a href="#"><strong>Myname</strong></a></h5>
                    <small class="font-small"><i class="fa fa-clock-o"></i>  20/11/2014</small>
                    <p class="font-normal">
                        Donec id elit non mi porta gravida at eget metus amet int
                    </p>
                </div>
            </div>
            <div class="media">
                <div class="avatar pull-left mg-r-sm"><img src="assets/images/photos/user1.png" class="avatar-sm avatar-circle" alt=""></div>
                <div class="media-body">
                    <h5 class="media-heading"><a href="#"><strong>Myname</strong></a></h5>
                    <small class="font-small"><i class="fa fa-clock-o"></i>  20/11/2014</small>
                    <p class="font-normal">
                        Donec id elit non mi porta gravida at eget metus amet int
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>