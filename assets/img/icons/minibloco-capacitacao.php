<?php
if (!isset($temaCor)) {
    $temaCor = 'padrao';
}

if ($temaCor === 'padrao') {    
    echo '    
			<svg width="38" height="35" viewBox="0 0 38 35" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M33.4211 16.5664H4.57818C3.44863 16.5664 2.53296 17.4962 2.53296 18.6433V32.8562C2.53296 34.0032 3.44863 34.9331 4.57818 34.9331H33.4211C34.5506 34.9331 35.4663 34.0032 35.4663 32.8562V18.6433C35.4663 17.4962 34.5506 16.5664 33.4211 16.5664Z" fill="#592D34"/>
			<path d="M37.0494 21.1667L19.1011 25.4002C18.9162 25.444 18.7226 25.444 18.5363 25.4002L0.944799 21.171C0.391499 21.0382 0 20.5377 0 19.9627V8.30831C0 7.62242 0.550411 7.06641 1.22939 7.06641H36.7706C37.4496 7.06641 38 7.62242 38 8.30831V19.9569C38 20.5333 37.6071 21.0353 37.0494 21.1667Z" fill="#FF874F"/>
			<path d="M11.4001 7.06667V3.54747C11.4001 2.6932 12.0933 2 12.9475 2H25.0528C25.907 2 26.6001 2.6932 26.6001 3.54747V7.06667" stroke="#592D34" stroke-width="4" stroke-miterlimit="10"/>
			</svg>
    ';
} elseif ($temaCor === 'amarelo') {
	echo'
		<svg width="38" height="35" viewBox="0 0 38 35" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M33.4211 16.5664H4.57818C3.44863 16.5664 2.53296 17.4962 2.53296 18.6433V32.8562C2.53296 34.0032 3.44863 34.9331 4.57818 34.9331H33.4211C34.5506 34.9331 35.4663 34.0032 35.4663 32.8562V18.6433C35.4663 17.4962 34.5506 16.5664 33.4211 16.5664Z" fill="#592D34"/>
<path d="M37.0494 21.1667L19.1011 25.4002C18.9162 25.444 18.7226 25.444 18.5363 25.4002L0.944799 21.171C0.391499 21.0382 0 20.5377 0 19.9627V8.30831C0 7.62242 0.550411 7.06641 1.22939 7.06641H36.7706C37.4496 7.06641 38 7.62242 38 8.30831V19.9569C38 20.5333 37.6071 21.0353 37.0494 21.1667Z" fill="#FFD600"/>
<path d="M11.4 7.06667V3.54747C11.4 2.6932 12.0932 2 12.9473 2H25.0527C25.9069 2 26.6 2.6932 26.6 3.54747V7.06667" stroke="#592D34" stroke-width="4" stroke-miterlimit="10"/>
</svg>

	';
}
?>