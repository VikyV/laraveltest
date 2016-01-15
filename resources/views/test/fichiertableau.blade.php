{{dump($bladeProduct)  }}


@foreach ($bladeProduct as $element)
    <p>{{ $element['title']}}</p>
@endforeach
<hr>
<ul>
    @foreach ($bladeProduct as $prod)
        <li>Titre : {{ $prod['title'] }}</li>
        <li>Description : {{ $prod['description'] }}</li>
        <li>Prix : {{ $prod['prix'] }}</li>
        <li>Date :  {{ $prod['date_created']->format('d m Y') }}</li>
        <br>
    @endforeach
</ul>
<hr>
<ul>
    @forelse ($bladePro as $tab)
        <li>Titre : {{ $tab['title'] }}</li>
        <li>Description : {{ $tab['description'] }}</li>
        <li>Prix : {{ $tab['prix'] }}</li>
        <li>Date :  {{ $tab['date_created']->format('d m Y') }}</li>
    @empty
        <p>Il n'y a pas de produit disponible</p>
    @endforelse
</ul>
<hr>
<a href="{{ route('url_vers_team') }}">LIEN VERS EQUIPE</a>