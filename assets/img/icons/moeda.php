<?php
if (!isset($temaCor)) {
    $temaCor = 'verde';
}

if ($temaCor === 'verde') {
    echo '    
			<svg class="icon" width="40" height="49" viewBox="0 0 40 49" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M40 4.18945V26.3523C40 38.7989 29.91 48.8889 17.4634 48.8889H0V4.18945C0 1.87008 1.88221 0 4.18943 0H35.8106C38.1299 0 40 1.88222 40 4.18945Z" fill="#29B79C"/>
			<path d="M16.0242 34.4998L16.5992 31.9498C15.9826 31.7665 15.3826 31.5248 14.7992 31.2248C14.2326 30.9081 13.6576 30.5165 13.0742 30.0498L14.2242 27.6998C14.7576 28.0998 15.2659 28.4331 15.7492 28.6998C16.2492 28.9665 16.7409 29.1831 17.2242 29.3498L18.2992 24.6498L17.9242 24.5748C16.3909 24.2915 15.2826 23.7831 14.5992 23.0498C13.9159 22.3165 13.5742 21.4081 13.5742 20.3248C13.5742 19.3581 13.7826 18.4748 14.1992 17.6748C14.6326 16.8748 15.2909 16.2415 16.1742 15.7748C17.0742 15.2915 18.2159 15.0498 19.5992 15.0498C19.7492 15.0498 19.8992 15.0581 20.0492 15.0748C20.1992 15.0748 20.3492 15.0831 20.4992 15.0998L21.0242 12.7998H22.7742L22.1742 15.3748C22.6909 15.5081 23.1992 15.6998 23.6992 15.9498C24.2159 16.1998 24.7242 16.5165 25.2242 16.8998L24.0742 19.2498C23.6409 18.9831 23.2159 18.7415 22.7992 18.5248C22.3992 18.2915 21.9826 18.1081 21.5492 17.9748L20.5992 22.1998L21.3742 22.3248C22.8909 22.6081 23.9909 23.1748 24.6742 24.0248C25.3742 24.8748 25.7242 25.8248 25.7242 26.8748C25.7242 28.5081 25.1659 29.8165 24.0492 30.7998C22.9326 31.7665 21.3076 32.2498 19.1742 32.2498C19.0242 32.2498 18.8742 32.2415 18.7242 32.2248C18.5742 32.2248 18.4326 32.2165 18.2992 32.1998L17.7742 34.4998H16.0242ZM18.8742 29.6748C18.9242 29.6748 18.9742 29.6748 19.0242 29.6748C19.0742 29.6748 19.1242 29.6748 19.1742 29.6748C20.2909 29.6748 21.1409 29.4581 21.7242 29.0248C22.3242 28.5915 22.6242 27.9831 22.6242 27.1998C22.6242 26.6665 22.4409 26.2081 22.0742 25.8248C21.7076 25.4248 21.1659 25.1665 20.4492 25.0498L19.9492 24.9748L18.8742 29.6748ZM18.9492 21.8748L19.8992 17.6498C19.8659 17.6331 19.8159 17.6248 19.7492 17.6248C19.6992 17.6248 19.6409 17.6248 19.5742 17.6248C18.6242 17.6248 17.8992 17.8331 17.3992 18.2498C16.9159 18.6498 16.6742 19.1998 16.6742 19.8998C16.6742 20.4331 16.8409 20.8498 17.1742 21.1498C17.5242 21.4498 18.0159 21.6665 18.6492 21.7998L18.9492 21.8748Z" fill="#592D34"/>
			</svg>
    ';
} elseif ($temaCor === 'rosa') {    
    echo '    
			<svg class="icon" width="40" height="49" viewBox="0 0 40 49" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M40 4.18945V26.3523C40 38.7989 29.91 48.8889 17.4634 48.8889H0V4.18945C0 1.87008 1.88221 0 4.18943 0H35.8106C38.1299 0 40 1.88222 40 4.18945Z" fill="#FF686E"/>
			<path d="M16.0242 34.4969L16.5992 31.9469C15.9826 31.7635 15.3826 31.5219 14.7992 31.2219C14.2326 30.9052 13.6576 30.5135 13.0742 30.0469L14.2242 27.6969C14.7576 28.0969 15.2659 28.4302 15.7492 28.6969C16.2492 28.9635 16.7409 29.1802 17.2242 29.3469L18.2992 24.6469L17.9242 24.5719C16.3909 24.2885 15.2826 23.7802 14.5992 23.0469C13.9159 22.3135 13.5742 21.4052 13.5742 20.3219C13.5742 19.3552 13.7826 18.4719 14.1992 17.6719C14.6326 16.8719 15.2909 16.2385 16.1742 15.7719C17.0742 15.2885 18.2159 15.0469 19.5992 15.0469C19.7492 15.0469 19.8992 15.0552 20.0492 15.0719C20.1992 15.0719 20.3492 15.0802 20.4992 15.0969L21.0242 12.7969H22.7742L22.1742 15.3719C22.6909 15.5052 23.1992 15.6969 23.6992 15.9469C24.2159 16.1969 24.7242 16.5135 25.2242 16.8969L24.0742 19.2469C23.6409 18.9802 23.2159 18.7385 22.7992 18.5219C22.3992 18.2885 21.9826 18.1052 21.5492 17.9719L20.5992 22.1969L21.3742 22.3219C22.8909 22.6052 23.9909 23.1719 24.6742 24.0219C25.3742 24.8719 25.7242 25.8219 25.7242 26.8719C25.7242 28.5052 25.1659 29.8135 24.0492 30.7969C22.9326 31.7635 21.3076 32.2469 19.1742 32.2469C19.0242 32.2469 18.8742 32.2385 18.7242 32.2219C18.5742 32.2219 18.4326 32.2135 18.2992 32.1969L17.7742 34.4969H16.0242ZM18.8742 29.6719C18.9242 29.6719 18.9742 29.6719 19.0242 29.6719C19.0742 29.6719 19.1242 29.6719 19.1742 29.6719C20.2909 29.6719 21.1409 29.4552 21.7242 29.0219C22.3242 28.5885 22.6242 27.9802 22.6242 27.1969C22.6242 26.6635 22.4409 26.2052 22.0742 25.8219C21.7076 25.4219 21.1659 25.1635 20.4492 25.0469L19.9492 24.9719L18.8742 29.6719ZM18.9492 21.8719L19.8992 17.6469C19.8659 17.6302 19.8159 17.6219 19.7492 17.6219C19.6992 17.6219 19.6409 17.6219 19.5742 17.6219C18.6242 17.6219 17.8992 17.8302 17.3992 18.2469C16.9159 18.6469 16.6742 19.1969 16.6742 19.8969C16.6742 20.4302 16.8409 20.8469 17.1742 21.1469C17.5242 21.4469 18.0159 21.6635 18.6492 21.7969L18.9492 21.8719Z" fill="#592D34"/>
			</svg>
    ';
} 
?>