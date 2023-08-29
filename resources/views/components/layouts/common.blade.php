<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Polly - {{ $pageTitle ??= "Home" }}</title>
    @vite(["resources/css/app.css", "resources/js/app.js"])
    <style>
        .grid-dots {
            background-image: radial-gradient(rgb(68 64 60) .8px, transparent 0);
            background-size: 80px 80px;
            background-position: -19px -19px;
        }

        .net-pattern {
            background:
                radial-gradient(35.36% 35.36% at 100% 25%, #0000 66%, #ff1c4d 68% 70%, #0000 72%) 37px 37px/calc(2*37px) calc(2*37px),
                radial-gradient(35.36% 35.36% at 0 75%, #0000 66%, #ff1c4d 68% 70%, #0000 72%) 37px 37px/calc(2*37px) calc(2*37px),
                radial-gradient(35.36% 35.36% at 100% 25%, #0000 66%, #ff1c4d 68% 70%, #0000 72%) 0 0/calc(2*37px) calc(2*37px),
                radial-gradient(35.36% 35.36% at 0 75%, #0000 66%, #ff1c4d 68% 70%, #0000 72%) 0 0/calc(2*37px) calc(2*37px),
                repeating-conic-gradient(#171717 0 25%, #0000 0 50%) 0 0/calc(2*37px) calc(2*37px),
                radial-gradient(#0000 66%, #ff1c4d 68% 70%, #0000 72%) 0 calc(37px/2)/37px 37px #171717;
        }

        .nested-squares {
            background:
                linear-gradient(135deg, #0000 20.5%, #171717 0 29.5%, #0000 0) 0 25px,
                linear-gradient(45deg, #0000 8%, #171717 0 17%, #0000 0 58%) 50px 0,
                linear-gradient(135deg, #0000 8%, #171717 0 17%, #0000 0 58%, #171717 0 67%, #0000 0),
                linear-gradient(45deg, #0000 8%, #171717 0 17%, #0000 0 58%, #171717 0 67%, #0000 0 83%, #171717 0 92%, #0000 0),
                #fb7185;
            background-size: 100px 100px;

        }
    </style>
</head>

<body class="">
    {{ $slot }}

    <div class="hidden border border-neutral-800 border-rose-600"></div>

</body>

</html>
