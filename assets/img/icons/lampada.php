<?php
if (!isset($temaCor)) {
    $temaCor = 'verde';
}

if ($temaCor === 'verde') {
    echo '    
			<svg class="icon" width="44" height="60" viewBox="0 0 44 60" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M10.8965 47.4395V59.9993H26.974C30.13 59.9993 32.6905 57.4367 32.6905 54.2781V47.4395H10.8965Z" fill="#592D34"/>
			<path d="M43.588 21.2329C43.2754 10.2971 35.1324 1.3279 24.2652 0.135987C11.1203 -1.30921 0 8.95617 0 21.814C0 33.8672 10.897 38.173 10.897 46.3526V47.4253H32.691V46.3526C32.691 38.0389 43.9453 33.7182 43.588 21.218V21.2329Z" fill="#29B79C"/>
			</svg>
    ';
} elseif ($temaCor === 'rosa') {    
    echo '    
			<svg class="icon" width="44" height="60" viewBox="0 0 44 60" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M10.8965 47.4395V59.9993H26.974C30.13 59.9993 32.6905 57.4367 32.6905 54.2781V47.4395H10.8965Z" fill="#592D34"/>
			<path d="M43.588 21.2329C43.2754 10.2971 35.1324 1.3279 24.2652 0.135987C11.1203 -1.30921 0 8.95617 0 21.814C0 33.8672 10.897 38.173 10.897 46.3526V47.4253H32.691V46.3526C32.691 38.0389 43.9453 33.7182 43.588 21.218V21.2329Z" fill="#FF686E"/>
			</svg>
    ';
} elseif ($temaCor === 'padrao') {    
	echo '    
		<svg width="44" height="60" viewBox="0 0 44 60" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M10.8965 47.4375V59.9973H26.974C30.13 59.9973 32.6905 57.4347 32.6905 54.2761V47.4375H10.8965Z" fill="#592D34"/>
		<path d="M43.588 21.2329C43.2754 10.2971 35.1324 1.3279 24.2652 0.135987C11.1203 -1.30921 0 8.95617 0 21.814C0 33.8672 10.897 38.173 10.897 46.3526V47.4253H32.691V46.3526C32.691 38.0389 43.9453 33.7182 43.588 21.218V21.2329Z" fill="#FF874F"/>
		</svg>
	';
}
?>