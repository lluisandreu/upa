<?php include 'inc/members.inc'; ?>
<?php include 'template-head-begin.php'; ?><?php include 'template-head-end.php'; ?>

<body id="members-intranet"> 

<?php include 'template-header-start.php'; ?>
<?php include 'template-menu.php'; ?>
<?php include 'template-header-end.php'; ?>

<div id="left-section">

<?php if(!$logged_in): ?>
<h2>Members page</h2>
<h3>Please login to continue</h3>
<?php if(!empty($msg)): ?>
	<div class="form-messages">
		<p><?php print $msg; ?></p>
	</div>
<?php endif; ?>
<fieldset>
	<legend>Login</legend>
	<form id="members-intranet" method="POST" >
		<div class="form-field">
			<label>Username</label>
			<input type="text" name="username" placeholder="Please enter your username" required>
		</div>
		<div class="form-field">
			<label>Password</label>
			<input type="password" name="password" placeholder="Please enter your password" required>
		</div>
		<button type="submit" name="submit">Login</button>
	</form>
</fieldset>
<?php else: ?>
	<h1>Welcome to the UPA member's area</h1>
	<p>Welcome to the UPA members' area. We are planning to make this a dynamic interactive space for discussion and members' news once our website re-design is done. For now, we will use it as a private area where members can pay for the UPA exhibition at UrbanPhotoFest 2016</p>
	<p>You can submit your payment by clicking on "Pay your membership", you will be redirected to Worldpay where you could continue the payment.</p>
	<p>The membership fee is <strong>£250</strong></p>
	<form action="https://secure-test.worldpay.com/wcc/purchase" method="POST">
		<input type="hidden" name="testMode" value="100">
		<input type="hidden" name="instId" value="1142634">
		<input type="hidden" name="cartId" value="UPAMEMBERS">
		<input type="hidden" name="amount" value="250.00">
		<input type="hidden" name="currency" value="GBP">
		<input type="submit" value="Pay your membership">
	</form>		
<?php endif; ?>

</div>
	
<?php include 'template-footer.php'; ?>
