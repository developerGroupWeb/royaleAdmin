@extends('templates.template')

@section('content')

    @include('templates.nav')

<!-- MAIN CONTENT-->
<div class="main-content">

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{session()->get('message')}}
        </div>
    @endif

    @if(isset($errorHacking))
    <div class=" alert alert-danger">
        {!! $errorHacking !!}
    </div>
    @endif

    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="card w-100">
                            <div class="card-header">
                                <h3 class="text-center"><strong>Rediger un article</strong></h3>
                            </div>
                            <div class="card-body card-block">
                                <form action="" method="post" class="form-horizontal" id="" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <div>
                                                <label for="select" class="form-control-label font-weight-bold">Position de l'article</label>
                                            </div>
                                            <div class="">
                                                <select name="position" id="select" class="form-control">
                                                    <option value="">Selectionner la position</option>
                                                    <option value="0">Articles a la une</option>
                                                    <option value="1">Articles priorite 2</option>
                                                    <option value="2">Articles priorite 3</option>
                                                    <option value="3">Article top info</option>
                                                </select>
                                                <div class="alert-danger">
                                                    {!! $errors->first('position') !!}
                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-group col-lg-6">
                                            <div class="">
                                                <label for="select" class="font-weight-bold form-control-label">La Rubrique</label>
                                            </div>
                                            <div class="">
                                                <select name="rubric" id="select" class="form-control">
                                                    <option value="">Selectionner la rubrique</option>
                                                    <option value="politique">Politique</option>
                                                    <option value="économie">Economie</option>
                                                    <option value="opinion">Opinion</option>
                                                    <option value="enquêtes">Enquetes</option>
                                                    <option value="sport">Sport</option>
                                                    <option value="santé">Santé</option>
                                                    <option value="international">International</option>
                                                    <option value="éducation">Education</option>
                                                    <option value="tech-Innovation">Tech-Innovation</option>
                                                    <option value="dossiers-d'actualité">Dossiers d'actualité</option>
                                                    <option value="le-conseil-des-ministres">Le conseil des ministres</option>
                                                    <option value="histoires-d'afrique">Histoires d'afrique</option>
                                                    <option value="tv">La royaleNews TV</option>

                                                </select>
                                                <div class="alert-danger">
                                                    {!! $errors->first('rubric') !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row form-group">
                                        <div class="col col-md-2">
                                            <label for="text-input" class="font-weight-bold form-control-label">Titre de l'article</label>
                                        </div>
                                        <div class="col-12 col-md-10">
                                            <input type="text" id="text-input" name="title" placeholder="Text" class="form-control" row="3" value="{{old('title')}}">
                                            <div class="alert-danger">
                                                {!! $errors->first('title') !!}
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-2">
                                            <label for="textarea-input" class="font-weight-bold form-control-label">Résumé de l'article</label>
                                        </div>
                                        <div class="col-12 col-md-10">
                                            <textarea name="content" id="textarea-input"  placeholder="Rédiger un résumé de l'article den deux ligne" class="form-control">{{old('content')}}</textarea>
                                            <div class="alert-danger">
                                                {!! $errors->first('content') !!}
                                            </div>

                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row form-group">
                                        <div class="col col-md-2">
                                            <label for="textarea-input" class="font-weight-bold form-control-label">Contenu du l'article</label>
                                        </div>
                                        <div class="col-12 col-md-10">
                                            <textarea name="contents" id="textarea-input" rows="20" placeholder="Content..." class="form-control">{{old('contents')}}</textarea>
                                            <div class="alert-danger">
                                                {!! $errors->first('contents') !!}
                                            </div>

                                        </div>
                                    </div>
                                    

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="file-input" class="font-weight-bold form-control-label">Image de l'article</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="file" id="file-input" name="picture" class="form-control-file">
                                            <div class="alert-danger">
                                                {!! $errors->first('picture') !!}
                                            </div>
                                        </div>

                                    </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success btn-lg" id="">
                                            <i class="fa fa-dot-circle-o"></i> Envoyer
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Annuler
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © {{date('Y')}} Colorlib. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT-->
@stop