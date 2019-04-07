<?php

class Tracking extends CI_Controller

{

    

    function __construct()

    {

      parent::__construct();
      
      $this->load->model('Tracking_model');
      $this->load->model('Product_model');
    }

    

    function index()

    {

        $noTrans = $this->input->post('no_trans');
        $row = $this->Tracking_model->get_by_trans($noTrans);


        if ($row) {
            $tmp = '';
            $items = '';
            $product = count($this->Product_model->get_products());
            $p = $this->Product_model->get_products();
            
            for($i = 0; $i < $product; $i++){
                $b = explode(',',$row->dt_list_products);
                foreach($b as $item){
                    $tmp = $item;
                    if($tmp == $p[$i]['p_id']){
                        $items = $items.$p[$i]['p_name'].",";
                        break;
                    }
                }
            }

            $data = array(
                'c_id' => $row->c_id,
                'c_name_sender' => $row->c_name_sender,
                'c_address_sender' => $row->c_address_sender,
                'c_city_sender' => $row->c_city_sender,
                'c_postcode_sender' => $row->c_postcode_sender,
                'c_phone_sender' => $row->c_phone_sender,
                'c_name_receiver' => $row->c_name_receiver,
                'c_address_receiver' => $row->c_address_receiver,
                'c_city_receiver' => $row->c_city_receiver,
                'c_postcode_receiver' => $row->c_postcode_receiver,
                'c_phone_receiver' => $row->c_phone_receiver,
                't_id' => $row->t_id,
                't_no_trans' => $row->t_no_trans,
                't_date_delivery' => $row->t_date_delivery,
                't_date_reception' => $row->t_date_reception,
                't_status' => $row->t_status,
                't_desc' => $row->t_desc,
                'dt_id' => $row->dt_id,
                'dt_list_products' => $items,
                'dt_total_weight' => $row->dt_total_weight,
                'dt_total_items' => $row->dt_total_items,
                'dt_packing' => $row->dt_packing,
                'dt_desc' => $row->dt_desc,
                'dt_total_price' => $row->dt_total_price,
                'pk_id' => $row->pk_id,
                'pk_name' => $row->pk_name,
                's_id' => $row->s_id,
                's_name' => $row->s_name,
                'data' => true
              );
        
              $this->template->display('frontend/tracking', $data);
        } else {
            $data = array(
                'data' => false,
                'message' => 'Data Tidak Ditemukan.'
            );
            $this->template->display('frontend/tracking', $data);
        }

    }
}