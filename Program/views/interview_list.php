<?php
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4">Interview List</h2>
<a href="index.php?entity=interview&action=add" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add Interview</a>
<table class="w-full border">
    <tr class="bg-gray-200">
        <th class="border p-2">Candidate</th>
        <th class="border p-2">Interviewer</th>
        <th class="border p-2">Schedule</th>
        <th class="border p-2">Location</th>
        <th class="border p-2">Actions</th>
    </tr>
    <?php foreach ($interviewList as $interview): ?>
    <tr>
        <td class="border p-2"><?php echo $interview['candidate_name']; ?></td>
        <td class="border p-2"><?php echo $interview['interviewer_name']; ?></td>
        <td class="border p-2"><?php echo $interview['schedule']; ?></td>
        <td class="border p-2"><?php echo $interview['location']; ?></td>
        <td class="border p-2">
            <a href="index.php?entity=interview&action=edit&id=<?php echo $interview['ID']; ?>" class="text-blue-500">Edit</a>
            <a href="index.php?entity=interview&action=delete&id=<?php echo $interview['ID']; ?>" class="text-red-500 ml-2" onclick="return confirm('Are you sure?');">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?php
require_once 'views/template/footer.php';
?>