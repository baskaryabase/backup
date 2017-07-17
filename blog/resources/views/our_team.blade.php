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

<link rel="stylesheet" type="text/css" href="<?php echo URL::asset('/css/our_team.css') ?>">



<!-- Our team Section -->
<div>
<section id="team" class="team content-section">
  <div class="container">
  <div class="col-md-12">
        <center><h2><span>Founders</span></h2></center>
      </div><!-- /.col-md-12 -->

    <div class="row text-center">
      
      <div class="cont">
        <div class="row">

          <div align="center" class="col-md-offset-2 col-md-4">
            <div class="team-member">
              <figure>
                <img class="height" src="<?php echo URL::asset('/image/our_team/salma.jpg') ?>">
                <figcaption>
                  <p>She is the heart of Startups Club and almost single handedly built the community during the early days. She specialise in the area of Marketing and Sales. If you want to know how to make the impossible happen, meet her!</p>
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
                  </ul>
                </figcaption>
              </figure>
              <h4>Salma Moosa</h4>
              <p>Founder</p>
            </div><!-- /.team-member-->
          </div><!-- /.col-md-4 -->

          <div align="center" class="col-md-4">
            <div class="team-member">
              <figure>
                <img class="height" src="<?php echo URL::asset('/image/our_team/vivek.jpg') ?>">
                <figcaption>
                  <p>Vivek is a thinker, he knows a little about a lot of things. He is keenly interested in technology and believes that every startup should use technology as a differentiator. His strengths are in the area of finance and strategy.</p>
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
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
<div align="center" class="col-md-4 col-sm-4 col-sm-offset-4">
            <div class="team-member">
              <figure>
                <img class="height" src="<?php echo URL::asset('/image/our_team/Mahesh-Bhalla.jpg') ?>" alt="" class="img-responsive">
                <figcaption>
                  <p>He comes with a vast wealth of experience of having steered various companies in various capacities. He has played a key role in terms of helping shape the strategy for Startups Club and has been a huge pillar of strength for the Club and its team. His nudges have helped define the direction that we are taking.</p>
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
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

<div  class="row text-center">
<div align="center" class="col-md-4 col-sm-4 col-sm-offset-4">
            <div class="team-member">
              <figure>
                <img class="height" src="<?php echo URL::asset('/image/our_team/michael.jpg') ?>" alt="" class="img-responsive">
                <figcaption style="padding: 5px">
                  <p style="font-size: 12px;">Michael Marks has lived in Asia since 1997, and heads the Asia-Pacific practice of Innoventure Partners. He has been involved in several billion dollars of transactions in the Asia-Pacific region, including as a principal in his own businesses, as well as investor or advisor. Over the past sixteen years he has worked with several leading international and Asian companies and institutions on their investments and business development in Asia, particularly in China, as well as their strategic development, M&A, distribution, and capital markets programs in the international investment communities. Marks currently lives in Shanghai, China and speaks fluent Mandarin.</p>
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
                  </ul>
                </figcaption>
              </figure>
              <h4>Michael Marks</h4>
              <p></p>
            </div><!-- /.team-member-->
          </div> <!-- /.col-md-4 -->
</div>



<div class="col-md-12">
        <center><h2><span>Team</span></h2></center>
      </div><!-- /.col-md-12 -->

<div class="row text-center">
<div align="center" class="col-md-4">
            <div class="team-member">
              <figure>
                <img class="height" src="<?php echo URL::asset('/image/our_team/faraz.jpg') ?>" alt="" class="img-responsive">
                <figcaption>
                  <p class="font">Faraz is the Head of Business. He gets stuff done and makes sure that all of the execution goes as per plan. He makes sure that the operations flow smoothly. He has been a pillar of strength for driving the Young Pioneers initiative as well.</p>
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
                  </ul>
                </figcaption>
              </figure>
              <h4>Mohammed Faraz</h4>
              <p>Business Head</p>
            </div><!-- /.team-member-->
          </div> <!-- /.col-md-4 -->
  
<div align="center" class="col-md-4">
            <div class="team-member">
              <figure>
                <img class="height" src="<?php echo URL::asset('/image/our_team/soumiya.jpg') ?>" alt="" class="img-responsive">
                <figcaption>
                  <p class="font">Soumya is the Head of Sales at Startups Club. She was the first person to join the team and has built a strong team under her today. She instills energy in the office. LIIT flows in her veins and she has exceptional capacity!</p>
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
                  </ul>
                </figcaption>
              </figure>
              <h4>Soumya Sthapak</h4>
              <p>Head of Sales</p>
            </div><!-- /.team-member-->
          </div> <!-- /.col-md-4 -->

