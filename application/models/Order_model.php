<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Order_model extends CI_Model
{

    public $table = 'customer';
    public $id = 'c_id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // datatables
    function json() {
        $this->datatables->select('customer.c_id,customer.c_name_sender,customer.c_address_sender,customer.c_city_sender,customer.c_postcode_sender,customer.c_phone_sender,customer.c_name_receiver,customer.c_address_receiver,customer.c_city_receiver,customer.c_postcode_receiver,customer.c_phone_receiver,transaction.t_id,transaction.t_no_trans,transaction.t_date_delivery,transaction.t_date_reception,transaction.t_status,transaction.t_desc,desc_transaction.dt_id,desc_transaction.dt_list_products,desc_transaction.dt_total_weight,desc_transaction.dt_total_items,desc_transaction.dt_packing,desc_transaction.dt_desc,desc_transaction.dt_total_price,packing.pk_id,packing.pk_name,status.s_id,status.s_name');
        $this->datatables->from('customer');
        //add this line for join
        $this->datatables->join('transaction', 'customer.c_id = transaction.c_id');
        $this->datatables->join('desc_transaction', 'transaction.dt_id = desc_transaction.dt_id');
        $this->datatables->join('packing', 'desc_transaction.dt_packing = packing.pk_id');
        $this->datatables->join('status', 'transaction.t_status  = status.s_id');
        $this->datatables->add_column('action', anchor(site_url('customer/read/$1'),'Read',array('target' => '_blank'))." | ".anchor(site_url('customer/update/$1'),'Update')." | ".anchor(site_url('customer/delete/$1'),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), 'c_id');
        return $this->datatables->generate();
    }

    // get all
    function get_all()
    {
        $this->db->select('customer.c_id,customer.c_name_sender,customer.c_address_sender,customer.c_city_sender,customer.c_postcode_sender,customer.c_phone_sender,customer.c_name_receiver,customer.c_address_receiver,customer.c_city_receiver,customer.c_postcode_receiver,customer.c_phone_receiver,transaction.t_id,transaction.t_no_trans,transaction.t_date_delivery,transaction.t_date_reception,transaction.t_status,transaction.t_desc,desc_transaction.dt_id,desc_transaction.dt_list_products,desc_transaction.dt_total_weight,desc_transaction.dt_total_items,desc_transaction.dt_packing,desc_transaction.dt_desc,desc_transaction.dt_total_price,packing.pk_id,packing.pk_name,status.s_id,status.s_name');
        $this->db->from('customer');
        //add this line for join
        $this->db->join('transaction', 'customer.c_id = transaction.c_id');
        $this->db->join('desc_transaction', 'transaction.dt_id = desc_transaction.dt_id');
        $this->db->join('packing', 'desc_transaction.dt_packing = packing.pk_id');
        $this->db->join('status', 'transaction.t_status  = status.s_id');
        $this->db->order_by($this->table.".".$this->id, $this->order);
        return $this->db->get()->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->select('customer.c_id,customer.c_name_sender,customer.c_address_sender,customer.c_city_sender,customer.c_postcode_sender,customer.c_phone_sender,customer.c_name_receiver,customer.c_address_receiver,customer.c_city_receiver,customer.c_postcode_receiver,customer.c_phone_receiver,transaction.t_id,transaction.t_no_trans,transaction.t_date_delivery,transaction.t_date_reception,transaction.t_status,transaction.t_desc,desc_transaction.dt_id,desc_transaction.dt_list_products,desc_transaction.dt_total_weight,desc_transaction.dt_total_items,desc_transaction.dt_packing,desc_transaction.dt_desc,desc_transaction.dt_total_price,packing.pk_id,packing.pk_name,status.s_id,status.s_name');
        $this->db->from($this->table);
        //add this line for join
        $this->db->join('transaction', 'customer.c_id = transaction.c_id');
        $this->db->join('desc_transaction', 'transaction.dt_id = desc_transaction.dt_id');
        $this->db->join('packing', 'desc_transaction.dt_packing = packing.pk_id');
        $this->db->join('status', 'transaction.t_status  = status.s_id');
        $this->db->where('customer.'.$this->id, $id);
        return $this->db->get()->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('c_id', $q);
	$this->db->or_like('c_name_sender', $q);
	$this->db->or_like('c_address_sender', $q);
	$this->db->or_like('c_city_sender', $q);
	$this->db->or_like('c_postcode_sender', $q);
	$this->db->or_like('c_phone_sender', $q);
	$this->db->or_like('c_name_receiver', $q);
	$this->db->or_like('c_address_receiver', $q);
	$this->db->or_like('c_city_receiver', $q);
	$this->db->or_like('c_postcode_receiver', $q);
	$this->db->or_like('c_phone_receiver', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('c_id', $q);
	$this->db->or_like('c_name_sender', $q);
	$this->db->or_like('c_address_sender', $q);
	$this->db->or_like('c_city_sender', $q);
	$this->db->or_like('c_postcode_sender', $q);
	$this->db->or_like('c_phone_sender', $q);
	$this->db->or_like('c_name_receiver', $q);
	$this->db->or_like('c_address_receiver', $q);
	$this->db->or_like('c_city_receiver', $q);
	$this->db->or_like('c_postcode_receiver', $q);
	$this->db->or_like('c_phone_receiver', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Customer_model.php */
/* Location: ./application/models/Customer_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-03-21 11:28:35 */
/* http://harviacode.com */