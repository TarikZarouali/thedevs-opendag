<?php
class Contact extends Controller
{

    public function index()
    {
        $data = [
            'title' => "Contact"
        ];
        $this->view('Contact/index', $data);
    }
}
