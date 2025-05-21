<?php
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4"><?php echo isset($interview) ? 'Edit Interview' : 'Add Interview'; ?></h2>
<form action="index.php?entity=interview&action=<?php echo isset($interview) ? 'update&id=' . $interview['ID'] : 'save'; ?>" method="POST" class="space-y-4">
    <div>
        <label class="block">Candidate:</label>
        <select name="candidate_id" class="border p-2 w-full" required>
            <?php foreach ($candidates as $candidate): ?>
                <option value="<?php echo $candidate['ID']; ?>" <?php echo isset($interview) && $interview['candidate_ID'] == $candidate['ID'] ? 'selected' : ''; ?>><?php echo $candidate['name']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <label class="block">Interview:</label>
        <select name="interviewer_id" class="border p-2 w-full" required>
            <?php foreach ($interviewers as $interviewer): ?>
                <option value="<?php echo $interviewer['ID']; ?>" <?php echo isset($interview) && $interview['interviewer_ID'] == $interviewer['ID'] ? 'selected' : ''; ?>><?php echo $interviewer['name']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <label class="block">Schedule:</label>
        <input type="datetime-local" name="schedule" value="<?php echo isset($interview) ? date('Y-m-d\TH:i', strtotime($interview['schedule'])) : ''; ?>" class="border p-2 w-full" required>
    </div>
    <div>
        <label class="block">Location:</label>
        <input type="text" name="location" value="<?php echo isset($interview) ? $interview['location'] : ''; ?>" class="border p-2 w-full" required>
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
</form>

<?php
require_once 'views/template/footer.php';
?>