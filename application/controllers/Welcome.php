<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('welcome_model', 'w');
		$this->load->helper('url');
        $this->load->database();
        $this->load->library('session');
	}

	public function index()
	{
		$get_power_plant 	= $this->w->get_power_plant();
		$get_cooling	 	= $this->w->get_cooling();
		$get_rack_space	 	= $this->w->get_rack_space();
		$data['pln']	 	= $get_power_plant->pln;
		$data['genset']  	= $get_power_plant->genset;
		$data['fueltank']	= $get_power_plant->fueltank;
		$data['lvmdp1']		= $get_power_plant->lvmdp1;
		$data['lvmdp2']		= $get_power_plant->lvmdp2;
		$data['lvmdp3']		= $get_power_plant->lvmdp3;
		$data['level3']		= $get_cooling->level3;
		$data['level4']		= $get_cooling->level4;
		$data['level6']		= $get_cooling->level6;
		$data['level7']		= $get_cooling->level7;
		$data['level8']		= $get_cooling->level8;
		$data['level9_bss']	= $get_cooling->level9_bss;
		$data['level9_transmisi']	= $get_cooling->level9_transmisi;
		$data['level3_r']		= $get_rack_space->level3;
		$data['level4_r']		= $get_rack_space->level4;
		$data['level6_r']		= $get_rack_space->level6;
		$data['level7_r']		= $get_rack_space->level7;
		$data['level8_r']		= $get_rack_space->level8;
		$data['level9_bss_r']	= $get_rack_space->level9_bss;
		$data['level9_transmisi_r']	= $get_rack_space->level9_transmisi;
		$data['level4_nonprod_r']	= $get_rack_space->level4_nonprod;
		
		$this->load->view('welcome', $data);
	}

	public function user()
	{
		$get_power_plant 	= $this->w->get_power_plant();
		$get_cooling	 	= $this->w->get_cooling();
		$get_rack_space	 	= $this->w->get_rack_space();
		$data['pln']	 	= $get_power_plant->pln;
		$data['genset']  	= $get_power_plant->genset;
		$data['fueltank']	= $get_power_plant->fueltank;
		$data['lvmdp1']		= $get_power_plant->lvmdp1;
		$data['lvmdp2']		= $get_power_plant->lvmdp2;
		$data['lvmdp3']		= $get_power_plant->lvmdp3;
		$data['level3']		= $get_cooling->level3;
		$data['level4']		= $get_cooling->level4;
		$data['level6']		= $get_cooling->level6;
		$data['level7']		= $get_cooling->level7;
		$data['level8']		= $get_cooling->level8;
		$data['level9_bss']	= $get_cooling->level9_bss;
		$data['level9_transmisi']	= $get_cooling->level9_transmisi;
		$data['level3_r']		= $get_rack_space->level3;
		$data['level4_r']		= $get_rack_space->level4;
		$data['level6_r']		= $get_rack_space->level6;
		$data['level7_r']		= $get_rack_space->level7;
		$data['level8_r']		= $get_rack_space->level8;
		$data['level9_bss_r']	= $get_rack_space->level9_bss;
		$data['level9_transmisi_r']	= $get_rack_space->level9_transmisi;
		$data['level4_nonprod_r']	= $get_rack_space->level4_nonprod;
		
		$user_data 				= $this->session->userdata('user_data');
		$data['user_data']		= $user_data;
	
		$this->load->view('welcome_message', $data);
	}

	public function form_power_plant(){
		$pln 						= $this->w->get_capacity('pln');
		$data['pln_capacity'] 		= $pln->capacity;
		$data['pln_unit'] 			= $pln->unit;

		$genset 					= $this->w->get_capacity('genset');
		$data['genset_capacity']	= $genset->capacity;
		$data['genset_unit']		= $genset->unit;

		$fueltank 			 		= $this->w->get_capacity('fueltank');
		$data['fueltank_capacity'] 	= $fueltank->capacity;
		$data['fueltank_unit'] 		= $fueltank->unit;

		$lvmdp1 					= $this->w->get_capacity('lvmdp1');
		$data['lvmdp1_capacity'] 	= $lvmdp1->capacity;
		$data['lvmdp1_unit'] 		= $lvmdp1->unit;

		$lvmdp2 					= $this->w->get_capacity('lvmdp2');
		$data['lvmdp2_capacity'] 	= $lvmdp2->capacity;
		$data['lvmdp2_unit'] 		= $lvmdp2->unit;

		$lvmdp3 					= $this->w->get_capacity('lvmdp3');
		$data['lvmdp3_capacity'] 	= $lvmdp3->capacity;
		$data['lvmdp3_unit'] 		= $lvmdp3->unit;

		$user_data 				= $this->session->userdata('user_data');
		$data['user_data']		= $user_data;

		$this->load->view('form_power_plant', $data);
	}	

	public function form_cooling(){
		$level3 						= $this->w->get_capacity('level3');
		$data['level3_capacity'] 		= $level3->capacity;
		$data['level3_unit'] 			= $level3->unit;

		$level4 					= $this->w->get_capacity('level4');
		$data['level4_capacity']	= $level4->capacity;
		$data['level4_unit']		= $level4->unit;

		$level6 			 		= $this->w->get_capacity('level6');
		$data['level6_capacity'] 	= $level6->capacity;
		$data['level6_unit'] 		= $level6->unit;

		$level7 					= $this->w->get_capacity('level7');
		$data['level7_capacity'] 	= $level7->capacity;
		$data['level7_unit'] 		= $level7->unit;

		$level8 					= $this->w->get_capacity('level8');
		$data['level8_capacity'] 	= $level8->capacity;
		$data['level8_unit'] 		= $level8->unit;

		$level9_bss 					= $this->w->get_capacity('level9_bss');
		$data['level9_bss_capacity'] 	= $level9_bss->capacity;
		$data['level9_bss_unit'] 		= $level9_bss->unit;

		$level9_transmisi 				= $this->w->get_capacity('level9_transmisi');
		$data['level9_transmisi_capacity'] 	= $level9_transmisi->capacity;
		$data['level9_transmisi_unit'] 		= $level9_transmisi->unit;

		$user_data 				= $this->session->userdata('user_data');
		$data['user_data']		= $user_data;

		$this->load->view('form_cooling', $data);
	}

	public function form_rack_space(){
		$level3_r 						= $this->w->get_capacity('level3_r');
		$data['level3_r_capacity'] 		= $level3_r->capacity;
		$data['level3_r_unit'] 			= $level3_r->unit;

		$level4_r 					= $this->w->get_capacity('level4_r');
		$data['level4_r_capacity']	= $level4_r->capacity;
		$data['level4_r_unit']		= $level4_r->unit;

		$level6_r 			 		= $this->w->get_capacity('level6_r');
		$data['level6_r_capacity'] 	= $level6_r->capacity;
		$data['level6_r_unit'] 		= $level6_r->unit;

		$level7_r 					= $this->w->get_capacity('level7_r');
		$data['level7_r_capacity'] 	= $level7_r->capacity;
		$data['level7_r_unit'] 		= $level7_r->unit;

		$level8_r 					= $this->w->get_capacity('level8_r');
		$data['level8_r_capacity'] 	= $level8_r->capacity;
		$data['level8_r_unit'] 		= $level8_r->unit;

		$level9_bss_r 					= $this->w->get_capacity('level9_bss_r');
		$data['level9_bss_r_capacity'] 	= $level9_bss_r->capacity;
		$data['level9_bss_r_unit'] 		= $level9_bss_r->unit;

		$level9_transmisi_r 				= $this->w->get_capacity('level9_transmisi_r');
		$data['level9_transmisi_r_capacity'] 	= $level9_transmisi_r->capacity;
		$data['level9_transmisi_r_unit'] 		= $level9_transmisi_r->unit;

		$level4_nonprod_r 				= $this->w->get_capacity('level4_nonprod_r');
		$data['level4_nonprod_r_capacity'] 	= $level4_nonprod_r->capacity;
		$data['level4_nonprod_r_unit'] 		= $level4_nonprod_r->unit;

		$user_data 				= $this->session->userdata('user_data');
		$data['user_data']		= $user_data;
		
		$this->load->view('form_rack_space', $data);
	}

	public function submit_power_plant(){
		$pln_capacity 		= $this->w->get_capacity('pln')->capacity;
		$genset_capacity 	= $this->w->get_capacity('genset')->capacity;
		$fueltank_capacity 	= $this->w->get_capacity('fueltank')->capacity;
		$lvmdp1_capacity 	= $this->w->get_capacity('lvmdp1')->capacity;
		$lvmdp2_capacity	= $this->w->get_capacity('lvmdp2')->capacity;
		$lvmdp3_capacity 	= $this->w->get_capacity('lvmdp3')->capacity;

		$pln 		=  round ( ( ( $this->input->post('pln') / $pln_capacity ) * 100 ),2 ) ;
		$genset 	=  round ( ( ( $this->input->post('genset') / $genset_capacity ) * 100 ),2 );
		$fueltank 	=  round ( ( ( $this->input->post('fueltank') / $fueltank_capacity ) * 100 ),2 );
		$lvmdp1 	=  round ( ( ( $this->input->post('lvmdp1') / $lvmdp1_capacity ) * 100 ),2 );
		$lvmdp2 	=  round ( ( ( $this->input->post('lvmdp2') / $lvmdp2_capacity ) * 100 ),2 );
		$lvmdp3 	=  round ( ( ( $this->input->post('lvmdp3') / $lvmdp3_capacity ) * 100 ),2 );
		
		$data 		= array(
						'pln' 		=> $pln,
						'genset' 	=> $genset,
						'fueltank' 	=> $fueltank,
						'lvmdp1' 	=> $lvmdp1,
						'lvmdp2' 	=> $lvmdp2,
						'lvmdp3' 	=> $lvmdp3,

						'pln_val'		=> $this->input->post('pln').'/'.$pln_capacity,
						'genset_val'	=> $this->input->post('genset').'/'.$genset_capacity,
						'fueltank_val'	=> $this->input->post('fueltank').'/'.$fueltank_capacity,
						'lvmdp1_val'	=> $this->input->post('lvmdp1').'/'.$lvmdp1_capacity,
						'lvmdp2_val'	=> $this->input->post('lvmdp2').'/'.$lvmdp2_capacity,
						'lvmdp3_val'	=> $this->input->post('lvmdp3').'/'.$lvmdp3_capacity,
						);
		// var_dump($data);die;	
		$input_power_plant = $this->db->insert('power_plant',$data);
		if($input_power_plant){
			redirect('welcome/index');
		}else{
			redirect('welcomesubmit_power_plant');
		}
	}	

	public function submit_cooling(){
		$level3_capacity 		= $this->w->get_capacity('level3')->capacity;
		$level4_capacity 	= $this->w->get_capacity('level4')->capacity;
		$level6_capacity 	= $this->w->get_capacity('level6')->capacity;
		$level7_capacity 	= $this->w->get_capacity('level7')->capacity;
		$level8_capacity	= $this->w->get_capacity('level8')->capacity;
		$level9_bss_capacity 	= $this->w->get_capacity('level9_bss')->capacity;
		$level9_transmisi_capacity 	= $this->w->get_capacity('level9_transmisi')->capacity;

		$level3 		=  round ( ( ( $this->input->post('level3') / $level3_capacity ) * 100 ),2 ) ;
		$level4 	=  round ( ( ( $this->input->post('level4') / $level4_capacity ) * 100 ),2 );
		$level6 	=  round ( ( ( $this->input->post('level6') / $level6_capacity ) * 100 ),2 );
		$level7 	=  round ( ( ( $this->input->post('level7') / $level7_capacity ) * 100 ),2 );
		$level8 	=  round ( ( ( $this->input->post('level8') / $level8_capacity ) * 100 ),2 );
		$level9_bss 	=  round ( ( ( $this->input->post('level9_bss') / $level9_bss_capacity ) * 100 ),2 );
		$level9_transmisi 	=  round ( ( ( $this->input->post('level9_transmisi') / $level9_transmisi_capacity ) * 100 ),2 );
		
		$data 		= array(
						'level3' 		=> $level3,
						'level4' 	=> $level4,
						'level6' 	=> $level6,
						'level7' 	=> $level7,
						'level8' 	=> $level8,
						'level9_bss' 	=> $level9_bss,
						'level9_transmisi' 	=> $level9_transmisi,

						'level3_val'		=> $this->input->post('level3').'/'.$level3_capacity,
						'level4_val'	=> $this->input->post('level4').'/'.$level4_capacity,
						'level6_val'	=> $this->input->post('level6').'/'.$level6_capacity,
						'level7_val'	=> $this->input->post('level7').'/'.$level7_capacity,
						'level8_val'	=> $this->input->post('level8').'/'.$level8_capacity,
						'level9_bss_val'	=> $this->input->post('level9_bss').'/'.$level9_bss_capacity,
						'level9_transmisi_val'	=> $this->input->post('level9_transmisi').'/'.$level9_transmisi_capacity,
						);
		// var_dump($data);die;	
		$input_cooling = $this->db->insert('cooling',$data);
		if($input_cooling){
			redirect('welcome/index');
		}else{
			redirect('welcomesubmit_cooling');
		}
	}

	public function submit_rack_space(){
		$level3_r_capacity 	= $this->w->get_capacity('level3_r')->capacity;
		$level4_r_capacity 	= $this->w->get_capacity('level4_r')->capacity;
		$level6_r_capacity 	= $this->w->get_capacity('level6_r')->capacity;
		$level7_r_capacity 	= $this->w->get_capacity('level7_r')->capacity;
		$level8_r_capacity	= $this->w->get_capacity('level8_r')->capacity;
		$level9_bss_r_capacity 	= $this->w->get_capacity('level9_bss_r')->capacity;
		$level9_transmisi_r_capacity 	= $this->w->get_capacity('level9_transmisi_r')->capacity;
		$level4_nonprod_r_capacity 	= $this->w->get_capacity('level4_nonprod_r')->capacity;

		$level3_r 		=  round ( ( ( $this->input->post('level3_r') / $level3_r_capacity ) * 100 ),2 ) ;
		$level4_r 	=  round ( ( ( $this->input->post('level4_r') / $level4_r_capacity ) * 100 ),2 );
		$level6_r 	=  round ( ( ( $this->input->post('level6_r') / $level6_r_capacity ) * 100 ),2 );
		$level7_r 	=  round ( ( ( $this->input->post('level7_r') / $level7_r_capacity ) * 100 ),2 );
		$level8_r 	=  round ( ( ( $this->input->post('level8_r') / $level8_r_capacity ) * 100 ),2 );
		$level9_bss_r 	=  round ( ( ( $this->input->post('level9_bss_r') / $level9_bss_r_capacity ) * 100 ),2 );
		$level9_transmisi_r 	=  round ( ( ( $this->input->post('level9_transmisi_r') / $level9_transmisi_r_capacity ) * 100 ),2 );
		$level4_nonprod_r 	=  round ( ( ( $this->input->post('level4_nonprod_r') / $level4_nonprod_r_capacity ) * 100 ),2 );
		
		$data 		= array(
						'level3' 		=> $level3_r,
						'level4' 	=> $level4_r,
						'level6' 	=> $level6_r,
						'level7' 	=> $level7_r,
						'level8' 	=> $level8_r,
						'level9_bss' 	=> $level9_bss_r,
						'level9_transmisi' 	=> $level9_transmisi_r,
						'level4_nonprod' 	=> $level4_nonprod_r,

						'level3_val'		=> $this->input->post('level3_r').'/'.$level3_r_capacity,
						'level4_val'	=> $this->input->post('level4_r').'/'.$level4_r_capacity,
						'level6_val'	=> $this->input->post('level6_r').'/'.$level6_r_capacity,
						'level7_val'	=> $this->input->post('level7_r').'/'.$level7_r_capacity,
						'level8_val'	=> $this->input->post('level8_r').'/'.$level8_r_capacity,
						'level9_bss_val'	=> $this->input->post('level9_bss_r').'/'.$level9_bss_r_capacity,
						'level9_transmisi_val'	=> $this->input->post('level9_transmisi_r').'/'.$level9_transmisi_r_capacity,
						'level4_nonprod_val'	=> $this->input->post('level4_nonprod_r').'/'.$level4_nonprod_r_capacity,
						);
		// var_dump($data);die;	
		$input_rack_space = $this->db->insert('rack_space',$data);
		if($input_rack_space){
			redirect('welcome/index');
		}else{
			redirect('welcomesubmit_rack_space');
		}
	}

}
