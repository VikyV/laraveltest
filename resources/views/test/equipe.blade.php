@extends("test.layout-test")

@section("content")

    @foreach ($teams as $krew)
        @if ($krew['chef']=== true)
            <p> Le chef d'équipe est {{ $krew['firstname'] }} {{ $krew['lastname'] }}
            </p>
        @endif
    @endforeach
    <p>le nombre de personnes dans l'équipe est de {{ count($teams) }} </p>
    <hr>

    <p>Afficher le status de chaque personne en majuscule</p>
    @foreach ($teams as $krew)
        <li>{{ strtoupper($krew['firstname']) ." ". strtoupper($krew['lastname']) }} a le statut de {{ $krew['statut'] }} </li>
    @endforeach
    <hr>
   {{asset('img/'.$krew['photo'])}};
    <img src="{{asset('img/'.$krew['photo'])}}"/>
   // Afficher les personnes de l'équipe de cette manière :Marc Toto étant le chef des deux autres personnes--}}

@endsection