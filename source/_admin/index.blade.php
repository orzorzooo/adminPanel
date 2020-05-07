@extends('_layouts.layout')
@section('app_name', 'app')

@section('content')

@component('_components.page_title',[
'page_title' => 'Admin',
'page_description' => '管理者權限設定'
])
@slot('page_title_actions')
@endslot
@endcomponent



<div class="main-card mb-3 card">
  <div class="card-header">
    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
      使用者列表
    </div>
    <div class="btn-actions-pane-right">
      <button type="button" class="btn-icon btn-wide btn-outline-2x btn btn-outline-success btn-sm d-flex"
        data-toggle="modal" data-target="#addUser">
        新增使用者
        <span class="pl-2 align-middle opacity-7">
          <i class="fa fa-angle-right"></i>
        </span>
      </button>
    </div>
  </div>
  <div class="table-responsive">
    <table class="align-middle text-truncate mb-0 table table-borderless table-hover">
      <thead>
        <tr>
          <th class="text-center">#ID</th>
          <th class="text-center">姓名</th>
          <th class="text-center">狀態</th>
          <th class="text-center">權限</th>
          <th class="text-center">動作</th>
          <th class="text-center">編輯</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="data in fakeDatas">
          <td class="text-center text-muted" style="width: 80px;">
            #54
          </td>

          <td class="text-center">
            <a>@{{data.name}}</a>
          </td>

          <td class="text-center">

            <div class="badge badge-pill badge-success" v-if="data.isActive">啟用</div>
            <div class="badge badge-pill badge-danger" v-else>
              停用
            </div>
          </td>
          <td class="text-center">
            <span class="pr-2 opacity-6">
              <i class="fa fa-business-time"></i>
            </span>
            @{{data.auth}}
          </td>

          <td class="text-center">

            <div role="group" class="btn-group-sm btn-group">
              <button class="btn-shadow btn btn-success">
                啟用
              </button>
              <button class="btn-shadow btn btn-danger">
                停用
              </button>
            </div>
          </td>
          <td>
            <div class="nav-item dropdown">
              <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v fa-w-6"> </i></a>
              <div class="dropdown-menu dropdown-menu-right animated bounceIn">
                <button class="dropdown-item" data-toggle="modal" data-target="#addUser"> <i class="pe-7s-note"></i>
                  Edit</button>
                <button class="dropdown-item" onclick="return confirm('Are you sure?')"><i
                    class=" pe-7s-close-circle"></i>
                  Delete</button>

              </div>
            </div>
          </td>
        </tr>

      </tbody>
    </table>
  </div>
</div>


@endsection

@section('modal')
@component('_components.modal',[
'title' => 'Add user',
'modal_id' => 'addUser'
])
@slot('form')
<form method="POST" enctype="multipart/form-data">

  <input type="text" value="Luggage" name="model_name" hidden>
  <div class="form-row">
    <div class="col">
      <label>User Name</label>
      <input type="text" class="form-control" placeholder="Name" name="name" required>
    </div>
    <div class="col">
      <label>Auth</label>
      <select name="country_name" class="form-control">
        <option value="superAdmin">超級管理員</option>
        <option value="admin">管理員</option>
        <option value="user">使用者</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label>說明</label>
    <textarea name="description" cols="30" rows="3" class="form-control" placeholder="說明文字"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endslot
@endcomponent


@endsection