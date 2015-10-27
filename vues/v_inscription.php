<html>
	<head><h1>Remplissez ce formulaire</h1></head>
	<body>
		
		
		
		Quel âge avez-vous ?* <?php echo 'Peut être une liste déroulante avec choix date naissance ?'?><input type="text" id="age" name="age"/><br><br>
		
		Age auquel vous avez commencé ?*  <input type="text" id="ageDebut" name="ageDebut"/><br><br>
		
		Combien de cigarettes fumez-vous par jour ?*  <input type="text" id="nbCigarettes" name="nbCigarettes"/><br><br>		
		
		Quelle marque de cigarettes achetez-vous ?* 
		<select id="test" name="listeMarques">
			<option id="0" selected> --- Votre marque de cigarette --- </option>
			<option id="1">Marlboro</option>
			<option id="2">Lucky Strike</option>
			<option id="3">Gitanes</option>
			<option id="4">Philip Maurice</option>
			<option id="5">Camel</option>
			<option id="6">Royale</option>
			<option id="7">Gauloises</option>
			<option id="8">Bastos</option>
			<option id="9">News</option>
			<option id="10">...</option>
		</select>
		<br><br>
		
		<font color="red">Les champs * sont des champs obligatoires</font>
		
		<script type="text/javascript" src="scripts/scripts.js"></script>
		<input type="button" onClick="verificationRemplissage('age', 'ageDebut', 'nbCigarettes', 'test');" value="Valider le formulaire"/>
	</body>
</html>
