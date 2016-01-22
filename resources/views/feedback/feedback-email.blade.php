<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Feedback-email</title>
</head>
<body>
<h2>Contact liste</h2>
<TABLE border=1px>
<ul>
    <li>Url : {{ $data['userEmail'] }}</li>
    <li>Bug : {{ $data['userBug'] }}</li>
    <li>Prenom: {{  $data['userFirstName'] }}</li>
    <li>Nom: {{  $data['userName'] }}</li>
    <li>Email : {{ $data['userEmail'] }}</li>
    <li>Tel : {{ $data['userPhone'] }}</li>
    <li>Message : {{ $data['userMsg'] }}</li>
</ul>
</TABLE>
<hr>
</body>
</html>