<div align="center" class="col-md-4">
            <div class="team-member">
              <figure>
                <img class="height" src="<?php echo URL::asset('/image/our_team/sidh.jpeg') ?>" alt="" class="img-responsive">
                <figcaption>
                  <p class="font">Siddharth heads the Strategic Alliances and has been engaging with companies to provide them the reach that Startups Club can offer. He has been building connections for Startups Club. In the past he has been engaged in building his body!</p>
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
                  </ul>
                </figcaption>
              </figure>
              <h4>Siddharth Jena</h4>
              <p>Strategic</p>
            </div><!-- /.team-member-->
          </div> <!-- /.col-md-4 -->

</div>


<div class="row text-center">
<div align="center" class="col-md-4">
            <div class="team-member">
              <figure>
                <img class="height" src="<?php echo URL::asset('/image/our_team/mandy.jpeg') ?>" alt="" class="img-responsive">
                <figcaption>
                  <p class="font">Mandeep is the General Manager of Startups Club handles operations. She handles talent acquisition, accounts and administration within the company. She also finds time to stay on top of all of the team members and get feedback from them.</p>
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
                  </ul>
                </figcaption>
              </figure>
              <h4>Mandeep Kaur</h4>
              <p>General Manager</p>
            </div><!-- /.team-member-->
          </div> <!-- /.col-md-4 -->


<div align="center" class="col-md-4">
            <div class="team-member">
              <figure>
                <img class="height" src="<?php echo URL::asset('/image/our_team/prasad.jpg') ?>" alt="" class="img-responsive">
                <figcaption>
                  <p class="font">Prasad is our talented back end developer who pulls the weight to have all of the development done for Startups Club. He works under Khuzema to give our members the digital experience we wish to give. He stays quite silent, then suddenly delivers a killer one-liner.</p>
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
                  </ul>
                </figcaption>
              </figure>
              <h4>Prasad Thirunarayanan </h4>
              <p>Tech Head</p>
            </div><!-- /.team-member-->
          </div> <!-- /.col-md-4 -->

<div align="center" class="col-md-4">
            <div class="team-member">
              <figure>
                <img class="height" src="<?php echo URL::asset('/image/our_team/jothi.jpg') ?>" alt="" class="img-responsive">
                <figcaption>
                  <p class="font">Jyothi works as a part of the Operations teams and works along with Mandeep to ensure that all of the operations of the company are smoothly taken care of. She remains unusually silent but gets the job done!</p>
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
                  </ul>
                </figcaption>
              </figure>
              <h4>Jyothi Shetty</h4>
              <p></p>
            </div><!-- /.team-member-->
          </div> <!-- /.col-md-4 -->
</div>


<!-- row 3 starts here -->
<div class="row text-center row-eq-height">
	
  <div align="center" class="col-md-4">
            <div class="team-member">
              <figure>
                <img class="height" src="<?php echo URL::asset('/image/our_team/lakshmi.jpg') ?>" alt="" class="img-responsive">
                <figcaption>
                  <p class="font">She has a depth of experience in the area of digital marketing and SEO. She works under Siddharth in the Digital Marketing team and is responsible for the execution of projects. She is trying to perfect her Hindi.</p>
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
                  </ul>
                </figcaption>
              </figure>
              <h4>Lakshmi Tulasi</h4>
              <p></p>
            </div><!-- /.team-member-->
          </div> <!-- /.col-md-4 -->

          <div align="center" class="col-md-4">
            <div class="team-member">
              <figure>
                <img class="height" src="<?php echo URL::asset('/image/our_team/sreyanka.jpg') ?>" alt="" class="img-responsive">
                <figcaption>
                  <p class="font">Sreyanka is the person responsible for all of the co-ordination, support and analysis surrounding the Incuration program and the related investments. She also has a national integrity program of her own that she dedicatedly runs. Kashmir to Kanyakumari; All bases covered!</p>
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
                  </ul>
                </figcaption>
              </figure>
              <h4>Sreyanka Chowdhury</h4>
              <p></p>
            </div><!-- /.team-member-->
          </div> <!-- /.col-md-4 -->

          <div align="center" class="col-md-4">
            <div class="team-member">
              <figure>
                <img class="height" src="<?php echo URL::asset('/image/our_team/diksha.jpg') ?>" alt="" class="img-responsive">
                <figcaption>
                  <p class="font">Diksha is the newest addition to the Digital Marketing practice and she works on the Social Media Marketing projects along with Siddharth and Lakshmi. She like to run, we hope not from us!</p>
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
                  </ul>
                </figcaption>
              </figure>
              <h4>Diksha Agarwal</h4>
              <p></p>
            </div><!-- /.team-member-->
          </div> <!-- /.col-md-4 -->

