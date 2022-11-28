<?php
class Course extends Controller
{

    public function index()
    {
        $data = [
            'title' => "Course"
        ];
        $this->view('Course/index', $data);
    }
}
