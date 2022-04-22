    {{ Templates::use_module("about") }}

    <nav>
        <div class="menu">
            <p class="website_name">LOGO</p>
            <div class="menu_links">
                <a {{ phpref("home") }} class="link">Home</a>
                <a {{ phpref("project") }} class="link">Project</a>
                <a {{ phpref("contact") }} class="link">Contact</a>
            </div>
            <div class="menu_icon">
                <span class="icon"></span>
            </div>
        </div>
    </nav>

    <section class="wrapper">

        <div class="container">

            <div id="scene" class="scene" data-hover-only="false">


                <div class="circle" data-depth="1.2"></div>

                {{ Templates::use_module("scene_01") }}
                {{ Templates::use_module("scene_02") }}
                {{ Templates::use_module("scene_03") }}



                

                <p class="p404" data-depth="0.50">404</p>
                <p class="p404" data-depth="0.10">404</p>

            </div>

            {{ Templates::use_module("text") }}

        </div>
    </section>