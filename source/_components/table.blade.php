<table class="{{isset($custom_style) ? $custom_style : ""}}">
  <thead>
    <tr>
      @if(isset($th))
      @foreach ($th as $item)
      <th scope="col" class="text-uppercase">{{$item}}</th>
      @endforeach
      @endif
    </tr>
  </thead>
  <tbody>
    @if(isset($datas))
    @foreach ($datas as $item)
    <tr>
      @foreach($data_headnames as $data_headname)
      @if(isset($item->$data_headname))
      @if ($loop->first)
      <th>{{$item->$data_headname}}</th>
      @else
      @if($data_headname == 'price')
      <td>$ {{$item->$data_headname}}</td>
      @else
      <td>{{$item->$data_headname}}</td>
      @endif
      @endif
      @else
      <td></td>
      @endif
      @endforeach

      <td>
        @component('admin.components.table_dropdown_action',[
        'item' => $item,
        'delete_route' => $delete_route,
        'model_name' => $model_name
        ])
        @endcomponent
      </td>
    </tr>
    @endforeach
    @endif

  </tbody>
</table>