</div>


<!-- row 3 starts here -->
<div class="row text-center row-eq-height">
	
  <div align="center" class="col-md-4">
            <div class="team-member">
              <figure>
                <img class="height" src="<?php echo URL::asset('/image/our_team/ishita.jpg') ?>" alt="" class="img-responsive">
                <figcaption>
                  <p class="font">Ishita works on designs for the digital marketing wing of Startups Club and works with Siddharth. Although she was brought in to work on designs alone she is versatile and works on several media. She keeps sipping on a bottle that looks like it might contain liquor, she claims its water.</p>
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
                  </ul>
                </figcaption>
              </figure>
              <h4>Ishita Parikh</h4>
              <p></p>
            </div><!-- /.team-member-->
          </div> <!-- /.col-md-4 -->

          <div align="center" class="col-md-4">
            <div class="team-member">
              <figure>
                <img class="height" src="<?php echo URL::asset('/image/our_team/arjun.jpg') ?>" alt="" class="img-responsive">
                <figcaption>
                  <p class="font">Nagarjun, or Arjun as we all call him heads the community engagement and alliance management of Startups Club. He is a critical piece to making certain that we are able to better engage our members and deliver value to them. He is a kick-boxer.</p>
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
                  </ul>
                </figcaption>
              </figure>
              <h4>Arjun Hedge</h4>
              <p></p>
            </div><!-- /.team-member-->
          </div> <!-- /.col-md-4 -->

          <div align="center" class="col-md-4">
            <div class="team-member">
              <figure>
                <img class="height" src="<?php echo URL::asset('/image/our_team/shireen.jpg') ?>" alt="" class="img-responsive">
                <figcaption>
                  <p class="font">Shireen is heading the PR department for Startups Club. She takes care of the content and other related activities necessary for making public relations possible for the company.</p>
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
                  </ul>
                </figcaption>
              </figure>
              <h4>Shireen Ghosal</h4>
              <p></p>
            </div><!-- /.team-member-->
          </div> <!-- /.col-md-4 -->

</div>


<!-- row 3 starts here -->
<div class="row text-center row-eq-height">
	
  <div align="center" class="col-md-4">
            <div class="team-member">
              <figure>
                <img class="height" src="<?php echo URL::asset('/image/our_team/akbar.jpg') ?>" alt="" class="img-responsive">
                <figcaption>
                  <p class="font">We just call him Akber. Akber heads the Operations of the Young Pioneers (née The Blueprints Club). He used to hardly speak a word when he joined us a couple of years back in VIT. Today, he is a confident leader who drives a team of 4 under him.</p>
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
                  </ul>
                </figcaption>
              </figure>
              <h4>Abdul Akber Shaikh</h4>
              <p></p>
            </div><!-- /.team-member-->
          </div> <!-- /.col-md-4 -->

          <div align="center" class="col-md-4">
            <div class="team-member">
              <figure>
                <img class="height" src="<?php echo URL::asset('/image/our_team/saadhiya.jpg') ?>" alt="" class="img-responsive">
                <figcaption>
                  <p class="font">Saadhiya heads the promotion for the Young Pioneers team and has a team that works with her at VIT. She drives people and gets whatever is given, done. A chemical engineer she gets her kicks out of making various chemical concoctions.</p>
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
                  </ul>
                </figcaption>
              </figure>
              <h4>Saadhiya Thabassum</h4>
              <p></p>
            </div><!-- /.team-member-->
          </div> <!-- /.col-md-4 -->

          <div align="center" class="col-md-4">
            <div class="team-member">
              <figure>
                <img class="height" src="<?php echo URL::asset('/image/our_team/saniya.jpg') ?>" alt="" class="img-responsive">
                <figcaption>
                  <p class="font"></p>
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
                  </ul>
                </figcaption>
              </figure>
              <h4>Saniya</h4>
              <p>Growth Officer</p>
            </div><!-- /.team-member-->
          </div> <!-- /.col-md-4 -->

</div>


