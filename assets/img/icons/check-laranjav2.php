<?php
if (!isset($temaCor)) {
    $temaCor = 'padrao';
}

if ($temaCor === 'padrao') {
    echo '    
		<svg width="48" height="58" viewBox="0 0 48 58" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M47.4545 4.97021V38C47.4545 49.0457 38.5002 58 27.4545 58H0V4.97021C0 2.2186 2.23298 0 4.97019 0H42.4843C45.236 0 47.4545 2.233 47.4545 4.97021Z" fill="#FF874F"/>
		<path d="M12.1923 26.3184L18.5157 26.3184L24.8392 37.8494H18.5157L12.1923 26.3184Z" fill="#592D34"/>
		<path d="M35.9985 19.248L32.7652 19.248C30.8713 19.248 29.14 20.3181 28.293 22.012L20.3757 37.8465H26.6992L35.9985 19.248Z" fill="#592D34"/>
		</svg>
    ';
} elseif ($temaCor === 'amarelo') {    
	echo '    
		<svg width="26" height="17" viewBox="0 0 26 17" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M0.769226 6.24219L7.26677 6.24219L13.7643 16.414H7.26677L0.769226 6.24219Z" fill="#FFD600"/>
		<path d="M25.2306 0L21.6071 0C19.8276 0 18.1821 0.945843 17.2865 2.4836L9.1778 16.4061H15.6753L25.2306 0Z" fill="#FFD600"/>
		</svg>
	';
}

?>