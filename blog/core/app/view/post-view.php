<?php
$jb  = PostData::getById($_GET["id"]);
?>

<div class="container">
<div class="row">
<div class="col-md-12">
<h1><?php echo $jb->title; ?></h1>
    <?php if($jb->image!=""):?>
      <img src="admin/uploads/<?php echo $jb->image; ?>" class="img-responsive" >
    <?php endif; ?>
<br><div class="panel panel-default">
<div class="panel-body">
<label>Descripció breu</label>
<p><?php echo $jb->brief; ?></p>
<label>Contingut del post</label>
<p><?php echo $jb->content; ?></p>
<label>Categoria</label>
<p><?php echo CategoryData::getById($jb->category_id)->name; ?></p>


</div>
</div>

<div class="panel panel-default">
<div class="panel-heading">Escriure comentari</div>
<div class="panel-body">

<form method="post" action="./?action=send" enctype="multipart/form-data">
<input type="hidden" name="post_id" value="<?php echo $jb->id; ?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Nom</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Nombre" required>
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Correu electronic</label>
    <input type="email" name="email" required class="form-control" id="exampleInputEmail1" placeholder="Correo electronico">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Comentaris</label>
    <textarea name="comment" class="form-control" id="exampleInputEmail1" placeholder="Comentarios" required rows="3"></textarea>
  </div>



  <div class="checkbox">
    <label>
      <input type="checkbox" name="accept" required> Accepto les condicions
    </label>
  </div>
  <button type="submit" class="btn btn-default">Enviar dades</button>
</form>

</div>
</div>




<?php
$comments  = CommentData::getPublicByPost($jb->id);
?>

<div class="panel panel-default">
<div class="panel-heading">Comentaris</div>
<div class="panel-body">

<?php foreach($comments as $com):?>
  <label><?php echo $com->name; ?></label>
  <p><?php echo $com->comment; ?></p>
<?php endforeach ; ?>

</div>
</div>



</div>
</div>
</div>
<br><br><br><br>