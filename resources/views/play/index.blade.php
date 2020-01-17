<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <!-- <link rel="shortcut icon" href="%PUBLIC_URL%/favicon.ico" /> -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="theme-color" content="#000000" />
    <!--
      manifest.json provides metadata used when your web app is added to the
      homescreen on Android. See https://developers.google.com/web/fundamentals/web-app-manifest/
    -->
    <link rel="manifest" href="%PUBLIC_URL%/manifest.json" />
    <!--
      Notice the use of %PUBLIC_URL% in the tags above.
      It will be replaced with the URL of the `public` folder during the build.
      Only files inside the `public` folder can be referenced from the HTML.

      Unlike "/favicon.ico" or "favicon.ico", "%PUBLIC_URL%/favicon.ico" will
      work correctly both with client-side routing and a non-root public URL.
      Learn how to configure a non-root public URL by running `npm run build`.
    -->
    <title>enSeñas</title>

    <link href="https://fonts.googleapis.com/css?family=Handlee|Staatliches" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('recursosReact/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('recursosReact/css/index.css') }}">
    
    <script type="text/javascript" src="{{ asset('recursosReact/bootstrap/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('recursosReact/bootstrap/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('recursosReact/bootstrap/bootstrap.min.js') }}"></script>
  </head>
  <body>
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root"></div>
    <!--
      This HTML file is a template.
      If you open it directly in the browser, you will see an empty page.

      You can add webfonts, meta tags, or analytics to this file.
      The build step will place the bundled scripts into the <body> tag.

      To begin the development, run `npm start` or `yarn start`.
      To create a production bundle, use `npm run build` or `yarn build`.
    -->
    <script type="text/javascript" src="js/app.js"></script>
  </body>
</html>
