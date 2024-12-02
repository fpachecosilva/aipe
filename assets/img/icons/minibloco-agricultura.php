<?php
if (!isset($temaCor)) {
    $temaCor = 'padrao';
}

if ($temaCor === 'padrao') {    
    echo '    
		<svg width="47" height="50" viewBox="0 0 47 50" fill="none" xmlns="http://www.w3.org/2000/svg">
		<g clip-path="url(#clip0_322_1086)">
		<path d="M17.7043 31.0321C17.629 30.6313 16.0412 21.0649 27.3754 13.916L30.074 17.9248C21.5765 23.2819 22.5304 29.951 22.5806 30.2304L17.7106 31.0321H17.7043Z" fill="#FF874F"/>
		<path d="M28.254 16.9091C27.3628 16.1134 22.8505 9.78442 28.254 4.42728C32.3082 0.406382 40.5798 -0.0309357 44.4583 -0.000566444C45.7009 0.0115813 46.7364 0.92266 46.862 2.11921C47.2071 5.45983 47.2322 12.1472 42.8893 16.5143C35.6909 23.7482 29.4527 17.9841 28.254 16.9091Z" fill="#FF874F"/>
		<path d="M12.8591 21.4294C12.2441 22.0611 7.38658 25.2681 3.31354 21.3748C0.263471 18.4532 -0.0377712 12.5312 -0.000116004 9.74941C0.0124357 8.86263 0.715333 8.12162 1.63161 8.03658C4.18589 7.80578 9.30073 7.81185 12.6207 10.9399C18.1183 16.127 13.6876 20.567 12.8591 21.4234V21.4294Z" fill="#FF874F"/>
		<path d="M8.84889 26.7854H31.4295C33.4064 26.7854 34.8561 28.5893 34.3666 30.4418L29.7915 47.7948C29.4463 49.0947 28.2413 49.9997 26.8544 49.9997H13.3299C11.9366 49.9997 10.7254 49.0825 10.3928 47.7766L5.91178 30.4236C5.43482 28.5711 6.87827 26.7793 8.84889 26.7793V26.7854Z" fill="#592D34"/>
		</g>
		<defs>
		<clipPath id="clip0_322_1086">
		<rect width="47" height="50" fill="white"/>
		</clipPath>
		</defs>
		</svg>
    ';
} elseif ($temaCor === 'amarelo') {
	echo '
		<svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_327_3546)">
<path d="M11.3006 19.2394C11.2525 18.9909 10.239 13.0598 17.4736 8.62744L19.1962 11.1129C13.7722 14.4343 14.3811 18.5691 14.4131 18.7424L11.3046 19.2394H11.3006Z" fill="#FFD600"/>
<path d="M18.0345 10.4838C17.4656 9.99053 14.5854 6.06657 18.0345 2.74515C20.6223 0.252191 25.902 -0.0189458 28.3776 -0.00011682C29.1708 0.00741476 29.8318 0.572284 29.9119 1.31414C30.1322 3.38533 30.1482 7.53147 27.3762 10.2391C22.7814 14.7241 18.7996 11.1504 18.0345 10.4838Z" fill="#FFD600"/>
<path d="M8.20803 13.2857C7.81546 13.6774 4.71491 15.6657 2.1151 13.2518C0.168242 11.4405 -0.0240398 7.76883 -4.5686e-06 6.0441C0.00800718 5.49429 0.456665 5.03487 1.04152 4.98214C2.67191 4.83904 5.9367 4.84281 8.05581 6.78219C11.565 9.99818 8.73681 12.751 8.20803 13.2819V13.2857Z" fill="#FFD600"/>
<path d="M5.64829 16.607H20.0614C21.3233 16.607 22.2486 17.7255 21.9362 18.874L19.0159 29.6329C18.7956 30.4388 18.0264 30.9999 17.1411 30.9999H8.50848C7.61918 30.9999 6.84604 30.4313 6.63373 29.6216L3.77354 18.8627C3.46909 17.7142 4.39044 16.6033 5.64829 16.6033V16.607Z" fill="#592D34"/>
</g>
<defs>
<clipPath id="clip0_327_3546">
<rect width="30" height="31" fill="white"/>
</clipPath>
</defs>
</svg>

	';
}
?>