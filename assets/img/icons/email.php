<?php
if (!isset($temaCor)) {
    $temaCor = 'padrao';
}

if ($temaCor === 'padrao') {    
    echo '    
    <svg class="icon" width="45" height="37" viewBox="0 0 45 37" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M34.7666 0H10.2222C9.17204 0 8.16658 0.42488 7.44042 1.18519L0 8.9113L22.4888 25.2804L44.9776 8.9113L37.5372 1.18519C36.8111 0.42488 35.8056 0 34.7555 0H34.7666Z" fill="#592D34"/>
		<path d="M22.5001 25.2804L0.0112305 8.91133V32.6599C0.0112305 34.9632 1.87693 36.8416 4.18949 36.8416H40.8218C43.1232 36.8416 45 34.9744 45 32.6599V8.90015L22.5112 25.2692L22.5001 25.2804Z" fill="#FFAC4F"/>
		</svg>
    ';
} elseif ($temaCor === 'azul') {    
    echo '    
		<svg class="icon" width="45" height="37" viewBox="0 0 45 37" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M34.7666 0H10.2222C9.17204 0 8.16658 0.42488 7.44042 1.18519L0 8.9113L22.4888 25.2804L44.9776 8.9113L37.5372 1.18519C36.8111 0.42488 35.8056 0 34.7555 0H34.7666Z" fill="#592D34"/>
		<path d="M22.5001 25.2804L0.0112305 8.91133V32.6599C0.0112305 34.9632 1.87693 36.8416 4.18949 36.8416H40.8218C43.1232 36.8416 45 34.9744 45 32.6599V8.90015L22.5112 25.2692L22.5001 25.2804Z" fill="#00BFE6"/>
		</svg>
    ';
}
?>

