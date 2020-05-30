function testlol1() {
	/*Nom = document.f.Nom.value;
	Prenom = document.f.Prenom.value;
	Budget = document.f.Budget.value;
	N = document.f.number.value;*/


	if(document.f.nom.value[0] < 'A' || document.f.nom.value[0] > 'Z'){
		alert("Le Nom doit commencer par une lettre MAJ");
	
	}
	
	if(document.f.prenom.value[0] < 'A' || document.f.prenom.value[0] > 'Z'){
		alert("Le Prenom doit commencer par une lettre MAJ");
	
	}
}
