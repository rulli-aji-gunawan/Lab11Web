<?= $this->include('template/admin_header'); ?>

<h2 class="pageTitle"> <?= $title; ?></h2>
<form class="add" action="" method="post">
    <p>
        <input type="text" name="judul" cols="100">
    </p>
    <p>
        <textarea name="isi" cols="50" rows="10"></textarea>
    </p>
    <p><input type="submit" value="Kirim" class="btn btn-large"></p>
</form>

<?= $this->include('template/admin_footer'); ?>