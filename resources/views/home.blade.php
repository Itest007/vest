@extends('layouts.app')

@section('content')
    <div class="container">
        @include('layouts.error')
        <div class="card">
            <div class="card-header">
                添加条目
            </div>
            <div class="card-body">
                <form id="item-form" method="POST" action="{{route('item.store')}}">
                    {{csrf_field()}}
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputEmail4">AppID</label>
                            <input type="text" class="form-control" name="app_id" placeholder="AppID">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputPassword4">渠道号</label>
                            <input type="text" class="form-control" name="channel_id" placeholder="渠道号">
                        </div>
                        <div class="form-group col-md-3">
                            <label>终端</label>
                            <select class="form-control" name="os">
                                <option value="Android">Android</option>
                                <option value="IOS">IOS</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label>状态</label>
                            <input type="text" class="form-control" name="status" placeholder="100、101、102">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputPassword4">链接</label>
                            <input type="text" class="form-control" name="link" placeholder="链接">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary ">创建条目</button>
                </form>
            </div>
        </div>
        <table class="table table-bordered mt-3 text-center">
            <thead>
            <tr class="bg-dark text-light">
                <th scope="col">ID</th>
                <th scope="col">AppID</th>
                <th scope="col">渠道号</th>
                <th scope="col">终端</th>
                <th scope="col">状态</th>
                <th scope="col">链接</th>
                <th scope="col">功能操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($items as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->app_id}}</td>
                    <td>{{$item->channel_id}}</td>
                    <td>{{$item->os}}</td>
                    <td>{{$item->status}}</td>
                    <td>{{$item->link}}</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-id="{{$item->id}}"
                                data-app_id="{{$item->app_id}}"
                                data-channel_id="{{$item->channel_id}}" data-os="{{$item->os}}"
                                data-status="{{$item->status}}" data-link="{{$item->link}}"
                                data-toggle="modal" data-target="#item-edit-modal">编辑
                        </button>
                        <button type="button" class="btn btn-primary" data-id="{{$item->id}}"
                                data-app_id="{{$item->app_id}}"
                                data-channel_id="{{$item->channel_id}}" data-os="{{$item->os}}"
                                data-status="{{$item->status}}" data-link="{{$item->link}}"
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
                                <label for="inputEmail4">AppID</label>
                                <input type="text" class="form-control" name="app_id" placeholder="AppID">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">渠道号</label>
                                <input type="text" class="form-control" name="channel_id" placeholder="渠道号">
                            </div>
                            <div class="form-group col-md-6">
                                <label>终端</label>
                                <select class="form-control" name="os">
                                    <option value="Android">Android</option>
                                    <option value="IOS">IOS</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>状态</label>
                                <input type="text" class="form-control" name="status" placeholder="100、101、102">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">链接</label>
                                <input type="text" class="form-control" name="link" placeholder="链接">
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

    <script>
        $(function () {
            $('#item-edit-modal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget);
                var id = button.data('id');
                var app_id = button.data('app_id');
                var channel_id = button.data('channel_id');
                var os = button.data('os');
                var status = button.data('status');
                var link = button.data('link');
                var modal = $(this);
                modal.find('.modal-body input[name=id]').val(id);
                modal.find('.modal-body input[name=app_id]').val(app_id);
                modal.find('.modal-body input[name=channel_id]').val(channel_id);
                modal.find('.modal-body select[name=os]').val(os);
                modal.find('.modal-body input[name=status]').val(status);
                modal.find('.modal-body input[name=link]').val(link);
                modal.find('#item-edit-form').prop('action', '/item/' + id);
            });

            $('#item-del-modal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget);
                var id = button.data('id');
                var app_id = button.data('app_id');
                var channel_id = button.data('channel_id');
                var os = button.data('os');
                var status = button.data('status');
                var link = button.data('link');
                var modal = $(this);
                modal.find('.modal-body input[name=id]').val(id);
                modal.find('#item-del-form').prop('action', '/item/' + id);
                modal.find('.modal-body .del-text').text(app_id + '|' + channel_id + '|' + os + '|' + status + '|' + link);
            })
        })

    </script>
@endsection
