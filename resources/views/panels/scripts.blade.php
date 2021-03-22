{{-- Vendor Scripts --}}
<script src="{{ asset(mix('vendors/js/vendors.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/ui/prism.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>
@yield('vendor-script')
  {{-- Theme Scripts --}}
  <script src="{{ asset(mix('js/core/app-menu.js')) }}"></script>
  <script src="{{ asset(mix('js/core/app.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/components.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/common/common.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/common/format.js')) }}"></script>
@if($configData['blankPage'] == false)
  <script src="{{ asset(mix('js/scripts/footer.js')) }}"></script>
@endif
{{-- page script --}}
@yield('page-script')
