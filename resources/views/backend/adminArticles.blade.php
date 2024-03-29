@extends('backend.adminBase')


@section('content')

    <div>
        <h5 class="card-title" style="margin-left: 35px">Articles</h5>
        <table class="table" style="margin: 30px">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Delete</th>
                <th scope="col">Edit</th>
            </tr>
            </thead>
            <tbody>
            @foreach($articles as $article)
                <tr>
                    <th scope="row">{{ $article->id }}</th>
                    <td> {{$article->title}} </td>
                    <td> <img src="{{ $article->image }}" alt="" class="img-fluid"> </td>
                    <td> <a type="button" href="delete/{{ $article->id }}"
                            class="btn btn-outline-danger"
                            data-bs-toggle="modal"
                            data-bs-target="#disablebackdrop-{{ $article->id }}"><i class="bi bi-trash"></i></a>
                         <div class="modal fade" id="disablebackdrop-{{ $article->id }}" tabindex="-1"
                              data-bs-backdrop="false">
                             <div class="modal-dialog">
                                 <div class="modal-content">
                                     <div class="modal-header">
                                         <h5 class="modal-title">Disabled Backdrop</h5>
                                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                     </div>
                                     <div class="modal-body">
                                         Точно удалить?
                                     </div>
                                     <div class="modal-footer">
                                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Нет</button>
                                         <a type="button" href="delete/{{ $article->id }}" class="btn btn-primary">Удалить</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                    </td>
                    <td> <a href="edit/{{ $article->id }}" class="btn btn-outline-primary"><i class="bi bi-hammer"></i></a> </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
    <div style="Margin: 10px">
        <a class="btn btn-primary" href="add" style="margin: 10px">Добавить</a>
    </div>

@endsection
