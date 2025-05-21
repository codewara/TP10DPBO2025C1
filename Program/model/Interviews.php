<?php
require_once 'config/Database.php';

class Interviews {
    private $conn;
    private $table = 'interviews';

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAll() {
        $query = "SELECT i.*, c.name as candidate_name, itv.name as interviewer_name 
                 FROM " . $this->table . " i 
                 JOIN candidates c ON i.candidate_id = c.id 
                 JOIN interviewers itv ON i.interviewer_id = itv.id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $query = "SELECT i.*, c.name as candidate_name, itv.name as interviewer_name 
                 FROM " . $this->table . " i 
                 JOIN candidates c ON i.candidate_id = c.id 
                 JOIN interviewers itv ON i.interviewer_id = itv.id 
                 WHERE i.id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($candidate_id, $interviewer_id, $schedule, $location) {
        $query = "INSERT INTO " . $this->table . " (candidate_id, interviewer_id, schedule, location) 
                  VALUES (:candidate_id, :interviewer_id, :schedule, :location)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':candidate_id', $candidate_id);
        $stmt->bindParam(':interviewer_id', $interviewer_id);
        $stmt->bindParam(':schedule', $schedule);
        $stmt->bindParam(':location', $location);
        return $stmt->execute();
    }

    public function update($id, $candidate_id, $interviewer_id, $schedule, $location) {
        $query = "UPDATE " . $this->table . " SET candidate_id = :candidate_id, interviewer_id = :interviewer_id,schedule = :schedule, location = :location WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':candidate_id', $candidate_id);
        $stmt->bindParam(':interviewer_id', $interviewer_id);
        $stmt->bindParam(':schedule', $schedule);
        $stmt->bindParam(':location', $location);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
?>