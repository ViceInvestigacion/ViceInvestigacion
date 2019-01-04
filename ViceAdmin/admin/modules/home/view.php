
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-home icon-title"></i> Inicio
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Inicio</a></li>
    </ol>
  </section>
  
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-lg-12 col-xs-12">
        <div class="alert alert-info alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <p style="font-size:15px">
            <i class="icon fa fa-user"></i> Bienvenido <strong><?php echo $_SESSION['fullname']; ?></strong>
          </p>        
        </div>
      </div>
    </div>
    <br><br>
    <div style="text-align: center" class="row">
      <div class="col-lg-12 col-xs-12">

        <img id="myImg" src="../images/logo.png" height="150">
        <br><br>
        <!-- The Modal -->
<div id="#" class="modal">

  <!-- The Close Button -->
  <span class="close">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div> 
        <script type="text/javascript">
  

  var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
} 
</script>
        <div style="margin-right: 150px; margin-left: 150px">
          <p>El Vicerrectorado de Investigación tiene entre una de sus funciones, el fomentar la investigación formativa, científica y tecnológica. En tal sentido requiere la colaboración no solamente de instituciones similares, sino también de académicos de alto nivel científico..</p>
        </div>

        <br>
      </div>
    </div>
  </section><!-- /.content -->