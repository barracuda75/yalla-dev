@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Modifier une actualité
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>
                <li><a href="{{ route('news.index') }}">Actualités</a></li>
                <li class="active">Editer</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                @include ('admin.errors')
                <form action="{{ route('news.update', $news->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="col-md-9">
                        <div class="box box-primary">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="title">Titre de l'actualité</label>
                                    <input type="text" class="form-control" name="title" value="{{ old('title', $news->title) }}">
                                </div>
                                <div class="form-group">
                                    <label for="authors">Auteur(s) :</label>
                                    <input type="text" class="form-control" id="authors" name="authors"
                                           value="{{ old('authors', $news->authors) }}">
                                </div>
                                <div class="form-group">
                                    <label for="content">Contenu</label>
                                    <textarea class="form-control" id="tinyMCE"
                                              name="content">{{ old('content', $news->content) }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box box-solid">
                            <div class="box-header with-border">
                                <h3 class="box-title">Options</h3>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="category_id">Catégories</label>
                                    <select class="form-control" name="category_id">
                                        @foreach ($categories as $id => $category)
                                            @if($news->category_id === $id)
                                                <option value="{{ $id }}" selected>{{ $category }}</option>
                                            @else
                                                <option value="{{ $id }}">{{ $category }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tags_list[]">Tags</label>
                                    <select class="form-control" name="tags_list[]" id="tags_list" multiple>
                                        @foreach ($tags as $id => $tag)
                                            @if(in_array($id, $tagIds))
                                                <option value="{{ old('id', $id) }}" selected>{{ old('tag', $tag) }}</option>
                                            @else
                                                <option value="{{ old('id', $id) }}">{{ old('tag', $tag) }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <input type="submit" value="Publier la modification">
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection

@section('scripts')

    <script>

        $('#tags_list').select2({
            placeholder: 'Entrez vos tags et libellés',
            tags: true
        });
    </script>

@endsection