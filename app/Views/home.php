<?= $this->extend('layout_beranda/template'); ?>

<?= $this->section('content'); ?>
<!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Labes.id</span></h2>
          <p class="animate__animated fanimate__adeInUp">Website Layanan Penyedia Lowongan Pekerjaan Khusus Kepada Pelajar-Pelajar SMK.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Labes.id - Bursa Kerja Khusus</h2>
          <p class="animate__animated animate__fadeInUp">Kami menyediakan sebuah layanan yang sangat berguna bagi SMK yang belum menyediakan sebuah website BKK. Kami melihat beberapa SMK belum menyediakan website yang membantu para murid untuk mencari sebuah lowongan pekerjaan.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Bursa Kerja Khusus</h2>
          <p class="animate__animated animate__fadeInUp">Hal yang kami ketahui sejauh ini untuk ada sekolah yang memberikan informasi melalui mulut ke mulut yang terkadang membuat informasi menjadi kurang akurat dan jelas.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>About</h2>
          <p>Who we are</p>
        </div>

        <div class="features" id="features">
        	<ul class="nav nav-tabs row d-flex">
        		<li class="nav-item col-3" data-aos="zoom-in">
        			<a class="nav-link active show" data-toggle="tab" href="#tab-1">
        				<i class="ri-gps-line"></i>
        				<h4 class="d-none d-lg-block">Information Facilitator</h4>
        			</a>
        		</li>
        		<li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100">
        			<a class="nav-link" data-toggle="tab" href="#tab-2">
        				<i class="ri-body-scan-line"></i>
        				<h4 class="d-none d-lg-block">Obvious</h4>
        			</a>
        		</li>
        		<li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200">
        			<a class="nav-link" data-toggle="tab" href="#tab-3">
        				<i class="ri-sun-line"></i>
        				<h4 class="d-none d-lg-block">Great Ideas</h4>
        			</a>
        		</li>
        		<li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="300">
        			<a class="nav-link" data-toggle="tab" href="#tab-4">
        				<i class="ri-store-line"></i>
        				<h4 class="d-none d-lg-block">Quality Work</h4>
        			</a>
        		</li>
        	</ul>
        </div>

        <br><br>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-6">
            <p>
              As a provider
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Wadah mempertemukan lulusan dengan pencari kerja</li>
              <li><i class="ri-check-double-line"></i> Wadah dalam pelatihan lulusan yang sesuai dengan permintaan pencari kerja</li>
              <li><i class="ri-check-double-line"></i> Wadah menjaring informasi tentang pasar kerja</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Pemberdayaan BKK SMK merupakan salah satu fungsi dalam manajemen sekolah yaitu sebagai bagian pembinaan terhadap proses pelaksanaan kegiatan BKK SMK yang telah direncanakan dalam upaya mencapai tujuan pendidikan SMK. BKK SMK merupakan salah satu komponen pelaksanaan pendidikan sistem ganda, karena tidak mungkin bisa dilaksanakan proses pembelajaran yang mengarah kepada kompetensi jika tidak ada pasangan industri/usaha kerja, sebagai lingkungan kerja dimana siswa belajar keahlian dan profesional serta etos kerja sesuai dengan tuntutan dunia kerja.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
    	<div class="container">
    		<div class="section-title" data-aos="zoom-out">
    			<h2>LOCATION</h2>
    			<p>Where we are</p>
    		</div>
	        <div class="row" data-aos="zoom-out">
	        	<div class="col-md-6 text-center text-lg-left">
	        		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.3642847055908!2d112.61520331392595!3d-7.96125368154177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788281bdd08839%3A0xc915f268bffa831f!2sState%20University%20of%20Malang!5e0!3m2!1sen!2sid!4v1606433460319!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	        	</div>
	        	<div class="col-md-3 align-items-center">
	        		<img src="img/map2.png" width="600px">
	        	</div>
	        </div>
        </div>
	</section><!-- End Pricing Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Jl. Semarang No.5, Sumbersari, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>labesid@example.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+62 8xxxxxxxxx</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

            <?php 
                if (!empty(session()->getFlashdata('success'))) { ?>
                    <div class="alert alert-success">
                      <?php echo session()->getFlashdata('success'); ?>
                    </div>
                <?php }

                if (!empty(session()->getFlashdata('error'))) { ?>
                  <div class="alert alert-danger">
                    <?php echo session()->getFlashdata('error'); ?>
                  </div>
                <?php }
          

                echo form_open('home/send'); ?>

                <div class="form-row">
                  <div class="col-md-6 form-group">
                    <?php 
                        form_label('Name');
                        $name = [
                            'type'  => 'text',
                            'name'  => 'name',
                            'Class' => 'form-control',
                            'placeholder' => 'Your Name'
                        ];

                        echo form_input($name);
                     ?>
                    <!-- <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div> -->
                  </div>
                  <div class="col-md-6 form-group">
                    <?php 
                        form_label('Email');
                        $email = [
                            'type'  => 'email',
                            'name'  => 'email',
                            'Class' => 'form-control',
                            'placeholder' => 'Your Email'
                        ];

                        echo form_input($email);
                     ?>
                    <!-- <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validate"></div> -->
                  </div>
                </div>
                <div class="form-group">
                  <?php 
                        form_label('Subject');
                        $subject = [
                            'type'  => 'text',
                            'name'  => 'subject',
                            'Class' => 'form-control',
                            'placeholder' => 'Subject'
                        ];

                        echo form_input($subject);
                     ?>
                  <!-- <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validate"></div> -->
                </div>
                <div class="form-group">
                  <?php 
                        form_label('Message');
                        $message = [
                            'type'  => 'text',
                            'name'  => 'message',
                            'Class' => 'form-control',
                            'placeholder' => 'Message'
                        ];

                        echo form_input($message);
                     ?>
                  <!-- textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validate"></div> -->
                </div>
                <!-- <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div> -->
                <div class="text-center"><button type="submit">Send Message</button></div>
              </div>
              <?php echo form_close() ?>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
<?= $this->endSection(); ?>