<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>AirBuddy Rocket</title>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link
      rel="icon"
      type="image/svg+xml"
      href="/theme/{{$theme}}/assets/C4MjgjTg.svg"
    />
    <link
      rel="preload"
      href="/theme/{{$theme}}/assets/bzaxzr8Y.json"
      as="fetch"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin="" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
    <link
      rel="stylesheet"
      href="https://fonts.font.im/css?family=Fredoka+One|Rubik:500"
      crossorigin=""
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@300..900&amp;display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Fredoka:wght@600&amp;display=swap"
      rel="stylesheet"
    />
    <link
      rel="preload"
      href="/theme/{{$theme}}/assets/bzaxzr8Y.json"
      as="fetch"
    />
    <script id="config" src="/theme/{{$theme}}/config.js"></script>
    <script>
      window.__deploy_route_base__ = '/theme/{{$theme}}';
      window.CONFIG.theme.primary = '{{$theme_config['primary']}}'
      window.CONFIG.theme.mode = '{{$theme_config['theme_mode']}}'
      window.CONFIG.page.layout = '{{$theme_config['layout']}}';
    </script>
    <script>
      // reCAPTCHA 是否加载，如果你的站点需要使用 reCAPTCHA，可以将此值设置为 true，并且管理面板中设置好 reCAPTCHA 的相关配置
      const reCAPTCHAIsEnabled = false;
      if (reCAPTCHAIsEnabled) {
        const script = document.createElement("script");
        script.src =
          "https://www.google.com/recaptcha/api.js?render=explicit&onload=onReCAPTCHALoaded";
        script.async = true;
        script.defer = true;
        document.head.appendChild(script);
      }
    </script>
    <meta name="version" content="0.0.0-f556f632" />
    <script
      type="module"
      crossorigin=""
      src="/theme/{{$theme}}/assets/index-YMEVgbY5.js"
    ></script>
    <link
      rel="stylesheet"
      crossorigin=""
      href="/theme/{{$theme}}/assets/C_NFvzVJ.css"
    />
  </head>
  <body>
    <div id="app"></div>
  </body>
</html>
