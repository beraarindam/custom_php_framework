<?php
/* Smarty version 5.3.1, created on 2024-07-07 11:40:43
  from 'file:auth/login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_668a629bd85f25_72063076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a1ea5a7f4ff6eafc9f4f237b8938a0f9b5f100b' => 
    array (
      0 => 'auth/login.tpl',
      1 => 1686396061,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_668a629bd85f25_72063076 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'I:\\xampp8\\htdocs\\custom_php_framework\\view\\auth';
echo '<?php'; ?>
 pageAdd('include/header.php'); <?php echo '?>'; ?>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-sm-6 pt-4">
			  <h2>Login form</h2>
			  <form action="/submit-login" method="POST">
			    <div class="form-group">
			      <label for="email">Email:</label>
			      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
			    </div>
			    <div class="form-group">
			      <label for="password">Password:</label>
			      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
			    </div>

			    <button type="submit" class="btn btn-primary">Submit</button>
			    <a href="register" class="btn btn-dark">Register</a>

			  </form>


		</div>
	</div>
</div>

<?php echo '<?php'; ?>
 pageAdd('include/footer.php'); <?php echo '?>';
}
}
