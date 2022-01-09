<!DOCTYPE html>
<html>
<head>
<title>Blue Ocean MVC task</title>
</head>

<body>
    @foreach($views as $view)
        <p>Id: {{$view->id}}</p>
        <p>Date: {{$view->date}}</p>
        <p>Playerid: {{$view->playerid}}</p>
        <p>Agentid: {{$view->agentid}}</p>
        <p>Currency: {{$view->currency}}</p>
        <p>Bet: {{$view->bet}}</p>
        <p>Win: {{$view->win}}</p>
        <p>Rake: {{$view->rake}}</p>
        <p>Tournament: {{$view->tournament}}</p>
        <p>Net: {{$view->net}}</p>
        <p>Fin: {{$view->fin}}</p>
        <hr>
    @endforeach
</body>

</html>