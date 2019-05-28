<table class="table table-bordered table striped">
    <thead>
    <th>Id</th>
    <th>Prix</th>
    <th>Titre</th>
    <th>Genre</th>
    </thead>

    @foreach($lesMangas as $mangas)

        <tr>
            <td>{{$mangas->getIdManga()}}</td>
            <td>{{$mangas->getPrix()}}</td>
            <td>{{$mangas->getTitre()}}</td>
            <td>{{$mangas->getGenre()}}</td>
        </tr>
    @endforeach
</table>
