function comSlider1563449() { 
var self = this; 
var g_HostRoot = "";
var jssor_slider1563449 = null;	this.jssor_slider1563449_starter = function (containerId) { 
						
            var _SlideshowTransitions = [ 
{$Duration:1200,x:0.2,y:-0.1,$Delay:20,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$JssorEasing$.$EaseInWave,$Top:$JssorEasing$.$EaseInWave,$Clip:$JssorEasing$.$EaseOutQuad},$Outside:true,$Round:{$Left:1.3,$Top:2.5}}
				]; 
			
					var options = {
										$AutoPlay: true,                                   //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
										$Idle: 0,
										$LazyLoading: 1,
										$PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, default value is 1
										$DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
										$FillMode: 1,										//[Optional] The way to fill image in slide, 0: stretch, 1: contain (keep aspect ratio and put all inside slide), 2: cover (keep aspect ratio and cover whole slide), 4: actual size, 5: contain for large image and actual size for small image, default value is 0 
										$Loop: 1,										//[Optional] Enable loop(circular) of carousel or not, 0: stop, 1: loop, 2 rewind, default value is 1 
										$PauseOnHover: 0, 							//[Optional] Whether to pause when mouse over if a slider is auto playing, 0: no pause, 1: pause for desktop, 2: pause for touch device, 3: pause for desktop and touch device, 4: freeze for desktop, 8: freeze for touch device, 12: freeze for desktop and touch device, default value is 1 
										$StartIndex: 0,	//[Optional] Index of slide to display when initialize, default value is 0 
 
									$SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
										$Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
										$Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
										$TransitionsOrder: 0,       //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
									}										
						, $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
						$Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
						$ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
						$AutoCenter: 2,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
						$Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
						$Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
						$SpacingX: 0,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
						$SpacingY: 0,                                   //[Optional] Vertical space between each item in pixel, default value is 0
						$Orientation: 2                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
					}						
									};

									self.jssor_slider1563449 = new $JssorSlider$(containerId, options);										
									
										}; 
							
									//responsive code begin
									//you can remove responsive code if you do not want the slider scales while window resizes
									this.ScaleSlider = function() {		
										var  parentWidth = jqCS1563449("#comSContainer1563449_").parent().width();
										if (parentWidth) {
											self.jssor_slider1563449.$ScaleWidth(Math.min(parentWidth, 1000));
										}
										else
											window.setTimeout(self.ScaleSlider, 30);											
									};
				
					this.scriptLoaded = function(options)
					{
				   jqCS1563449 = jQuery1563449.noConflict(false);jqCS1563449("#comslider_in_point_1563449").html('<div id="comSContainer1563449_" name="comSContainer1563449_" style="display: inline-block; text-align: left; overflow: hidden; border:0px; width:1000px; height:500px; position: relative; top: 0px; left: 0px;"><div u="slides" style="position: absolute; left: 0px; top: 0px; width:1000px; height:500px; overflow: hidden;"><div idle="10000" id="imgidle_1563449_996613"><img u="image" src="comslider1563449/img/180418014358104.png"></img></div><div idle="10000" id="imgidle_1563449_996621"><img u="image" src="comslider1563449/img/180418015021101.png"></img></div><div idle="10000" id="imgidle_1563449_996622"><img u="image" src="comslider1563449/img/180418015126102.png"></img></div><div idle="10000" id="imgidle_1563449_996623"><img u="image" src="comslider1563449/img/180418015159103.png"></img></div></div><!-- Bullet Navigator Skin Begin --><!-- jssor slider bullet navigator skin 01 --><style>	/*	.	 div           (normal)	.jssorb1563449 div:hover     (normal mouseover)	.jssorb1563449 .av           (active)	.jssorb1563449 .av:hover     (active mouseover)	.jssorb1563449 .dn           (mousedown)	*/	.jssorb1563449 div, .jssorb1563449 div:hover, .jssorb1563449 .av {		filter: alpha(opacity=80);		opacity: 0.8;		overflow: hidden;		cursor: pointer;		border: #555555 0px solid;		margin: 0px !important;	}	.jssorb1563449 div {		margin: 0px !important;		background-color: #CCCCCC;	}		.jssorb1563449 .av:hover {			background-color: #EEEEEE;		border: #333333 0px solid;		margin: 0px !important;		}	.jssorb1563449 .av {		background-color: #EEEEEE;		border: #333333 0px solid;		margin: 0px !important;	}</style><!-- bullet navigator container -->         <div u="navigator" class="jssorb1563449" style="position: absolute; top: 0px; right: 0px;">        	<!-- bullet navigator item prototype -->        	<div u="prototype" style="POSITION: absolute; WIDTH: 20px; HEIGHT: 125px;"></div>        </div>				 <!-- Bullet Navigator Skin End -->	</div>');
                    jqCS1563449("#comslider_in_point_1563449 a").bind('click',  function() { if ((this.name.length > 0) && (isNaN(this.name) == false)) {  self.switchToFrame(parseInt(this.name)); return false;} });
                
					self.jssor_slider1563449_starter("comSContainer1563449_");
							
						self.ScaleSlider();
						jqCS1563449(document).ready(function() {				
							self.ScaleSlider();
						});
						jqCS1563449(window).bind("load", self.ScaleSlider);
						jqCS1563449(window).bind("resize", self.ScaleSlider);
						jqCS1563449(window).bind("orientationchange", self.ScaleSlider);						
					
}
var g_CSIncludes = new Array();
var g_CSLoading = false;
var g_CSCurrIdx = 0; 
 this.include = function(src, last) 
                {
                    if (src != '')
                    {				
                            var tmpInclude = Array();
                            tmpInclude[0] = src;
                            tmpInclude[1] = last;					
                            //
                            g_CSIncludes[g_CSIncludes.length] = tmpInclude;
                    }            
                    if ((g_CSLoading == false) && (g_CSCurrIdx < g_CSIncludes.length))
                    {


                            var oScript = null;
                            if (g_CSIncludes[g_CSCurrIdx][0].split('.').pop().substring(0,3) == 'css')
                            {
                                oScript = document.createElement('link');
                                oScript.href = g_CSIncludes[g_CSCurrIdx][0];
                                oScript.type = 'text/css';
                                oScript.rel = 'stylesheet';

                                oScript.onloadDone = true; 
                                g_CSLoading = false;
                                g_CSCurrIdx++;								
                                if (g_CSIncludes[g_CSCurrIdx-1][1] == true) 
                                        self.scriptLoaded(); 
                                else
                                        self.include('', false);
                            }
                            else
                            {
                                oScript = document.createElement('script');
                                oScript.src = g_CSIncludes[g_CSCurrIdx][0];
                                oScript.type = 'text/javascript';

                                //oScript.onload = scriptLoaded;
                                oScript.onload = function() 
                                { 
                                        if ( ! oScript.onloadDone ) 
                                        {
                                                oScript.onloadDone = true; 
                                                g_CSLoading = false;
                                                g_CSCurrIdx++;								
                                                if (g_CSIncludes[g_CSCurrIdx-1][1] == true) 
                                                        self.scriptLoaded(); 
                                                else
                                                        self.include('', false);
                                        }
                                };
                                oScript.onreadystatechange = function() 
                                { 
                                        if ( ( "loaded" === oScript.readyState || "complete" === oScript.readyState ) && ! oScript.onloadDone ) 
                                        {
                                                oScript.onloadDone = true;
                                                g_CSLoading = false;	
                                                g_CSCurrIdx++;
                                                if (g_CSIncludes[g_CSCurrIdx-1][1] == true) 
                                                        self.scriptLoaded(); 
                                                else
                                                        self.include('', false);
                                        }
                                }
                                
                            }
                            //
                            document.getElementsByTagName("head").item(0).appendChild(oScript);
                            //
                            g_CSLoading = true;
                    }

                }
                

}
objcomSlider1563449 = new comSlider1563449();
objcomSlider1563449.include('comslider1563449/js/jquery-1.10.1.js?ts=1524034749', false);
objcomSlider1563449.include('comslider1563449/js/jquery-ui-1.10.3.effects.js?ts=1524034749', false);
objcomSlider1563449.include('comslider1563449/js/jssor.slider.min_2_0.js?ts=1524034749', false);
objcomSlider1563449.include('comslider1563449/js/jssorcap.min.js?ts=1524034749', true);
