<form action="">
	<p class="message error">Error: Please complete all required fields</p>
	<p class="message success">Success! Your request was successfully submitted.</p>
	<fieldset>
		<input type="text" name="first_name" placeholder="First Name" />
		<input type="text" name="last_name" placeholder="Last Name" />
		<input type="email" name="email_address" placeholder="Email Address" />
		<input type="text" name="address" placeholder="Address" />
		<div class="row">
			<div class="t_6">
				<input type="text" name="city" placeholder="City" />
			</div>
			<div class="t_3">
				<div class="styled_select">
					<select name="state">
						<option selected="selected" disabled="disabled">State</option>
						<option value="AZ">AZ</option>
					</select>
				</div>
			</div>
			<div class="t_3 last">
				<input type="text" name="zip" placeholder="Zip" maxlength="5" />
			</div>
		</div>
	</fieldset>
	<input type="submit" value="Submit" class="btn" />
</form>