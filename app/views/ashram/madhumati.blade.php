@extends('template')

@section('body')
<section id="blog" class="container">
       

        <div class="blog">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="blog-item">
                        <img class="img-responsive img-blog" src="{{URL::asset('assets/images/slider/Banner7.gif')}}" width="100%" alt="" />
                            <div class="row">  
                                <div class="col-xs-12 col-sm-12 blog-content">
                                    <h2><a href="#">Madhumati Ashram</a></h2>
                                    <p>This ashram is situated on the banks of river "Falgu" and is very close historical place 'Bodh Gaya'.</p>
                                    <div class="post-tags">
                                        <strong>Address :</strong><br>
                                        Janakpur, P.O. Buniyadganj,<br>
										Gaya, Bihar, India<br>
										Pin - 823003<br>
										Ph # +91-631-2450435<br>
                                    </div>

                                </div>
                            </div>
                        </div><!--/.blog-item-->
                        
                        <div class="media reply_section">
                            <div class="media-body post_reply_content">
                                <h3>How to Reach</h3>
                               	<p>Traveler has to reach GAYA through Train / Bus. Madhumati Ashram is situated in Janakpur in Gaya. The traveler can take direct Auto for the Ashram from Railway Station / Bus Stand</p>
                               	<p>
                               		If you come by private vehicle, follow the route given below:
                               		<ul>
                               			<li>Cross the Falgu river bridge</li>
                               			<li>Reach Mufassil Thaana. Turn left at Muffassil Thaan and go for half Km. Turn left at Ashram Board showing direction and follow Arrow afterwards</li>
                               		</ul>
                               	</p>
                            </div>
                        </div> 
                        
                        <div class="media reply_section">
                            <div class="media-body post_reply_content">
                            	<div clas="row">
	                            	<div class="col-md-8">
		                                <h2>Meditation Cave</h2>
		                                <p>Like other ashrams of Vihangam Yoga, Madhumati Ashram is also having an underground Chamber dedicated for Meditation.</p>
	                                </div>
	                                <div class="col-md-4">
		                                <div class="recent-work-wrap">
					                        <img class="img-responsive" src="{{URL::asset('assets/images/ashram/vrittikut/mahamandir.png')}}" alt="">
					                        <div class="overlay">
					                            <div class="recent-work-inner">
					                                <h3><a href="#">Meditation Cave</a> </h3>
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
		                                <h2>Model of Shunya Shikhar</h2>
		                                <p>Hosts a prototype model of Shoonya Shikhar Ashram, situated in Himalayan range.</p>
	                                </div>
	                                <div class="col-md-4">
		                                <div class="recent-work-wrap">
					                        <img class="img-responsive" src="{{URL::asset('assets/images/ashram/vrittikut/mahamandir.png')}}" alt="">
					                        <div class="overlay">
					                            <div class="recent-work-inner">
					                                <h3><a href="#">Model of Shunya Shikhar</a> </h3>
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
		                                <h2>Acharya Niwas</h2>
		                                <p>Abode of Sri Sadguru Swatantradeo Ji Maharaj</p>
	                                </div>
	                                <div class="col-md-4">
		                                <div class="recent-work-wrap">
					                        <img class="img-responsive" src="{{URL::asset('assets/images/ashram/vrittikut/mahamandir.png')}}" alt="">
					                        <div class="overlay">
					                            <div class="recent-work-inner">
					                                <h3><a href="#">Acharya Niwas</a> </h3>
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
		                                <p>Well furnished guest rooms available for the visitors, seekers and devotees.</p>
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

                </div><!--/.col-md-8-->

                    

            </div><!--/.row-->

         </div><!--/.blog-->

    </section><!--/#blog-->
@endsection