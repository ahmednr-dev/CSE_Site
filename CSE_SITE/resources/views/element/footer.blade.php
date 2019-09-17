<div class="container-wrap">
														<!-- Start Footer -->
                                                        <footer id="fh5co-footer" role="contentinfo">
                                                                <div class="row">
                                                                    <div class="col-md-3 fh5co-widget">
                                                                        <h4>@lang('app.About')</h4>
                                                                        <p>
                                                                        @lang('app.aboutFooter')
                                                                                </p>
                                                                    </div>
                                                                    <div class="col-md-3 col-md-push-1">
                                                                        <h4>@lang('app.Last News')</h4>
                                                                        <ul class="fh5co-footer-links">

<!--

                        last posts  Under Test 
                                                                            @ foreach ($blogs as $blogs)
                                                                        <li><a  href="/blog/{ {$blogs->slug}}">{  {$blogs->title}}</a></li>
                                                                            @ endforeach

                                                                        -->


                                                                        </ul>


                                                                    </div>
                                                    
                                                                    <div class="col-md-3 col-md-push-1">
                                                                        <h4>@lang('app.links')</h4>
                                                                        <ul class="fh5co-footer-links">
                                                                            <li><a href="/">@lang('app.Home') </a></li>
                                                                            <li><a href="/blog">@lang('app.News') </a></li>
                                                                            <li><a href="/event">@lang('app.Events') </a></li>
                                                                            <li><a href="/contact">@lang('app.Contact Us') </a></li>
                                                                            <li><a href="/about">@lang('app.About Us')  </a></li>
                                                                                        <!--  Link From Control Panel -->
                                                                            @foreach ($footerLink as $link)
                                                                              
                                                                                <li><a href="{{$link->url}}" target="_blank">  {{$link->name}}</a></li>
                                                                            @endforeach
                                                                                          <!--  Link From Control Panel -->
                                                                        </ul>
                                                                    </div>
                                                    
                                                                    <div class="col-md-3">
                                                                        <h4>@lang('app.CONTACT INFORMATION')</h4>
                                                                        <ul class="fh5co-footer-links">

                                                                            @lang('app.Faculty Of Engineering')
                                                                            <li> @lang('app.Egypt - Minia Governorate')<br>@lang('app.Minia University')</li>
                                                                            <li><a href="tel://1234567920">+123456</a></li>
                                                                            <li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
                                                                            <li><a href="">@lang('app.Faculty Of Engineering')</a></li>
                                                                        </ul>
                                                                    </div>
                                                    
                                                                </div>
                                                    
                                                                <div class="row copyright">
                                                                    <div class="col-md-12 text-center">
                                                                        <p>
                                                                            <small class="block">&copy; All Rights Reserved.</small> 
                                                                            <small class="block">Designed by <a href="https://www.facebook.com/AhmedNour202" target="_blank">AhmadNoureldinAhmad</a> </small>
                                                                        </p>
                                                                        <p>
                                                                            <ul class="fh5co-social-icons">
                                                                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                                                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                                                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                                                                <li><a href="#"><i class="icon-dribbble"></i></a></li>
                                                                            </ul>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </footer> 
                                                            
                                                            <!-- End Footer -->
                                                    

                                                        </div>

                                                     
                                                                           

