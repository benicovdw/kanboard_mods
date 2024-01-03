<?php // By Benico on  2024-01-02 ?>
		<section class="tooltip-large">
			<div class="markdown">
				<?= $this->text->markdown($task['description']) ?>
			</div>
		</section>

<?php
    $subtasks = $this->helper->subtasklistHelper->subtasks($task['id']);
    if (sizeof($subtasks) > 0):
?>

    <table class="table-suboncard">
    <?php foreach ($subtasks as $subtask): ?>
        <tr>
            <td>
                <?= $this->subtask->renderToggleStatus($task, $subtask) ?>
            </td>
            <?= $this->hook->render('template:board:tooltip:subtasks:rows', array('subtask' => $subtask)) ?>
        </tr>
        <?php endforeach ?>
    </table>
<?php endif ?>
