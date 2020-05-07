<div class="app-page-title">
  <div class="page-title-wrapper">
    <div class="page-title-heading">
      <div class="page-title-icon">
        <i class="{{isset($page_icon) ? $page_icon : "pe-7s-lock icon-gradient bg-malibu-beach"}}">
        </i>
      </div>
      <div>
        <div class="text-uppercase">{{isset($page_title) ? $page_title : "Page Title"}}</div>
        <div class="page-title-subheading">
          {{isset($page_description) ? $page_description : "Some Description Text Here"}}
        </div>
      </div>
    </div>


    <div class="page-title-actions">
      @if(isset($page_title_actions))
      {{$page_title_actions}}
      @endif
      {{-- <div class="d-inline-block dropdown">
        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
          class="btn-shadow dropdown-toggle btn btn-info">
          <span class="btn-icon-wrapper pr-2 opacity-7">
            <i class="fa fa-business-time fa-w-20"></i>
          </span> Buttons
        </button>
        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link">
                <i class="nav-link-icon lnr-inbox"></i>
                <span>
                  Inbox
                </span>
                <div class="ml-auto badge badge-pill badge-secondary">86</div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link">
                <i class="nav-link-icon lnr-book"></i>
                <span>
                  Book
                </span>
                <div class="ml-auto badge badge-pill badge-danger">5</div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link">
                <i class="nav-link-icon lnr-picture"></i>
                <span>
                  Picture
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a disabled class="nav-link disabled">
                <i class="nav-link-icon lnr-file-empty"></i>
                <span>
                  File Disabled
                </span>
              </a>
            </li>
          </ul>
        </div>
      </div> --}}


    </div>
  </div>
</div>