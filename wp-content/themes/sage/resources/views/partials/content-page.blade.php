@php the_content() @endphp
{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}




<section id="slider">
  <?php echo do_shortcode("[rev_slider alias=slider1]"); ?>
</section>

<?php echo do_shortcode('
<p>[vc_row full_width="stretch_row" content_placement="middle" parallax="content-moving-fade" css_animation="fadeInDownBig" css=".vc_custom_1564982534471{margin-top: 20px !important;}"][vc_column parallax="content-moving-fade" css_animation="fadeInLeft" width="1/2" css=".vc_custom_1564982540558{margin-top: 20px !important;}"][vc_wp_recentcomments number="5"][/vc_column][vc_column width="1/2"][vc_wp_posts number="5"][/vc_column][/vc_row][vc_row][vc_column][vc_separator][/vc_column][/vc_row]</p>
');
?>


<section id="about">
  <div class="container">
    <header class="section-header">
      <br>

      <h3>درباره ما</h3>
      <p>
        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط
        فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
      </p>
    </header>
    <div class="row">
      <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-offset="150" data-wow-delay="0.3s">
        <div class="card shadow-sm mb-5">
          <img src="<?php bloginfo('template_url'); ?>/images/about/mission.jpg" class="card-img-top"/>
          <div class="card-body text-center p-4">
            <h3 class="card-title mb-3">ماموریت ما</h3>
            <p class="card-text">
              لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
              چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط
              فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-offset="150" data-wow-delay="0.3s">
        <div class="card shadow-sm mb-5">
          <img src="<?php bloginfo('template_url'); ?>/images/about/plan.jpg" class="card-img-top"/>
          <div class="card-body text-center p-4">
            <h3 class="card-title mb-3">نقشه راه</h3>
            <p class="card-text">
              لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
              چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط
              فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-offset="150" data-wow-delay="0.3s">
        <div class="card shadow-sm mb-5">
          <img src="<?php bloginfo('template_url'); ?>/images/about/vision.jpg" class="card-img-top"/>
          <div class="card-body text-center p-4">
            <h3 class="card-title mb-3">تفکر ما</h3>
            <p class="card-text">
              لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
              چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط
              فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="services">
  <div class="container">
    <header class="section-header">
      <br>
      <h3>خدمات ما</h3>
      <p>
        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط
        فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
      </p>
    </header>
    <div class="row">
      <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.5s">
        <div class="float-right text-success"><i class="fa fa-line-chart fa-2x"></i></div>
        <h4>خدمت اول</h4>
        <p class="description">
          لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
          هدف بهبود ابزارهای کاربردی می باشد.
        </p>
      </div>
      <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.5s">
        <div class="float-right text-success"><i class="fa fa-book fa-2x"></i></div>
        <h4>خدمت دوم</h4>
        <p class="description">
          لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
          هدف بهبود ابزارهای کاربردی می باشد.
        </p>
      </div>
      <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.5s">
        <div class="float-right text-success"><i class="fa fa-envelope fa-2x"></i></div>
        <h4>خدمت سوم</h4>
        <p class="description">
          لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
          هدف بهبود ابزارهای کاربردی می باشد.
        </p>
      </div>
      <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.5s">
        <div class="float-right text-success"><i class="fa fa-address-book-o fa-2x"></i></div>
        <h4>خدمت چهارم</h4>
        <p class="description">
          لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
          هدف بهبود ابزارهای کاربردی می باشد.
        </p>
      </div>
      <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.5s">
        <div class="float-right text-success"><i class="fa fa-address-card-o fa-2x"></i></div>
        <h4>خدمت پنجم</h4>
        <p class="description">
          لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
          هدف بهبود ابزارهای کاربردی می باشد.
        </p>
      </div>
      <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.5s">
        <div class="float-right text-success"><i class="fa fa-chain-broken fa-2x"></i></div>
        <h4>خدمت ششم</h4>
        <p class="description">
          لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
          هدف بهبود ابزارهای کاربردی می باشد.
        </p>
      </div>
    </div>
  </div>
</section>

<section id="stats">
  <div class="container">
    <header class="section-header">
      <br>

      <h3>آمار و ارقام</h3>
      <p>
        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط
        فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
      </p>
    </header>
    <div class="row wow zoomIn" data-wow-delay="0.2s">
      <div class="col-sm-6 col-lg-3 text-center">
        <span class="counter">374</span>
        <h5>تعداد مشتریان</h5>
      </div>
      <div class="col-sm-6 col-lg-3 text-center">
        <span class="counter">1,274</span>
        <h5>تعداد پروژه ها</h5>
      </div>
      <div class="col-sm-6 col-lg-3 text-center">
        <span class="counter">67</span>
        <h5>اعضای تیم</h5>
      </div>
      <div class="col-sm-6 col-lg-3 text-center">
        <span class="counter">96</span>
        <h5>درصد رضایتمندی</h5>
      </div>
    </div>
  </div>
</section>
<section id="skills">
  <div class="container">
    <header class="section-header">
      <br>

      <h3>مهارت‌های ما</h3>
      <p>
        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط
        فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
      </p>
    </header>
    <div id="skills-content">
      <div class="progress">
        <div class="progress-bar bg-success flex-row justify-content-between" data-val="100">
          <span class="mr-4">HTML</span>
          <span class="ml-4">100%</span>
        </div>
      </div>
      <div class="progress">
        <div class="progress-bar bg-info flex-row justify-content-between" data-val="90">
          <span class="mr-4">CSS</span>
          <span class="ml-4">90%</span>
        </div>
      </div>
      <div class="progress">
        <div class="progress-bar bg-warning flex-row justify-content-between" data-val="75">
          <span class="mr-4">JavaScript</span>
          <span class="ml-4">75%</span>
        </div>
      </div>
      <div class="progress">
        <div class="progress-bar bg-danger flex-row justify-content-between" data-val="55">
          <span class="mr-4">Photoshop</span>
          <span class="ml-4">55%</span>
        </div>
      </div>
    </div>
  </div>
</section>


<section id="portfolio">
  <div class="container">
    <header class="section-header">
      <br>

      <h3>نمونه کارهای ما</h3>
    </header>
    <ul id="portfolio-filter">
      <li class="filter-active" data-filter="*">همه</li>
      <li data-filter=".app">نرم افزار</li>
      <li data-filter=".web">وب</li>
      <li data-filter=".graphic">گرافیک</li>
    </ul>
    <div class="row text-center" id="portfolio-container">
      <div class="col-lg-4 col-md-6 wow fadeInUp app" data-wow-offset="50">
        <div class="card shadow-sm mb-4">
          <div class="position-relative">
            <img src="<?php bloginfo('template_url'); ?>/images/portfolio/app1.jpg" class="card-img-top"/>
            <div class="card-img-overlay">
              <a href="#">
                <i class="fa fa-external-link"></i>
              </a>
              <a href="<?php bloginfo('template_url'); ?>/images/portfolio/app1.jpg" data-lightbox="portfolio"
                 data-title="نرم افزار اول">
                <i class="fa fa-eye"></i>
              </a>
            </div>
          </div>
          <div class="card-body">
            <h4 class="card-title mb-4"><a href="#" class="text-dark">نرم افزار اول</a></h4>
            <h6 class="card-subtitle text-muted">نرم افزار</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp app" data-wow-offset="50" data-wow-delay="0.1s">
        <div class="card shadow-sm mb-4">
          <div class="position-relative">
            <img src="<?php bloginfo('template_url'); ?>/images/portfolio/app2.jpg" class="card-img-top"/>
            <div class="card-img-overlay">
              <a href="#">
                <i class="fa fa-external-link"></i>
              </a>
              <a href="<?php bloginfo('template_url'); ?>/images/portfolio/app2.jpg" data-lightbox="portfolio"
                 data-title="نرم افزار دوم">
                <i class="fa fa-eye"></i>
              </a>
            </div>
          </div>
          <div class="card-body">
            <h4 class="card-title mb-4"><a href="#" class="text-dark">نرم افزار دوم</a></h4>
            <h6 class="card-subtitle text-muted">نرم افزار</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp graphic" data-wow-offset="50" data-wow-delay="0.2s">
        <div class="card shadow-sm mb-4">
          <div class="position-relative">
            <img src="<?php bloginfo('template_url'); ?>/images/portfolio/graphic1.jpg" class="card-img-top"/>
            <div class="card-img-overlay">
              <a href="#">
                <i class="fa fa-external-link"></i>
              </a>
              <a href="<?php bloginfo('template_url'); ?>/images/portfolio/graphic1.jpg"
                 data-lightbox="portfolio" data-title="گرافیک اول">
                <i class="fa fa-eye"></i>
              </a>
            </div>
          </div>
          <div class="card-body">
            <h4 class="card-title mb-4"><a href="#" class="text-dark">گرافیک اول</a></h4>
            <h6 class="card-subtitle text-muted">گرافیک</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp web" data-wow-offset="50">
        <div class="card shadow-sm mb-4">
          <div class="position-relative">
            <img src="<?php bloginfo('template_url'); ?>/images/portfolio/web1.jpg" class="card-img-top"/>
            <div class="card-img-overlay">
              <a href="#">
                <i class="fa fa-external-link"></i>
              </a>
              <a href="<?php bloginfo('template_url'); ?>/images/portfolio/web1.jpg" data-lightbox="portfolio"
                 data-title="وبسایت اول">
                <i class="fa fa-eye"></i>
              </a>
            </div>
          </div>
          <div class="card-body">
            <h4 class="card-title mb-4"><a href="#" class="text-dark">وبسایت اول</a></h4>
            <h6 class="card-subtitle text-muted">وب</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp graphic" data-wow-offset="50" data-wow-delay="0.1s">
        <div class="card shadow-sm mb-4">
          <div class="position-relative">
            <img src="<?php bloginfo('template_url'); ?>/images/portfolio/graphic2.jpg" class="card-img-top"/>
            <div class="card-img-overlay">
              <a href="#">
                <i class="fa fa-external-link"></i>
              </a>
              <a href="<?php bloginfo('template_url'); ?>/images/portfolio/graphic2.jpg"
                 data-lightbox="portfolio" data-title="گرافیک دوم">
                <i class="fa fa-eye"></i>
              </a>
            </div>
          </div>
          <div class="card-body">
            <h4 class="card-title mb-4"><a href="#" class="text-dark">گرافیک دوم</a></h4>
            <h6 class="card-subtitle text-muted">گرافیک</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp app" data-wow-offset="50" data-wow-delay="0.2s">
        <div class="card shadow-sm mb-4">
          <div class="position-relative">
            <img src="<?php bloginfo('template_url'); ?>/images/portfolio/app3.jpg" class="card-img-top"/>
            <div class="card-img-overlay">
              <a href="#">
                <i class="fa fa-external-link"></i>
              </a>
              <a href="<?php bloginfo('template_url'); ?>/images/portfolio/app3.jpg" data-lightbox="portfolio"
                 data-title="نرم افزار سوم">
                <i class="fa fa-eye"></i>
              </a>
            </div>
          </div>
          <div class="card-body">
            <h4 class="card-title mb-4"><a href="#" class="text-dark">نرم افزار سوم</a></h4>
            <h6 class="card-subtitle text-muted">نرم افزار</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp web" data-wow-offset="50">
        <div class="card shadow-sm mb-4">
          <div class="position-relative">
            <img src="<?php bloginfo('template_url'); ?>/images/portfolio/web2.jpg" class="card-img-top"/>
            <div class="card-img-overlay">
              <a href="#">
                <i class="fa fa-external-link"></i>
              </a>
              <a href="<?php bloginfo('template_url'); ?>/images/portfolio/web2.jpg" data-lightbox="portfolio"
                 data-title="وبسایت دوم">
                <i class="fa fa-eye"></i>
              </a>
            </div>
          </div>
          <div class="card-body">
            <h4 class="card-title mb-4"><a href="#" class="text-dark">وبسایت دوم</a></h4>
            <h6 class="card-subtitle text-muted">وب</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp web" data-wow-offset="50" data-wow-delay="0.1s">
        <div class="card shadow-sm mb-4">
          <div class="position-relative">
            <img src="<?php bloginfo('template_url'); ?>/images/portfolio/web3.jpg" class="card-img-top"/>
            <div class="card-img-overlay">
              <a href="#">
                <i class="fa fa-external-link"></i>
              </a>
              <a href="<?php bloginfo('template_url'); ?>/images/portfolio/web3.jpg" data-lightbox="portfolio"
                 data-title="وبسایت سوم">
                <i class="fa fa-eye"></i>
              </a>
            </div>
          </div>
          <div class="card-body">
            <h4 class="card-title mb-4"><a href="#" class="text-dark">وبسایت سوم</a></h4>
            <h6 class="card-subtitle text-muted">وب</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 wow fadeInUp graphic" data-wow-offset="50" data-wow-delay="0.2s">
        <div class="card shadow-sm mb-4">
          <div class="position-relative">
            <img src="<?php bloginfo('template_url'); ?>/images/portfolio/graphic3.jpg" class="card-img-top"/>
            <div class="card-img-overlay">
              <a href="#">
                <i class="fa fa-external-link"></i>
              </a>
              <a href="<?php bloginfo('template_url'); ?>/images/portfolio/graphic3.jpg"
                 data-lightbox="portfolio" data-title="گرافیک سوم">
                <i class="fa fa-eye"></i>
              </a>
            </div>
          </div>
          <div class="card-body">
            <h4 class="card-title mb-4"><a href="#" class="text-dark">گرافیک سوم</a></h4>
            <h6 class="card-subtitle text-muted">گرافیک</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="team">
  <div class="container">
    <header class="section-header wow fadeInUp">
      <br>

      <h3>تیم ما</h3>
      <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
    </header>
    <div class="row">
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-offset="150">
        <div class="card">
          <img src="<?php bloginfo('template_url'); ?>/images/team/team-1.jpg" class="card-img-top"/>
          <div class="card-img-overlay">
            <h4><a href="#">عضو اول</a></h4>
            <p>برنامه نویس</p>
            <div>
              <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
              <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
              <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
              <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s" data-wow-offset="150">
        <div class="card">
          <img src="<?php bloginfo('template_url'); ?>/images/team/team-2.jpg" class="card-img-top"/>
          <div class="card-img-overlay">
            <h4><a href="#">عضو دوم</a></h4>
            <p>گرافیست</p>
            <div>
              <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
              <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
              <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
              <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s" data-wow-offset="150">
        <div class="card">
          <img src="<?php bloginfo('template_url'); ?>/images/team/team-3.jpg" class="card-img-top"/>
          <div class="card-img-overlay">
            <h4><a href="#">عضو سوم</a></h4>
            <p>طراح وب</p>
            <div>
              <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
              <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
              <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
              <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s" data-wow-offset="150">
        <div class="card">
          <img src="<?php bloginfo('template_url'); ?>/images/team/team-4.jpg" class="card-img-top"/>
          <div class="card-img-overlay">
            <h4><a href="#">عضو چهارم</a></h4>
            <p>برنامه نویس</p>
            <div>
              <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
              <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
              <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
              <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="clients">
  <div class="container wow zoomIn" data-wow-duration="1.2s" data-wow-offset="120">
    <header class="section-header">
      <br>

      <h3>مشتریان ما</h3>
    </header>
    <div class="owl-carousel">
      <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/clients/client-1.png"/></a>
      <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/clients/client-2.png"/></a>
      <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/clients/client-3.png"/></a>
      <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/clients/client-4.png"/></a>
      <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/clients/client-5.png"/></a>
      <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/clients/client-6.png"/></a>
      <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/clients/client-7.png"/></a>
      <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/clients/client-8.png"/></a>
    </div>
  </div>
</section>

<footer id="footer" class="text-light text-justify">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <h5>درباره شرکت</h5>
        <p>
          لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
          چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
          کاربردهای متنوع.
        </p>
      </div>
      <div class="col-lg-3 col-md-6">
        <h5>پیوندهای مفید</h5>
        <ul class="list-unstyled">
          <li><i class="fa fa-angle-left"></i><a href="#">خانه</a></li>
          <li><i class="fa fa-angle-left"></i><a href="#">درباره ما</a></li>
          <li><i class="fa fa-angle-left"></i><a href="#">خدمات</a></li>
          <li><i class="fa fa-angle-left"></i><a href="#">قوانین و مقررات</a></li>
          <li><i class="fa fa-angle-left"></i><a href="#">حریم خصوصی</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6">
        <h5>تماس با ما</h5>
        <p>
          تهران - خیابان انقلاب - پلاک ۱۲۳۴
        </p>
        <p>
          <strong>تلفن : </strong><span style="direction: ltr;display: inline-block">۰۲۱ - ۱۲۳۴۵۶۷۸۹</span><br/>
          <strong>ایمیل : </strong>info@example.com<br/>
        </p>
        <div class="links">
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="#"><i class="fa fa-google-plus"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <h5>خبرنامه</h5>
        <p>
          لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
          چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
        </p>
        <form>
          <input type="email" name="email" placeholder="ایمیل خود را وارد کنید"/>
          <button type="submit">عضویت</button>
        </form>
      </div>
    </div>
  </div>
  <div style="background-color: black;">
    <p class="text-center p-3 mb-0">کلیه حقوق برای این شرکت محفوظ است.</p>
  </div>
</footer>

<a href="#home" id="go-to-top">
  <i class="fa fa-chevron-up"></i>
</a>





