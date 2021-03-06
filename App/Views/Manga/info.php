<?php include "header.php" ?>
<?php $manga = $data['manga']; ?>
<div class="container">
  <main>
    <div class="row">
      <div class="col-xs-12">
        <h2><?= $manga->name ?></h2>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-4">
        <div class="thumbnail">
          <img src="<?=base_url()?>/home/cover/<?=$manga->id?>" class='img-responsive'>
          <div class="caption">
            <p class="genre"><?=$manga->genre;?> / <?= $manga->rating ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <p class="synopsis"><?= $manga->synopsis; ?></p>
        <hr>
        <div class="panel panel-default">
          <!-- Default panel contents -->
          <div class="panel-heading">Daftar Chapter</div>
          <div class="panel-body">
            <form method="get" action="">
              <input type="text" name="cariChapter" placeholder="Nomer Chapter" class="form-control">
            </form>
          </div>
          <?php if(count($data['chapter']) > 0){ ?>
          <table class="table table-striped table-condensed info">
            <thead>
              <tr>
                <th>No Chapter</th>
                <th>judul Chapter</th>
                <th class="action">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($data['chapter'] as $chapter): ?>
                <tr>
                  <td><?= $chapter->no; ?></td>
                  <td><?= $chapter->judul; ?></td>
                  <td class="action"><a href="<?=$manga->slug.'/'.$chapter->no;?>" class="btn btn-primary btn-xs btn-block">Baca Chapter</a></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
          <?php }else{ ?>
          <p class="panel-body">Maaf data yang anda cari tidak ditemukan</p>
          <?php } ?>
        </div>
      </div>
    </div>
  </main>
</div>
<?php include "footer.php" ?>
