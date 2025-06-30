<!DOCTYPE html>
<html>
<head>
    <title>Show Cookies</title>
    <script>
        function getCookie(name) {
            let match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
            return match ? decodeURIComponent(match[2]) : '';
        }

        function showCookies() {
            document.getElementById("firstname").textContent = getCookie("firstname");
            document.getElementById("middlename").textContent = getCookie("middlename");
            document.getElementById("lastname").textContent = getCookie("lastname");
        }
        setInterval(showCookies, 1000);
    </script>
</head>
<body>
<h2>Cookies Display</h2>
<p>First Name (after 10s): <span id="firstname"></span></p>
<p>Middle Name (after 20s): <span id="middlename"></span></p>
<p>Last Name (after 30s): <span id="lastname"></span></p>
</body>
</html>