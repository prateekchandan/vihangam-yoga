@extends('template')

@section('body')
<section id="blog" class="container">
       

        <div class="blog">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="blog-item">
                        <img class="img-responsive img-blog" src="{{URL::asset('assets/images/slider/dandankvan-ashram.png')}}" width="100%" alt="" />
                            <div class="row">  
                                <div class="col-xs-12 col-sm-12 blog-content">
                                    <h2><a href="#">Dandakvan Ashram</a></h2>
                                    <p>This Ashram is the nearest and the most approachable from Mumbai. Situated near the dense forests of Gujarat at the bank of river Choti Cauvery, it is quite close to this beautiful Hill station - Saputara. </p>
                                    <div class="post-tags">
                                        <strong>Address :</strong><br>
                                       	P.O Bansada, Vasya Talab,<br>
										District Balsad, Gujarat, India<br>
										Ph # +91-2630-222530<br>
                                    </div>

                                </div>
                            </div>
                        </div><!--/.blog-item-->
                        
                        <div class="media reply_section">
                            <div class="media-body post_reply_content">
                                <h3>How to Reach</h3>
								<p>Traveller has to reach Surat Railway Station (Gujarat) through train. From Surat a person can take bus which will go to Vansda. There are many Buses available from Surat Bus station. Vansda town is 115 km far from Surat.</p>
								<p>If a person is coming from Northern part of India, Mumbai is main Railway station. They can board train for Surat (Gujarat). They should get down at Bilimora Junction (Gujarat), and get bus from Bilimora Bus Station to Vansda. Vansda town is 45 km far from Bilimora.</p>
								<p>If a traveler has own vehicle, and coming from Mumbai, they can use National Highway NH # 8 going to Ahmadabad. They should reach Chikhali town in Gujarat after Valsad City. From Chikhali, they can use internal road State Highway ST-14 to reach Vansda.</p>
								<p>If a traveler is coming from Ahmadabad by private vehicle they should use NH-8 going to Mumbai. After they pass Surat and Navsari they will reach Chikhali. From there they can use internal State Highway ST-4 to reach Vansda town.</p>
								<p>Dandakvan Ashram is 3 km far from Vansda town. From Vansda Bus station a person can take auto to reach Maharshi Sadafaldeo Dandakvan Ashram.</p>
                            </div>
                        </div> 
                        
                        <div class="media reply_section">
                            <div class="media-body post_reply_content">
                            	<div clas="row">
	                            	<div class="col-md-8">
		                                <h2>Mahamandir</h2>
		                                <p>3-Floored sturcture with underground Cave for Meditation.</p>
	                                </div>
	                                <div class="col-md-4">
		                                <div class="recent-work-wrap">
					                        <img class="img-responsive" src="{{URL::asset('assets/images/ashram/vrittikut/mahamandir.png')}}" alt="">
					                        <div class="overlay">
					                            <div class="recent-work-inner">
					                                <h3><a href="#">Mahamandir</a> </h3>
					                                <a class="preview" href="{{URL::asset('assets/images/ashram/vrittikut/mahamandir.png')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
					                            </div> 
					                        </div>
					                    </div>
	                                </div>
	                            </div>
                            </div>
                        </div> 

                        <div class="media reply_section">
                            <div class="media-body post_reply_content">
                            	<div clas="row">
	                            	<div class="col-md-8">
		                                <h2>Guest House</h2>
		                                <p>Biggest guest house with 7 floors is under construction at this ashram.</p>
	                                </div>
	                                <div class="col-md-4">
		                                <div class="recent-work-wrap">
					                        <img class="img-responsive" src="{{URL::asset('assets/images/ashram/vrittikut/mahamandir.png')}}" alt="">
					                        <div class="overlay">
					                            <div class="recent-work-inner">
					                                <h3><a href="#">Guest House</a> </h3>
					                                <a class="preview" href="{{URL::asset('assets/images/ashram/vrittikut/mahamandir.png')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
					                            </div> 
					                        </div>
					                    </div>
	                                </div>
	                            </div>
                            </div>
                        </div> 

                        <div class="media reply_section">
                            <div class="media-body post_reply_content">
                            	<div clas="row">
	                            	<div class="col-md-8">
		                                <h2>Main Gate</h2>
		                                <p>Main Gate of Ashram under construction</p>
	                                </div>
	                                <div class="col-md-4">
		                                <div class="recent-work-wrap">
					                        <img class="img-responsive" src="{{URL::asset('assets/images/ashram/vrittikut/mahamandir.png')}}" alt="">
					                        <div class="overlay">
					                            <div class="recent-work-inner">
					                                <h3><a href="#">Main Gate</a> </h3>
					                                <a class="preview" href="{{URL::asset('assets/images/ashram/vrittikut/mahamandir.png')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
					                            </div> 
					                        </div>
					                    </div>
	                                </div>
	                            </div>
                            </div>
                        </div> 

                </div><!--/.col-md-8-->

                    

            </div><!--/.row-->

         </div><!--/.blog-->

    </section><!--/#blog-->
@endsection