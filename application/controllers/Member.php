     <?php 

class Member extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Member_model'); 
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['judul'] = 'Member List';
		$data['member'] = $this->Member_model->getAllMember();
		if($this->input->post('keyword')){
			$data['member'] = $this->Member_model->cariDataMember();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('member/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['judul'] = 'Form of Add Member';
		
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
		$this->form_validation->set_rules('motivation', 'Motivation', 'required');
		$this->form_validation->set_rules('ig', 'Instagram', 'required');
		$this->form_validation->set_rules('phone', 'Phone Number', 'required');

		if($this->form_validation->run() == FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('member/tambah');
			$this->load->view('templates/footer');
		} else{
			$this->Member_model->tambahDataMember();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('member');
		}
	}

	public function detail($id)
	{
		$data['judul'] = 'Member Detail';
		$data['member'] = $this->Member_model->getMemberById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('member/detail', $data);
		$this->load->view('templates/footer');

	}

	
	public function hapus($id)
	{
		$this->Member_model->hapusDataMember($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('member');
		
	}

	public function ubah($id)
	{
		$data['judul'] = 'Form Ubah Data Member';
		$data['member'] = $this->Member_model->getMemberById($id);

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
		$this->form_validation->set_rules('motivation', 'Motivation', 'required');
		$this->form_validation->set_rules('ig', 'Instagram', 'required');
		$this->form_validation->set_rules('phone', 'Phone Number', 'required|numeric');

		if($this->form_validation->run() == FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('member/ubah', $data);
			$this->load->view('templates/footer');
		} else{
			$this->Member_model->ubahDataMember();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('member');
		}
	}
}