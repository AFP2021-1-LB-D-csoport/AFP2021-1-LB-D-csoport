<?php
    require_once './private/utils/db_manager.php';
    $query = 'SELECT * FROM profile';
    $users = select($query);
?>

<div class="d-flex justify-content-center">
    <h3>Felhasználók listája</h3>
</div>
<div class="d-flex justify-content-center">
    <ul>
    <?php foreach ($users as $user): ?>
        <?php if ($user['status'] !== 'DELETED'): ?>
            <li><?=$user['user_name']?> (<?=$user['email_address']?>)
                <a class="btn btn-danger pl-4" onclick="return confirm('Biztos benne, hogy törli ezt a felhasználót?')" 
                    href="?p=users&m=delete_user&d=<?=$user['profile_id']?>">Törlés</a>
            </li>
        <?php endif; ?>
    <?php endforeach; ?>
    </ul>
</div>