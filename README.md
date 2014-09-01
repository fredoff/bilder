bilder
======

För att spara, hämta och bearbeta bilder

Installera så här
=================

Ange föjande i ditt projekts composer.json

"repositories": [
	{
		"type": "vcs",
		"url": "https://github.com/fredoff/bilder"
	}
],
"require": {
	"fredoff/bilder": "dev-master"
},


Ange följande i applikationens bootstrap

Plugin::load('Bilder', [
	'autoload' => true,
	'bootstrap' => true, 	// Med?
	'routes' => true		// Med?
]);

Visst kräver appen att man har en db-config i app.php som heter bilder eller

Done!? Nu borde det väl vara möjligt att använda pluginen
