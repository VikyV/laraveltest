@extends("layout")
@section('title')
    Ajouter
@stop
@section('stylesheet')
    @parents
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

@stop
    @section("content")
              <!-- TABLE: LATEST ORDERS -->
    <div class="container">
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Modifier les catégories</h3>

                    @if (session('successCat'))
                        <div class="alert alert-success">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <i class="fa fa-times"></i> {{ session('successCat') }}
                        </div>
                    @endif
                    @if(count($errors->all()))
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                      <form method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <tr>
                          <th>Position ID</th>
                          <th>Titre</th>
                          <th>Description</th>
                          <th>Image</th>

                        </tr>
                      </thead>
                      <tbody>

                      <tr>
                          <td><input name="catId" type="text"  value=""></td>
                          <td><input name="catTitre" type="text"  value=""></td>
                          <td><textarea name="catDescribe" type="text"  value=""></textarea></td>
                          <td><input name="catImage" type="file" value="150000"></td>

                        </tr>

                      <tr> <td>
                      <input type="submit" class="btn btn-sm btn-info btn-flat pull-left"> </td></tr>
                      </tbody>
                      </form>
                    </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">

                  <a href="{{ route('categories') }}" class="btn btn-sm btn-default btn-flat pull-right">View All Category</a>
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->
  </div>
    @endsection