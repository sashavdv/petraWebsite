<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">{{ config('app.name') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">@lang('titles.home')<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="beauty">@lang('titles.beauty')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="relaxation">@lang('titles.relaxation')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="divination">@lang('titles.divination')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact">@lang('titles.contact')</a>
            </li>
        </ul>
    </div>
</nav>