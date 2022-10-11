    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('backend/vendor/jquery/jquery.min.j') }}s"></script>
    <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('backend/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('backend/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('backend/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('backend/js/demo/chart-pie-demo.js') }}"></script>


<script src="//code.jquery.com/jquery-3.4.1.js"></script>
<script src="//unpkg.com/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/bootstrap-colorpicker.js"></script>
<script>
  $(function () {
    // Basic instantiation:
    $('#demo-input').colorpicker();
    
    // Example using an event, to change the color of the #demo div background:
    $('#demo-input').on('colorpickerChange', function(event) {
      $('#demo').css('background-color', event.color.toString());
    });
  });
</script>