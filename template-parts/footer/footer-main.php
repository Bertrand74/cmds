 <?php 
                
    // // Format for phone number
    // $href_tel = get_theme_mod('CMDS_theme_footer_phone');
    // $href_tel = str_replace('.', '', $href_tel);
    // $href_tel = substr($href_tel, 1);

                ?>

<footer class="footer" id="contact">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-4 text-center text-primary">
        <i class="contact__info__fa fa fa-envelope"></i>
        <h5>Email</h5>
        <a href="mailto:<?= get_theme_mod('CMDS_theme_contact_email'); ?>"><?= get_theme_mod('CMDS_theme_contact_email') ; ?></a>
      </div>
      <div class="col-12 col-md-4 text-center text-primary">
        <i class="contact__info__fa fa fa-phone"></i>
        <h5>Téléphone</h5>
        <a href="tel:+41<?= get_theme_mod('CMDS_theme_contact_phone'); ?>"><?= get_theme_mod('CMDS_theme_contact_phone'); ?></a>
      </div>
      <div class="col-12 col-md-4 text-center">
        <i class="contact__info__fa fa fa-home text-primary"></i>
        <h5 class="text-primary">Adresse</h5>
        <p><?= get_theme_mod('CMDS_theme_contact_society'); ?><br /><?= get_theme_mod('CMDS_theme_contact_street'); ?><br /><?= get_theme_mod('CMDS_theme_contact_city'); ?> </p>
      </div>
    </div>
      <div class="container-fluid">
        <div class="row">
            <div class="col-12"> &copy; Bertrand PARROCHE</div>
        </div>
      </div>
    </div>
  </div>
</footer>