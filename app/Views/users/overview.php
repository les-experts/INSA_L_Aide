<h2><?= esc($title) ?></h2>

<?php if (! empty($users) && is_array($users)) : ?>

    <?php foreach ($users as $user_item): ?>

        <h3><?= esc($user_item['pseudo']) ?></h3>

        <div class="main">
            <?= esc($user_item['password']) ?>
        </div>
        <p><a href="/users/<?= esc($user_item['pseudo'], 'url') ?>">View user</a></p>

    <?php endforeach; ?>

<?php else : ?>

    <h3>No users</h3>

    <p>Unable to find any users for you.</p>

<?php endif ?>
