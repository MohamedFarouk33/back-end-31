<?php include_once 'C:\xampp\htdocs\round31\vendor/functions.php'; 
 

?> <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar" >

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item" >
        <a class="nav-link collapsed" href="<?= base_url() ?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      
      <?php if ( $_SESSION['auth']["parent_id"] == 1) : ?>
<li class="nav-item">
    <a class="nav-link collapsed" href="<?= base_url('./users.php') ?>">
        <i class="bi bi-menu-button-wide"></i><span>Users</span>
    </a>
</li>
<?php endif; ?>

<?php if ( $_SESSION['auth']["parent_id"] == 1) : ?>
<li class="nav-item">
    <a class="nav-link collapsed" href="<?= base_url('./courses a.php') ?>">
        <i class="bi bi-menu-button-wide"></i><span>courses</span>
    </a>
</li>
<?php endif; ?>

<?php if ( $_SESSION['auth']["parent_id"] == 1) : ?>
<li class="nav-item">
    <a class="nav-link collapsed" href="<?= base_url('./student.php') ?>">
        <i class="bi bi-menu-button-wide"></i><span>student</span>
    </a>
</li>
<?php endif; ?>

<?php if ( $_SESSION['auth']["parent_id"] == 2) : ?>
<li class="nav-item">
    <a class="nav-link collapsed" href="<?= base_url('./round.php') ?>">
        <i class="bi bi-menu-button-wide"></i><span>courses</span>
    </a>
</li>
<?php endif; ?>

<?php if ( $_SESSION['auth']["parent_id"] == 3) : ?>
<li class="nav-item">
    <a class="nav-link collapsed" href="<?= base_url('./student1.php') ?>">
        <i class="bi bi-menu-button-wide"></i><span>students</span>
    </a>
</li>
<?php endif; ?>


      
      </li><!-- End Components Nav -->
 
      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('/profile.php')?>">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

     
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('/contact.php')?>">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->
 
  
    </ul>

  </aside><!-- End Sidebar-->
