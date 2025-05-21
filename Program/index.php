<?php
require_once 'viewmodel/InterviewViewModel.php';
require_once 'viewmodel/CandidateViewModel.php';
require_once 'viewmodel/InterviewerViewModel.php';

$entity = isset($_GET['entity']) ? $_GET['entity'] : 'interview';
$action = isset($_GET['action']) ? $_GET['action'] : 'list';

if ($entity == 'interview') {
    $viewModel = new InterviewViewModel();
    if ($action == 'list') {
        $interviewList = $viewModel->getInterviewList();
        require_once 'views/interview_list.php';
    } elseif ($action == 'add') {
        $candidates = $viewModel->getCandidates();
        $interviewers = $viewModel->getInterviewers();
        require_once 'views/interview_form.php';
    } elseif ($action == 'edit') {
        $interview = $viewModel->getInterviewById($_GET['id']);
        $candidates = $viewModel->getCandidates();
        $interviewers = $viewModel->getInterviewers();
        require_once 'views/interview_form.php';
    } elseif ($action == 'save') {
        $viewModel->addInterview($_POST['candidate_id'], $_POST['interviewer_id'], $_POST['schedule'], $_POST['location']);
        header('Location: index.php?entity=interview');
    } elseif ($action == 'update') {
        $viewModel->updateInterview($_GET['id'], $_POST['candidate_id'], $_POST['interviewer_id'], $_POST['schedule'], $_POST['location']);
        header('Location: index.php?entity=interview');
    } elseif ($action == 'delete') {
        $viewModel->deleteInterview($_GET['id']);
        header('Location: index.php?entity=interview');
    }
} elseif ($entity == 'candidate') {
    $viewModel = new CandidateViewModel();
    if ($action == 'list') {
        $candidateList = $viewModel->getCandidateList();
        require_once 'views/candidate_list.php';
    } elseif ($action == 'add') {
        require_once 'views/candidate_form.php';
    } elseif ($action == 'edit') {
        $candidate = $viewModel->getCandidateById($_GET['id']);
        require_once 'views/candidate_form.php';
    } elseif ($action == 'save') {
        $viewModel->addCandidate($_POST['name'], $_POST['email']);
        header('Location: index.php?entity=candidate');
    } elseif ($action == 'update') {
        $viewModel->updateCandidate($_GET['id'], $_POST['name'], $_POST['email']);
        header('Location: index.php?entity=candidate');
    } elseif ($action == 'delete') {
        $viewModel->deleteCandidate($_GET['id']);
        header('Location: index.php?entity=candidate');
    }
} elseif ($entity == 'interviewer') {
    $viewModel = new InterviewerViewModel();
    if ($action == 'list') {
        $interviewerList = $viewModel->getInterviewerList();
        require_once 'views/interviewer_list.php';
    } elseif ($action == 'add') {
        require_once 'views/interviewer_form.php';
    } elseif ($action == 'edit') {
        $interviewer = $viewModel->getInterviewerById($_GET['id']);
        require_once 'views/interviewer_form.php';
    } elseif ($action == 'save') {
        $viewModel->addInterviewer($_POST['name'], $_POST['department']);
        header('Location: index.php?entity=interviewer');
    } elseif ($action == 'update') {
        $viewModel->updateInterviewer($_GET['id'], $_POST['name'], $_POST['department']);
        header('Location: index.php?entity=interviewer');
    } elseif ($action == 'delete') {
        $viewModel->deleteInterviewer($_GET['id']);
        header('Location: index.php?entity=interviewer');
    }
}
?>
