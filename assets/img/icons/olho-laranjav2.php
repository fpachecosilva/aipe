<?php
if (!isset($temaCor)) {
    $temaCor = 'padrao';
}

if ($temaCor === 'padrao') {
    echo '    
			<svg width="65" height="35" viewBox="0 0 65 35" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M46.6245 3.4436C41.6628 1.18531 36.9131 0.0499071 32.5 0C28.0994 0.0499071 23.3372 1.18531 18.3755 3.4436C11.332 6.65013 4.69985 12.2397 0 17.2803C4.69985 22.3209 11.3445 27.9105 18.3755 31.1171C23.3372 33.3754 28.0869 34.5108 32.5 34.5607C36.9007 34.5108 41.6628 33.3754 46.6245 31.1171C53.668 27.9105 60.3002 22.3209 65 17.2803C60.3002 12.2397 53.6556 6.65013 46.6245 3.4436Z" fill="#FF874F"/>
			<path d="M32.4999 27.5882C38.1869 27.5882 42.7972 22.9741 42.7972 17.2824C42.7972 11.5906 38.1869 6.97656 32.4999 6.97656C26.8129 6.97656 22.2026 11.5906 22.2026 17.2824C22.2026 22.9741 26.8129 27.5882 32.4999 27.5882Z" fill="#592D34"/>
			</svg>
    ';
}
?>