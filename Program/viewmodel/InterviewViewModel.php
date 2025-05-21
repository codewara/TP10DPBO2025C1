<?php
require_once 'model/Interviews.php';
require_once 'model/Candidates.php';
require_once 'model/Interviewers.php';

class InterviewViewModel {
    private $interview;
    private $candidate;
    private $interviewer;

    public function __construct() {
        $this->interview = new Interviews();
        $this->candidate = new Candidates();
        $this->interviewer = new Interviewers();
    }

    public function getInterviewList() {
        return $this->interview->getAll();
    }

    public function getInterviewById($id) {
        return $this->interview->getById($id);
    }

    public function getCandidates() {
        return $this->candidate->getAll();
    }

    public function getInterviewers() {
        return $this->interviewer->getAll();
    }

    public function addInterview($candidate_id, $interviewer_id, $schedule, $location) {
        return $this->interview->create($candidate_id, $interviewer_id, $schedule, $location);
    }

    public function updateInterview($id, $candidate_id, $interviewer_id, $schedule, $location) {
        return $this->interview->update($id, $candidate_id, $interviewer_id, $schedule, $location);
    }

    public function deleteInterview($id) {
        return $this->interview->delete($id);
    }
}
?>