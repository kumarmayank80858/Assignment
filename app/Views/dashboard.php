<br>
<br>
<br>
<br>
<br>

<div class="container">

  <div class="row">
    <div class="col-12">
      <p><b>Name:</b> <?= session()->get('firstname') ?> <?= session()->get('lastname') ?></p>
      <p><b>Role:</b> <?= session()->get('type') ?></p>
      <p><b>Email: </b><?= session()->get('email') ?></p>
      <p><b>Status: </b><?= session()->get('status') ?></p>
    </div>
  </div>
</div>
