@extends("layout")

@section('title')
   Feedback
@stop


    @section("content")
            <!-- content -->

    <div class="container">
        <div class="main">
            <div class="contact">
                <div class="contact_info">

                    <h2></h2>

                </div>
    @if (session('successContact'))
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <i class="fa fa-times"></i> {{ session('successContact') }}
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
                <div class ="col-md-offset-2 col-md-8">
                <div class="contact-form">
                    <h2>Feedback</h2>
                    <form method="POST" action="{{ route('feedback') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div>
                           <span><label>URL</label></span>
                            <span><input name="userUrl" type="text" class="textbox @if ($errors->has('userUrl'))has-error @endif" value="{{ Request::old('userEmail') }}"></span>
                        </div>
                        <div>
                        <span><label>Bug</label></span>
                            <select name="userBug" class="col-md-6">
                                <option value="Visuel">Visuel</option>
                                <option>Affichage</option>
                                <option selected>Developpement</option>
                                <option value="orthographe">Orthographe</option>
                                <option>Rien à signaler</option>
                            </select>
                        <div>
                            <p></p>
                            <div>
                            <span><label>FirstName</label></span>
                            {!! $errors->first('userFirstName', '<small class="help-block">:message</small>') !!}
                            <span><input name="userFirstName" type="text" class="textbox" value="{{ Request::old('userFirstName') }}"></span>
                        </div>
                        <div>
                            <span><label>Name</label></span>
                            {!! $errors->first('userName', '<small class="help-block">:message</small>') !!}
                            <span><input name="userName" type="text" class="textbox" value="{{ Request::old('userName') }}"></span>
                        </div>
                        <div>
                            <span><label>E-mail</label></span>
                            <span><input name="userEmail" type="text" class="textbox @if ($errors->has('userEmail'))has-error @endif" value="{{ Request::old('userEmail') }}"></span>
                        </div>
                        <div>
                            <span><label>téléphone</label></span>
                            <span><input name="userPhone" type="text" class="textbox" value="{{ Request::old('userPhone') }}"></span>
                        </div>
                            <div>
                                <!-- ajouter une image
                                https://laravel.com/docs/4.2/requests#files
                                -->
                               <span> <label for ="ajouterImage">Ajouter une image</label></span>
                                    <?php ?>
                                            <!-- limite du fichier à 150Ko -->
                                    <input type="file" name="UserImage" class="ajouterImage" value="150000">
                                    <p></p>
                            </div>

                        <div>
                            <span><label>Sujet</label></span>
                            <span><textarea name="userMsg" value="{{ Request::old('userMsg') }}"> </textarea></span>
                        </div>
                        <div>
                            <span><input type="submit" class="" value="Submit us"></span>
                        </div>
                    </form>
                </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@stop


