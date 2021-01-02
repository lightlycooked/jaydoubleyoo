<?php   
  $json = file_get_contents('static/data/projects.json');	
  $data = json_decode($json, true);
?>

<section class="section-module section-projects cards grid full">
  <div class="container">
    <h2 class="section-projects__title"><?php echo $data['section_title']; ?></h2>
    <div class="row"> 
      <?php foreach($data['projects'] as $project) { ?>
        <article class="card <?php echo $project['columns']?>">
          <a rel="noreferrer" class="card__link <?php echo $project['link']['type'] ?>" href="<?php echo $project['link']['href']; ?>" target="_blank" title="<?php echo $project['project_alt']; ?>" >
            <header class="card__header">
              <picture>
                  <source srcset="<?php echo $project['project_tn']; ?>.webp" type="image/webp">
                  <source srcset="<?php echo $project['project_tn']; ?>.jpg" type="image/jpeg">
                  <img class="card__thumbnail" loading="lazy" src="<?php echo $project['project_tn']; ?>.jpg" alt="<?php echo $project['project_alt']; ?>"/>
              </picture>
            </header>
            <div class="card__body">
              <h6 class="card__title"><?php echo $project['project_title']; ?></h6>
              <p class="card__description"><?php echo $project['project_role']; ?></p>
            </div>
          </a>
        </article>           
      <?php } ?>

    </div>
  </div>
</section>
