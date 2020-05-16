<?php

class ChatController extends MY_Controller
{
	function __construct()
	{
		parent::__construct();

	}

	/**
	 *
	 * Store a new message in chat table
	 */
	public function sendMessage()
	{
		$sent_by = $this->my_id;
		$message = $this->input->post('message');
		$sentTo = $this->input->post('sendMessageTo');
		//	insert into one_to_one_chat
		$data = array(
			"from_user_id" => $sent_by,
			"to_user_id" => $sentTo,
			"message_body" => $message,
			"message_time" => date('Y-m-d H:i:s'),
		);
		if ($this->db->insert('one_to_one_chat', $data)) {
			echo 'Success';
		} else {
			echo 'failed';
		}
	}

	public function fetchMessages()
	{
		$friend_id = $_POST['friend_id'];
		$this->db->select('
		(case when one_to_one_chat.from_user_id=' . $this->my_id . ' THEN tbl_users.full_name
		ELSE
		u.full_name
		END
		) as full_name,one_to_one_chat.message_body,one_to_one_chat.message_time,one_to_one_chat.to_user_id,
		one_to_one_chat.message_type,one_to_one_chat.attachment_file_name,one_to_one_chat.attachment_file_type,one_to_one_chat.attachment_path');
		$condition1 = array(
			"from_user_id" => $this->my_id,
			"to_user_id" => $friend_id,
		);
		/*
		$condition2 = array(
			"from_user_id" => $friend_id,
			"to_user_id" => $this->my_id,
		);
		*/
		$this->db->where($condition1);
		$this->db->or_where("from_user_id =". $friend_id." AND to_user_id =". $this->my_id);

		$this->db->join('tbl_users', 'tbl_users.user_id=one_to_one_chat.to_user_id');
		$this->db->join('tbl_users as u', 'u.user_id=one_to_one_chat.from_user_id');
		$this->db->group_by('one_to_one_chat.id');
		$response = $this->db->get('one_to_one_chat')->result();
		die(json_encode($response));
	}

	public function sendAttachment()
	{
		$sent_by = $this->my_id;
		$attachmentName = $_FILES['file']['name'];
		$attachmentPath = '';
		$sentTo = $this->input->post('sendMessageTo');
		if (isset($_FILES['file']['name']) && !empty($_FILES['file']['name'])) {
			$ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
			$_FILES['fil']['name'] = "file" . time() . "." . $ext;
			$_FILES['fil']['type'] = $_FILES['file']['type'];
			$_FILES['fil']['tmp_name'] = $_FILES['file']['tmp_name'];
			$_FILES['fil']['error'] = $_FILES['file']['error'];
			$_FILES['fil']['size'] = $_FILES['file']['size'];

			// File upload configuration
			$uploadPath = 'uploads/';
			$config['upload_path'] = $uploadPath;
			$config['allowed_types'] = '*';
			// Load and initialize upload library
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			// Upload file to server
			if ($this->upload->do_upload('fil')) {
				$fileData = $this->upload->data();
				$attachmentPath = base_url('uploads/') . $fileData['file_name'];
			}
			//	insert into one_to_one_chat
			$data = array(
				"from_user_id" => $sent_by,
				"to_user_id" => $sentTo,
				"message_body" => null,
				"message_type" => 2,
				"message_time" => date('Y-m-d H:i:s'),
				"attachment_file_name" => $attachmentName,
				"attachment_path" => $attachmentPath,
				"attachment_file_type" => $ext=="pdf"?2:1,
			);
			if ($this->db->insert('one_to_one_chat', $data)) {
				echo 'Success';
			} else {
				echo 'failed';
			}
		}
	}
}

?>


