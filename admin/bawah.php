		</div>
		<!-- /.content-wrapper - adanya di file content -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          Version 1.0
        </div>
        <b>&copy; BEM UNPERBA</b> Kabinet 2023/2024.
      </footer>
    </div><!-- ./wrapper - adanya di atas.php -->

    <!-- Dropzone js -->
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 https://code.jquery.com/ui/1.11.4 -->
    <script src="js/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0 -->
    <script src="js/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js"></script>
    <!-- InputMask -->
    <script src="plugins/input-mask/jquery.inputmask.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- page script -->
    <script>
	  $(function(){
		$('#pilkasis1').DataTable();
		$('#pilkasis2').DataTable({
		  "paging": true,
		  "lengthChange": true,
		  "searching": true,
		  "ordering": true,
		  "info": true,
		  "autoWidth": false
		});
		$('#pilkasis3').DataTable({
		  "paging": true,
		  "lengthChange": false,
		  "searching": false,
		  "ordering": false,
		  "info": true,
		  "autoWidth": false
		});
	  });

    // IMPORT ACTION
      //button text when a valid extension file is selected
      $(".browse-button input:file").change(function (){
        $("input[name='filexls']").each(function() {
          var fileName = $(this).val().split('/').pop().split('\\').pop();
          $(".filename").val(fileName);
          $(".browse-button-text").html('<i class="ri-refresh-line btn-success"></i> Ganti');
          $(".clear-button").show();
        });
      });
      //actions happening when the button is clicked
      $('.clear-button').click(function(){
          $('.filename').val("");
          $('.clear-button').hide();
          $('.browse-button input:file').val("");
          $(".browse-button-text").html('<i class="ri-file-excel-2-fill"></i> Pilih'); 
      });

      // Fungsi untuk menyembunyikan elemen setelah beberapa detik
      function hideAlert() {
          var alertBox = document.getElementById('alert-box');
          // Menyembunyikan elemen setelah 5 detik (5000 milidetik)
          setTimeout(function() {
              alertBox.style.display = 'none';
          }, 5000);
      }
      // Panggil fungsi hideAlert saat halaman selesai dimuat
      window.onload = hideAlert;

	</script>
  </body>
</html>
