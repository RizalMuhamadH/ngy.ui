 <!--SLIDER-->

  <!-- <div class="slider">

    <div id="myCarousel" class="carousel slide" data-ride="carousel"> -->

      <!-- Indicators -->

      <!-- <ol class="carousel-indicators">

        <li data-target="#myCarousel" data-slide-to="0" id="slider-nav" class="active"></li>

        <li data-target="#myCarousel" data-slide-to="1" id="slider-nav"></li>

        <li data-target="#myCarousel" data-slide-to="2" id="slider-nav"></li>

      </ol> -->

  

      <!-- Wrapper for slides -->

      <!-- <div class="carousel-inner">

        <div class="item active">

          <img src="<?php echo base_url();?>assets/frontend/img/banner1.jpg" alt="Los Angeles" style="width:100%;">

        </div>

  

        <div class="item">

          <img src="<?php echo base_url();?>assets/frontend/img/banner2.jpg" alt="Chicago" style="width:100%;">

        </div>

      

        <div class="item">

          <img src="<?php echo base_url();?>assets/frontend/img/banner3.jpg" alt="New york" style="width:100%;">

        </div>

      </div>   -->

      <!-- Left and right controls -->

      <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">

        <span class="sr-only">Previous</span>

      </a>

      <a class="right carousel-control" href="#myCarousel" data-slide="next">

        <span class="sr-only">Next</span>

      </a>

    </div>

  </div> -->

  <!--/ SLIDER-->


  <!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="<?php echo base_url();?>assets/frontend/img/banner1.jpg" alt="" title="#slider-direction-1" style="width:100%;" />
        <img src="<?php echo base_url();?>assets/frontend/img/banner2.jpg" alt="" title="#slider-direction-2" style="width:100%;" />
        <img src="<?php echo base_url();?>assets/frontend/img/banner3.jpg" alt="" title="#slider-direction-3" style="width:100%;" />
      </div>

      <!-- direction 1 -->
      <!-- <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content"> -->
                <!-- layer 1 -->
                <!-- <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">The Best Business Information </h2>
                </div> -->
                <!-- layer 2 -->
                <!-- <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">We're In The Business Of Helping You Start Your Business</h1>
                </div> -->
                <!-- layer 3 -->
                <!-- <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                  <a class="ready-btn page-scroll" href="#about">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->

      <!-- direction 2 -->
      <!-- <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center"> -->
                <!-- layer 1 -->
                <!-- <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">The Best Business Information </h2>
                </div> -->
                <!-- layer 2 -->
                <!-- <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">We're In The Business Of Get Quality Business Service</h1>
                </div> -->
                <!-- layer 3 -->
                <!-- <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                  <a class="ready-btn page-scroll" href="#about">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->

      <!-- direction 3 -->
      <!-- <div id="slider-direction-3" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content"> -->
                <!-- layer 1 -->
                <!-- <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">The Best business Information </h2>
                </div> -->
                <!-- layer 2 -->
                <!-- <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Helping Business Security  & Peace of Mind for Your Family</h1>
                </div> -->
                <!-- layer 3 -->
                <!-- <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                  <a class="ready-btn page-scroll" href="#about">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      
    </div>
  </div>
  <!-- End Slider Area -->


  <!--CEK HARGA PAKET--> 

  <div class="content-bar" >

    <div class="container">

      <div class="row">

        <div class="col-lg-6" style="border-right:1px solid #DEDEDE">

          <h2><font color="Grey">Cek Biaya Kirim</font></h2>

          <form action="<?php echo base_url();?>home/maintenance">

            <table>

              <tr>

                <td>Provinsi</td>

                <td>&nbsp;:&nbsp;</td>

                <td>

                  <select class="form-control" style="width:340px;margin-left:10px;">

                    <option>Pulau Jawa</option>

                    <option>Luar Pulau Jawa</option>

                  </select>

                </td>

              </tr>

              <tr>

                <td>Dimensi</td>

                <td>&nbsp;:&nbsp;</td>

                <td>

                  <input type="text" class="form-control form-cek-harga" placeholder="Panjang">

                  <input type="text" class="form-control form-cek-harga" placeholder="Lebar">

                  <input type="text" class="form-control form-cek-harga" placeholder="Tinggi">

                </td>

              </tr>

              <tr>

                <td>Berat</td>

                <td>&nbsp;:&nbsp;</td>

                <td>

                  <input type="text" class="form-control form-cek-harga" placeholder="KG">

                </td>

              </tr>

              <tr>

                <td colspan="3">

                  <input type="submit" class="btn btn-success" style="height:40px;width:425px;margin-top:5px" value="Cek">

                </td>

              </tr>

            </table>

            

          </form>

        </div>

        <div class="col-lg-6">

          <div class="cek-paket">

            <h2><font color="Grey">Tracking Paket</font></h2>

            <form action="<?php echo base_url();?>home/maintenance">

              <input type="text" class="form-control form-cek-harga" style="width:250px;" placeholder="Masukan Nomor Resi">

              <input type="submit" class="btn btn-success" style="height:40px;margin-top:5px" value="Cek">

            </form>

          </div>

        </div>

      </div>

    </div>

  </div>

  <!--CEK HARGA PAKET-->