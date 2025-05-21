<?php
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4"><?php echo isset($interviewer) ? 'Edit Interviewer' : 'Add Interviewer'; ?></h2>
<form action="index.php?entity=interviewer&action=<?php echo isset($interviewer) ? 'update&id=' . $interviewer['ID'] : 'save'; ?>" method="POST" class="space-y-4">
    <div>
        <label class="block">Interviewer Name:</label>
        <input type="text" name="name" value="<?php echo isset($interviewer) ? $interviewer['name'] : ''; ?>" class="border p-2 w-full" required>
    </div>
    <div>
        <label class="block">Department:</label>
        <input type="text" name="department" value="<?php echo isset($interviewer) ? $interviewer['department'] : ''; ?>" class="border p-2 w-full" required>
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
</form>

<?php
require_once 'views/template/footer.php';
?>