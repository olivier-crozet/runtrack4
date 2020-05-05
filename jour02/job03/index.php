  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

       <!--pour java script-->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <!--Import materialize.css-->
     <!--<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>-->

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <header >
         <nav  >

    <div  class="  cyan darken-3 nav-wrapper" >
      <a  href="#" class="brand-logo right"> <form>
        <div class="input-field">
          <input id="search" type="search" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form></a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="">Accueil</a></li>
        <li><a href="">Inscription</a></li>
        <li><a href="">Connection</a></li>
      </ul>
    </div>
  </nav>
        
      </header>
      <body>
    <br/>
    <br/>
         <div class="container">
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>


      <section>
        <form action="#">
    <p>
      <label>
        <input name="group1" type="radio" checked />
        <span>Homme</span>
      </label>
    </p>
    <p>
      <label>
        <input name="group1" type="radio" />
        <span>Femme</span>
      </label>
    </p>
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Prénom" id="first_name" type="text" class="validate">
          <label for="first_name">Prénom</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Nom</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input disabled value="Adresse" id="disabled" type="text" class="validate">
          <label for="disabled">Adresse</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
        <div class="row">
          <label>
        <input type="checkbox" class="filled-in" checked="checked" />
        <span>Informatique</span>
      </label>
      <label>
        <input type="checkbox" class="filled-in" checked="checked" />
        <span>Sport</span>
      </label>
      <label>
        <input type="checkbox" class="filled-in" checked="checked" />
        <span>Voyages</span>
      </label>
      <label>
        <input type="checkbox" class="filled-in" checked="checked" />
        <span>Lecture</span>
      </label>
        </div>
      </div>
      <div class="row">
          <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
      </div>
  </form>
        
      </section>

      </div>
       <footer class="cyan darken-3 page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="https://olivier-crozet.students-laplateforme.io/">Développeur</a></li>
                  <li><a class="grey-text text-lighten-3" href="https://github.com/olivier-crozet">GIT</a></li>
               <br/>
               <br/>
               <br/>

                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
    </body>
  </html>