<div class="left-menu">
  <a href="<?php echo $base.'superadmin';?>"><h3>Dashboard</h3></a> 
  <ul class="toggle">
      <h3><span class="underline">Company Manager</span></h3>
      <li><a href="/<?php echo DOMAIN;?>/superadmin/?tab=company">Dashboard</a></li>
      <li><a href="/<?php echo DOMAIN;?>/superadmin/?tab=company&target=add">Add a Company</a></li>
      <li><a href="/<?php echo DOMAIN;?>/superadmin/?tab=company&target=suspended">Suspended Companies</a></li>
  </ul>
  <ul class="toggle"><h3><span class="underline">Accounts</span></h3>
    <li class="icn_audio"><a href="#">Dashboard</a></li>
    <li class="icn_photo"><a href="#">New Accounts</a></li>
    <li class="icn_video"><a href="#">Suspend an account</a></li>
    <li class="icn_audio"><a href="#">Audio</a></li>
  </ul>
 
  <ul class="toggle"> <h3><span class="underline">Posts</span></h3>
    <li class="icn_settings"><a href="/<?php echo DOMAIN;?>/superadmin/?tab=post">Dashboard</a></li>
    <li class="icn_settings"><a href="/<?php echo DOMAIN;?>/superadmin/?tab=post?action=create">Create Post</a></li>
    <li class="icn_settings"><a href="/<?php echo DOMAIN;?>/superadmin/?tab=posts?target=trash">Trash</a></li>
  </ul>
 
  <ul class="toggle"> <h3><a href="/<?php echo DOMAIN;?>/superadmin/?tab=menu">Menus</a></h3>
    <li class="icn_settings"><a href="/<?php echo DOMAIN;?>/superadmin/?tab=menu">Dashboard</a></li>
    <li class="icn_security"><a href="/<?php echo DOMAIN;?>/superadmin/?tab=menu&target=create">Create Menu</a></li>
    <li class="icn_jump_back"><a href="/<?php echo DOMAIN;?>/superadmin/?tab=menu&target=trash">Trash</a></li>
  </ul>    

  <ul class="toggle">  <h3>Users</h3>
    <li class="icn_add_user"><a href="/<?php echo DOMAIN;?>/superadmin/?tab=users">Dashboard</a></li>
    <li class="icn_view_users"><a href="/<?php echo DOMAIN;?>/superadmin/?tab=users&target=new">New Users</a></li>
    <li class="icn_profile"><a href="/<?php echo DOMAIN;?>/superadmin/?tab=users&target=suspended">Suspended Users</a></li>
  </ul>
 
  <footer>
    <hr />
    <p><strong>Abish :: A PHP Framework and UCM by Sandeep Giri.</strong></p>
    <p>Theme by <a href="#">Nurakan Tech</a></p>
  </footer>
</div>