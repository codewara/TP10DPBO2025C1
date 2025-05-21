<?php
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4">Candidate List</h2>
<a href="index.php?entity=candidate&action=add" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add Candidate</a>
<table class="w-full border">
    <tr class="bg-gray-200">
        <th class="border p-2">Name</th>
        <th class="border p-2">Email</th>
        <th class="border p-2">Actions</th>
    </tr>
    <?php foreach ($candidateList as $candidate): ?>
    <tr>
        <td class="border p-2"><?php echo $candidate['name']; ?></td>
        <td class="border p-2"><?php echo $candidate['email']; ?></td>
        <td class="border p-2">
            <a href="index.php?entity=candidate&action=edit&id=<?php echo $candidate['ID']; ?>" class="text-blue-500">Edit</a>
            <a href="index.php?entity=candidate&action=delete&id=<?php echo $candidate['ID']; ?>" class="text-red-500 ml-2" onclick="return confirm('Are you sure?');">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?php
require_once 'views/template/footer.php';
?>