<?php

class Students_Controller extends Base_Controller {

	public $restful = true;

	public function get_index() {
		return View::make('students.index')
			->with('title', 'Students Record')
			->with('students', Student::order_by('name')->get());
	}

	public function get_view($name) {
		return View::make('students.view')
			->with('title', 'Student View Page')
			->with('student', Student::find($name));
	}

	public function get_new() {
		return View::make('students.new')
			->with('title', 'Add New Student');
	}

	public function post_create() {
		$validation = Student::validate(Input::all());

		if ($validation->fails()) {
			return Redirect::to_route('new_student')->with_errors($validation)->with_input();
		} else {
			Student::create(array(
				'name'=>Input::get('name'),
				'phone'=>Input::get('phone'),
				'city'=>Input::get('city'),
				'branch'=>Input::get('branch'),
				'professor'=>Input::get('professor')
			));
			return Redirect::to_route('students')
				->with('message', 'The Student was created successfully!');
		}
	}

	public function get_edit($id) {
		return View::make('students.edit')
			->with('title', 'Edit Student')
			->with('student', Student::find($id));
	}

	public function put_update() {
		$id = Input::get('id');
		$validation = Student::validate(Input::all());

		if ($validation->fails()) {
			return Redirect::to_route('edit_student', $id)->with_errors($validation);
		} else {
			Student::update($id, array(
				'name'=>Input::get('name'),
				'phone'=>Input::get('phone'),
				'city'=>Input::get('city'),
				'branch'=>Input::get('branch'),
				'professor'=>Input::get('professor')
			));
			return Redirect::to_route('student', $id)
				->with('message', 'Student updated successfully!');
		}
	}

	public function delete_destroy() {
		Student::find(Input::get('id'))->delete();
		return Redirect::to_route('students')
			->with('message', 'The Student was deleted successfully!');
	}
}