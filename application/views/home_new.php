<?php
    $data['active_link'] = "active";
    $data['active'] = "0";
    $this->load->view('common/header_new');
//	   $con=mysql_connect("localhost","root","") or die('Unable to connect Host');
//    $db=mysql_select_db('forexray',$con) or die('Unable to connect DB');
//	//$sql="SELECT id, currency_from, currency_to, ask, bid, status FROM currency_converter ORDER BY id";
//	$sql="SELECT * FROM currency_converter ORDER BY id";
//	//echo $sql;
//	$qry=mysql_query($sql);
?>

</div>

        <!-- **Main - Starts** --> 
		<div id="main" class="app">
        
        	<!-- **banner - Starts** -->
            <div class="banner">
                <!-- **Slider Section** -->
                <div id="layerslider_9" class="ls-wp-container" style="width:100%;height:560px;max-width:1920px;margin:-80px auto;margin-bottom: 0px;">
          <?php foreach ($news as $k => $v) { ?>
           <div class="ls-slide" data-ls="slidedelay:10000;transition2d:4;">
                        <img src="<?php echo base_url().$v->attachment; ?>" data-src="<?php echo base_url().$v->attachment; ?>" class="ls-bg" alt="bg2" />
                        
                        <div class="ls-l" style="top:240px;left:50%;margin-left:-100px;font-weight:700; z-index:3;font-family:'Roboto';font-size:24px;line-height:21px;color:#fff;white-space: nowrap;" data-ls="offsetxin:-100;durationin:1500;delayin:800;">
						<?php echo $v->heading; ?></div>

                        <div class="ls-l" style="top:300px;left:50%;margin-left:-150px;font-weight:700; z-index:3; letter-spacing:2.5px;font-family:'Roboto';font-size:42px;line-height:26px;color:#ffffff; text-shadow: 0px 0px 12px rgba(0, 0, 0, 0.5); white-space: nowrap;"  data-ls="offsetxin:0;offsetyin:100;durationin:1500;delayin:2000;">
						<?php echo substr(filterStringDecode($v->meta_description), 0, 100) ; ?></div>
                                               
                        <p class="ls-l" style="top:370px;left:320px;white-space: nowrap; line-height:30px;" data-ls="offsetxin:0;offsetyin:100;delayin:4000;"> <a href="#" class="dt-sc-button1 ico-button"> OPEN A REAL ACCOUNT</a></p>
                        
                        <p class="ls-l" style="top:370px;left:530px;white-space: nowrap;" data-ls="offsetxin:-150;delayin:4000;"> <a href="#" class="dt-sc-button2">OPEN A FREE DEMO ACCOUNT</a></p>
                    <p style="color:#f00; font-size:24px"> Read More</p>
                    </div>
                  <?php }?>  
               <!--<div class="ls-slide" data-ls="slidedelay:8000;transition2d:4;">
                   <img src="<?= base_url() ?>public/images/sliders/blank.gif" data-src="<?= base_url() ?>public/images/sliders/slider-2.jpg" class="ls-bg" alt="bg2" />
                        
                        <div class="ls-l" style="top:240px;left:320px;font-weight:700; z-index:3;font-family:'Roboto';font-size:24px;line-height:21px;color:#fff;white-space: nowrap;" data-ls="offsetxin:-100;durationin:1500; delayin:800;">ramesh FOREX , GOLD , CRUDE OIL , SHARES, INDICES</div>

                        <div class="ls-l" style="top:300px;left:20px;font-weight:700; z-index:3; letter-spacing:2.5px;font-family:'Roboto';font-size:42px;line-height:26px;color:#ffffff; text-shadow: 0px 0px 12px rgba(0, 0, 0, 0.5); white-space: nowrap;"  data-ls="offsetxin:0;offsetyin:100;durationin:1500;delayin:2000;">LEADING ONLINE TRADING BROKER SINCE 2012</div>

 <p class="ls-l" style="top:370px;left:320px;white-space: nowrap; line-height:30px;" data-ls="offsetxin:0;offsetyin:100;delayin:4000;"> <a href="#" class="dt-sc-button1 ico-button"> OPEN A REAL ACCOUNT</a></p>
                        
                        <p class="ls-l" style="top:370px;left:530px;white-space: nowrap;" data-ls="offsetxin:-150;delayin:4000;"> <a href="#" class="dt-sc-button2">OPEN A FREE DEMO ACCOUNT</a></p>
                    </div>-->
                </div>
            </div>
            <!-- **banner - Ends** -->
            
        	  
            <div class="slide-controls-wrapper">
                           <?php if(!empty($home_pages_sections[9]->content)){ echo html_entity_decode($home_pages_sections[9]->content); } ?>
	
                        <!--<div class="slide-controls" style="display: block;">
                       
                            <div class="column dt-sc-one-fourth no-space first">
                                <div class="dt-sc-ico-content type8">
                                    
                                    <p>Get 30% of Brokerage Withdrawal over Trading Volume * </p>
                                </div> 
                            </div>
                  
                            <div class="column dt-sc-one-fourth no-space">
                               
                                <div class="dt-sc-ico-content type8">
                                 
                                    <p>Get upto 100% Bonus over Initial <br />
