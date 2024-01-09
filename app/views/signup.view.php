<?php $this->view('includes/header', $data); ?>

<div class="mx-auto col-md-4 bg-light shadow m-4 p-4 border ">
	<h1>Signup</h1>
	<form method="post">
		
		<input class="form-control my-3" value="<?=old_value('username')?>" name="username" placeHolder="Username">
		<div><small class="text-danger"><?=$user->getError('username')?></small></div>
		<input class="form-control my-3" value="<?=old_value('email')?>" name="email" placeHolder="Email">
		<div><small class="text-danger"><?=$user->getError('email')?></small></div>
		<input class="form-control my-3" type="password" value="<?=old_value('password')?>" name="password" placeHolder="Password">
		<div><small class="text-danger"><?=$user->getError('password')?></small></div>
		<button class="btn btn-primary my-3">Signup</button>
	</form>
</div>

<?php $this->view('includes/footer', $data); ?>