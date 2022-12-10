<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.scss" />
    
</head>
<body>
    <!-- 
    Resource SVG for Parallax 
-->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 240" style="position:absolute;top:0;left:0;width:0;height:0;overflow:hidden;" focusable="false" aria-hidden="true">
        <!-- show content using white mask fill -->
        <style>
            mask {
                fill: white;
            }
        </style>

        <!-- masks -->
        <mask id="m1">
            <path d="M480 215.9h-3.9v3.3l-18-.7V240H480zM405 240l-.6-85.5-4.4-3.6-6.9-.7h-6.2v.5l-17.7-.5v-1h-1.3v1l-.7-.1-.6 1-4.3.1v-1l-.7-.1v-1.3l-.5-.5h-1v.8l-1.5-.1v.7l-.6-.1v-1.3l-1.3.3v1.2l-1.8-.2-3.1-.1-1.8-1.5-1.9 1.2v.7l-6.3-.1-.8-.2.4 90.4zm-181.5 0v-86.5l1-1.2h.4v-9.5h2.6v-4.5l.7-.4v-5.1l3.9-1.1h.9v-1.2h-.7v-1.3l2.8-1v-2.7l1.3-.9h5.1v2.5l.8.1 1.3.9v3.7l3.2-.2v2l.3 3.4.4.2v4.6l2.3.1.3 6.7 1.1.2v2.6l.9.1v51.1l6.3.3.7.2v10l2.3.1v6.6l.7.1v10.3h.4v9.8zm-128.8 0l1.8-1.2v-1.5h.6v-.7l2.3-1.5h.4v-2.9l.8-.9h3.6v3.6h3l8.3.4v-25.4l2.4-1.3v-6.1l1.5-.7 3.4-.9v-4l.4-.4.4-3.1h2.6v-1.5l1.1-.5h1.9v-.5h.6v-2.6h1v-.7h7.8v3l-.5.5v.7l.5.1.5.7 2.2-.2v-.3h.6v.4l.5-.1.5-.4h.3v3.7l.7.1v5.8l4.6-.3.5 15.1 1.1.2.3 23.4zM0 224.5l5.2-3.3 34.4 2.6v2.6h1.2V240H0zm267.2 15.2v-3.8l1.7-2.8h2l.3-11.8 1-2.2h3.8v-1.2h6.3l.6-4.3h4.1v-1.8h11.3v2l2.8.6v3.6l.7 1.1h6.3l.9.1v2h4.1v14.7l4.1-.1v1l6 .1v3.1h2.8l-.4-22.5h3.5v-1.8l3.7-.1v1.3h3.1V240h-68.7z" />
        </mask>
        <mask id="m2">
            <path d="M480 149h-10.9v64.1l-5.7.8v12.6h-6.6V175l-.6-.8v-1.5l-2-1.1-.8-.1v-1.2l.5-.8-2.7-1.8-1.9.1v-.4l-9-.2v.5l-1-.1v3.8l-1.2.1v1.3l-1.5-.2v52.2l-9.8-.4-.3 2.1h-1.9v-7.6l-.4-.5v-1.8l-1.1-1.3v-2.9l-1.3-1.7v-3.1l-1.2-1.7v-3.7l-3.3-3.6-1.5-.4v-2.8l-1.9-1.4-.2-1.7-2-.1v.6l-1.7.1v-1l-2.1-.1v1.3l-.5-.1-.3 1-.6.4v3.4h-1.8l.3 42.2h75zm-256.5 91v-9.5h-3.3v-35.2l-1.9-1.3v-2.7l-.5-.4v-2.3h-1.4l-2.8-4.8v-1.1h-3.3l-.7.5v1.2l-2.5 4.2h-.7l-1.3 1.1v-8.4l-10.2-.4v.3l-8-.3-3 1.8v25.5l-.5-.1v-6.7l-.8-.3-21.7-.9-3.8 2.5V240zm-96.7-48.4v-19.9h-.7l-.3-.8h-1l-.9.5h-1.3l-.8-.5-1.1.6-11.3-.6-12.3 4.5-.3 35.8-3.2-2.6-1.4-.1v-.7h-3.3l-1.2.2-2.8 4.3v.9h-1.2v3.2l-2.5 1.2v4.9l-2.2.9v10.7l-3.4-.3v-7.9l-7.2-.3V224l-6.6-3.7-9.9 4.6-6.1 3.4v2.3l-3.6.6-1.4-.2v9h86z" />
        </mask>
        <mask id="m3">
            <path d="M0 134.8h7.8V133h4.8v1.5l11.4-.1 3.2 1.5h4.3v4.7h1.3l-.2 47.2 6.7-2.3 2.4-.2h.6v-41.2l.3-.1v-4.7l-.2-.5-.6-1.7.6-.5.5-.8.5-.2.2-1.5 2.5-.8.3-.8 2.1-.2 4.9-.3h1.7l.3-.5h13.5l6.3 2.5.9.1v.9h4.4v7.9l.3.1v1.6l-.4.1.4 21.8.2.3.2 26.5h1.4v8.6l2-1.2h3.7v-39.5l1.4-.2 1.6-.4v-1.3l.4-.3v-7.1l.6-.2V149l.5-3.1.3-.7.6.1.4 3.6.5-.2v-1.4l.7-2.6.5.1.2 2 .2 2.2.3-.2v-2.2l.3-1.4h.7l.4 3.4.7-.4v-3h.8l.3 3.6.5-.1.5-2 .3-1.3.5.2v2.9l.6-.3v-2.7h.9v3.3l1.3.6v2h.4v7.1l.6.2v1.7l2-.1V240H0zm118.7 36.6v-10.8l11.7-3.5h3.5l1.9-.4h2.6v1l3-.2 1.4-.8h6.8v.7l17.2.5V240H118zm97.7 17.2l1.3-12.9h5.8l28.6-5.8 23.5.5v30.3l4.7-5.1 5.6 4.4v.1h.6l.5 11.7V240h-70.6zm93.1 32.6l-.2-8.1.7-2.3h1.3l3.1-5.5 3.2 3.3h2.4l.6 20.4h1.4l.5-.9 3.3-.2.2 12.1h-16.7zm94.9-60.3l1.8 1.9v6.7h12.5v-1.9l1.2-.4 7.6 1.1.7 5.1 2.1.9v4.9h1.4l.9 1.1h2.6l1.4 1.4 20.2 29.4h.8l.3-5.3.4-.3.3-9.4.4-.1v-9.3l.6-.1v-8.5h.2v-5.2l.6-.3 6.1.2.7.6.3.4v.7l.7.1v.4h.9v65h-64.7z" />
            <path d="M80.5 140.6l1.3-.4h1.4l.4.6v1.8h2.8l.9.5v5.9h4.3l3.4-1.8.4 1.8v91H73.8z" />
        </mask>
        <mask id="m4">
            <path d="M32.7 148.3l3.1 5.4.7 3 2 1.1-1.2 7.2 5 1 65-2.5 2.4-.5v-6.3l3.5-1.4 4.1-.1v4.8l1.8.5 19.3-3.8v-22.5l.9-6h16.3l.8.5.4 3.9.8 18.9 4 .2 3.5-.1v-8.4l.5-.6v-1l1.2-.4.3-.6.9-.4 2.6-.1.4.4h5.2v13.7l.4.3v2.3l3.2-.2v2.7l2.9-.1.3 20.1 2.7.2v-20l.7-.5.3-10.4-1.1-1.1 1.4-.9v-1.8l1.4-.3v-5.7l-.2-.5 5.4-6.6 1.9-.3 4.3 5.8.7.1.2 4.6h1l.3.9v1h.3l.2 1.7h.5l.3.5-.7 1-.1 8.2.6.9.2 1.4V240H32.7zm231.1 21.9v-8l1.9-1.5 5.2.3v-.9l.7-.3h1.8v1.1h3.8l5.8.1-.3 7.3.3 11.3v13.3h4v3.3h11.1v-1.4l1.3-1.9 6.7-.1v8.8h1.7v-9.8l.6-1.9 2-.3.7 1.8h1.4v-3.8l5.1-.1 1 3h1.1v.7h2.8l.2-.9.9-.4 2 .1 3.4-.1v-1.8l7.4-.1 2.1.6v3.5h.9v-2.6l1.2-1.5h.6l1.3 52h-78.7zm156.4-2.9v-10.2h11v.4l1.3.5v.8l1.3-.2.3 8.2 5.7-.3 1.3 1.7h8v-2.1l.3-3.1 1.7-.4 1.2-.4v-3l3.5.2 13.7.2V240h-49.3z" />
        </mask>
        <mask id="m5">
            <path d="M32.7 144.9h1.9v-2.6H36v-1.9l1.3-.3v-1.6l.4-.2v-.7h3l.2.8.5.1v.5l.6.4h.9l37.6-4.4h1.8v1.2l2.3-.2v1.2l2-.2v-2l1.7-.2H91v1.9l2.2-.1v1.8l1.6.1v.7l.6-.2v2.2l1-.3 4.4.1v1.3l.4.6 2.8-.1v-4.1l1.8-.7v-.8l2-.3 1.8.1v1l1.7-.1v.7l1.1-.1.2-.5h.4v-.6h1.2v-.7l.4.1v-.3h1l.4.4.3 1.6 1.7-.1v-.2l2.6-.1v-2.3h2.7v2.3l2.6-.1v.9l3.2.1.4-.4 1.2-.1v.6h1.5v-.5l1.1.2v.7l.4-.2v-.4l2.7.1v.9h2.3V240H33zM157.5 149.2l1.5-.8v-6.9h1.4v-.6h2v-2.2h2.1l1.4-1.1h2.1v1.8l1.1.8 11.4-.1 1.4.8v1.5l1 .2.7.2v2.3l2.7.4.7.1 16.3.4h5.4l.5-2.6v-2.1l1.1-.8 1.5-.3v-2l3 .1h1.6v2.5l1.4.2.4 1.6h.9V140l3.1-1.5 1.3-.5.7-3.1 2.8-.7.5-4.3h1.9v-3.3l2.2-6.6.5-2.8.5-2.2 1.3 4.6 1.9 5 .1.3.5-.3v-6.9l14-.5.8.5v10.1l.5-7.1 1.1-.7h2.8v3l2.4-.1.3 2.3v6.5l1.7-1 2.5-.1v-3.8l.3-2.2.5-1.7h2.6v1.7l.6.2v1.7h.6v1.3l.4.6.5.2v1.6l.4.1v.6h1.5l.3-7.1 1.1-.9 11-.1.7 38.2v10l2.3-3.2v-2.1l2.7-3.2 2.3-.3v-2.4l1-1.3V152l1.3-1.2h.9V94.3h.7V80.8h1.1v.7-6.2l.8-.5v-2.7h1.1v-2h.9v-2.3h.6l.4-.9.4 1.7.6-.2v-3.3h.3v1.2h.7l.4-5.4h.4v-8.5l.8-.6V50.6l.8-.7v-7.4l.3-.3v-2.4l-.3-.4.3-.2v-.9l-.3-.2h.3v-.8l-.3-.9.5-.3v-9.3h.4v3.8l.4.2v5.4l.3.2-.2.5.2.5-.2.3.2.5-.3.5.3 1.1-.3.5.2 2.2.5.4v7.2l.4.5.3-.5v.9l-.2.5-.2.4.3.4.9.5-.5.4.2.8.3 8.8.2.3v2.3l.6.3v1l.4-.4v1.1l.3.1.5-2.5v3.4l1.7.6v1.1l.8.6-.2.7.2.9.7-.5.6.2.2 2.6.7-.1.2 5.5v.5l1.1.4v.7l.4.4v12l.8.2V151h2.4l.8 7.1v4.9l3.4-.5 3.4.3.8.8 1 .2v8.1h2.5l1.3-.9h1.2v-1.1h2.2v1l2.9-1v-3l2.1-.1v-7h.8l4.6-10v-14l9-.6 5.6 1.7-.1 11.4 8.3.7 20.4 3.6 12.9-.3v-4.8l9.7-.9 1.1 2.4 3.1 4.5 1.3-1 3.9-.4 1.3 1.4 3.5-.4v-32.5l3.4-.6 3.1.9h1.3l1-.9.6 1.5 1 .1v-.8h3.5v3l1.1.4v14.6l1.2.3.5-.7 4.6 3.4.6 1.6v3.1l1.3.1v-1.2l1.3.2 1.5-1 6.8.2 2.8-.2 2.4-.5v-1.7l7.4.1v1.5l2.6.4.6 1.5h5.8V240H157.5z" />
        </mask>
        <mask id="m6">
            <path d="M178.5 126.2h2.6l.7.9 3.2-.5v1.6h2.1l.7 1.9h1.9l1.9-1.9 3.2 3.3 1.7-.7v-4.3l2.1-.3.6-1.6h2.7l.4.9 1.5.1v-1.3h10.5l1.1 1.5 1.6-.5 1.8.3.9.1.4-2.9.4-.6.3-2.2 1.2-2.7h.8l1.2 2.3.8 1.8.8.6v2.4l1.2-1.7.8.2.6 1.1 1.2-.9 1 .4 4.6-.8 1.8-.1 14.4-.7 2.3-6.2V114l.5-.5v-1.9l.8-4.7 1.2 4v2.7l.3.5.5.7v1l1 6 1.4-.1.6-4.9.9-.4v-4.8l4.1.1.4 5.8 1.2.3.5 1.4h.9v12.3l14.7-.7 3.4-.2.3-1.4 3 .2v1.2l3.6-.1v-1.1l23.4-1.2h1.7l.3 2.9 5.6.4v3.5h5l.4 1.7h2.4l1.6 2.1.3 2.4h1.7l.5-1.3 1.7-.6V137l1.3-.4 1.1-2.4 1.5.4.5 2.3 2.4-.2 1.4-.9 12.5.4v-2.8l3.1-.4v-2.7l8.9-.2.3 3.7.8.2v1.6h2.3v2.6l.6.2v11.9l4.5.2v-20.7l.8-.4v-1.2l.7-.1v-3.2l4.7.7.3 3.6 1 .7v.9l.7 1.2.5 4.8 1.9-.6v-17.1l1.5-.3 1.4-.6v-1l.8-.6 1.9.8.4 3.5 1.6-.1.8.7v15.7l1.2-.2.6-.7v-8.8h4.5l3.9.6 2.2.6V140l1.9.9 1.7-.1.8-.4v-1.2l1-.3.3-.5 1.4-1.3.9 1.4 1.1.6.3 1 2.9.1v-3.8l3.3-.2 15 1 3.8-.5v-3.3l3.2-.7.6-1.9h4.7l.8.4h1.5v1.8h1.3l.5 1.5 1.4-.1V133l-.6-.6.6-.5v-2.8l1.5-.4v3.1l1.3-.4v-1.5l2.3-.1 2-.2h4.4l.7.4 1 .1 1.3.5v1.3l1.9-.1.4.8h1.2v-.9l1.3-2.1v-.7l1.7-.2.6.8V240L0 236V131.5h2.3l.8-1.4h.6v-1.6l1-1.3h5.1l.5-1.4v-4.6l.7-.4h.6v5l.4.4v1l1.8-.1 1 .2.5.5.6-.6 1.4-.1v-5.9l1.2-.4.4 6.1 1 .2 2.9-.2 3.1-.1 3.4-.6H32l.7.3 2.4.2v-1.5l.9-.1.3-.8 2.5-.2.4.3 2.9-.4 7.1-1v-1.5l7-.7 1 1.1.7.5.5 3.8h2.5v4.8l13.3.5 2.4 1.9h5.5l1.7-.5 4.7-.3 2.5-.1.6-2.7 1.2.1.4-2.8 1.4-2 2-.1 1.2 3.2v3.3l2.3-2.1 4.7-.3h7.6l3 1.3 4.7-.8h6.7l3.3-.1 3.4.4 3-.5 9.6-1.2.8-5.3 3.9-.8 3.8.4v1.6l6-.6 1.9-1.6 1.5.1 1.1 2.6v3.6h4v-1.1h9.4" />
        </mask>
        <mask id="m7">
            <path d="M480 128.7l-1.6-.3v-1.7l-.4-1h-2.5l-.2.8h-1.1l-.4-1.1h-2.5l-.9-.6h-4l-.2.9v.7l-.5.5-6.1-.7-4.9-.5-.4-.9h-.7l-.3.7h-.7v-.7h-.8v-.9h-.6v-.5h-.5v.3l-.8.1v.9h-.9v.7l-7.5-.1-.9-.3-15-.4-1.8-.1-.5-.3-.5.3-2.4-.2h-1.7l-2.6-.1v-.5l-5.8-.3-.9-1h-2.3v1.1l-1.6-.2-.6-.5-.8-.8h-.7v-.7l-1.8-.4v-1.4l-1.4-.4v-.6l-1.2-.3v-.6h-1.8v.7l-2.3-.7h-6.1l-.3.5-2.1.4-.3.3-.7-.1-1-.6-2.6-.1-.3.5h-1v-.9l-.6-.3-.5-4.7-.6-.2-.4-1.1-.7.9v-3.5h-1v-1h-1v.4l-1.1.1v6.4l-1.1-.4v-.9l-.5-1v-2.7l-2.4-.2v-2.5l-.6-.3V105l-6.2.2h-3.1l-.7 1.2-.5.5v2.6l-1.3.1.3-10.2H354v1l-1.4-1.2-2 1.5-.2.7-1.1.3-1.4 1.6-.3 6-.3.2-.4 3.4-1.4.2v-3.7l-.5-.2v-4l-1.3-2.4-2.3.1-.9 1-1-.2v-1.4l-2.3-3.7-.5.4 1.8 3.4-.3 1.8-1.2.3-.3-5.1-6.1-.2-.2 8.8-.5.3v1.4l-1.1.1-.4-.9-.4-.6-1.3-.2v-6.3l-.4-.3-1.9-.1-.6.5v4l-.9-.4-.5-.1-1.2 1v2.9l-.6.2v.9l-.6.7h-.5V108l-1.1-.6-1.4.1-.8 1.1-22.7-12.8h-.9v.9l-4.3-.3-.3 1.4-.3.7-1.1.4v5.9l-.7-.2-.6-.1v-4.2l-.5-.4v-4.5h-4.4v4.1l-1.4-3.6-1.4 2.8v.6H276l-.3.4-.2.2h-1.2v4.9l-1.2.1-.5-2.3h-3.3l-.4 1.1-.3 3.2-3.5-.2-.3-.8-.7-.4-.2-2-.9-1.2-1.2-.1-.7.3-1.2 1.3v2.3l-1.5.1-.5.7h-1.8v1.5l-.7.6-.9-.2v-5.2l-2.1-.1-2.7.1-.3 8.8-.7.3-.3.5-.9.1-.3.7-1.6-.1-.9.4-1.4-.2-2.5.5-2.5.1-1.3-.1v-1.5l-.9.2-.2 1.2-1.4.2v-1l-.8.1v.8l-1.4-.6-1.4.3-1.2.2-1.5.1v-5.4l-2.8-.1v-1l-.4.1v-.4l-1.1.2-.4.8-1.3.1-.2 2.3-.6-.1-.4 3-8.2-.3-7.2-.2-4.8-.2-1.2-.6-2.9.6-1.8.5-10.8-.1-3.3-2.1-.7-.7v-4.6l-3.3-.2v3.2l-1.2 1.5-2.5 1.2-2.5.7-1.6-1.4-.4-1.6v-2.4l-1.3-.5-2.2.5-1-.5-.4 1.3h-1.9v-2.3l-5.2-.8-.5 1.3-.9.1v-2.4l-.9-.7h-1.2l-.3 4.4-4.4.4v-.8l-1.4-1.5-2.4 1-.4 2-1.3-.7-1.4-.4-1.2-1.6v-.8l-1.2-.3-.4-1.2-3.7.1v4.2l-1.2 1.1-1.1-.2-1.1.2-.3-3.3-2.9-.1v2.8l-1.5.6v-1.7l-1.1-.1v-4.7l-1-.2v.5l-.6 5.3-1.4.3-.7-.5-1-.9-1.6.3v-1l-1.5.3-3.2 1.3h-1.1v-2l-1.4-1.1-1.3 1.1v3.9l-.6.4-.9-.2-.9-1.3-1.3-1.4v-2.1l-.6-.8-1 1.5-.4 4.7-1.7.1-1.9-.4-2-.4-1.1-1.3-.8-.1-3.9-.2-2.3.1-.9 2.2v1.5l-3.6.6-1.4.6-1.6 1.9-1 1.6-2.3.9-.5 2h-1.1v-2.8l-2.1-1.3-3.3-.1-1.6.8-3 1.2v2.6l-2 .1-2.6.1-2.5-.6-12.9-.9-2.2.1-1-1.3-.7-2.8v-1.3l-2.8.1v5.1l-16.3-.6-14-.2H3.8l-.7-.7-.7-1.7-1-1-1.4-.1V240h480z" />
        </mask>
        <mask id="m8">
            <path d="M0 101.4l43.5-2.2h184.4l1.3-.6.5-1h.8l1 1.1 3.4.1 19.9-.3 1.5-.9h.6l1.6 1.2 70.3-.2 43.4.2.6-1.6v1.1l.8.5h81.7l.4-1h5.2l.4 1 18.7-.5V240H0z" />
        </mask>


        <!-- parallax parts + background image  -->
        <svg id="bg">
            <image width="480" height="240" xlink:href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/68939/ny.jpg" />
        </svg>
        <svg id="p8">
            <use mask="url(#m8)" xlink:href="#bg" />
        </svg>
        <svg id="p7">
            <use mask="url(#m7)" xlink:href="#bg" />
        </svg>
        <svg id="p6">
            <use mask="url(#m6)" xlink:href="#bg" />
        </svg>
        <svg id="p5">
            <use mask="url(#m5)" xlink:href="#bg" />
        </svg>
        <svg id="p4">
            <use mask="url(#m4)" xlink:href="#bg" />
        </svg>
        <svg id="p3">
            <use mask="url(#m3)" xlink:href="#bg" />
        </svg>
        <svg id="p2">
            <use mask="url(#m2)" xlink:href="#bg" />
        </svg>
        <svg id="p1">
            <use mask="url(#m1)" xlink:href="#bg" />
        </svg>
    </svg>






    <div class="page">
        <header>
            <!-- 
            The Parallax  

            Note! unlike DOM elements SVG's will cause repaints even if 
            animating transforms only. To better animation performance 
            we wrap each parallax part in a div and animate that 

        -->
            <div class="parallax">
                <div class="bg"><svg viewBox="0 0 480 240">
                        <use xlink:href="#bg" />
                    </svg></div>
                <div class="p8"><svg viewBox="0 0 480 240">
                        <use xlink:href="#p8" />
                    </svg></div>
                <div class="p7"><svg viewBox="0 0 480 240">
                        <use xlink:href="#p7" />
                    </svg></div>
                <div class="p6"><svg viewBox="0 0 480 240">
                        <use xlink:href="#p6" />
                    </svg></div>
                <div class="p5"><svg viewBox="0 0 480 240">
                        <use xlink:href="#p5" />
                    </svg></div>
                <div class="p4"><svg viewBox="0 0 480 240">
                        <use xlink:href="#p4" />
                    </svg></div>
                <div class="p3"><svg viewBox="0 0 480 240">
                        <use xlink:href="#p3" />
                    </svg></div>
                <div class="p2"><svg viewBox="0 0 480 240">
                        <use xlink:href="#p2" />
                    </svg></div>
                <div class="p1"><svg viewBox="0 0 480 240">
                        <use xlink:href="#p1" />
                    </svg></div>
            </div>
        </header>


        <main>
            <h1>
                <svg class="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129.3 145.3">
                    <path d="M128.8 122.6c-2 2.4-14 14.3-24.3 21.4-1.8-24.8-13.7-40.7-33.2-54.3a336 336 0 0 0-.2 33c.4 7 3.8 11.2 9.3 15.7-7.2 1.6-28 1.3-35-1 .7-.5 9.5-5.4 10.3-21.3.5-11.4.6-19.8.2-33.7l-.9-3.6c-9.5-7-17.7-14.1-28.4-25.6 9.8 25.7-2.6 57.8-4 69.6-.5 4-1.8 12-1.3 20.3-3.1-1.9-15.4-10-21.3-17.6C17.1 96 29.6 67.3 2.7 41c5-7.6 12.5-14.4 18.6-17.3a80.4 80.4 0 0 0 30 38.9C43.7 34.4 33.9 25 27.7 21.9c4.1-9.5 17.5-19.4 24.6-22a43.5 43.5 0 0 0-.3 28.8c3.3 11.4 8.4 25.2 14 35.6C69.2 59 79.9 36.7 82.8 27a53.9 53.9 0 0 0 1.6-24.8A77.5 77.5 0 0 1 107 24c-6.5 1.4-9.6 4.7-13.4 11.4-4 6.8-14 32.5-19.6 43.6 5.9 5 16.1 11.4 24.3 21.2-9-35.2.2-62 12-70 5.4 1.7 12.4 6.2 17.5 11.5-19.1 8-17.9 32.4-18 34.2-.8 14 4.8 38.8 15.4 44.9a34 34 0 0 0 3.7 2c-2 2.4-14 14.2-24.3 21.3" />
                </svg>
                New York
            </h1>
            <a class="no-iframe" href="https://codepen.io/jakob-e/debug/ELqeRM/" target="_blank">Open in debug mode</a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quisquam odio consequuntur aliquam nobis eius voluptatem. Nam eum cumque ullam, quae tenetur sed repellendus non accusamus voluptatum quisquam corporis qui?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quisquam odio consequuntur aliquam nobis eius voluptatem. Nam eum cumque ullam, quae tenetur sed repellendus non accusamus voluptatum quisquam corporis qui?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quisquam odio consequuntur aliquam nobis eius voluptatem. Nam eum cumque ullam, quae tenetur sed repellendus non accusamus voluptatum quisquam corporis qui?</p>
            <svg class="separator" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000">
                <path d="M488 13.6c-13.8 7.6-14.4 10.6-14.4 76 0 37.5-.8 58.4-2 58.4-7.5 0-28.4 28.2-28.4 38.3 0 2.2-4.3 8.7-9.3 14.8a105.4 105.4 0 0 0-23.2 46c-1 6.2-2 28.3-2 49.2v38.3H403c-8.3 0-18.8 6.5-23.1 14.4-3.4 6.5-3.6 17.4-3.6 223.4V789h-22c-25.1 0-33.2 2.9-39.3 14.4-3.3 6.3-3.7 13.2-3.7 82.6 0 83.8.4 86.2 12.6 93.7 8.5 5.1 19 5.1 27.6 0 12-7.3 12.6-11.3 12.6-78v-60H386c25.2 0 33.3-2.8 39.4-14.3 3.4-6.5 3.6-17.5 3.6-223.4V387.3h5.7c8.3 0 18.9-6.5 23.1-14.4 3.3-6 3.7-12.3 3.7-62.5 0-52.5.2-56.2 4.2-64.7 6.5-13.4 17.5-19.7 34.3-19.7s27.8 6.3 34.3 19.7c4 8.5 4.3 12.2 4.3 64.7 0 50.2.4 56.4 3.6 62.5 4.3 8 14.8 14.4 23.1 14.4h5.7V604c0 206 .2 216.9 3.7 223.4 6 11.6 14.2 14.4 39.3 14.4h22v59.8c0 66.8.5 70.8 12.5 78.2 8.5 5 19 5 27.6 0 12.2-7.6 12.6-10 12.6-93.8 0-69.4-.4-76.3-3.7-82.5-6-11.6-14.2-14.4-39.3-14.4h-22V572.4c0-206-.1-216.9-3.6-223.4a29.6 29.6 0 0 0-23.1-14.4h-5.7v-38.3c0-21-1-43.2-2-49.1a111 111 0 0 0-23.1-46c-5.1-6.2-9.4-12.5-9.4-14.3 0-10.5-20.9-39-28.4-39-1.2 0-2-20.8-2-58.4 0-52.5-.4-59-3.7-65A29.7 29.7 0 0 0 500 10c-2.8 0-8.3 1.6-12 3.6zM715.3 338.3c-7.8 4-14.4 14.8-14.4 22.7s6.7 18.7 14.4 22.7c5.4 2.8 11.3 3.7 28.6 3.7h21.9v287c0 316.1-.8 297.2 12.6 305.4 8.5 5 19 5 27.5 0 13.2-8.2 12.6 4.2 12.6-240.5V517.2h77.1v225.2c0 244.7-.4 233.9 11.2 243 7.7 6.1 22.7 6.1 30.4 0 11.8-9.1 11.2 3 11.2-258.6 0-229.7-.2-241.5-3.7-248-7.3-13.5-11-14.4-71.8-14.4h-54.4v-54.3c0-48.7-.4-55-3.6-61.1-7-12.8-12.8-14.4-55.2-14.4-32.5 0-38.6.4-44.5 3.7zM195.9 403.2c-13.6 7.3-14.4 11-14.4 71.8v54.4H127c-60.8 0-64.5.8-71.8 14.4-3.5 6.5-3.7 17.2-3.7 212.4 0 226.2-.6 215.4 12.6 223.5 8.6 5.1 19.1 5.1 27.6 0 13.2-8 12.6 1 12.6-207.9V582.1h77.1v189.7c0 209-.6 199.8 12.6 208 13.4 8 31.4 2.6 37.3-11.2 2.4-5.9 2.9-44.6 2.9-261.7V452.3h21.9c17.2 0 23-.8 28.6-3.7 7.7-4 14.4-14.8 14.4-22.7s-6.7-18.7-14.4-22.7c-6-3.3-12-3.7-44.5-3.7s-38.5.4-44.4 3.7z" />
            </svg>
            <h2>8,500,000 Souls</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quisquam odio consequuntur aliquam nobis eius voluptatem. Nam eum cumque ullam, quae tenetur sed repellendus non accusamus voluptatum quisquam corporis qui?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quisquam odio consequuntur aliquam nobis eius voluptatem. Nam eum cumque ullam, quae tenetur sed repellendus non accusamus voluptatum quisquam corporis qui?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quisquam odio consequuntur aliquam nobis eius voluptatem. Nam eum cumque ullam, quae tenetur sed repellendus non accusamus voluptatum quisquam corporis qui?</p>
            <svg class="separator" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000">
                <path d="M488 13.6c-13.8 7.6-14.4 10.6-14.4 76 0 37.5-.8 58.4-2 58.4-7.5 0-28.4 28.2-28.4 38.3 0 2.2-4.3 8.7-9.3 14.8a105.4 105.4 0 0 0-23.2 46c-1 6.2-2 28.3-2 49.2v38.3H403c-8.3 0-18.8 6.5-23.1 14.4-3.4 6.5-3.6 17.4-3.6 223.4V789h-22c-25.1 0-33.2 2.9-39.3 14.4-3.3 6.3-3.7 13.2-3.7 82.6 0 83.8.4 86.2 12.6 93.7 8.5 5.1 19 5.1 27.6 0 12-7.3 12.6-11.3 12.6-78v-60H386c25.2 0 33.3-2.8 39.4-14.3 3.4-6.5 3.6-17.5 3.6-223.4V387.3h5.7c8.3 0 18.9-6.5 23.1-14.4 3.3-6 3.7-12.3 3.7-62.5 0-52.5.2-56.2 4.2-64.7 6.5-13.4 17.5-19.7 34.3-19.7s27.8 6.3 34.3 19.7c4 8.5 4.3 12.2 4.3 64.7 0 50.2.4 56.4 3.6 62.5 4.3 8 14.8 14.4 23.1 14.4h5.7V604c0 206 .2 216.9 3.7 223.4 6 11.6 14.2 14.4 39.3 14.4h22v59.8c0 66.8.5 70.8 12.5 78.2 8.5 5 19 5 27.6 0 12.2-7.6 12.6-10 12.6-93.8 0-69.4-.4-76.3-3.7-82.5-6-11.6-14.2-14.4-39.3-14.4h-22V572.4c0-206-.1-216.9-3.6-223.4a29.6 29.6 0 0 0-23.1-14.4h-5.7v-38.3c0-21-1-43.2-2-49.1a111 111 0 0 0-23.1-46c-5.1-6.2-9.4-12.5-9.4-14.3 0-10.5-20.9-39-28.4-39-1.2 0-2-20.8-2-58.4 0-52.5-.4-59-3.7-65A29.7 29.7 0 0 0 500 10c-2.8 0-8.3 1.6-12 3.6zM715.3 338.3c-7.8 4-14.4 14.8-14.4 22.7s6.7 18.7 14.4 22.7c5.4 2.8 11.3 3.7 28.6 3.7h21.9v287c0 316.1-.8 297.2 12.6 305.4 8.5 5 19 5 27.5 0 13.2-8.2 12.6 4.2 12.6-240.5V517.2h77.1v225.2c0 244.7-.4 233.9 11.2 243 7.7 6.1 22.7 6.1 30.4 0 11.8-9.1 11.2 3 11.2-258.6 0-229.7-.2-241.5-3.7-248-7.3-13.5-11-14.4-71.8-14.4h-54.4v-54.3c0-48.7-.4-55-3.6-61.1-7-12.8-12.8-14.4-55.2-14.4-32.5 0-38.6.4-44.5 3.7zM195.9 403.2c-13.6 7.3-14.4 11-14.4 71.8v54.4H127c-60.8 0-64.5.8-71.8 14.4-3.5 6.5-3.7 17.2-3.7 212.4 0 226.2-.6 215.4 12.6 223.5 8.6 5.1 19.1 5.1 27.6 0 13.2-8 12.6 1 12.6-207.9V582.1h77.1v189.7c0 209-.6 199.8 12.6 208 13.4 8 31.4 2.6 37.3-11.2 2.4-5.9 2.9-44.6 2.9-261.7V452.3h21.9c17.2 0 23-.8 28.6-3.7 7.7-4 14.4-14.8 14.4-22.7s-6.7-18.7-14.4-22.7c-6-3.3-12-3.7-44.5-3.7s-38.5.4-44.4 3.7z" />
            </svg>
            <h2>789 km²</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quisquam odio consequuntur aliquam nobis eius voluptatem. Nam eum cumque ullam, quae tenetur sed repellendus non accusamus voluptatum quisquam corporis qui?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quisquam odio consequuntur aliquam nobis eius voluptatem. Nam eum cumque ullam, quae tenetur sed repellendus non accusamus voluptatum quisquam corporis qui?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quisquam odio consequuntur aliquam nobis eius voluptatem. Nam eum cumque ullam, quae tenetur sed repellendus non accusamus voluptatum quisquam corporis qui?</p>

        </main>

    </div>
</body>

</html>