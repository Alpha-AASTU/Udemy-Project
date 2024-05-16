<?php

namespace Controller;

if(!defined("ROOT")) die ("direct script access denied");

/**
 * single course class
 */

class Course extends Controller
{
	
	public function index($slug = null)
	{

		$course = new \Model\Course();
		$data['title'] = "Course";

		//red the course data
		$data['row'] = $course->first(['slug'=>$slug]);
		
		//red all courses order by trending value
		$query = "select * from courses where approved = 0 order by trending desc limit 5";
		$data['trending'] = $course->query($query);
 
		$this->view('course',$data);
	}
	
}