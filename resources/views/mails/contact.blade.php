<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" href="../../assets/img/icons/foundation-favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/foundation-emails/2.2.1/foundation-emails.min.css" rel="stylesheet">
    <title>Contact SoundCloud {{$subject}} </title>
  </head>
    <body>
      <span class="preheader"></span>


<style type="text/css">
.header {
  background: #8a8a8a;
}
.header .columns {
  padding-bottom: 0;
}
.header p {
  color: #fff;
  margin-bottom: 0;
}
.header .wrapper-inner {
  padding: 20px; /*controls the height of the header*/
}
.header .container {
  background: #8a8a8a;
}
.wrapper.secondary {
  background: #f3f3f3;
}
</style>

<table align="center" bgcolor="#8A8A8A" class="wrapper header float-center">
  <tr>
    <td class="wrapper-inner">
      <table align="center" class="container">
        <tbody>
          <tr>
            <td>
              <table class="row collapse">
                <tbody>
                  <tr>
                    <th class="small-6 large-6 columns first" valign="middle">
                    </th>
                    <th class="small-6 large-6 columns last" valign="middle">
                      <table>
                        <tr>
                          <th>
                            <p class="text-right">SoundCloud</p>
                          </th>
                        </tr>
                      </table>
                    </th>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
    </td>
  </tr>
</table>
<table align="center" class="container float-center">
  <tbody>
    <tr>
      <td>
        <table class="spacer">
          <tbody>
            <tr>
              <td height="16px" style="font-size:16px;line-height:16px;">&#xA0;</td>
            </tr>
          </tbody>
        </table>
        <table class="row">
          <tbody>
            <tr>
              <th class="small-12 large-12 columns first last">
                <table>
                  <tr>
                    <th>
                    <h1>Hallo, {{$name}}</h1>
                      <p class="lead">Je verzond een e-mail vanop de website SoundCloud</p>
                      <p> {{$content}} </p>
                    </th>
                    <th class="expander"></th>
                  </tr>
                </table>
              </th>
            </tr>
          </tbody>
        </table>
  </body>
</html>
