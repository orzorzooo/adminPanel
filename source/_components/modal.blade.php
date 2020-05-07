<!-- Modal -->
{{-- <div class="modal fade" id="{{isset($modal_id) ? $modal_id : "modal"}}" tabindex="-1" role="dialog">
<div class="modal-dialog modal-dialog-centered {{isset($custom_style) ? $custom_style : ""}}" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title text-uppercase" id="exampleModalLabel">{{isset($title) ? $title : "Title"}}</h5>
      <button type="button" class="close" data-dismiss="modal">
        <span>&times;</span>
      </button>
    </div>
    <div class="modal-body">
      @if(isset($form))
      {{$form}}
      @endif
    </div>

    <div class="modal-footer">
      @if(isset($footer))
      {{$footer}}
      @endif
    </div>
  </div>
</div>
</div> --}}

<div class="modal fade bd-example-modal-lg" id="{{isset($modal_id) ? $modal_id : "modal"}}" tabindex="-1" role="dialog"
  aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">{{isset($title) ? $title : "Title"}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @if(isset($form))
        {{$form}}
        @endif
      </div>
      <div class="modal-footer">
        @if(isset($footer))
        {{$footer}}
        @endif
        {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button> --}}
      </div>
    </div>
  </div>
</div>