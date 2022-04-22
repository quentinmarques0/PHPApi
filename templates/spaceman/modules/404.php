<div class="hamburger-menu">
  <button class="burger" data-state="closed">
    <span></span>
    <span></span>
    <span></span>
  </button>
</div>
<nav data-state="closed">
  <ul>
  <li>
    <a {{ phpref("home") }} >Home</a>
  </li>
  <li>
    <a {{ phpref("contact") }} {{ phpvar("name", "value" ) }}>Contact</a>
  </li>
  </ul>
</nav>
<main>
  <form class="container" {{ phpref("home", "action") }}>
    <div class="row">
      <div class="col-md-6 align-self-center">
        <?php
            Templates::use_module("svg");
        ?>
      </div>
      <div class="col-md-6 align-self-center">
        <h1>404</h1>
        <h2>UH OH! You're lost.</h2>
        <p>The page you are looking for does not exist.
          How you got here is a mystery. But you can click the button below
          to go back to the homepage.
        </p>
        <button type="submit" class="btn green">HOME</button>
      </div>
    </div>
  </form>
</main>