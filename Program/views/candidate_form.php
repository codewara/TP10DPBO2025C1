<?php
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4"><?php echo isset($candidate) ? 'Edit Candidate' : 'Add Candidate'; ?></h2>
<form action="index.php?entity=candidate&action=<?php echo isset($candidate) ? 'update&id=' . $candidate['ID'] : 'save'; ?>" method="POST" class="space-y-4">
    <div>
        <label class="block">Name:</label>
        <input type="text" name="name" value="<?php echo isset($candidate) ? $candidate['name'] : ''; ?>" class="border p-2 w-full" required>
    </div>
    <div>
        <label class="block">Email:</label>
        <input type="email" name="email" value="<?php echo isset($candidate) ? $candidate['email'] : ''; ?>" class="border p-2 w-full" required>
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
</form>

<?php
require_once 'views/template/footer.php';
?>