<h1 class="display-4"> Data Brand</h1>
<p class="lead">list data keseluruhan</p> <!-- <?php print_r($brand);?> -->
<?php if(!empty($brand)):?>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">nama brand</th> 
        <th scope="col">negara asal</th> 
        <th scope="col">log_history</th> 
      </tr>
    </thead>
    <tbody>
    <?php foreach ($brand as $user) :?>
      <tr>
        <td><?= $user->email;?></td> 
        <td><?= $user->username;?></td> 
        <td><?= $user->status;?></td>
      </tr>
    <?php endforeach;?>
    </tbody>
  </table>
  <?php else:?>
  <h1>sori data tidak ada!</h1>
<?php endif;?>