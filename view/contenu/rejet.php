<div class="limiter">
		<div class="container-login100" style="background-image: url('view/images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					STAEVENT APPLICATION
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action ='index.php?ctl=connexion&action=validConnect' method='post'>

					<div class="wrap-input100 validate-input" data-validate = "Enter Username">
						<input class="input100" type="text" name="login" placeholder="Login">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pswd" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>
                    <p> Erreur de Connexion, veuillez réessayer</p>
				</form>
			</div>
		</div>
	</div>