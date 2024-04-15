<nav>
 <div class="nav-wrapper"
  <a href="#" class="brand-logo right">Logo</a>
  <a href="#" data-activates="slide-out" class="btn_menu brand-logo left" style="color: red; font-size: 16px;">
</div>
</nav>
<ul id="slide-out" class="slide-nav">
<li><div class="user-view">
<div class="background">
<img src="http://materializecss.com/image/office.jpg">
</div>
<a href="#!user"><img class="circle" src="https://pbs.twimg.com/profile_images/1597124225508188161/c5MW4mok_400x400.jpg"
<a href="#!name"><span class="white-text name">Daniel Monreal</span></a>
<a href="#!email"><span class="white-text email">monreal.danielperez074@gmail.com</a>
</div></li>
<li><div class="divider"></div></li
<li><a class="subheader">Subheader</a></li>
<li><a class="#!"><i class="material-icons">cloud</i>Casa</a></li>
<li><a class="#!"><i class="material-icons">cloud</i>Fotos</a></li>
<li><a class="#!"><i class="material-icons">cloud</i>Contactos</a></li>
</ul>
<script>
$(document).ready(function(){
  $(".btn_menu").sideNav();
});
</script>
@yield('contenido')
