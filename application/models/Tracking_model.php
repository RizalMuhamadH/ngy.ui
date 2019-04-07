<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tracking_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    // get data by id
    function get_by_trans($no)
    {
        $this->db->select('customer.c_id,customer.c_name_sender,customer.c_address_sender,customer.c_city_sender,customer.c_postcode_sender,customer.c_phone_sender,customer.c_name_receiver,customer.c_address_receiver,customer.c_city_receiver,customer.c_postcode_receiver,customer.c_phone_receiver,transaction.t_id,transaction.t_no_trans,transaction.t_date_delivery,transaction.t_date_reception,transaction.t_status,transaction.t_desc,desc_transaction.dt_id,desc_transaction.dt_list_products,desc_transaction.dt_total_weight,desc_transaction.dt_total_items,desc_transaction.dt_packing,desc_transaction.dt_desc,desc_transaction.dt_total_price,packing.pk_id,packing.pk_name,status.s_id,status.s_name');
        $this->db->from('transaction');
        //add this line for join
        $this->db->join('customer', 'transaction.c_id = customer.c_id');
        $this->db->join('desc_transaction', 'transaction.dt_id = desc_transaction.dt_id');
        $this->db->join('packing', 'desc_transaction.dt_packing = packing.pk_id');
        $this->db->join('status', 'transaction.t_status  = status.s_id');
        $this->db->where('transaction.t_no_trans', $no);
        return $this->db->get()->row();
    }
}