@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-12">
        <h1 class="text-center text-primary py-3">TODO App</h1>

        <h2 class="text-muted py-3 float-left">やること一覧</h2>
            <div class="float-right my-3">
                <a href="/todo/create/" class="btn btn-primary"><i class="fas fa-plus mr-2"></i>新規作成</a>
            </div>
        <table class="table">
            <thead>
            <tr>
                <th width="40%">タイトル</th>
                <th width="20%">期限</th>
                <th width="10%">状態</th>
                <th width="15%"></th>
                <th width="15%"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($todo_list as $todo)
                <tr>
                    <td>
                        <a href="/todo/{{ $todo->id }}">
                            {{ $todo->title }}
                        </a>
                    </td>
                    <td>{{ $todo->due_date }}</td>
                    <td>{{ $todo->getStatusText() }}</td>
                    <td>
                        <a href="/todo/{{ $todo->id }}/edit" class="btn btn-success">
                            <i class="fas fa-edit mr-2"></i>
                            編集
                        </a>
                    </td>
                    <td>
                        <form action="/todo/{{ $todo->id }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit"><i class="fas fa-trash mr-2"></i>削除</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $todo_list->links() }}
    </div>
</div>
@endsection

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>
</body>
</html>