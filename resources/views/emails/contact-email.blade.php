<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact-email</title>
</head>
<body>
<h2>Contact liste</h2>
<TABLE border=1px>
<ul>
    <li>Nom: {{  $data['userName'] }}</li>
    <li>Email : {{ $data['userEmail'] }}</li>
    <li>Date : {{ $data['datetimepicker'] }}</li>
    <li>Tel : {{ $data['userPhone'] }}</li>
    <li>Message : {{ $data['userMsg'] }}</li>
</ul>
</TABLE>
<hr>
</body>
</html>