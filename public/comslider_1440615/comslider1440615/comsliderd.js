function comSlider1440615() { 
var self = this; 
var g_HostRoot = "";
var jssor_slider1440615 = null;	this.jssor_slider1440615_starter = function (containerId) { 
						
            var _SlideshowTransitions = [ 
{$Duration:1200,x:0.2,y:-0.1,$Delay:20,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$JssorEasing$.$EaseInWave,$Top:$JssorEasing$.$EaseInWave,$Clip:$JssorEasing$.$EaseOutQuad},$Outside:true,$Round:{$Left:1.3,$Top:2.5}}
				]; 
			
					var options = {
										$AutoPlay: true,                                   //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
										$Idle: 0,
										$LazyLoading: 1,
										$PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, default value is 1
										$DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
										$FillMode: 1,										//[Optional] The way to fill image in slide, 0: stretch, 1: contain (keep aspect ratio and put all inside slide), 2: cover (keep aspect ratio and cover whole slide), 4: actual size, 5: contain for large image and actual size for small image, default value is 0 
										$Loop: 1,										//[Optional] Enable loop(circular) of carousel or not, 0: stop, 1: loop, 2 rewind, default value is 1 
										$PauseOnHover: 1, 							//[Optional] Whether to pause when mouse over if a slider is auto playing, 0: no pause, 1: pause for desktop, 2: pause for touch device, 3: pause for desktop and touch device, 4: freeze for desktop, 8: freeze for touch device, 12: freeze for desktop and touch device, default value is 1 
										$StartIndex: 0,	//[Optional] Index of slide to display when initialize, default value is 0 
 
									$SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
										$Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
										$Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
										$TransitionsOrder: 0,       //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
									}										
									
					, $ArrowNavigatorOptions: {
						$Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
						$ChanceToShow: 1       //[Required] 0 Never, 1 Mouse Over, 2 Always
					}
				, $ThumbnailNavigatorOptions: {
						$Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
						$ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

						$ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
						$AutoCenter: 0,                                 //[Optional] Auto center thumbnail items in the thumbnail navigator container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 3
						$Rows: 1,                                      //[Optional] Specify lanes to arrange thumbnails, default value is 1
						$SpacingX: 8,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
						$SpacingY: 8,                                   //[Optional] Vertical space between each thumbnail in pixel, default value is 0
						$Cols: 7,                              //[Optional] Number of pieces to display, default value is 1
						$ParkingPosition: 90,                          //[Optional] The offset position to park thumbnail
						$Orientation: 2,                                //[Optional] Orientation to arrange thumbnails, 1 horizental, 2 vertical, default value is 1
						$NoDrag: false                            //[Optional] Disable drag or not, default value is false
					}						
									};

									self.jssor_slider1440615 = new $JssorSlider$(containerId, options);										
									
										}; 
							
									//responsive code begin
									//you can remove responsive code if you do not want the slider scales while window resizes
									this.ScaleSlider = function() {		
										var  parentWidth = jqCS1440615("#comSContainer1440615_").parent().width();
										if (parentWidth) {
											self.jssor_slider1440615.$ScaleWidth(Math.min(parentWidth, 788));
										}
										else
											window.setTimeout(self.ScaleSlider, 30);											
									};
				
					this.scriptLoaded = function(options)
					{
				   jqCS1440615 = jQuery1440615.noConflict(false);jqCS1440615("#comslider_in_point_1440615").html('<div id="comSContainer1440615_" name="comSContainer1440615_" style="display: inline-block; text-align: left; background:#000000; border:0px; width:788px; height:350px; position: relative; top: 0px; left: 0px;"><div u="slides" style="position: absolute; left: 0px; top: 0px; width:700px; height:350px; overflow: hidden;"><div idle="5000" id="imgidle_1440615_931965"><img u="image" src="comslider1440615/img/171113005803102.jpg"></img><img u="thumb" src="comslider1440615/imgnav/171113005803102.jpg?timstamp=1510552969"></img></div><div idle="5000" id="imgidle_1440615_931966"><img u="image" src="comslider1440615/img/171113005903101.png"></img><img u="thumb" src="comslider1440615/imgnav/171113005903101.png?timstamp=1510552969"></img></div><div idle="5000" id="imgidle_1440615_931967"><img u="image" src="comslider1440615/img/171113005903102.png"></img><img u="thumb" src="comslider1440615/imgnav/171113005903102.png?timstamp=1510552969"></img></div><div idle="5000" id="imgidle_1440615_931968"><img u="image" src="comslider1440615/img/171113005903103.png"></img><img u="thumb" src="comslider1440615/imgnav/171113005903103.png?timstamp=1510552969"></img></div></div>                <!-- ThumbnailNavigator Skin Begin -->    <div u="thumbnavigator" class="jssort1440615" style="position: absolute; width: 72px; height: 342px; top: 8px; right: 8px; ">        <!-- Thumbnail Item Skin Begin -->        <style>           /* jssor slider thumbnail navigator skin 1440615 css */            /*            .jssort1440615 .p            (normal)            .jssort1440615 .p:hover      (normal mouseover)            .jssort1440615 .pav          (active)            .jssort1440615 .pav:hover    (active mouseover)            .jssort1440615 .pdn          (mousedown)            */            .jssort1440615 .w            {                position: absolute;                width: 70px;                height: 35px;            }            .jssort1440615 .wsub            {                position: absolute;                width: 72px;                height: 37px;            }            .jssort1440615 .pav .wsub, .jssort1440615 .p:hover .wsub            {                position: absolute;                width: 72px;                height: 37px;                top: 0px;                left: 0px;            }            .jssort1440615 .w            {                margin: 0px !important;                border: #FFFFFF 1px solid;            }            .jssort1440615 .p:hover .w,            .jssort1440615 .pav .w, .jssort1440615 .pav:hover .w            {                border: #FFFFFF 1px solid !important;                margin: 0px !important;            }            .jssort1440615 .c            {                width: 72px;                height: 37px;                filter: alpha(opacity=40);                opacity: 0.4;                -moz-transition: opacity .6s;                -webkit-transition: opacity .6s;                -o-transition: opacity .6s;                margin: 0px !important;                background-color: #000000;            }            .jssort1440615 .p:hover .c,            .jssort1440615 .pav .c, .jssort1440615 .pav:hover .c            {                 filter: alpha(opacity=0);                 opacity: 0;                 background-color: #000000;             }            .jssort1440615 .pav .c            {                margin: 0px !important;            }                         .jssort1440615 .p:hover .c            {                transition: none;                -moz-transition: none;                -webkit-transition: none;                -o-transition: none;                margin: 0px !important;            }        </style>        <div u="slides" style="right: 0px; top: 0px;">            <div u="prototype" class="p" style="position: absolute; width: 72px; height: 37px; top: 0; left: 0;">                <div class="w">                    <thumbnailtemplate style="width: 70px; height: 35px; border: none; position: absolute; top: 0; left: 0;"></thumbnailtemplate>                </div>                <div class="wsub" style="overflow:hidden;">                	<div class="c" style="position: absolute; top: 0; left: 0"></div>                </div>            </div>        </div>        <!-- Thumbnail Item Skin End -->   </div><!-- Arrow Navigator Skin Begin --><style>/* jssor slider arrow navigator skin 02 css *//*.jssora1440615l              (normal).jssora1440615r              (normal).jssora1440615l:hover        (normal mouseover).jssora1440615r:hover        (normal mouseover).jssora1440615ldn            (mousedown).jssora1440615rdn            (mousedown)*/.jssora1440615l, .jssora1440615r, .jssora1440615ldn, .jssora1440615rdn{	position: absolute;	cursor: pointer;	display: block;    overflow:hidden;}.jssora1440615l {background: transparent url("comslider1440615/imgnavctl/defback.png?1510552934") no-repeat; }.jssora1440615r {background: transparent url("comslider1440615/imgnavctl/defforward.png?1510552934") no-repeat; }.jssora1440615l:hover, .jssora1440615ldn {background: transparent url("comslider1440615/imgnavctl/defbackhover.png?1510552934") no-repeat; }.jssora1440615r:hover, .jssora1440615rdn {background: transparent url("comslider1440615/imgnavctl/defforwardhover.png?1510552934") no-repeat; } </style><!-- Arrow Left --><span u="arrowleft" class="jssora1440615l" style="margin-left:0px; width: 44px; height: 48px; top: 151px; left: 0px;"></span><!-- Arrow Right --><span u="arrowright" class="jssora1440615r" style="margin-left:0px; width: 44px; height: 48px; top: 151px; left: 656px"></span><!-- Arrow Navigator Skin End -->	</div>');
                    jqCS1440615("#comslider_in_point_1440615 a").bind('click',  function() { if ((this.name.length > 0) && (isNaN(this.name) == false)) {  self.switchToFrame(parseInt(this.name)); return false;} });
                
					self.jssor_slider1440615_starter("comSContainer1440615_");
							
						self.ScaleSlider();
						jqCS1440615(document).ready(function() {				
							self.ScaleSlider();
						});
						jqCS1440615(window).bind("load", self.ScaleSlider);
						jqCS1440615(window).bind("resize", self.ScaleSlider);
						jqCS1440615(window).bind("orientationchange", self.ScaleSlider);						
					
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
                            if (g_CSIncludes[g_CSCurrIdx][0].split('.').pop() == 'css')
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
objcomSlider1440615 = new comSlider1440615();
objcomSlider1440615.include('comslider1440615/js/helpers.js', false);
objcomSlider1440615.include('comslider1440615/js/jquery-1.10.1.js', false);
objcomSlider1440615.include('comslider1440615/js/jquery-ui-1.10.3.effects.js', false);
objcomSlider1440615.include('comslider1440615/js/jssor.slider.min_2_0.js', false);
objcomSlider1440615.include('comslider1440615/js/jssorcap.min.js', true);
