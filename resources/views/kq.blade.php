@extends('layouts.app')

@section('content')
    <div class="container">
        @include('layouts.error')
        <div class="card">
            <div class="card-header">
                添加条目
            </div>
            <div class="card-body">
                <form id="item-form" method="POST" action="{{route('kq.store')}}">
                    {{csrf_field()}}
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">标题</label>
                            <input type="text" class="form-control" name="title" placeholder="APP应用名称">
                        </div>
                        <div class="form-group col-md-12">
                                 <label for="exampleFormControlTextarea1">内容</label>
                                <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mx-auto d-block">创建条目</button>
                </form>
            </div>
        </div>
        <table class="table table-bordered  table-striped mt-3 text-center">
            <thead>
            <tr class="bg-dark text-light">
                <th scope="col">key</th>
                <th scope="col">标题</th>
                <th scope="col">内容</th>
                <th scope="col">功能操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($items as $item)
                <tr>
                    <td>{{$item->key}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->content}}</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-id="{{$item->id}}"
                                data-key="{{$item->key}}"
                                data-title="{{$item->title}}"
                                data-content="{{$item->content}}"
                                data-toggle="modal" data-target="#item-edit-modal">编辑
                        </button>
                        <button type="button" class="btn btn-primary" data-id="{{$item->id}}"
                                data-key="{{$item->key}}"
                                data-title="{{$item->title}}"
                                data-content="{{$item->content}}"
                                data-toggle="modal" data-target="#item-del-modal">删除
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="">{{$items->links()}}</div>
    </div>
    <div class="modal fade" id="item-edit-modal" tabindex="-1" role="dialog" aria-labelledby="itemModalLabel"
         aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="itemModalLabel">编辑条目</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="item-edit-form" method="POST" action="">
                    <div class="modal-body">
                        <input type="hidden" name="_method" value="PUT">
                        {{csrf_field()}}
                        <div class="form-row">
                            <input type="hidden" name="id">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">关键字</label>
                                <input type="text" class="form-control" name="key" disabled placeholder="key">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">标题</label>
                                <input type="text" class="form-control" name="title" placeholder="渠道号">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">内容</label>
                                <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">修改</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="item-del-modal" tabindex="-1" role="dialog" aria-labelledby="itemModalLabel"
         aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="itemModalLabel">删除条目</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="item-del-form" method="POST" action="">
                    <div class="modal-body">
                        <input type="hidden" name="_method" value="DELETE">
                        {{csrf_field()}}
                        <div class="modal-body">
                            <p class="del-text"></p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">确认删除</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    <script>
        $(function () {
            $('#item-edit-modal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget);
                var id = button.data('id');
                var key = button.data('key');
                var title = button.data('title');
                var content = button.data('content');
                console.log(key,title,content)
                var modal = $(this);
                modal.find('.modal-body input[name=id]').val(id);
                modal.find('.modal-body input[name=key]').val(key);
                modal.find('.modal-body input[name=title]').val(title);
                modal.find('.modal-body textarea[name=content]').val(content);
                modal.find('#item-edit-form').prop('action', '/kq/' + id);
            });

            $('#item-del-modal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget);
                var id = button.data('id');
                var title = button.data('title');
                var modal = $(this);
                modal.find('.modal-body input[name=id]').val(id);
                modal.find('#item-del-form').prop('action', '/kq/' + id);
                modal.find('.modal-body .del-text').text(title);
            })
        })

    </script>
@endsection
