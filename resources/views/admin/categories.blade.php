@extends("layout")

@section('title')
    All categories
@stop

@section('stylesheet')
    @parent
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
@stop

@section("content")

<div class="container">
    <div class="row ">
        <div class="col-md-12 col-sm-9">
            <div class="content-panel">
                <table class="table table-striped table-advance table-hover">
                    <h4>All Categories</h4>
                    <hr>
                    <thead>
                    <tr>
                        <th><i class="fa fa-bullhorn"></i> id</th>
                        <th class="hidden-phone"><i class="fa fa-question-circle"></i> Name</th>
                        <th><i class="fa fa-bookmark"></i> image</th>
                        <th><i class=" fa fa-edit"></i> Action</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr> @foreach ($catyg as $kate)
                        <td><a href="basic_table.html#">{{$kate->id}}</a></td>
                        <td class="hidden-phone">{{$kate->name}}</td>
                        <td>{{$kate->image}} </td>

                        <td>
                            <a href="{{route('categorie',['id'=>$kate->id])}}" class="btn btn-success btn-xs"><i class="fa fa-check"></i></a>
                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                            <a href="{{ route('supprimer', ['idcat' => $kate->id]) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                        </td>
                    </tr>@endforeach


                    </tbody>
                </table>
            </div><!-- /content-panel -->
        </div><!-- /col-md-12 -->
    </div><!-- /row -->
</div>
@endsection

@section('footer-script')
    <script>
        $(document).ready(function(){
            $(".btn-danger").click(function(event){
                if(!confirm("Etes-vous sûr de vouloir suprimer cette catégorie?"))
                {
                    event.preventDefault();
                }
            });
        });
    </script>
@endsection