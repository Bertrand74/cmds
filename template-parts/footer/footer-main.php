 <?php 
                
    // // Format for phone number
    // $href_tel = get_theme_mod('CMDS_theme_footer_phone');
    // $href_tel = str_replace('.', '', $href_tel);
    // $href_tel = substr($href_tel, 1);

                ?>

<footer class="footer border-top rounded-top " id="contact">
    <div class="contact-info d-flex flex-row justify-content-around m-4">
      <div class="contact-info__part text-center">
        <i class="contact__info__fa fa fa-envelope"></i>
        <h5>Email</h5>
        <a href="mailto:<?= get_theme_mod('CMDS_theme_contact_email'); ?>"><?= get_theme_mod('CMDS_theme_contact_email') ; ?></a>
      </div>
      <div class="contact-info__part text-center">
        <i class="contact__info__fa fa fa-phone"></i>
        <h5>Téléphone</h5>
        <a href="tel:+41<?= get_theme_mod('CMDS_theme_contact_phone'); ?>"><?= get_theme_mod('CMDS_theme_contact_phone'); ?></a>
      </div>
      <div class="contact-info__part text-center">
        <i class="contact__info__fa fa fa-home"></i>
        <h5>Adresse</h5>
        <p><?= get_theme_mod('CMDS_theme_contact_society'); ?><br /><?= get_theme_mod('CMDS_theme_contact_street'); ?><br /><?= get_theme_mod('CMDS_theme_contact_city'); ?> </p>
      </div>
    </div>
    <div>
      <div class="footer__ml text-center p-2"> &copy; Bertrand PARROCHE</div>
    </div>
  </footer>