Investment * </p>
                                </div> 
                            </div>
                            <div class="column dt-sc-one-fourth no-space">
                                <div class="dt-sc-ico-content type8">
                                 
                                    <p>No Other Charges apart from Brokerage is our Promise</p>
                                </div> 
                            </div>
                            <div class="column dt-sc-one-fourth no-space border-right">
                                <div class="dt-sc-ico-content type8">
                                    
                                    <p>Learn How Professional Traders are  <br /> Trading </p>
                                </div> 
                            </div> 
                        </div>-->        
                    </div>

                    <div class="dt-sc-margin20"></div>
			<div class="full-width-section">
				
                 <?php if(!empty($home_pages_sections[8]->content)){ echo html_entity_decode($home_pages_sections[8]->content); } ?>
		
            </div>
                                <div class="dt-sc-margin20"></div>

         
            <div class="intro-text type1">
        <?php if(!empty($home_pages_sections[10]->content)){ echo html_entity_decode($home_pages_sections[10]->content); } ?>	
            </div>
			<!-- **full-width-section - Ends** -->
            <div class="dt-sc-margin20"></div>
                        <!-- **full-width-section - starts** -->
            					<!-- Marquee-->
		
				<div class=" full-width-section type1 marquee-with-options">
<marquee>
<div id="currency_scroller">EURUSD  1.08076  1.08046          GBPUSD  1.49633  1.49593          USDCHF  0.95317  0.95145          USDJPY  118.919  118.899        USDCAD  1.22489  1.22459      EURGBP   </div>
                                </marquee></div>
	<!-- Marquee--><!-- **full-width-section - Ends** -->
            <div class="dt-sc-margin20"></div>
            <div class="parallax full-width-section rj-parallax" style="background-position: 50% -63px;">
						
                 <?php if(!empty($home_pages_sections[7]->content)){ echo html_entity_decode($home_pages_sections[7]->content); } ?>	
                   <!--  **column - Starts   welcome to forexbull page ** -->
                  <!--   <div class="column dt-sc-one-half first pull-left animate fadeInDown" data-animation="fadeInDown" data-delay="100">
                    <div class="rjpad">
                        <h3 style="color:#fff;"> Welcome to Forex Bull</h3>
                        <p>ForexBull is a Foreign Exchange ("Forex") and CFD broker, with a focus on superior trading conditions and customer service. We offers spreads as low as 1 pip, interest paid on your account balance, direct interbank (ECN) trading access, and the lowest margin requirements for all products. Forex Bull’s advanced software allows you to easily trade from your PC, Mac, web-browser, iPhone, or other mobile device, whether using MetaTrader or ActTrader.</p>
                        
                          <a href="#" class="dt-sc-button large">Who We Are<span class="fa fa-angle-right"></span></a>
                        </div>
                    </div> 
					<!-- **column - Ends** -->  
                                       
                    <!-- **column - Starts** -->
                   <!--  <div class="column dt-sc-one-half animate zoomIn" data-animation="zoomIn" data-delay="100">
                        <img class="aligncenter" src="<?= base_url() ?>public/images/sliders/user.jpg" alt="image">
                    
					</div> 
					<!-- **column - Ends** -->
                    
            </div>
            <div class="dt-sc-margin20"></div>  
            <div class="container">
                 <div class="column dt-sc-one-fourth first fadeInLeft" data-animation="fadeInLeft" data-delay="100">
                        <div class="dt-sc-ico-content type4">
                    
                             <!--   <img src="<?= base_url() ?>public/images/tr_p.jpg" alt="image">                            
                            <div class="dt-sc-location-detail">
                                <h6>TRADING PRODUCTS</h6>
                                <ul>
                                 <li><span class="fa fa-angle-right"></span> Account Types</li>
                                    <li><span class="fa fa-angle-right"></span> PAMM </li>
                                    <li><span class="fa fa-angle-right"></span> Forex Islamic</li>
                                    <li><span class="fa fa-angle-right"></span> Forexcopy System</li>
                                    <li><span class="fa fa-angle-right"></span> Payment Systems</li>
                                </ul>
                            </div>
                            <div class="clearfix"></div> -->
							
			 <?php if(!empty($home_pages_sections[0]->content)){ echo html_entity_decode($home_pages_sections[0]->content); } ?>	
							<?php if(!empty($home_pages_sections[0]->read_more_link)){  ?>	
							<div class="overlay"><a style="color: white;" href="<?php echo $home_pages_sections[0]->read_more_link; ?>">Read More</a></div>
							<?php } ?>
                            
                        </div>
                    </div>
                    <div class="column dt-sc-one-fourth fadeInRight" data-animation="fadeInRight" data-delay="100">
                             <div class="dt-sc-ico-content type4">
                    
                               <!-- <img src="<?= base_url() ?>public/images/tr_c.jpg" alt="image">                            
                            <div class="dt-sc-location-detail">
                                <h6>TRADE CONDITIONS</h6>
                                <ul>
                                 <li><span class="fa fa-angle-right"></span> Spreads </li>
                                    <li><span class="fa fa-angle-right"></span> Overnight Positions  </li>
                                    <li><span class="fa fa-angle-right"></span> Margin and Leverage </li>
                                    <li><span class="fa fa-angle-right"></span> Execution Methodology </li>
                                    <li><span class="fa fa-angle-right"></span> Advantages </li>
                                </ul>
                            </div>
                            <div class="clearfix"></div> -->
							 <?php if(!empty($home_pages_sections[2]->content)){ echo html_entity_decode($home_pages_sections[2]->content); } ?>	
							<?php if(!empty($home_pages_sections[2]->read_more_link)){  ?>	
							<div class="overlay"><a style="color: white;" href="<?php echo $home_pages_sections[2]->read_more_link; ?>">Read More</a></div>
							<?php } ?>
                            
                        </div>
                    </div>
                    <div class="column dt-sc-one-fourth fadeInLeft" data-animation="fadeInLeft" data-delay="100">
                            <div class="dt-sc-ico-content type4">
                    
                                <!--<img src="<?= base_url() ?>public/images/t_s.jpg" alt="image">                            
                            <div class="dt-sc-location-detail">
                                <h6>TRADING SOFTWARES</h6>
                                <ul>
                                 <li><span class="fa fa-angle-right"></span> Download MetaTrader 4</li>
                                    <li><span class="fa fa-angle-right"></span> About MetaTrader 4 </li>
                                    <li><span class="fa fa-angle-right"></span> MetaTrader 4 User Guide</li>
                                    <li><span class="fa fa-angle-right"></span> Automated Trading</li>
                                    <li><span class="fa fa-angle-right"></span> Multiterminal MAM</li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
							-->
							 <?php if(!empty($home_pages_sections[1]->content)){ echo html_entity_decode($home_pages_sections[1]->content); } ?>	
							<?php if(!empty($home_pages_sections[1]->read_more_link)){  ?>	
							<div class="overlay"><a style="color: white;" href="<?php echo $home_pages_sections[1]->read_more_link; ?>">Read More</a></div>
							<?php } ?>
                            
                        </div>
                    </div>
                    <div class="column dt-sc-one-fourth fadeInRight" data-animation="fadeInRight" data-delay="100">
                    
                          <div class="dt-sc-ico-content type4 live_data">
                                                         
                            <div class="dt-sc-location-detail">
                                <h6>LIVE RATES</h6>
                                
							<table class="table">
								<thead>
									<tr>
										<th>Symbol</th>
										<th>Bid</th>
									</tr>
								</thead>
							<tbody>
									<tr>
										<td>EURUSD</td>
										<td>1.12375</td>
									</tr>
									<tr>
										<td>EURUSD</td>
										<td>1.12375</td>
									</tr>
									<tr>
										<td>EURUSD</td>
										<td>1.12375</td>
									</tr>
									<tr>
										<td>EURUSD</td>
										<td>1.12375</td>
									</tr>
									<tr>
										<td>EURUSD</td>
										<td>1.12375</td>
									</tr>
									<tr>
										<td>EURUSD</td>
										<td>1.12375</td>
									</tr>
							</tbody>
							</table>
                            </div>
                          <!--  <div class="mt10 ml10 stocks_list">
   <img src="<?= base_url() ?>public/images/chart.png" /></div>-->
   
                            <div class="clearfix"></div>
                            
                        </div>
                        
                    </div>
                </div>
                
                
