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
        
        return view('event', $data);
    }
}