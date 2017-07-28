@extends('layouts.PlainHeaderFooter')
  @section('title')
  <title>Events | Member Platform | Startups Club</title> 
  @stop
  @section('header')
@include('layouts.header')
@stop
  @section('footer') 
@include('layouts.footer') 
@stop
   @section('content')
   <link href="<?php echo URL::asset('/bootstrap.3.3.6/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
   <link href="<?php echo URL::asset('/css/membership_page.css') ?>" rel="stylesheet" type="text/css">
  <body class="animated fadeIn">
<div class="row plan-card" style="margin-top: 112px;">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 animated fadeInUp padding-r-l data-delay-1">
                    <div class="white-box bg-basic">
                        <div class="basic-plan-head">
                            <h2 class="page-title">Premium Pioneer Member</h2>
                            <div class="waves">
                                <span class="wave-1"></span>
                                <span class="wave-2"></span>
                                <span class="wave-3"></span>
                                <span class="wave-4"></span>
                            </div>
                        </div>
                        <div class="basic-plan-body">
                            <p class="basic-price"><i class="fa fa-inr"></i> 25000/-</p>
                            <p class="text-center">Free Platinum Value Kit of DemoDay Finale.</p>
                            <p class="text-center">Access to Investors as Vip at Finale..</p>
                            <p class="text-center">PAN india access to market.</p>
                            <p class="text-center">Customised Growth services.</p>
                            <!-- <p class="text-center">Filtered Search of all members.</p>
                            <p class="text-center">Full platform access.</p>
                            <p class="text-center">Access to Pioneer Whatsapp group.</p> -->
                        </div>
                        <div class="basic-plan-footer">
                            
                            <a href="#" class="btn btn-basic btn-continue"><span>Continue</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 animated fadeInUp padding-r-l data-delay-2">
                    <div class="white-box bg-pro">
                        <div class="pro-plan-head">
                            <h2 class="page-title">Pioneer Member</h2>
                            <div class="waves">
                                <span class="wave-1"></span>
                                <span class="wave-2"></span>
                                <span class="wave-3"></span>
                                <span class="wave-4"></span>
                            </div>
                        </div>
                        <div class="pro-plan-body">
                            <p class="pro-price"><i class="fa fa-inr"></i> 4000/-</p>
                            <p class="text-center">Mentoring on request.</p>
                            <p class="text-center">Networking.</p>
                            <p class="text-center">Investors.</p>
                            <p class="text-center">Discount Packages for offerings.</p>
                            <!-- <p class="text-center">Filtered Search of all members.</p>
                            <p class="text-center">Full platform access.</p>
                            <p class="text-center">Access to Pioneer Whatsapp group.</p>
                            <p class="text-center">Access to Exclusive Pioneer Meets.</p> -->
                        </div>
                        <div class="pro-plan-footer">
                             <a href="#" class="btn btn-pro btn-continue"><span>Continue</span></a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 animated fadeInUp padding-r-l data-delay-3">
                    <div class="white-box bg-platinum">
                        <div class="platnium-plan-head">
                            <h2 class="page-title">Young Pioneer</h2>
                            <div class="waves">
                                <span class="wave-1"></span>
                                <span class="wave-2"></span>
                                <span class="wave-3"></span>
                                <span class="wave-4"></span>
                            </div>
                        </div>
                        <div class="platnium-plan-body">
                            <p class="platnium-price"><i class="fa fa-inr"></i> Free</p>
                            <p class="text-center">Sessions.</p>
                            <p class="text-center">Weekly Meets.</p>
                            <p class="text-center">Mega Events.</p>
                            <p class="text-center">Activities.</p>
                            <!-- <p class="text-center">Filtered Search of all members.</p>
                            <p class="text-center">Full platform access.</p> -->

                        </div>
                        <div class="platnium-plan-footer">
                              <a href="#" class="btn btn-platinum btn-continue"><span>Continue</span></a>
                            <!-- <div id="ck-button" class="platinum-btn">
                               <label>
                                  <input type="checkbox" class="planchk" name="planname" id="Check3" value="3" onclick="selectOnlyThis(this.id)"><span>Continue</span>
                               </label>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 animated fadeInUp padding-r-l data-delay-4">
                    <div class="white-box bg-platinum">
                        <div class="members-plan-head">
                            <h2 class="page-title">Member</h2>
                            <div class="waves">
                                <span class="wave-1"></span>
                                <span class="wave-2"></span>
                                <span class="wave-3"></span>
                                <span class="wave-4"></span>
                            </div>
                        </div>
                        <div class="platnium-plan-body">
                            <p class="platnium-price"><i class="fa fa-inr"></i> Free</p>
                            <p class="text-center">Add to whatsapp group.</p>
                            <p class="text-center">Get notification.</p>
                            <p class="text-center">Access to Events.</p>
                            <p class="text-center">Activities.</p>
                            <!-- <p class="text-center">Filtered Search of all members.</p>
                            <p class="text-center">Full platform access.</p> -->

                        </div>
                        <div class="members-plan-footer">
                             <a href="#" class="btn btn-platinum btn-continue"><span>Continue</span></a>
                            <!-- <div id="ck-button" class="members-btn">
                               <label>
                                  <input type="checkbox" class="planchk" name="planname" id="Check3" value="3" onclick="selectOnlyThis(this.id)"><span>Continue</span>
                               </label>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            </body>