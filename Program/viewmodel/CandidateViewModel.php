<?php
require_once 'model/Candidates.php';

class CandidateViewModel {
    private $candidate;

    public function __construct() {
        $this->candidate = new Candidates();
    }

    public function getCandidateList() {
        return $this->candidate->getAll();
    }

    public function getCandidateById($id) {
        return $this->candidate->getById($id);
    }

    public function addCandidate($name, $email) {
        return $this->candidate->create($name, $email);
    }

    public function updateCandidate($id, $name, $email) {
        return $this->candidate->update($id, $name, $email);
    }

    public function deleteCandidate($id) {
        return $this->candidate->delete($id);
    }
}
?>