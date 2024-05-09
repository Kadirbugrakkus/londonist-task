<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="margin: 0; padding: 0; background-color: #ffffff;">

<center class="wrapper" style="width: 100%; color: #f1f1f1;">
    <table class="main" cellpadding="0" cellspacing="0"
           style="max-width: 750px; border-collapse: collapse; width: 100%; border-spacing: 0; table-layout: fixed; background-color: #ffffff; color: #000000; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, 'Open Sans', 'Helvetica Neue', sans-serif;">
        <tr>
            <td style="padding:0; border: 0;">
                <table cellpadding="0" cellspacing="0" style="border-collapse: collapse; width: 100%; border-spacing: 0;">
                    <tr>
                        <td style="padding: 0px 40px; border: 0;">
                            <table cellpadding="0" cellspacing="0" style="border-collapse: collapse; width: 100%; border-spacing: 0;">
                                <tr>
                                    <td style="text-align: center; padding-top: 10px; letter-spacing: 3px; text-transform: uppercase; font-size: 1.5rem; color: #000000; border: 0;">
                                        <h1 style="font-weight: 500;">
                                            Davet Onayı
                                        </h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align: center; letter-spacing: 1px; color: #000000; padding: 0; border: 0;">
                                        <h2 style="font-size: 1.75rem; line-height: 30px; margin-left: -20px; text-transform: uppercase">Davet Başvurunuz Onaylandı!</h2>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 10px 10px 30px 10px;">
                                        <table cellpadding="0" cellspacing="0" style="border-collapse: collapse; width: 100%;">
                                            <tbody>
                                            <tr>
                                                <td style="text-align: justify;">
                                                    <p style="line-height: 1.3;">
                                                     Sayın {{ $first_name }}, davet başvurunuz başarıyla onaylanmıştır!
                                                    </p>
                                                    <p style="line-height: 1.3;">
                                                        Etkinliğimizde sizi aramızda görmekten büyük mutluluk duyacağız. Aşağıdaki bilgileri dikkatlice inceleyin:
                                                    </p>
                                                    <p style="line-height: 1.3; font-weight: bold">
                                                        Etkinlik Tarihi: {{ $meeting_date ?? '' }}
                                                    </p>
                                                    <p style="line-height: 1.3;">
                                                        Eğer herhangi bir sorunuz varsa veya ek bilgiye ihtiyacınız varsa, bizimle iletişime geçmekten çekinmeyin.
                                                    </p>
                                                    <p style="line-height: 1; font-weight: bold;"> Saygılarımızla, </p>
                                                    <p>Londonist Investment</p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</center>
</body>
</html>
