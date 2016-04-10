<header id="header">
  <hgroup>
    <h1 class="site_title"><a href="#">Abish</a></h1>
    <h2 class="section_title"><?php echo ucfirst(DOMAIN);?> Super Admin</h2>
    <div class="btn_view_site"><a href="<?php echo $base;?>">View Site</a></div>
    <div class="clear"></div>
  </hgroup>
</header>

<!-- end of header bar -->

<section id="secondary_bar">
  <div class="user">
    <p><?php echo isset($current_user)?'Super Admin :: '.$current_user:'Super Admin :: '.ucfirst(DOMAIN);?></p>
    <a class="logout_user" href="<?php echo $base;?>superadmin/logout" title="Logout">Logout</a>
  </div>
  
</section>
