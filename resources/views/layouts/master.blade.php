<!-- GTA 5 Tutorial User Control Panel -->
<!-- Erstellt von Nemesus - https://nemesus.de -->
<!-- Youtube: https://yt.nemesus.de -->

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GTA 5 Tutorial UCP by Nemesus.de</title>
    @include('layouts.template-parts.head-scripts')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('layouts.template-parts.navbar')
        @include('layouts.template-parts.sidebar')
        <div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
        @include('layouts.template-parts.footer')
    </div>
    @include('layouts.template-parts.footer-scripts')
    @method('scripts')
</body>

</html>
