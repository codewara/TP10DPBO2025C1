<?php
require_once 'model/Interviewers.php';

class InterviewerViewModel {
    private $interviewer;

    public function __construct() {
        $this->interviewer = new Interviewers();
    }

    public function getInterviewerList() {
        return $this->interviewer->getAll();
    }

    public function getInterviewerById($id) {
        return $this->interviewer->getById($id);
    }

    public function addInterviewer($name, $department) {
        return $this->interviewer->create($name, $department);
    }

    public function updateInterviewer($id, $name, $department) {
        return $this->interviewer->update($id, $name, $department);
    }

    public function deleteInterviewer($id) {
        return $this->interviewer->delete($id);
    }
}
?>