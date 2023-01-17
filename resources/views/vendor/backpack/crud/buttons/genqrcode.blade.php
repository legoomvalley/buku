<!-- @if ($crud->hasAccess('genqrcode')) -->
  <a href="{{ url($crud->route.'/'.$entry->getKey().'/qrcode') }}" class="btn btn-sm btn-link text-capitalize"><i class="la la-question"></i> genqrcode</a>
<!-- @endif -->