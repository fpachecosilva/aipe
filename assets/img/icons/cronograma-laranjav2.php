<?php
if (!isset($temaCor)) {
    $temaCor = 'padrao';
}

if ($temaCor === 'padrao') {    
    echo '    
			<svg width="38" height="42" viewBox="0 0 38 42" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M0 7C0 3.13401 3.13401 0 7 0H30.5319C34.3979 0 37.5319 3.13401 37.5319 7V35C37.5319 38.866 34.3979 42 30.5319 42H0V7Z" fill="#FF874F"/>
			<path d="M0 7C0 3.134 3.13401 0 7 0H30.5319C34.3979 0 37.5319 3.13401 37.5319 7V12.5106H0V7Z" fill="#592D34"/>
			<path d="M10.7234 23.4922L14.9504 23.4922L19.1774 31.2003H14.9504L10.7234 23.4922Z" fill="#592D34"/>
			<path d="M26.6369 18.7656L25.5001 18.7656C23.6062 18.7656 21.8749 19.8356 21.0279 21.5296L16.1937 31.198H20.4207L26.6369 18.7656Z" fill="#592D34"/>
			</svg>
    ';
} elseif ($temaCor === 'amarelo') {
	echo'
		<svg width="36" height="44" viewBox="0 0 36 44" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M35.4979 3.71791V23.3863C35.4979 34.432 26.5436 43.3863 15.4979 43.3863H0V3.71791C0 1.6596 1.67036 0 3.7179 0H31.78C33.8383 0 35.4979 1.67037 35.4979 3.71791Z" fill="#FFD600"/>
<path d="M9.12029 19.6877L13.8505 19.6877L18.5807 28.3134H13.8505L9.12029 19.6877Z" fill="#592D34"/>
<path d="M26.9283 14.3987L25.2882 14.3987C23.3944 14.3987 21.6631 15.4687 20.8161 17.1626L15.2419 28.3111H19.9721L26.9283 14.3987Z" fill="#592D34"/>
</svg>

	';
}
?>

