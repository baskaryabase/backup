@extends('layouts.HeaderFooter')
      @section('title')
    <title>Events | Member Platform | Startups Club</title> 
   @stop
  @section('header')
@include('layouts.header')
@stop
   @section('content')

<link rel="stylesheet" type="text/css" href="<?php echo URL::asset('/css/our_team.css') ?>">



<!-- Our team Section -->
<section id="team" class="team content-section">
  <div class="container">
  <div class="col-md-12">
        <center><h2><span>Founders</span></h2></center>
      </div><!-- /.col-md-12 -->

    <div class="row text-center">
      
      <div class="cont">
        <div class="row">

          <div class="col-md-offset-2 col-sm-offset-2 col-md-4 col-sm-4">
            <div class="team-member">
              <figure>
                <img src="<?php echo URL::asset('/image/our_team/salma.jpg') ?>">
                <figcaption>
                  <p>She is the heart of Startups Club and almost single handedly built the community during the early days. She specialise in the area of Marketing and Sales. If you want to know how to make the impossible happen, meet her!</p>
                  <ul>
                    <li><a href=""><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href=""><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href=""><i class="fa fa-linkedin fa-2x"></i></a></li>
                  </ul>
                </figcaption>
              </figure>
              <h4>Salma Moosa</h4>
              <p>Founder</p>
            </div><!-- /.team-member-->
          </div><!-- /.col-md-4 -->

          <div class="col-md-4 col-sm-4">
            <div class="team-member">
              <figure>
                <img src="<?php echo URL::asset('/image/our_team/vivek.jpg') ?>">
                <figcaption>
                  <p>Vivek is a thinker, he knows a little about a lot of things. He is keenly interested in technology and believes that every startup should use technology as a differentiator. His strengths are in the area of finance and strategy.</p>
                  <ul>
                    <li><a href=""><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href=""><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href=""><i class="fa fa-linkedin fa-2x"></i></a></li>
                  </ul>
                </figcaption>
              </figure>
              <h4>Vivek Srinivasan</h4>
              <p>Co-Founder</p>
            </div><!-- /.team-member-->
          </div><!-- /.col-md-4 -->


        </div><!-- /.row -->
      </div><!-- /.container -->

    </div><!-- /.row -->

<div class="col-md-12">
        <center><h2><span>Chief Mentor</span></h2></center>
      </div><!-- /.col-md-12 -->

<div class="row text-center">
<div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
            <div class="team-member">
              <figure>
                <img src="<?php echo URL::asset('/image/our_team/Mahesh-Bhalla.jpg') ?>" alt="" class="img-responsive">
                <figcaption>
                  <p>He comes with a vast wealth of experience of having steered various companies in various capacities. He has played a key role in terms of helping shape the strategy for Startups Club and has been a huge pillar of strength for the Club and its team. His nudges have helped define the direction that we are taking.</p>
                  <ul>
                    <li><a href=""><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href=""><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href=""><i class="fa fa-linkedin fa-2x"></i></a></li>
                  </ul>
                </figcaption>
              </figure>
              <h4>Mahesh Bhalla</h4>
              <p></p>
            </div><!-- /.team-member-->
          </div> <!-- /.col-md-4 -->
</div>


<div class="col-md-12">
        <center><h2><span>Board Advisor</span></h2></center>
      </div><!-- /.col-md-12 -->

<div class="row text-center">
<div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
            <div class="team-member">
              <figure>
                <img src="<?php echo URL::asset('/image/our_team/michael.jpg') ?>" alt="" class="img-responsive">
                <figcaption style="padding: 3px;">
                  <p style="font-size: 12px;">Michael Marks has lived in Asia since 1997, and heads the Asia-Pacific practice of Innoventure Partners. He has been involved in several billion dollars of transactions in the Asia-Pacific region, including as a principal in his own businesses, as well as investor or advisor. Over the past sixteen years he has worked with several leading international and Asian companies and institutions on their investments and business development in Asia, particularly in China, as well as their strategic development, M&A, distribution, and capital markets programs in the international investment communities. Marks currently lives in Shanghai, China and speaks fluent Mandarin.</p>
                  <ul>
                    <li><a href=""><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href=""><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href=""><i class="fa fa-linkedin fa-2x"></i></a></li>
                  </ul>
                </figcaption>
              </figure>
              <h4>Michael Marks</h4>
              <p></p>
            </div><!-- /.team-member-->
          </div> <!-- /.col-md-4 -->
</div>




  </div><!-- /.container -->
</section><!-- /.our-team -->