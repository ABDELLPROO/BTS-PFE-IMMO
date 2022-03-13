<div class="auth__layout">
	<div class="auth__modal">
		<div class="flex items-center justify-between mt-4">
			<span class="auth__title_line"></span>
			<h1 class="auth__title">S'inscrire</h1>
			<span class="auth__title_line"></span>
		</div>
		<form class="mt-6 space-y-4">
			<input 
				type="text" 
				name="prenom" 
				placeholder="Prénom *"
				class="auth__input"
			/>
			<input 
				type="text" 
				name="nom" 
				placeholder="Nom *"
				class="auth__input"
			/>
			<input 
				type="email" 
				name="Adresse email" 
				placeholder="Adresse email *"
				class="auth__input"
			/>
			<input 
				type="tel" 
				name="num tele" 
				placeholder="N° de téléphone *"
				class="auth__input"
			/>
			<input 
				type="password" 
				placeholder="Mot de passe *"
				class="auth__input"
			/>
			<input 
				type="password" 
				placeholder="Confirmer mot de passe *"
				class="auth__input"
			/>
			<div class="!mt-6">
				<button class="auth__action">SE CONNECTER</button>
			</div>
		</form>

		<div class="flex items-center justify-between mt-4">
			<span class="auth__title_line"></span>
			<a class="auth__sub_title">ou S'inscrire rapidement avec</a>
			<span class="auth__title_line"></span>
		</div>
		
		<div class="mt-6 -mx-2 flex items-center">
			<button type="button" class="auth__google">
				<svg class="w-4 h-4 mx-2 fill-current" viewBox="0 0 24 24">
					<path
						d="M12.24 10.285V14.4h6.806c-.275 1.765-2.056 5.174-6.806 5.174-4.095 0-7.439-3.389-7.439-7.574s3.345-7.574 7.439-7.574c2.33 0 3.891.989 4.785 1.849l3.254-3.138C18.189 1.186 15.479 0 12.24 0c-6.635 0-12 5.365-12 12s5.365 12 12 12c6.926 0 11.52-4.869 11.52-11.726 0-.788-.085-1.39-.189-1.989H12.24z"
					>
					</path>
				</svg>
				<span class="mx-2">Google</span>
			</button>
		</div>

		<p class="auth__switch"> 
			Déjà inscrit ?
			<a href="#" class="auth__switch_action">Connectez-vous</a>
		</p>
	</div>
</div>
