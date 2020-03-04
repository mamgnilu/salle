<script src="vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="vendors/chart.js/Chart.min.js"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="js/off-canvas.js"></script>
<script src="js/hoverable-collapse.js"></script>
<script src="js/template.js"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src="js/dashboard.js"></script>
<!-- End custom js for this page-->
<script type="text/javascript">
  var date=new Date();
  var heure=date.getHours();
  var minute=date.getMinutes();
  var seconde=date.getSeconds();
  var f = function(){
      if(seconde<59)
      seconde++;
      else{
          minute++;
          seconde=00;
      }
      if(minute>59){
          heure++;
          minute=00;
      }
      document.getElementById("horloge").textContent=heure+":"+minute+":"+seconde;
      setTimeout(f,1000);
  }
  setTimeout(f,1000);
</script>
