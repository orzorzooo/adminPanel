@extends('_layouts.layout')
@section('app_name', 'app')
@section('content')

@component('_components.page_title',[
'page_title' => 'product',
'page_description' => '商品列表'
])
@slot('page_title_actions')
<button class="mb-2 mr-2 btn-pill btn btn-outline-primary">新增商品</button>
@endslot
@endcomponent


<div class="main-card mb-3 card">
  <div class="card-header">商品列表</div>
  <ul class="todo-list-wrapper list-group list-group-flush" v-for="data in productDatas">
    <li class="list-group-item">
      <div class="todo-indicator bg-warning"></div>
      <div class="widget-content p-0">
        <div class="widget-content-wrapper">
          <div class="widget-content-left">

            <img width="42" class="rounded" v-bind:src="data.imgUrl" alt="">
          </div>
          <div class="widget-content-left">

            <div class="widget-heading">@{{data.name}} </div>
            <div class="widget-subheading"><i>$NTD: @{{data.price}} </i></div>
          </div>

          <div v-if="data.default">
            <div class="badge badge-pill badge-success">預設</div>
          </div>

          <div class="widget-content-right widget-content-actions2">

            <button class="border-0 btn-transition btn btn-outline-success">
              <i class="fa fa-check"></i>
            </button>
            <button class="border-0 btn-transition btn btn-outline-danger">
              <i class="fa fa-trash-alt"></i>
            </button>

          </div>

        </div>
      </div>
    </li>
    {{-- <li class="list-group-item">
      <div class="todo-indicator bg-focus"></div>
      <div class="widget-content p-0">
        <div class="widget-content-wrapper">
          <div class="widget-content-left mr-2">
            <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox1"
                class="custom-control-input"><label class="custom-control-label"
                for="exampleCustomCheckbox1">&nbsp;</label>
            </div>
          </div>
          <div class="widget-content-left">
            <div class="widget-heading">Task with hover dropdown menu</div>
            <div class="widget-subheading">
              <div>By Johnny
                <div class="badge badge-pill badge-info ml-2">NEW</div>
              </div>
            </div>
          </div>
          <div class="widget-content-right widget-content-actions">
            <div class="d-inline-block dropdown">
              <button type="button" aria-haspopup="true" data-toggle="dropdown" aria-expanded="false"
                class="border-0 btn-transition btn btn-link">
                <i class="fa fa-ellipsis-h"></i>
              </button>
              <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                <h6 tabindex="-1" class="dropdown-header">Header</h6>
                <button type="button" disabled="" tabindex="-1" class="disabled dropdown-item">Action</button>
                <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                <div tabindex="-1" class="dropdown-divider"></div>
                <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </li>
    <li class="list-group-item">
      <div class="todo-indicator bg-primary"></div>
      <div class="widget-content p-0">
        <div class="widget-content-wrapper">
          <div class="widget-content-left mr-2">
            <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox4"
                class="custom-control-input"><label class="custom-control-label"
                for="exampleCustomCheckbox4">&nbsp;</label>
            </div>
          </div>
          <div class="widget-content-left flex2">
            <div class="widget-heading">Badge on the right task</div>
            <div class="widget-subheading">This task has show on hover actions!</div>
          </div>
          <div class="widget-content-right widget-content-actions">
            <button class="border-0 btn-transition btn btn-outline-success">
              <i class="fa fa-check"></i>
            </button>
          </div>
          <div class="widget-content-right ml-3">
            <div class="badge badge-pill badge-success">Latest Task</div>
          </div>
        </div>
      </div>
    </li>
    <li class="list-group-item">
      <div class="todo-indicator bg-info"></div>
      <div class="widget-content p-0">
        <div class="widget-content-wrapper">
          <div class="widget-content-left mr-2">
            <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox2"
                class="custom-control-input"><label class="custom-control-label"
                for="exampleCustomCheckbox2">&nbsp;</label>
            </div>
          </div>
          <div class="widget-content-left mr-3">
            <div class="widget-content-left">
              <img width="42" class="rounded" src="assets/images/avatars/1.jpg" alt="">
            </div>
          </div>
          <div class="widget-content-left">
            <div class="widget-heading">Go grocery shopping</div>
            <div class="widget-subheading">A short description for this todo item</div>
          </div>
          <div class="widget-content-right widget-content-actions">
            <button class="border-0 btn-transition btn btn-outline-success">
              <i class="fa fa-check"></i>
            </button>
            <button class="border-0 btn-transition btn btn-outline-danger">
              <i class="fa fa-trash-alt"></i>
            </button>
          </div>
        </div>
      </div>
    </li>
    <li class="list-group-item">
      <div class="todo-indicator bg-success"></div>
      <div class="widget-content p-0">
        <div class="widget-content-wrapper">
          <div class="widget-content-left mr-2">
            <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox3"
                class="custom-control-input"><label class="custom-control-label"
                for="exampleCustomCheckbox3">&nbsp;</label>
            </div>
          </div>
          <div class="widget-content-left flex2">
            <div class="widget-heading">Development Task</div>
            <div class="widget-subheading">Finish React ToDo List App</div>
          </div>
          <div class="widget-content-right">
            <div class="badge badge-warning mr-2">69</div>
          </div>
          <div class="widget-content-right">
            <button class="border-0 btn-transition btn btn-outline-success">
              <i class="fa fa-check"></i>
            </button>
            <button class="border-0 btn-transition btn btn-outline-danger">
              <i class="fa fa-trash-alt"></i>
            </button>
          </div>
        </div>
      </div>
    </li> --}}
  </ul>

</div>

@endsection