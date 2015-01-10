@extends('layout')

@section('content')
<!--center side-->
<div class="col-lg-6 no-padding" >
        
            <div class="panel">
                <header class="panel-heading bg-green">
                    Faq
                </header>
                <?php for ($i=0; $i < 5 ; $i++) {  ?>
                    <div class="panel-body" style="padding:5px 15px">
                        <h5 class="indent-first"><strong> Q: Lorem Ipsum is simply dummy text of the printing and typesetting industry ? </strong></h5>
                        <p class="indent-first">
                            <strong>A:</strong> It is a long established fact that a reader will be distracted by the readable content of a page 
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters
                        </p>
                    </div>
                <?php } ?>
            </div>
 
</div>
<!--right side-->
<div class="col-lg-6 contact right-side">
        
            <section class="panel bg-greylight" style="margin-bottom:0;">
                    <header class="panel-heading bg-green">
                        You Feedback
                    </header>
                    <div class="panel-body" style="padding-right:10%;">
                        <form class="form-horizontal contact-form" role="form">
                            <div class="form-group">
                                <label class="col-lg-3 col-sm-3 control-label">Name</label>
                                <div class="col-lg-9">
                                    <p style="margin-top:5px;">John Doe</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 col-sm-3 control-label">Subject</label>
                                <div class="col-lg-9">
                                    <select class="form-control">
                                        <option>Subject 1</option>
                                        <option>Subject 2</option>
                                        <option>Subject 3</option>
                                        <option>Subject 4</option>
                                        <option>Subject 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 col-sm-3 control-label">Contact</label>
                                <div class="col-lg-9">
                                        <input type="text" class="form-control" placeholder="Insert Contact Title">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 col-sm-3 control-label">Description</label>
                                <div class="col-lg-9">
                                        <textarea rows="6" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 col-sm-3 control-label"></label>
                                <div class="col-lg-9 send-message-btn">
                                        <button class="btn btn-danger" type="button">Send Message</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
            </section>
            <section class="panel bg-greylight" style="height:280px;">
                    <header class="panel-heading bg-green">
                        Contact Us
                    </header>
                    <div class="panel-body">
                        <p>Contact Administrator</p>
                        <p>Twelve Begin Co,ltd</p>
                        <p>Tel 02 615 1100</p>
                        <p>Email admin@ksmeclub.com</p>
                        <div class="activity-desk">
                        <p class="text-muted " style="font-size:20px;">
                            <a href="#"><i class="fa fa-envelope"></i></a>
                            <a href="#"><i class="fa fa-facebook-square"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest-square"></i></a>
                        </p>

                        </div>      
                     </div>
            </section>
        
</div>
@stop



