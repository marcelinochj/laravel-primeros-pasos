@csrf
<label for="">Título</label>
<input type="text" class="form-control" name="title" id="" value="{{ old("title",$category->title) }}">

<label for="">Slug</label>
<input type="text" class="form-control" name="slug" id="" value="{{ old("slug",$category->slug) }}">

<button class="btn btn-succes my-2" type="submit">Enviar</button>