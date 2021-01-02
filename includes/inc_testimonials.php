<?php   
  $json = file_get_contents('static/data/testimonials.json'); 
  $data = json_decode($json, true);
?>
<section class="section-module  section-testimonials grid full">
    <div class="section-module__content parallax">
      <h2 class="section-testimonials__title"><?php echo $data['section_title']; ?></h2>
      <div class="container">
        <div class="row">
          <?php foreach($data['testimonials'] as $testimonial) { ?>
            <article class="card col-12 col-wd-8">
              <blockquote class="card__body">
                <?php echo $testimonial['quote']?>
              </blockquote>
              <div class="card__footer">
                <a rel="noreferrer" class="client" href="<?php echo $testimonial['href']?>" target="_blank"><?php   echo $testimonial['client']?></a>
              </div>
          </article>
        <?php } ?>
        </div>
      </div>
  </div>
</section>
