¡Hola {{$owner->name}}!

<p>Una nueva jugadora se ha registrado en tu partida de las Netcon titulada: <b>{{$game->title}}</b></p>

<p>Su nombre es: <b>{{$player->name}}</b></p>

<p>Puedes verlo <a href="{{route('game_view', ['game' => $game], true)}}">aquí</a></p>

<p>- Netconplay</p>





