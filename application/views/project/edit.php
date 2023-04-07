<h2 class="text-center mt-5 mb-3"><?php echo $title; ?></h2>

<div? class="card">
  <div class="card-header">
    <a class="btn btn-outline-info float-right" href='<?php echo base_url('project/'); ?>' >
      View all Project
    </a>
  </div>

  <div class="card-body" >
    <?php if($this->session->flashdata('errors')) { ?>
      <div class="alert alert-danger">
        <?php echo $this->session->flashdata('errors'); ?>
      </div>
    <?php } ?>

    <form action="<?php echo base_url('project/update/'.$project->id); ?>" method="POST">
      <div class="form-group" >
        <label for="name">Name</label>
        <input class="form-control" value="<?php echo $project->name; ?>" type="text" name="name" id="name" />
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea rows="3" name="description" id="description" class="form-control"><?php echo $project->description; ?> </textarea>
      </div>

      <button type="submit" class="btn btn-outline-primary" >Save Project</button>
    </form>
  </div>
</div>