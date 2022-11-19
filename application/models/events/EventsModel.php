<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EventsModel extends CI_Model {

	public function getAllEvents() {
		$this->db->order_by('id_event', 'desc');
		return $this->db->get('ms_event')->result_object();
	}
	public function getAllEventsOld() {
		$this->db->order_by('id_event', 'random');
		return $this->db->get('ms_event')->result_object();
	}
	public function insertEvent($data) {
		return $this->db->insert('ms_event', $data);
	}
	public function updateEvent($data) {
		$this->db->where('id_event', $data['id_event']);
		return $this->db->update('ms_event', $data);
	}
	public function deleteEvent($id_event) {
		$this->db->where('id_event', $id_event);
		return $this->db->delete('ms_event');
	}
	public function getEventBySlug($event_slug) {
		$this->db->where('event_slug', $event_slug);
		return $this->db->get('ms_event')->row_object();
	}

}

/* End of file EventsModel.php */
/* Location: ./application/models/events/EventsModel.php */