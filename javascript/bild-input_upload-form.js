// JS-Code "strict mode"-Definition
'use strict';

// Funktion wird initiert
;( function (document, window, index)
{
		// Das Input-Field wird angesprochen
		var inputs = document.querySelectorAll('.inputfile');
		Array.prototype.forEach.call(inputs, function(input)
		{
				var label = input.nextElementSibling,
				// Der Standard-Wert des Labels wird hinterlegt und wenn nötig wieder ausgegeben
				labelVal = label.innerHTML;

				input.addEventListener('change', function(e)
				{
					var fileName = '';
					if (this.files && this.files.length > 1)
							// Mit der Erweiterung "multiple" könnte im HTML-Gerüst auch mehrere Dateien raufgeladen werden
							fileName = (this.getAttribute('data-multiple-caption') || '' ).replace('{count}', this.files.length);
					else
							fileName = e.target.value.split( '\\' ).pop();

					// Name des Bildes wird abgebildet
					if (fileName)
							label.querySelector('span').innerHTML = fileName;
					else
							label.innerHTML = labelVal;
				});

				// Bug-fix im Firefox
				input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
				input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
		});
}( document, window, 0 ));
