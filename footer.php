 <footer class="text-center-xs space--xs bg--dark ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <ul class="list-inline">
                                <li>
                                    <a href="#">
                                        <span class="h6 type--uppercase">About</span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
                                        <span class="h6 type--uppercase">What's new</span>
                                    </a>
                                </li>
								<li>
                                    <a href="#">
                                        <span class="h6 type--uppercase">FAQ</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="h6 type--uppercase">Careers</span>
                                    </a>
                                </li>
								
								
                            </ul>
                        </div>
						
						 <div class="col-md-2">
                           <select style="height: 32px; padding-top: 1px;">
							<option value="disabled">Language</option>
							<option>Deutsch</option>
							<option>Deutsch</option>
							<option>Español</option>
							<option>Français</option>
							<option>Italiano</option>
							<option>Nederlands</option>
							<option>Polski</option>
							<option>Português (BR)</option>
							<option>Русский</option>
							<option>Svenska</option>
							<option>Türkçe</option>
							<option>한국어</option>
							<option>日本語</option>
							<option>عربي</option>
							<option>Ελληνικά</option>
						   </select>
                        </div>
						
						
						 <div class="col-md-5 text-right text-center-xs">
                            <ul class="social-list list-inline list--hover">
                                <li>
                                    <a href="#">
                                        <i class="socicon socicon-google icon icon--xs"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="socicon socicon-twitter icon icon--xs"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="socicon socicon-facebook icon icon--xs"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="socicon socicon-instagram icon icon--xs"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
						
                       
                    </div>
                    <!--end of row-->
                    <div class="row">
                        <div class="col-md-2">
                            <span class="type--fine-print">&copy;
                                <span class="update-year"></span> Stack Inc.</span>
                            <a class="type--fine-print" href="#">Privacy Policy</a>
                            <a class="type--fine-print" href="#">Legal</a>
                        </div>
                        <div class="col-md-2 text-right text-center-xs">
                            <a class="type--fine-print" href="#">support@stack.io</a>
                        </div>
						<div class="col-md-8 text-right text-center-xs">
                           <a class="" >1-888-216-9155</a>
							<a class="" href="">info@translated.com</a>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </footer>
	 </div>
        <!--<div class="loader"></div>-->
        <a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active">
            <i class="stack-interface stack-up-open-big"></i>
        </a>
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="dist/js/select2.min.js"></script>
        <script src="js/flickity.min.js"></script>
        <script src="js/easypiechart.min.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/typed.min.js"></script>
        <script src="js/datepicker.js"></script>
        <script src="js/isotope.min.js"></script>
        <script src="js/ytplayer.min.js"></script>
        <script src="js/lightbox.min.js"></script>
        <script src="js/granim.min.js"></script>
        <script src="js/jquery.steps.min.js"></script>
        <script src="js/countdown.min.js"></script>
        <script src="js/twitterfetcher.min.js"></script>
        <script src="js/spectragram.min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>

<script>
$(document).ready(function() {
//alert('x');
    $('.select2').select2();
    $(".show_price").click(function(){
        //$("#update_price").show();
        //$("#show_price").innerHTML="update price";
        $('#showprices').show();
        
        
    });
});
</script>
<script type="text/javascript">
    function changeInnerHtml(){
         $('button').each(function() {
                    if ($.trim($(this).html()) == "Show prices")   $(this).html('Update prices');
                });
    }
</script>