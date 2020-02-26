<div class="form">
	<form method="POST" id="js-form">
		<div class="form-group form-group--flex">
			<div class="form-elem">
				<input type="text" id="js-text" name="name" placeholder="Nome">
			</div>
			<div class="form-elem">
				<input type="email" id="js-email" name="email" placeholder="Email">
			</div>
		</div>
		<div class="form-group">
			<div class="form-elem">
				<input type="text" id="js-oggetto" name="oggetto" placeholder="Oggetto">
			</div>
		</div>
		<div class="form-group form-group--textarea">
			<div class="form-elem">
				<textarea name="messaggio" id="js-messaggio" placeholder="Messaggio"></textarea>
			</div>
		</div>
		<div class="form-footer">
			<input class="form-submit-btn" type="submit" value="Invia">
			<div class="privacy">
				<input class="checkbox" type="checkbox" name="check" id="check">
				<label for="check">Cliccando su invia dichiari di aver preso visione e di accettare la nostra <a href="https://visitrosolina.it/cookies-and-privacy/">privacy policy</a></label>
			</div>
		</div>
		<div style="color: #0c500c;" id="submit-ajax"></div>
	</form>
</div>
