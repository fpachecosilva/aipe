<?php
if (!isset($temaCor)) {
    $temaCor = 'padrao';
}

if ($temaCor === 'padrao') {    
    echo '    
        <svg width="35" height="43" viewBox="0 0 35 43" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M34.4077 3.60672V28.4459H20.7762V42.0887H0V3.60672C0 1.60996 1.61906 0 3.60372 0H30.804C32.7991 0 34.4077 1.62042 34.4077 3.60672Z" fill="#FF874F"/>
				<path d="M33.3528 35.1151L27.4406 41.0322C26.7617 41.7117 25.8425 42.0881 24.8919 42.0881H20.7764V28.4453H34.4078V32.5643C34.4078 33.5261 34.0318 34.4356 33.3528 35.1151Z" fill="#592D34"/>
				</svg>
    ';
} elseif ($temaCor === 'amarelo') {
    echo '
        <svg width="35" height="43" viewBox="0 0 35 43" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M34.4077 3.60672V28.4459H20.7762V42.0887H0V3.60672C0 1.60996 1.61906 0 3.60372 0H30.804C32.7991 0 34.4077 1.62042 34.4077 3.60672Z" fill="#FFD600"/>
<path d="M33.3528 35.1151L27.4406 41.0322C26.7617 41.7117 25.8425 42.0881 24.8919 42.0881H20.7764V28.4453H34.4078V32.5643C34.4078 33.5261 34.0318 34.4356 33.3528 35.1151Z" fill="#592D34"/>
</svg>

    ';
}
?>
