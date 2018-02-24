<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/app.css">
    </head>
    <body class="font-sans bg-grey-lighter">
        <div id="app" class="flex flex-row">
            <div class="w-1/5 bg-white min-h-screen shadow">
                <div class="px-8 py-8">
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-teal-dark w-18 h-auto" viewBox="0 0 150 42"><path d="M22.797 33.475H0v-1.95a.847.847 0 0 1 .678-.847c.407-.093 2.593-.5 2.593-.5V4.238S1.093 3.813.678 3.72A.847.847 0 0 1 0 2.873V.958h10.898v1.906a.847.847 0 0 1-.678.848c-.364.102-2.5.525-2.593.525v25.517h11.72c.094-1.27.23-2.407.272-2.593a.975.975 0 0 1 .957-.771h2.22v7.085zM48.05 10.449v1.95a.754.754 0 0 1-.678.847c-.136 0-.593.135-1.229.27-.636.137-1.042.23-1.136.23l-11.398 26.5a1.56 1.56 0 0 1-1.457 1H29.16l4.178-9.127-8.085-18.45a14.992 14.992 0 0 1-2.042-.457.754.754 0 0 1-.678-.848v-1.949h10.305v1.95a.754.754 0 0 1-.678.847c-.271.093-1.093.271-2.542.542l5.127 12c.251.682.45 1.381.593 2.093.271-.906.542-1.635.729-2.093l4.949-11.991c-1.229-.271-2.042-.407-2.5-.5a.771.771 0 0 1-.636-.848v-1.923h8.534l1.636-.043zm24.034 20.212a.763.763 0 0 1 .678.847v1.967h-4.238a1.966 1.966 0 0 1-1.542-.848l-7.576-9.415c-.164-.26-.4-.465-.678-.593a3.05 3.05 0 0 0-1.043-.136h-1.093v7.678c.178 0 1 .178 2.543.5.42.06.733.422.728.847v1.95H49.237v-1.933a.847.847 0 0 1 .678-.847l2.627-.517V3.314c-1.452-.272-2.313-.452-2.584-.543a.754.754 0 0 1-.678-.847V0h7.356v19.67h.991a1.805 1.805 0 0 0 1.458-.636l5.178-5.542c-.178 0-.365-.094-.543-.094-.364-.093-.542-.093-.728-.135a.847.847 0 0 1-.73-.848v-1.923h9.594v1.906a.763.763 0 0 1-.593.848c-.365.093-1.314.27-2.814.542l-5.364 5.704c-.367.48-.81.895-1.314 1.228a4.06 4.06 0 0 1 1.365 1.399l6.356 8.084 1.177.178c.478.129.966.22 1.458.272l-.042.008zm12.212-20.492a10.542 10.542 0 0 1 3.813.678 7.992 7.992 0 0 1 3 1.95 9.246 9.246 0 0 1 2 3.228c.493 1.402.74 2.879.729 4.365.047.432-.014.869-.178 1.271-.22.23-.53.348-.847.322H77.559c-.024 1.292.159 2.58.543 3.814a7.483 7.483 0 0 0 1.559 2.593 5.839 5.839 0 0 0 2.271 1.635 7.534 7.534 0 0 0 2.907.543 9.102 9.102 0 0 0 2.636-.322 12.788 12.788 0 0 0 1.906-.771c.543-.272 1-.5 1.365-.73.263-.202.577-.328.907-.364a.847.847 0 0 1 .77.407l1.136 1.5a6.686 6.686 0 0 1-1.813 1.543 10.28 10.28 0 0 1-2.23 1.135c-.798.275-1.617.488-2.448.636-.826.143-1.662.22-2.5.229a11.695 11.695 0 0 1-4.407-.848 9.847 9.847 0 0 1-3.5-2.407 10.483 10.483 0 0 1-2.271-3.864 15.653 15.653 0 0 1-.848-5.271c-.01-1.518.251-3.024.772-4.45a11.127 11.127 0 0 1 2.135-3.635 9.839 9.839 0 0 1 3.39-2.407 11.186 11.186 0 0 1 4.5-.847l-.042.067zm.135 2.95a6.068 6.068 0 0 0-4.585 1.695 8.28 8.28 0 0 0-2.093 4.678h12.492a7.627 7.627 0 0 0-.407-2.543 5.881 5.881 0 0 0-1.093-2.042 5.534 5.534 0 0 0-1.865-1.314 6.28 6.28 0 0 0-2.5-.457l.051-.017zm22.576 18.406v1.95H96.424v-1.95a.847.847 0 0 1 .678-.847c.406-.093 2.635-.5 2.635-.5V13.763s-2.229-.407-2.635-.5a.847.847 0 0 1-.678-.848v-1.923h7.313V30.16s2.178.407 2.594.5a.847.847 0 0 1 .677.864zM99.102 4.407a2.356 2.356 0 0 1-.23-1.093c-.011-.392.067-.78.23-1.136.157-.352.372-.676.635-.958.264-.262.57-.477.907-.635a2.729 2.729 0 0 1 2.178 0c.336.158.643.373.907.635.263.282.478.606.635.958.176.353.268.741.272 1.136-.003.38-.096.755-.272 1.093a3.186 3.186 0 0 1-1.533 1.525 2.729 2.729 0 0 1-2.178 0A3.186 3.186 0 0 1 99.11 4.39l-.008.017zm25.576 6.542a9.915 9.915 0 0 1 3.5 2.365 10.093 10.093 0 0 1 2.178 3.72c.528 1.581.788 3.24.771 4.907a15.025 15.025 0 0 1-.771 4.906 10.093 10.093 0 0 1-2.178 3.72 9.915 9.915 0 0 1-3.5 2.365 13.025 13.025 0 0 1-9.085 0 9.915 9.915 0 0 1-3.5-2.364 10.847 10.847 0 0 1-2.229-3.72 13.924 13.924 0 0 1-.728-4.907 13.924 13.924 0 0 1 .728-4.907 10.847 10.847 0 0 1 2.23-3.72 9.915 9.915 0 0 1 3.5-2.365 13.025 13.025 0 0 1 9.084 0zm.542 17.44a10.95 10.95 0 0 0 1.695-6.406 10.95 10.95 0 0 0-1.695-6.407c-1.093-1.542-2.813-2.27-5.084-2.27a7.373 7.373 0 0 0-3 .541 5.475 5.475 0 0 0-2.094 1.695 7.627 7.627 0 0 0-1.27 2.73 15.492 15.492 0 0 0-.458 3.728c0 1.226.154 2.448.457 3.636.238.985.67 1.912 1.271 2.728A5.254 5.254 0 0 0 117.136 30a7.314 7.314 0 0 0 3 .636c2.27.025 3.991-.704 5.084-2.246zm17.399-18.22c2.05.091 4.071.506 5.991 1.23v5.932h-1.771a.686.686 0 0 1-.771-.636c0-.09-.09-1.09-.271-3a16.102 16.102 0 0 0-3.543-.5h-.042a4.975 4.975 0 0 0-3.136 1 2.653 2.653 0 0 0-1.229 2.093c-.045.614.15 1.221.543 1.695a5.627 5.627 0 0 0 2.635 1.509c1.136.364 2.094.593 2.814.847l2.178.847a6.78 6.78 0 0 1 1.907 1.178 4.771 4.771 0 0 1 1.864 4 6.67 6.67 0 0 1-2.229 5.272 9.017 9.017 0 0 1-6.084 2.135 23.729 23.729 0 0 1-7.45-1.229v-5.974h1.636a.644.644 0 0 1 .678.542c0 .136.093 1.093.271 2.907 1.47.657 3.07.967 4.678.907a5.339 5.339 0 0 0 3.543-1.136 3.06 3.06 0 0 0 1.177-2.313 2.814 2.814 0 0 0-.542-1.907 4.653 4.653 0 0 0-1.364-1.093 9.322 9.322 0 0 0-1.899-.746c-2-.636-3.39-1.093-4.237-1.458A8.78 8.78 0 0 1 135.924 21a5.212 5.212 0 0 1-1.907-4.237 5.873 5.873 0 0 1 2.178-4.636c1.56-1.364 3.636-1.958 6.466-1.958h-.042z"/></svg>
                    </div>
                </div>

                <div class="flex justify-center mb-8">
                    <div class="relative">
                        <img src="img/avatar.jpg" class="block rounded-full h-18 w-18">

                        <a href="#" role="button" class="rounded-full border h-6 w-6 text-grey-darker absolute pin-b pin-r bg-white hover:shadow-inner">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current m-1" viewBox="0 0 20 20"><path d="M3.94 6.5L2.22 3.64l1.42-1.42L6.5 3.94c.52-.3 1.1-.54 1.7-.7L9 0h2l.8 3.24c.6.16 1.18.4 1.7.7l2.86-1.72 1.42 1.42-1.72 2.86c.3.52.54 1.1.7 1.7L20 9v2l-3.24.8c-.16.6-.4 1.18-.7 1.7l1.72 2.86-1.42 1.42-2.86-1.72c-.52.3-1.1.54-1.7.7L11 20H9l-.8-3.24c-.6-.16-1.18-.4-1.7-.7l-2.86 1.72-1.42-1.42 1.72-2.86c-.3-.52-.54-1.1-.7-1.7L0 11V9l3.24-.8c.16-.6.4-1.18.7-1.7zM10 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/></svg>
                        </a>
                    </div>
                </div>

                <nav class="main-menu">
                    <a href="#" class="main-menu__item main-menu__item-active">
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-4 h-4 mr-2" viewBox="0 0 20 20"><path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm-5.6-4.29a9.95 9.95 0 0 1 11.2 0 8 8 0 1 0-11.2 0zm6.12-7.64l3.02-3.02 1.41 1.41-3.02 3.02a2 2 0 1 1-1.41-1.41z"/></svg>
                        Dashboard
                    </a>
                    <a href="#" class="main-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-4 h-4 mr-2" viewBox="0 0 20 20"><path d="M3.06 2.003h-.002a.713.713 0 0 0-.712.716v10.732c0 .393.321.714.716.715 1.666.004 4.457.351 6.382 2.366V5.302a.686.686 0 0 0-.098-.363C7.766 2.394 4.73 2.007 3.06 2.003zm14.594 11.448V2.719a.713.713 0 0 0-.712-.716h-.001c-1.67.004-4.707.39-6.287 2.936a.686.686 0 0 0-.098.362v11.231c1.925-2.015 4.716-2.362 6.382-2.366a.718.718 0 0 0 .716-.715z"/><path d="M19.284 4.478h-.519v8.973a1.831 1.831 0 0 1-1.825 1.826c-1.413.004-3.742.28-5.392 1.842 2.853-.7 5.862-.245 7.576.146a.714.714 0 0 0 .876-.698V5.194a.716.716 0 0 0-.716-.716zm-18.05 8.973V4.478H.716A.716.716 0 0 0 0 5.194v11.373a.714.714 0 0 0 .876.697c1.714-.39 4.723-.844 7.576-.146-1.65-1.561-3.98-1.837-5.393-1.84a1.83 1.83 0 0 1-1.825-1.827z"/></g></svg>
                        Courses
                    </a>
                    <a href="#" class="main-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-4 h-4 mr-2" viewBox="0 0 20 20"><path d="M7 8a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0 1c2.15 0 4.2.4 6.1 1.09L12 16h-1.25L10 20H4l-.75-4H2L.9 10.09A17.93 17.93 0 0 1 7 9zm8.31.17c1.32.18 2.59.48 3.8.92L18 16h-1.25L16 20h-3.96l.37-2h1.25l1.65-8.83zM13 0a4 4 0 1 1-1.33 7.76 5.96 5.96 0 0 0 0-7.52C12.1.1 12.53 0 13 0z"/></svg>
                        Users
                    </a>
                    <a href="#" class="main-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-4 h-4 mr-2" viewBox="0 0 20 20"><path d="M3.94 6.5L2.22 3.64l1.42-1.42L6.5 3.94c.52-.3 1.1-.54 1.7-.7L9 0h2l.8 3.24c.6.16 1.18.4 1.7.7l2.86-1.72 1.42 1.42-1.72 2.86c.3.52.54 1.1.7 1.7L20 9v2l-3.24.8c-.16.6-.4 1.18-.7 1.7l1.72 2.86-1.42 1.42-2.86-1.72c-.52.3-1.1.54-1.7.7L11 20H9l-.8-3.24c-.6-.16-1.18-.4-1.7-.7l-2.86 1.72-1.42-1.42 1.72-2.86c-.3-.52-.54-1.1-.7-1.7L0 11V9l3.24-.8c.16-.6.4-1.18.7-1.7zM10 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/></svg>
                        Settings
                    </a>
                </nav>
            </div>

            <div class="w-4/5 p-8">
                <div class="flex items-center justify-between">
                    <h1 class="font-light tracking-tight text-grey-darker">Dashboard</h1>
                </div>
            </div>
        </div>
    </body>
</html>
