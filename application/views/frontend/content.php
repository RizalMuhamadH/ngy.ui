 <!--SLIDER-->

  <div class="slider">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->

      <ol class="carousel-indicators">

        <li data-target="#myCarousel" data-slide-to="0" id="slider-nav" class="active"></li>

        <li data-target="#myCarousel" data-slide-to="1" id="slider-nav"></li>

        <li data-target="#myCarousel" data-slide-to="2" id="slider-nav"></li>

      </ol>

  

      <!-- Wrapper for slides -->

      <div class="carousel-inner">

        <div class="item active">

          <img src="<?php echo base_url();?>assets/frontend/img/banner1.jpg" alt="Los Angeles" style="width:100%;">

        </div>

  

        <div class="item">

          <img src="<?php echo base_url();?>assets/frontend/img/banner2.jpg" alt="Chicago" style="width:100%;">

        </div>

      

        <div class="item">

          <img src="<?php echo base_url();?>assets/frontend/img/banner3.jpg" alt="New york" style="width:100%;">

        </div>

      </div>  

      <!-- Left and right controls -->

      <a class="left carousel-control" href="#myCarousel" data-slide="prev">

        <span class="sr-only">Previous</span>

      </a>

      <a class="right carousel-control" href="#myCarousel" data-slide="next">

        <span class="sr-only">Next</span>

      </a>

    </div>

  </div>

  <!--/ SLIDER-->


  <!-- Start Slider Area -->
  <!-- <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="<?php echo base_url();?>assets/frontend/img/banner1.jpg" alt="" title="#slider-direction-1" style="width:100%;" />
        <img src="<?php echo base_url();?>assets/frontend/img/banner2.jpg" alt="" title="#slider-direction-2" style="width:100%;" />
        <img src="<?php echo base_url();?>assets/frontend/img/banner3.jpg" alt="" title="#slider-direction-3" style="width:100%;" />
      </div> -->

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
      
    <!-- </div>
  </div> -->
  <!-- End Slider Area -->


  <!--CEK HARGA PAKET--> 

  <div class="content-bar" >

    <div class="container">

      <div class="row">

        <div class="col-lg-6" style="border-right:1px solid #DEDEDE">

          <h2><font color="Grey">Cek Biaya Kirim</font></h2>

          <form action="<?php echo base_url();?>home/delivery_now">

            <table>

              <tr>

                <td>Ukuran</td>

                <td>&nbsp;:&nbsp;</td>

                <td>

                  <select id="dus" name="dus" onchange="getCheck()" class="form-control" style="width:340px;margin-left:10px;">

                    <option value="0">Box S</option>

                    <option value="1">Box M</option>

                    <option value="2">Box L</option>

                    <option value="3">Box LL</option>

                  </select>

                </td>

              </tr>

              <tr>

                <td>Dimensi</td>

                <td>&nbsp;:&nbsp;</td>

                <td>
                  
                  <input type="text" id="_panjang" class="form-control form-cek-harga" placeholder="Panjang" disabled>

                  <input type="text" id="_lebar" class="form-control form-cek-harga" placeholder="Lebar" disabled>

                  <input type="text" id="_tinggi" class="form-control form-cek-harga" placeholder="Tinggi" disabled>

                </td>

              </tr>

              <tr>
                <td>Biaya</td>
                <td>&nbsp;:&nbsp;</td>
                <td>
                  <div style="width:340px;margin-left:10px;padding-top:10px;">
                    <p id="_biaya"></p>
                  </div>
                  <!-- <input type="text" id="_harga" class="form-control" placeholder="Harga" style="width:340px;margin-left:10px;" disabled> -->
                </td>
              </tr>

              <tr>

                <!-- <td>Berat</td>

                <td>&nbsp;:&nbsp;</td>

                <td>

                  <input type="text" class="form-control form-cek-harga" placeholder="KG">

                </td> -->

              </tr>

              <tr>

                <td colspan="3">

                <a href="<?php echo base_url();?>home/delivery_now" style="height:40px;width:425px;margin-top:5px;background:red;border-radius:6px;color:white"><button type="button" class="btn btn-success btn-block">Order Now</button></a>

                  <!-- <input type="submit" class="btn btn-success" style="height:40px;width:425px;margin-top:5px" value="Order Now"> -->
                  <!-- <button type="button" class="btn">Basic</button> -->

                </td>

              </tr>

            </table>

            

          </form>

        </div>

        <div class="col-lg-6">

          <div class="cek-paket">

            <h2><font color="Grey">Tracking Paket</font></h2>

            <form action="<?php echo base_url();?>tracking" method="post">

              <input type="text" name="no_trans" id="no_trans" class="form-control form-cek-harga" style="width:250px;" placeholder="Masukan Nomor Resi">

              <input type="submit" class="btn btn-success" style="height:40px;margin-top:5px" value="Cek">

            </form>

          </div>

        </div>

      </div>

    </div>

  </div>

  <script>
        getCheck();
        function getCheck(){
          var select = document.getElementById("dus");
          var value = select.options[select.selectedIndex].value;

          if(value == "0"){
            document.getElementById("_panjang").value = "50 cm (P)";
            document.getElementById("_lebar").value = "33 cm (L)";
            document.getElementById("_tinggi").value = "33 cm (T)";
            document.getElementById("_biaya").innerHTML = "8.000 Yen";
          } else if(value == "1"){
            document.getElementById("_panjang").value = "47 cm (P)";
            document.getElementById("_lebar").value = "47 cm (L)";
            document.getElementById("_tinggi").value = "43 cm (T)";
            document.getElementById("_biaya").innerHTML = "12.000 Yen";
          } else if(value == "2"){
            document.getElementById("_panjang").value = "57 cm (P)";
            document.getElementById("_lebar").value = "46 cm (L)";
            document.getElementById("_tinggi").value = "42 cm (T)";
            document.getElementById("_biaya").innerHTML = "13.000 Yen";
          } else {
            document.getElementById("_panjang").value = "60 cm (P)";
            document.getElementById("_lebar").value = "56 cm (L)";
            document.getElementById("_tinggi").value = "48 cm (T)";
            document.getElementById("_biaya").innerHTML = "18.000 Yen";
          }
        }
      </script>

  <!--CEK HARGA PAKET-->
  
  <?php if($this->session->userdata('message') <> ''){ ?>
    <!-- <style>
      /* body {font-family: Arial, Helvetica, sans-serif;} */

      /* The Modal (background) */
      .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      }

      /* Modal Content */
      .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 50%;
      }
    </style> -->
      <!-- Modal -->
      <div class="modal" id="myModal" style="display: block;position: fixed;z-index: 1;padding-top: 200px;left: 0;top: 0;width: 100%;height: 100%;overflow: auto;">
        <div class="modal-content" style="background-color: #fefefe;margin: auto;padding: 20px;border: 1px solid #888;width: 50%;">
            <div class="modal-header">
              <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> -->
            </div>
            <div class="modal-body">
              
            <p><?php echo $this->session->userdata('message'); ?></p>
            </div>
            <div class="modal-footer">
              <button id="close" type="button" class="btn btn-secondary" >Close</button>
            </div>
          </div>
      </div>
      
      <script>
        
      // Get the modal
      var modal = document.getElementById('myModal');
      var btn = document.getElementById("close");
      btn.onclick = function() {
          modal.style.display = "none";
      }
      </script>

      
    <?php } ?>
