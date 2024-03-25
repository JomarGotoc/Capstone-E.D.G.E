<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Password Input with Eye Button</title>
<style>
    .password-container {
        position: relative;
        width: 100%;
        max-width: 300px;
    }
    .password-toggle {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        cursor: pointer;
    }
</style>
</head>
<body>

<div class="password-container">
    <input type="password" id="passwordInput" placeholder="Enter password">
    <span class="password-toggle" onclick="togglePasswordVisibility()">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px">
            <path d="M12 17.27L18.18 21l1.64-1.64-6.42-6.43a2.5 2.5 0 0 0-3.54 0L4.18 17 5.82 18.64 12 17.27zM12 5.27l6.42 6.43a2.5 2.5 0 0 1 0 3.54L18.18 21 12 17.27 5.82 21 4.18 19.36l6.42-6.43a2.5 2.5 0 0 1 3.54 0z"></path>
        </svg>
    </span>
</div>

<script>
    function togglePasswordVisibility() {
        const passwordInput = document.getElementById('passwordInput');
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
    }
</script>

</body>
</html>
