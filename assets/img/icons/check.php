<?php
if (!isset($temaCor)) {
    $temaCor = 'verde';
}

if ($temaCor === 'verde') {
    echo '    
			<svg class="icon" width="21" height="17" viewBox="0 0 21 17" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M0 6.24219L5.57808 6.24219L11.1562 16.414H5.57808L0 6.24219Z" fill="#29B79C"/>
			<path d="M21 0L18.5121 0C16.6182 0 14.8869 1.07001 14.04 2.76393L7.21886 16.4061H12.7969L21 0Z" fill="#29B79C"/>
			</svg>
    ';
} elseif ($temaCor === 'rosa') {    
    echo '    
			<svg class="icon" width="21" height="17" viewBox="0 0 21 17" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M0 6.24219L5.57808 6.24219L11.1562 16.414H5.57808L0 6.24219Z" fill="#FF686E"/>
			<path d="M20.9999 0L18.512 0C16.6181 0 14.8868 1.07001 14.0398 2.76393L7.21873 16.4061H12.7968L20.9999 0Z" fill="#FF686E"/>
			</svg>


    ';
} elseif ($temaCor === 'padrao') {
    echo '    
			<svg class="icon" width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M0 5.26562L4.70811 5.26562L9.41623 13.851H4.70811L0 5.26562Z" fill="#FFAC4F"/>
			<path d="M17.7246 0L16.1067 0C14.2128 0 12.4815 1.07001 11.6345 2.76393L6.0928 13.8474H10.8009L17.7246 0Z" fill="#FFAC4F"/>
			</svg>
    ';
}
?>

