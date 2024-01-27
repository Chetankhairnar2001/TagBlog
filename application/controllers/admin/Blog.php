<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$query = $this->db->query("SELECT * FROM `articles` ORDER BY blogid DESC");
		$data['result'] = $query->result_array();
		$this->load->view('adminpanel/viewblog', $data); //pass data here
	}
	function addblog()
	{
		$this->load->view('adminpanel/addblog');
	}
	function addblog_post()
	{
		print_r($_POST);
		print_r($_FILES);
		if ($_FILES) {
			$config['upload_path']          = './assets/upload/blogimg/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('file')) { //name->file
				$error = array('error' => $this->upload->display_errors());
				die("Error");
				// $this->load->view('upload_form', $error);
			} else {
				$data = array('upload_data' => $this->upload->data());
				// echo "<pre>";
				// print_r($data);
				// echo $data['upload_data']['file_name'];

				$fileurl = 'assets/upload/blogimg/' . $data['upload_data']['file_name'];
				$blog_title = $_POST['blog_title'];
				$desc = $_POST['desc'];
				$tag = $_POST['blog_tag'];
				

				$query = $this->db->query("INSERT INTO `articles` (`blog_title`, `blog_desc`, `blog_img`,`tag`) VALUES ('$blog_title','$desc','$fileurl','$tag')");
				if ($query) {
					$this->session->set_flashdata('inserted', 'yes');
					redirect('admin/blog/addblog');
				}
			}
		} else {
		}
	}

	function editblog($blog_id)
	{
		// print_r($blog_id);
		$query = $this->db->query("SELECT `blog_title`, `blog_desc`, `blog_img`,`status`,`tag` FROM `articles` WHERE `blogid`='$blog_id' ");
		$data['result'] = $query->result_array();
		$data['blog_id'] = $blog_id;
		$this->load->view("adminpanel/editblog", $data);
	}

	function editblog_post()
	{
		// print_r($_POST); die();
		print_r($_FILES);
		if ($_FILES['file']['name']) {
			$config['upload_path']          = './assets/upload/blogimg/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('file')) { //name->file
				$error = array('error' => $this->upload->display_errors());
				die("Error Image type not supported");
				// $this->load->view('upload_form', $error);
			} else {
				$data = array('upload_data' => $this->upload->data());
				// echo "<pre>";
				// print_r($data['upload_data']['file_name']);
				$filename_location = "assets/upload/blogimg/" . $data['upload_data']['file_name'];
				$blog_title = $_POST['blog_title'];
				$desc = $_POST['desc'];
				$tag = $_POST['blog_tag'];
				$blog_id = $_POST['blog_id'];
				$publish_unpublish = $_POST['publish_unpublish'];

				$query = $this->db->query("UPDATE `articles` SET `blog_title`='$blog_title',`blog_desc`='$desc',`blog_img`='$filename_location',`status`='$publish_unpublish',`tag`='$tag' WHERE `blogid`='$blog_id'");
				if ($query) {
					$this->session->set_flashdata('updated', 'yes');
					redirect('admin/blog');
				} else {
					$this->session->set_flashdata('updated', 'no');
					redirect('admin/blog');
				}
			}
		} else {
			// die("Update without File");

			$blog_title = $_POST['blog_title'];
			$desc = $_POST['desc'];
			$blog_id = $_POST['blog_id'];
			$tag = $_POST['blog_tag'];
			$publish_unpublish = $_POST['publish_unpublish'];

			$query = $this->db->query("UPDATE `articles` SET `blog_title`='$blog_title',`blog_desc`='$desc',`status`='$publish_unpublish',`tag`='$tag' WHERE `blogid`='$blog_id'");

			if ($query) {
				$this->session->set_flashdata('updated', 'yes');
				redirect('admin/blog');
			} else {
				$this->session->set_flashdata('updated', 'no');
				redirect('admin/blog');
			}
		}
	}

	//working on here
	function deleteblog($blog_id)
	{
		$query = $this->db->query("DELETE FROM `articles` WHERE `blogid`='$blog_id'");
		if ($query) {
			$this->session->set_flashdata('deleted', 'yes');
		} else {
			$this->session->set_flashdata('deleted', 'no');
		}
		$this->load->view('adminpanel/deleteblog');
	}
}