<!-- **********************************************************************************************************-->               
                   <div class="events-carousel-wrapper type2" style="background:#ff554e;">
                    	<div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 100%; min-height: 430px; margin: 0px; overflow: hidden;">
                            <div class="events-carousel" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 4088px; min-height: 460px; z-index: auto;">
                          
                             <?php 
                               foreach($banner_slider as $kb=>$vb){ 
                                   ?>
                            <div class="column dt-sc-one-fourth" style="width: 100%;">
                                <!-- **events - Starts** -->
                                <div class="events">
                                    <!-- **event-thumb - Starts** -->
                                    <div class="event-thumb">
                                        <?php if(!empty($vb->image)) {?>
                                         <img src="<?= base_url().$vb->image ;?>" class="intro-bg"/>
                                            <?php }else{ ?>
                                             <img src="public/images/img_slidde-2.jpg" class="intro-bg"/>
                                            <?php } ?>
                                           </div> <!-- **event-thumb - Ends** -->
                                    <!-- **event-detail - Starts** -->
                                    <div class="event-detail">
<!--                                    <h5>EUR/USD maintains levels near 1.1370</h5> -->
                                    <?php  echo html_entity_decode($vb->content);  ?>  
                                   </div> <!-- **event-detail - Ends** -->
                                </div>
                                <!-- **events - Ends** -->
                            </div>
                               <?php } ?>
                        </div></div>
                        
                        <!-- **product-carousel - Starts** --> 
                        <div class="product-carousel">
                            <a class="event-prev" href="#" style="display: block;"><span class="fa fa-angle-left"></span> </a>
                            <a class="event-next" href="#" style="display: block;"><span class="fa fa-angle-right"></span> </a>
                        </div> <!-- **product-carousel - Ends** -->
                	</div>     

	
                        
  <!--  ***********************************************************************************************-->      
  
  
  
  <div class="parallax full-width-section fullwidth-testimonial" style="background-position: 50% 56px;">
                    <div class="container">
                        <div class="dt-sc-testimonial-wrapper type2">
                            <div class="caroufredsel_wrapper" style="display: block; text-align: center; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 1170px; height: 217px; margin: 0px 0px 20px; overflow: hidden;"><ul class="dt-sc-testimonial-carousel" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 8190px; height: 217px; z-index: auto;">
                                 <?php 
                               foreach($banner2_slider as $kb=>$vb){ 
                                   ?>
                            <li style="width: 1150px;"> <div class="dt-sc-testimonial">
                                     <?php  echo html_entity_decode($vb->content);  ?> 
                                    <div class="dt-sc-margin30"></div>
                                    <div class="author">
                                          <?php if(!empty($vb->image)) {?>
                                         <img src="<?= base_url().$vb->image ;?>"/>
                                            <?php }else{ ?>
                                              <img src="public/images/author3.jpg" alt="image">
                                            <?php } ?>
                                       
                                    </div>
                                </div> </li>
                                
                               <?php } ?>
                                