<!-- row 3 starts here -->
<div class="row text-center row-eq-height">
	
  <div align="center" class="col-md-4">
            <div class="team-member">
              <figure>
                <img class="height" src="<?php echo URL::asset('/image/our_team/nisha.jpg') ?>" alt="" class="img-responsive">
                <figcaption>
                  <p class="font"></p>
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
                  </ul>
                </figcaption>
              </figure>
              <h4>Nisha</h4>
              <p>Growth Officer</p>
            </div><!-- /.team-member-->
          </div> <!-- /.col-md-4 -->

          <div align="center" class="col-md-4">
            <div class="team-member">
              <figure>
                <img class="height" src="<?php echo URL::asset('/image/our_team/suyash.jpg') ?>" alt="" class="img-responsive">
                <figcaption>
                  <p class="font"></p>
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
                  </ul>
                </figcaption>
              </figure>
              <h4>Suyash Nahata</h4>
              <p>Growth Officer</p>
            </div><!-- /.team-member-->
          </div> <!-- /.col-md-4 -->

          <div align="center" class="col-md-4">
            <div class="team-member">
              <figure>
                <img class="height" src="<?php echo URL::asset('/image/our_team/saurabh.jpg') ?>" alt="" class="img-responsive">
                <figcaption>
                  <p class="font">Jyothi works as a part of the Operations teams and works along with Mandeep to ensure that all of the operations of the company are smoothly taken care of. She remains unusually silent but gets the job done!</p>
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
                  </ul>
                </figcaption>
              </figure>
              <h4>Saurabh</h4>
              <p>Growth Officer</p>
            </div><!-- /.team-member-->
          </div> <!-- /.col-md-4 -->

</div>


<!-- row 3 starts here -->
<div class="row text-center row-eq-height">
  
  <div align="center" class="col-md-4">
            <div class="team-member">
              <figure>
                <img class="height" src="<?php echo URL::asset('/image/our_team/vipul.jpg') ?>" alt="" class="img-responsive">
                <figcaption>
                  <p class="font"></p>
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
                  </ul>
                </figcaption>
              </figure>
              <h4>Vipul</h4>
              <p>Public relations Officer</p>
            </div><!-- /.team-member-->
          </div> <!-- /.col-md-4 -->

          <div align="center" class="col-md-4">
            <div class="team-member">
              <figure>
                <img class="height" src="<?php echo URL::asset('/image/our_team/baskar.jpg') ?>" alt="" class="img-responsive">
                <figcaption>
                  <p class="font"></p>
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
                  </ul>
                </figcaption>
              </figure>
              <h4>Baskar</h4>
              <p>UI/UX Devoloper</p>
            </div><!-- /.team-member-->
          </div> <!-- /.col-md-4 -->

          <div align="center" class="col-md-4">
            <div class="team-member">
              <figure>
                <img class="height" src="<?php echo URL::asset('/image/our_team/sunita.jpg') ?>" alt="" class="img-responsive">
                <figcaption>
                  <p class="font">Jyothi works as a part of the Operations teams and works along with Mandeep to ensure that all of the operations of the company are smoothly taken care of. She remains unusually silent but gets the job done!</p>
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
                  </ul>
                </figcaption>
              </figure>
              <h4>Sunita Swain</h4>
              <p>UI/UX Developer</p>
            </div><!-- /.team-member-->
          </div> <!-- /.col-md-4 -->

</div>


<!-- row 3 starts here -->
<div class="row text-center row-eq-height">
  
  <div align="center" class="col-md-4">
            <div class="team-member">
              <figure>
                <img class="height" src="<?php echo URL::asset('/image/our_team/haniya.jpg') ?>" alt="" class="img-responsive">
                <figcaption>
                  <p class="font"></p>
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
                  </ul>
                </figcaption>
              </figure>
              <h4>Haniya</h4>
              <p></p>
            </div><!-- /.team-member-->
          </div> <!-- /.col-md-4 -->

          <div align="center" class="col-md-4">
            <div class="team-member">
              <figure>
                <img class="height" src="<?php echo URL::asset('/image/our_team/suyash.jpg') ?>" alt="" class="img-responsive">
                <figcaption>
                  <p class="font"></p>
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
                  </ul>
                </figcaption>
              </figure>
              <h4>Suyash</h4>
              <p>Growth Officer</p>
            </div><!-- /.team-member-->
          </div> <!-- /.col-md-4 -->

          <div align="center" class="col-md-4">
            <div class="team-member">
              <figure>
                <img class="height" src="<?php echo URL::asset('/image/our_team/saurabh.jpg') ?>" alt="" class="img-responsive">
                <figcaption>
                  <p class="font">Jyothi works as a part of the Operations teams and works along with Mandeep to ensure that all of the operations of the company are smoothly taken care of. She remains unusually silent but gets the job done!</p>
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
                  </ul>
                </figcaption>
              </figure>
              <h4>Diksha Agarwal</h4>
              <p></p>
            </div><!-- /.team-member-->
          </div> <!-- /.col-md-4 -->

</div>






  </div><!-- /.container -->
</section><!-- /.our-team -->
</div>