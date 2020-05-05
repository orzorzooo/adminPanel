<div class="app-sidebar sidebar-shadow">
  <div class="app-header__logo">
    <div class="logo-src"></div>
    <div class="header__pane ml-auto">
      <div>
        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
      </div>
    </div>
  </div>
  <div class="app-header__mobile-menu">
    <div>
      <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>
    </div>
  </div>
  <div class="app-header__menu">
    <span>
      <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
        <span class="btn-icon-wrapper">
          <i class="fa fa-ellipsis-v fa-w-6"></i>
        </span>
      </button>
    </span>
  </div>
  <div class="scrollbar-sidebar">
    <div class="app-sidebar__inner">
      <ul class="vertical-nav-menu">

        <li class="app-sidebar__heading">管理者</li>
        <li>
          <a href="{{ $page->baseUrl }}/admin">
            <i class="metismenu-icon pe-7s-graph">
            </i>管理者權限系統
          </a>
        </li>

        <li class="app-sidebar__heading">廠商</li>
        <li>
          <a href="/company">
            <i class="metismenu-icon pe-7s-graph">
            </i>廠商列表
          </a>
        </li>

        <li class="app-sidebar__heading">商品</li>
        <li>
          <a href="/product">
            <i class="metismenu-icon pe-7s-graph">
            </i>編輯商品
          </a>
        </li>
        <li>
          <a href="#">
            <i class="metismenu-icon pe-7s-graph">
            </i>預設商品上架
          </a>
        </li>

        <li class="app-sidebar__heading">API</li>
        <li>
          <a href="/api">
            <i class="metismenu-icon pe-7s-graph">
            </i>憑證
          </a>
        </li>
        <li>
          <a href="#">
            <i class="metismenu-icon pe-7s-graph">
            </i>取得上架商品
          </a>
        </li>
        <li>
          <a href="#">
            <i class="metismenu-icon pe-7s-graph">
            </i>訂單
          </a>
        </li>
        <li>
          <a href="#">
            <i class="metismenu-icon pe-7s-graph">
            </i>重新付款
          </a>
        </li>
        <li>
          <a href="#">
            <i class="metismenu-icon pe-7s-graph">
            </i>訂單狀態
          </a>
        </li>

        <li class="app-sidebar__heading">訂單管理</li>
        <li>
          <a href="/order">
            <i class="metismenu-icon pe-7s-graph">
            </i>訂單一覽
          </a>
        </li>


        <li class="app-sidebar__heading">報表輸出</li>
        <li>
          <a href="/export">
            <i class="metismenu-icon pe-7s-graph">
            </i>報表輸出系統
          </a>
        </li>

        <li class="app-sidebar__heading">LOG</li>
        <li>
          <a href="/export">
            <i class="metismenu-icon pe-7s-graph">
            </i>登入紀錄
          </a>
        </li>
        <li>
          <a href="/export">
            <i class="metismenu-icon pe-7s-graph">
            </i>操作紀錄
          </a>
        </li>
        <li>
          <a href="/export">
            <i class="metismenu-icon pe-7s-graph">
            </i>API呼叫紀錄
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>