<!--                                <li style="width: 1150px;"> <div class="dt-sc-testimonial">
                                    <h5>" This template is composed of colors. A great deal if you want a colorful &amp; vibrant website for your business or portfolio.<br>I highly recommend it. Website for your business."</h5>
                                    <span> Mathew Braveheart </span>
                                    <div class="dt-sc-margin30"></div>
                                    <div class="author">
                                        <img src="public/images/author2.jpg" alt="image">
                                    </div>
                                </div> </li>
                                <li style="width: 1150px;"> <div class="dt-sc-testimonial">
                                    <h5>" This template is composed of colors. A great deal if you want a colorful &amp; vibrant website for your business or portfolio.<br>I highly recommend it."</h5>
                                    <span>Sarah Mitchell</span>
                                    <div class="dt-sc-margin30"></div>
                                    <div class="author">
                                        <img src="public/images/author.jpg" alt="image">
                                    </div>
                                </div> </li>-->
                                
                                
                                
                                </ul></div>
                            <div class="slider-controls">
                                <div class="pager" style="display: inline-block;">
                                    
                                    
                                    
                                <a href="#" class=""><span>1</span></a><a href="#" class="selected"><span>2</span></a><a href="#" class=""><span>3</span></a></div>
                                
                            </div>
                        </div>
                    </div>
                </div>
  
  
  
  
  
  
  
  
  
  
  
  <!--  ***********************************************************************************************-->      
  
  
  
  
  
  
  
  
  
  
  
  
                
                        
             <section id="primary" class="content-full-width intro-text type1">
			 <?php if(!empty($home_pages_sections[6]->content)){ echo html_entity_decode($home_pages_sections[6]->content); } ?>
                <!--<div class="full-width-section">
                    <div class="container">                        
                        <div class="dt-sc-margin30"></div>
                        <div class="column dt-sc-one-fifth first">
                            <div class="dt-sc-ico-content type1">
                                <div class="icon">
                                    <span class="fa fa-anchor"></span>
                                </div>
                                <h4> Live<span>Chat</span> </h4>
                                
                            </div>
                        </div>
                        <div class="column dt-sc-one-fifth">
                            <div class="dt-sc-ico-content type1">
                                <div class="icon">
                                     <span class="fa fa-trophy"></span>
                                </div>
                                <h4>Sky<span>pe</span></h4>
                                
                            </div>
                        </div>
                        <div class="column dt-sc-one-fifth">
                            <div class="dt-sc-ico-content type1">
                                <div class="icon">
                                    <span class="fa fa-paper-plane"></span>
                                </div>
                                <h4> Email<span>Us</span> </h4>
                                
                            </div>
                        </div>
                        <div class="column dt-sc-one-fifth">
                            <div class="dt-sc-ico-content type1">
                                <div class="icon">
                                    <span class="fa fa-flag"></span>
                                </div>
                                <h4>Call<span>Us</span> </h4>
                                
                            </div>
                        </div>
                        
                        <div class="column dt-sc-one-fifth first">
                            <div class="dt-sc-ico-content type1">
                                <div class="icon">
                                    <span class="fa fa-anchor"></span>
                                </div>
                                <h4> Reach<span>US</span> </h4>
                                
                            </div>
                        </div>
                        
                    </div>
                </div> -->
                </section>

                
		
        </div><!-- **Main - Ends** --> 
        
	
<?php $this->load->view('common/footer_new');?>