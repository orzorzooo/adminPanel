<div class="nav-item dropdown">
  <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true"
    aria-expanded="false"> <i class="mdi mdi-dots-vertical"></i></a>
  <div class="dropdown-menu dropdown-menu-right animated bounceIn">
    <button class="dropdown-item" data-toggle="modal" data-target="#edit_{{isset($item) ? $item->id : ''}}"> <i
        class="mdi mdi-grease-pencil"></i> Edit</button>
    @if(isset($delete_route))
    <form action="{{route($delete_route, $item->id)}}" method="POST" enctype="multipart/form-data">
      @method('DELETE')
      @csrf
      <input type="text" value="{{$model_name}}" name="model_name" hidden>
      <button class="dropdown-item" onclick="return confirm('Are you sure?')"><i class=" mdi mdi-delete-forever"></i>
        Delete</button>
    </form>
    @endif
  </div>
</div>