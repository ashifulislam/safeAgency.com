 <footer class="footer-area section-padding">
            <div class="footer-widget">
                <div class="container">
                    <div class="row">
                        <div  class="col-xl-2 col-lg-3">
                            <div  class="single-widget-home mb-5 mb-lg-0">
                                <h3 style="padding-top:25px;"  class="mb-4">top products</h3>
                                <ul>
                                    <li class="mb-2"><a href="#">managed website</a></li>
                                    <li class="mb-2"><a href="#">managed reputation</a></li>
                                    <li class="mb-2"><a href="#">power tools</a></li>
                                    <li><a href="#">marketing service</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-5 offset-xl-1 col-lg-6">
                            <div class="single-widget-home mb-5 mb-lg-0">
                                <h3 class="mb-4" style="padding-top:25px;">newsletter</h3>
                                <p class="mb-4">You can trust us. we only send promo offers, not a single.</p>
                                <form action="{{route('subscriber.store')}}" method="post">
                                    @csrf
                                    <input type="email" name="email" placeholder="Your email here" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email here'" required>
                                    <button type="submit" class="template-btn">subscribe now</button>


                                    <h2 style="color:green"> {{ session()->get('message') }}</h2>

                                </form>
                            </div>
                        </div>
                        <div class="col-xl-3 offset-xl-1 col-lg-3">
                            <div class="single-widge-home">
                                <h3 class="mb-4" style="padding-top:25px;">instagram feed</h3>
                                <div class="feed">
                                    <img src="user/images/feed1.jpg" alt="feed">
                                    <img src="user/images/feed2.jpg" alt="feed">
                                    <img src="user/images/feed3.jpg" alt="feed">
                                    <img src="user/images/feed4.jpg" alt="feed">
                                    <img src="user/images/feed5.jpg" alt="feed">
                                    <img src="user/images/feed6.jpg" alt="feed">
                                    <img src="user/images/feed7.jpg" alt="feed">
                                    <img src="user/images/feed8.jpg" alt="feed">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;Daffodil International University <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</span>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="social-icons">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
