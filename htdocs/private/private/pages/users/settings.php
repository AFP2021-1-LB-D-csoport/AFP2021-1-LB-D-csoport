<div class="d-flex align-items-center justify-content-center">
    <ul>
        <?php if ($_SESSION['user']['realtor_id'] == NULL): ?>
            <li><a href="?p=users&m=edit_name">Név módosítása</a></li>
        <?php endif; ?>
        <li><a href="?p=users&m=edit_email">Email cím módosítása</a></li>
        <li><a href="?p=users&m=edit_phone">Telefonszám módosítása</a></li>
        <li><a href="?p=users&m=change_password">Jelszó módosítása</a></li>
    </ul>
</div>