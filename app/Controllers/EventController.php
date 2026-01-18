<?php

namespace App\Controllers;

use Config\Database;

class EventController extends BaseController
{
    public function index()
    {
        // $builder = $this->db->table('events'); 
        // $query = $builder->get()->getResult();
        // $data['events'] = $query;

        $query = $this->db->query('SELECT * FROM events');
        $data['events'] = $query->getResult();

        return view('events/event', $data);
    }

    public function create()
    {
        return view('events/create');
    }

    public function store() {
        $data = $this->request->getPost();
        $this->db->table('events')->insert($data);
        
        if($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('event'))->with("success", "Successfully Created Event");
        } else {
            return redirect()->back()->with("error", "Failed to Create Event");
        }
    }
}