

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>ระบบแจ้งเตือน</b> | เวอร์ชั่น 1.0
        </div>
        <strong></strong> All rights reserved.
    </footer>
    
    
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/app.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.validate.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/validation.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables.net/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        var windowURL = window.location.href;
        pageURL = windowURL.substring(0, windowURL.lastIndexOf('/'));
        var x= $('a[href="'+pageURL+'"]');
            x.addClass('active');
            x.parent().addClass('active');
        var y= $('a[href="'+windowURL+'"]');
            y.addClass('active');
            y.parent().addClass('active');
    </script>

    
    <script>
    $(document).ready(function() {
     
    $('#example1').dataTable( {
        columnDefs: [
       { type: 'date-euro', targets: 1 }
    ],
                    "oLanguage": {                      
                    "sLengthMenu": "แสดง _MENU_ เร็คคอร์ด ต่อหน้า",
                    "sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
                    "sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ เร็คคอร์ด",
                    "sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 เร็คคอร์ด",
                    "sInfoFiltered": "(จากเร็คคอร์ดทั้งหมด _MAX_ เร็คคอร์ด)",
                    "sSearch": "ค้นหา :"                  
            }
                        
} );
} );

</script>
  </body>
</html>