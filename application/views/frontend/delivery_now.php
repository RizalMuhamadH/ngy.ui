<!--SLIDER-->

  <div class="banner" style="background: url('<?php echo base_url();?>assets/frontend/img/delivery-now.jpg') no-repeat center top;background-size:cover;">

    <div class="bg-color">

      <div class="container">

        <div class="row">

          <div class="banner-text text-center">

            <div class="text-border">

            <!--   <h2 class="text-dec">Sambutan Direktur</h2>

            </div>

            <div class="intro-para text-center quote">

              <p class="big-text">Learning Today, Leading Tomorrow.</p>

              <p class="small-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium enim repellat sapiente quos architecto<br>Laudantium enim repellat sapiente quos architecto</p> -->

              <!-- <a href="#footer" class="btn get-quote">GET A QUOTE</a> -->

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

  <!--/ SLIDER-->

  <!-- The Modal -->
  <!-- <div id="myModal" class="modal" style="display: block;position: fixed;"> -->

  <!-- Modal content -->
  <!-- <div class="modal-content">
    <span class="close" data-dismiss="modal">&times;</span>
    <p>Some text in the Modal..</p>
  </div>

  </div> -->

  

  <!--CEK HARGA PAKET--> 

  <div class="content-bar" style="background:white">

    <div class="container">

      <div class="row" >

        <div class="col-lg-3">

          <h2><font color="red" style="border-bottom:1px solid grey;padding-bottom: 10px">Informasi Penting</u></font></h2>

          <div style="margin-left:10px">

            <a href="<?php echo base_url();?>home/kebijakan_pengiriman">Kebijakan Pengiriman</a><br>

            <a href="<?php echo base_url();?>home/ketentuan_pengiriman">Ketentuan Pengiriman</a><br>

            <a href="<?php echo base_url();?>home/disclaimer">Disclaimer</a><br>

            <a href="<?php echo base_url();?>home/faq">FAQ</a><br>

          </div>

        </div>

        <form action="<?php echo base_url();?>order/create_action" method="post">

        <div class="col-lg-9">

          <div class="col-lg-6">

              <h2>

              	<font color="red" style="border-bottom:1px solid grey;padding-bottom: 10px">

              		Identitas Pengirim

              	</font>

              </h2>

              <table>

                <tr style="height:50px">

                  <td>Nama</td>

                  <td>&nbsp;:&nbsp;&nbsp;</td>

                  <td><input type="text" name="c_name_sender" id="c_name_sender" class="form-control"></td>

                </tr>

                <tr  style="height:50px">

                  <td>Telepon 1</td>

                  <td>&nbsp;:&nbsp;</td>

                  <td><input type="text" name="c_phone_sender" id="c_phone_sender" class="form-control">
                  <span class="error">* Harus di isi</span></td>

                </tr>

                <tr  style="height:50px">

                  <td>Telepon 2</td>

                  <td>&nbsp;:&nbsp;</td>

                  <td><input type="text" name="c_phone_sender_2" id="c_phone_sender_2" class="form-control">
                  <span class="error">* Harus di isi</span></td>

                </tr>

                <tr  style="height:50px">

                  <td>Kota</td>

                  <td>&nbsp;:&nbsp;</td>

                  <td><input type="text" name="c_city_sender" id="c_city_sender" class="form-control"></td>

                </tr>

                <tr  style="height:50px">

                  <td>Alamat</td>

                  <td>&nbsp;:&nbsp;</td>

                  <td><textarea name="c_address_sender" id="c_address_sender" class="form-control"></textarea></td>

                </tr>

                <tr  style="height:50px">

                  <td>Kode Pos</td>

                  <td>&nbsp;:&nbsp;</td>

                  <td><input type="text" name="c_postcode_sender" id="c_postcode_sender" class="form-control"></td>

                </tr>

              </table>

          </div>

          <div class="col-lg-6" >

              <h2><font color="red" style="border-bottom:1px solid grey;padding-bottom: 10px">Identitas Penerima</u></font></h2>

              <table>

                <tr style="height:50px">

                  <td>Nama</td>

                  <td>&nbsp;:&nbsp;</td>

                  <td><input type="text" name="c_name_receiver" id="c_name_receiver" class="form-control"></td>

                </tr>

                <tr  style="height:50px">

                  <td>Telepon 1</td>

                  <td>&nbsp;:&nbsp;</td>

                  <td><input type="text" name="c_phone_receiver" id="c_phone_receiver" class="form-control">
                  <span class="error">* Harus di isi</span></td>

                </tr>

                <tr  style="height:50px">

                  <td>Telepon 2</td>

                  <td>&nbsp;:&nbsp;</td>

                  <td><input type="text" name="c_phone_receiver_2" id="c_phone_receiver_2" class="form-control">
                  <span class="error">* Harus di isi</span></td>

                </tr>

                <tr  style="height:50px">

                  <td>Kota</td>

                  <td>&nbsp;:&nbsp;&nbsp;</td>

                  <td><input type="text" name="c_city_receiver" id="c_city_receiver" class="form-control"></td>

                </tr>

                <tr  style="height:50px">

                  <td>Alamat</td>

                  <td>&nbsp;:&nbsp;</td>

                  <td><textarea name="c_address_receiver" id="c_address_receiver" class="form-control"></textarea></td>

                </tr>

                <tr  style="height:50px">

                  <td>Kode Pos</td>

                  <td>&nbsp;:&nbsp;</td>

                  <td><input type="text" name="c_postcode_receiver" id="c_postcode_receiver" class="form-control"></td>

                </tr>

              </table>

          </div>

        </div>

      </div>

      <div class="row" >

        <div class="col-lg-3"></div>

        <div class="col-lg-9">

          <div class="col-lg-6">

              <h2><font color="red" style="border-bottom:1px solid grey;padding-bottom: 10px">Informasi Paket</u></font></h2>

              <table>

                <tr style="height:50px">

                  <td>Jenis Packing</td>

                  <td>&nbsp;:&nbsp;&nbsp;</td>

                  <td>

                  <select class="form-control" name="dt_packing" id="dt_packing">
                    <?php
                      foreach ($packing as $p):
                    ?>
                      <option value="<?php echo $p->pk_id;?>" ><?php echo $p->pk_name;?></option>
                    <?php endforeach; ?>
                  </select>

                  </td>

                </tr>

                <tr style="height:50px">

                  <td>Berat(kg)</td>

                  <td>&nbsp;:&nbsp;</td>

                  <td><input type="text" name="dt_total_weight" id="dt_total_weight" class="form-control"></td>

                </tr>

                <tr style="height:50px">

                  <td>Jumlah Barang</td>

                  <td>&nbsp;:&nbsp;</td>

                  <td><input type="text" name="dt_total_items" id="dt_total_items" class="form-control"></td>

                </tr>

              </table>

          </div>

          <div class="col-lg-6" >

             <br>

             <br>

              <table>

                <tr style="height:50px">

                  <td>Jenis Barang : </td>

                </tr>

                <tr style="height:50px">

                <td>
                <select multiple class="form-control select2" name="product_tags[]" multiple="multiple" data-placeholder="List Barang (barang, barang, barang,)" id="p_list_products">
                  <!-- <option value="0">Sendal</option>
                  <option value="1">Sepatu</option> -->
                  <!-- <?php

                    $active = '';
                    $total = count($product);

                    $selected = '';
                    // Looping All Tags
                    for ($i=0; $i < $total ; $i++):
                      // Looping Post_tag jika ada
                      $p = explode(',', $dt_list_products);

                      foreach ($p as $bt){
                        $active = $bt;

                        if($active == $product[$i]['p_id']){
                          $selected = ' selected=selected';
                          break;
                        }else{
                          $selected = '';
                        }
                    }
                  ?> -->
                  <!-- <option value="<?php echo $product[$i]['p_id']; ?>" ><?php echo $product[$i]['p_name'];?></option> -->
                  <!-- <?php endfor; ?> -->
                </select>
                </td>

                </tr>

                <tr style="height:50px">

                  <td>Deskripsi Isi Paket : </td>

                </tr>

                <tr style="height:50px">

                  <td><textarea name="dt_desc" id="dt_desc" style="width:400px;height:102px" class="form-control"></textarea></td>

                </tr>

              </table>

          </div>

        </div>

      </div>

      <div class="row" >

        <div class="col-lg-3"></div>

        <div class="col-lg-9">

          <br>

          <br>

          <center>

             <div style="font-size:12px;"> 

             <input type="checkbox"> Anda telah memahami dan setuju dengan <a href="<?php echo base_url();?>home/kebijakan_pengiriman">Kebijakan Pengiriman</a> dan <a href="<?php echo base_url();?>home/ketentuan_pengiriman">Ketentuan Pengiriman</a><br> yang telah kami tentukan serta anda memahami dan menyetujui hal hal yang diluar tanggung <br> jawab kami yang di muat dalam <a href="<?php echo base_url();?>home/disclaimer">Disclaimer</a>.  <br><br>

            <input type="submit" class="btn btn-success" value="Delivery Now">

          </center>

          <br><br><br>

        </div>

      </div>

      </form>

    </div>

  </div>

  <!--CEK HARGA PAKET-->

  <?php if($this->session->userdata('message') <> ''){ ?>
    <!-- Modal -->
    <div class="modal" id="exampleModal" style="display: block;position: fixed;z-index: 1;padding-top: 200px;left: 0;top: 0;width: 100%;height: 100%;overflow: auto;">
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
    
    <!-- <script>
      var btn = document.getElementById("close");
      btn.onclick = function() {
        modal.style.display = "none";
      }
    </script> -->

    <!-- <script type="text/javascript">
        $(function(){
          $('.select2').select2({
              minimumInputLength: 3,
              allowClear: true,
              placeholder: 'masukkan nama barang',
              ajax: {
                  dataType: 'json',
                  url: '/product/list_product',
                  delay: 800,
                  data: function(params) {
                    console.log("masuk 1");
                    return {
                      search: params.term
                    }
                  },
                  processResults: function (data, page) {
                    console.log("masuk 1");
                  return {
                    results: data
                  };
                },
              }
          })
          .on('select2:select', function (evt) {
            var data = $(".select2 option:selected").text();
            alert("Data yang dipilih adalah "+data);
          }
          );
    });
    </script> -->
  <?php } ?>
  