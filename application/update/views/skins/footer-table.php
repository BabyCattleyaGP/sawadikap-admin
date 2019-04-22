	<script src="<?php echo base_url()."assets/"?>/lib/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()."assets/"?>/lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="<?php echo base_url()."assets/"?>/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url()."assets/"?>/lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url()."assets/"?>/lib/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url()."assets/"?>/lib/peity/jquery.peity.min.js"></script>
    <script src="<?php echo base_url()."assets/"?>/lib/highlightjs/highlight.pack.min.js"></script>
    <script src="<?php echo base_url()."assets/"?>/lib/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()."assets/"?>/lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="<?php echo base_url()."assets/"?>/lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url()."assets/"?>/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
    <script src="<?php echo base_url()."assets/"?>/lib/select2/js/select2.min.js"></script>

    <script src="<?php echo base_url()."assets/"?>/js/bracket.js"></script>≥≥≥≥≥≥≥≥≥≥≥
    <script>
      $(function(){
        'use strict';

        $('#datatable1').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Search..',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
          }
        });

        $('#datatable2').DataTable({
          bLengthChange: false,
          searching: false,
          responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>
  </body>
</html>