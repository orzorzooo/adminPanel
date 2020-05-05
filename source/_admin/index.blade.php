@extends('_layouts.layout')

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
      <button type="button" class="btn-icon btn-wide btn-outline-2x btn btn-outline-focus btn-sm d-flex">
        Actions Menu
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
        </tr>
      </thead>
      <tbody id='app'>
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
            <div class="toggle btn btn-primary" data-toggle="toggle" style="width: 57.4531px; height: 33px;"><input
                id="chkToggle1" type="checkbox" data-toggle="toggle" checked="">
              <div class="toggle-group"><label class="btn btn-primary toggle-on">On</label><label
                  class="btn btn-light toggle-off">Off</label><span class="toggle-handle btn btn-light"></span></div>
            </div>
            <div role="group" class="btn-group-sm btn-group">
              <button class="btn-shadow btn btn-success">
                啟用
              </button>
              <button class="btn-shadow btn btn-danger">
                停用
              </button>
            </div>
          </td>
        </tr>

      </tbody>
    </table>
  </div>
</div>

@endsection

@section('script')

@endsection