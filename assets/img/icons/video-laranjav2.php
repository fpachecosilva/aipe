<?php
if (!isset($temaCor)) {
    $temaCor = 'padrao';
}

if ($temaCor === 'padrao') {    
    echo '    
			<svg width="44" height="42" viewBox="0 0 44 42" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M6.75476 20.3593H24.9075C28.6417 20.3593 31.6623 17.3362 31.6623 13.599V6.76035C31.6623 3.02308 28.6417 0 24.9075 0H6.75476C3.02058 0 0 3.02308 0 7.43541V27.1099C0 23.3726 3.02058 20.3495 6.75476 20.3495V20.3593Z" fill="#592D34"/>
			<path d="M6.75476 20.3565H24.9075C28.6417 20.3565 31.6623 17.3334 31.6623 13.5962V7.98047H36.3936C40.1277 7.98047 43.1483 11.0035 43.1483 14.7408V41.3811L33.9204 35.8437H6.75476C3.02058 35.8437 0 32.8206 0 29.0833V27.1169C0 23.3796 3.02058 20.3565 6.75476 20.3565Z" fill="#FF874F"/>
			</svg>
    ';
} elseif ($temaCor === 'amarelo') {
	echo'
		<svg width="44" height="42" viewBox="0 0 44 42" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M6.75476 20.3593H24.9075C28.6417 20.3593 31.6623 17.3362 31.6623 13.599V6.76035C31.6623 3.02308 28.6417 0 24.9075 0H6.75476C3.02058 0 0 3.02308 0 7.43541V27.1099C0 23.3726 3.02058 20.3495 6.75476 20.3495V20.3593Z" fill="#592D34"/>
<path d="M6.75476 20.3565H24.9075C28.6417 20.3565 31.6623 17.3334 31.6623 13.5962V7.98047H36.3936C40.1277 7.98047 43.1483 11.0035 43.1483 14.7408V41.3811L33.9204 35.8437H6.75476C3.02058 35.8437 0 32.8206 0 29.0833V27.1169C0 23.3796 3.02058 20.3565 6.75476 20.3565Z" fill="#FFD600"/>
</svg>

	';
}
?>
