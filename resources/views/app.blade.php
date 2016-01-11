<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CanRover</title>
        <link rel="stylesheet" href="/css/app.min.css">
    </head>
    <body>
        <div class="top-bar">
            <div class="top-bar-left">
                <ul class="dropdown menu">
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" class="logo" width="960" height="560" viewBox="0 0 960 560"><path d="M577.27 245.054c0 80.106-64.938 145.044-145.044 145.044S287.18 325.16 287.18 245.054 352.12 100.01 432.226 100.01 577.27 164.948 577.27 245.054zm-145.045-99.1c-54.73 0-99.1 44.37-99.1 99.1s44.37 99.1 99.1 99.1 99.1-44.37 99.1-99.1-44.37-99.1-99.1-99.1z"/><path d="M566 237h70v22h-70z"/><path d="M636.146 237.053l-.238 70-22-.075.238-70zM439.833 378.877l-.238 70-22-.075.238-70z"/><path d="M439.533 448.963l-70-.483.152-22 70 .482zM298.445 253.018l-70-.047.015-22 70 .048z"/><path d="M228.324 252.93l.287-70 22 .09-.286 70zM424.718 111.243l.287-70 22 .09-.287 70z"/><path d="M425.06 41.14l70 .532-.167 22-70-.532zM551.856 305.52l60.466 35.273-11.086 19.003-60.466-35.273z"/><path d="M612.374 340.865l-35.483 60.34-18.962-11.152 35.483-60.34zM371.357 364.446l-35.483 60.34-18.964-11.152 35.483-60.34z"/><path d="M335.787 424.85l-60.22-35.693 11.218-18.928 60.22 35.692z"/><g><path d="M312.66 184.52l-60.438-35.314 11.098-18.994 60.438 35.315z"/><path d="M252.144 149.107l35.524-60.317 18.96 11.166-35.525 60.317z"/></g><g><path d="M493.192 125.69l35.525-60.32 18.958 11.166-35.525 60.32z"/><path d="M528.784 65.276l60.192 35.727-11.228 18.917-60.192-35.727z"/></g><g><path d="M507.227 356.115l35.616 60.263-18.94 11.194-35.616-60.263z"/><path d="M542.915 416.493l-60.38 35.405-11.127-18.976 60.38-35.405z"/></g><g><path d="M320.937 319.66l-60.382 35.406-11.128-18.977 60.382-35.407z"/><path d="M260.415 355.076l-35.202-60.507 19.018-11.066 35.204 60.507z"/></g><g><path d="M357.325 133.936l-35.573-60.283 18.945-11.18 35.574 60.283z"/><path d="M321.73 73.506l60.407-35.37 11.116 18.986-60.408 35.37z"/></g><g><path d="M543.642 170.485l60.41-35.37 11.116 18.985-60.41 35.37z"/><path d="M604.16 135.108l35.16 60.528-19.022 11.05-35.16-60.528z"/></g></svg>
                    </li>
                    <li><a href="/">CanRover</a></li>
                </ul>
            </div>
            <div class="top-bar-right">
                <nav data-magellan>
                    <ul class="horizontal menu navigation">
                        <li class="navigation__button"><a href="{{BASE_URL}}#about">About</a></li>
                        <li class="navigation__button"><a href="{{BASE_URL}}#team">Team</a></li>
                        <li class="navigation__button"><a href="{{BASE_URL}}#missions">Missions</a></li>
                        <li class="navigation__button"><a href="{{BASE_URL}}#outreach">Outreach</a></li>
                        <li class="navigation__button"><a href="{{BASE_URL}}#acknowledgements">Acknowledgements</a></li>
                        <li class="navigation__button"><a href="{{BASE_URL}}#sponsors">Sponsors</a></li>
                        <li class="navigation__button"><a href="{{BASE_URL}}#contactus">Contact us</a></li>
                        <li class="navigation__button"><a href="{{BASE_URL}}/news" class="news">News</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="container">
            @yield('header')
            <div class="row">
                @yield('content')
            </div>
        </div>
        <footer>
            @yield('footer')
            <script type="text/javascript" src="/js/app.min.js"></script>
        </footer>
    </body>
</html>
