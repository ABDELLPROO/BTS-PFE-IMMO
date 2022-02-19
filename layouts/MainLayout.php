<header>
  <p class="text-indigo-600">This is a header !</p>
</header>

<?php if ($_SERVER['REQUEST_URI'] == '/'): ?>
  <?php include './pages/home.php'; ?>
<?php endif; ?>

<?php if ($_SERVER['REQUEST_URI'] == '/about'): ?>
  <?php include './pages/about.php'; ?>
<?php endif; ?>

<footer>
  <p class="text-orange-500">This is a footer !</p>
</footer>
