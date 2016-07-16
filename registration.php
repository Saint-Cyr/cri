<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>

<body>

<?php include 'header.php'; ?>

    
    
  <div class="container">
  <div class="page-header">
    <h1 class="text-center">Who am I?</h1>
  </div>
        
        <div class="center wow fadeInDown">
            <h2>Devenez membre authentique du (CRIC)</h2>
            <p class="lead" style="color: green"><i>... Et si nous parlions desormain avec le coeur, la tete et les bras... Au lieu de la bouche ?</i></p>
	</div>
        
  <div class="container">
    <div class="row stylish-panel">
      
      
    <div class="container">
	<div class="row clearfix">
		
<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6  column col-sm-offset-0 col-md-offset-2 col-lg-offset-3">

<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<div class="form-group">
  <label class="col-md-3 control-label" for="textinput">Information de connexion</label>  
  <div class="col-md-5">
  	<input id="textinput" name="textinput" type="text" placeholder="ex: mapoukacyr@yahoo.fr" class="form-control input-md">
  </div>
  <div class="col-md-4">
  	<input id="textinput" name="textinput" type="text" placeholder="ex: mapouka" class="form-control input-md">
  </div>
 </div>

<div class="form-group">
  <label class="col-md-3 control-label" for="textinput">Mots de passe</label>  
  <div class="col-md-5">
  	<input id="textinput" name="textinput" type="password" placeholder="mots de passe" class="form-control input-md">
  </div>
  <div class="col-md-4">
  	<input id="textinput" name="textinput" type="password" placeholder="confirmer mots de passe" class="form-control input-md">
  </div>
 </div>

<div class="form-group">
  <label class="col-md-3 control-label" for="selectbasic">Nom complet</label>
  <div class="col-md-5">
      <input type="text" class="form-control" placeholder="ex:   Saint - Cyr MAPOUKA"/>
  </div>
  <div class="col-md-4"> 
        <label class="radio-inline" for="radios-0">
            
          <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
          Male
        </label> 
        <label class="radio-inline" for="radios-1">
          <input type="radio" name="radios" id="radios-1" value="2">
          Female
        </label> 
      </div>
</div>
<div class="form-group">
  <label class="col-md-3 control-label" for="selectbasic">Tel. personel</label>
  <div class="col-md-9">
      <input type="text" class="form-control" placeholder="ex:  00233268568006"/>
  </div>
</div>

<!-- Text input-->
    <div class="form-group">
      <label class="col-md-3 control-label" for="textinput">Date / pays de Naissance</label>  
      <div class="col-md-4">
            <input id="textinput" name="textinput" type="date" placeholder="placeholder" class="form-control">
      </div>
      <div class="form-group">
        
        <div class="col-md-4">
          <select id="selectbasic" name="selectbasic" class="form-control">
            <option value="1">Country</option>
            <option value="2">Option two</option>
            <option value="3">Option three</option>
          </select>
        </div>
        </div>

    <!-- Multiple Radios (inline) -->
    </div>

    <div class="form-group">
      <label class="col-md-3 control-label" for="textinput">Adresse / pays de Residence actuel</label>
      
      <div class="col-md-5">
            <input id="textinput" name="textinput" type="text" placeholder="ex: St. IBE Rd. Korlebu #233 Accra Ghana PB. 234" class="form-control">
      </div>
      <div class="form-group">
        
        <div class="col-md-4">
          <select id="selectbasic" name="selectbasic" class="form-control">
            <option value="1">Country</option>
            <option value="2">Option two</option>
            <option value="3">Option three</option>
          </select>
        </div>
        </div>

    <!-- Multiple Radios (inline) -->
    </div>
    
    <div class="form-group">
      <label class="col-md-3 control-label" for="textinput">Dernier diplome (.pdf .doc)</label>  
      <div class="col-md-3">
            <input id="textinput" name="textinput" type="file" placeholder="placeholder" class="form-control input-md">
      </div>
      <label class="col-md-3 control-label" for="textinput">Photo d'identite (.png .jpg)</label>  
      <div class="col-md-3">
            <input id="textinput" name="textinput" type="file" placeholder="placeholder" class="form-control input-md">
      </div>

    <!-- Multiple Radios (inline) -->
      
      
    </div>

<div class="form-group">
  <label class="col-md-3 control-label" for="selectbasic">Certificat du travail ou contrat</label>
  <div class="col-md-3">
        <input id="textinput" name="textinput" type="file" placeholder="placeholder" class="form-control input-md">
  </div>
  <div class="col-md-4">
      <input id="textinput" name="textinput" type="text" placeholder="site web employeur" class="form-control input-md">
  </div>
</div>
  
  <!-- Textarea -->
<div class="form-group">
  <label class="col-md-3 control-label" for="textarea">Commentaire personel</label>
  <div class="col-md-9">                     
      <textarea class="form-control" placeholder="ex: Je travail presentement a YAME GROUP comme software engineer" id="textarea" name="textarea"></textarea>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-3 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button class="btn btn-success">Envoyer</button>
    <button id="button2id" name="button2id" class="btn btn-danger">Annuler</button>
  </div>
</div>

</fieldset>
</form>
		</div>
		
	</div>
</div>
      
      
      </div>
    </div>
  </div>
</div>
<!-- /container -->
	
    <?php include 'footer.php'; ?>
    

    <script src="js/jquery.js"></script>
    <script type="text/javascript">
        $('.carousel').carousel()
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>