<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="initial-scale=1.0">
    <title>Confirmação de Pedido</title>
    <style type="text/css">
        /* http://meyerweb.com/eric/tools/css/reset/
        v2.0 | 20110126
        License: none (public domain)
        */
        html,
        body,
        div,
        span,
        applet,
        object,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        pre,
        a,
        abbr,
        acronym,
        address,
        big,
        cite,
        code,
        del,
        dfn,
        em,
        img,
        ins,
        kbd,
        q,
        s,
        samp,
        small,
        strike,
        strong,
        sub,
        sup,
        tt,
        var,
        b,
        u,
        i,
        center,
        dl,
        dt,
        dd,
        ol,
        ul,
        li,
        fieldset,
        form,
        label,
        legend,
        table,
        caption,
        tbody,
        tfoot,
        thead,
        tr,
        th,
        td,
        article,
        aside,
        canvas,
        details,
        embed,
        figure,
        figcaption,
        footer,
        header,
        hgroup,
        menu,
        nav,
        output,
        ruby,
        section,
        summary,
        time,
        mark,
        audio,
        video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }

        tbody,
        tfoot,
        thead,
        tr,
        th,
        td {
            vertical-align: middle;
        }

        /* HTML5 display-role reset for older browsers */
        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section {
            display: block;
        }

        body {
            line-height: 1;
        }

        ol,
        ul {
            list-style: none;
        }

        blockquote,
        q {
            quotes: none;
        }

        blockquote:before,
        blockquote:after,
        q:before,
        q:after {
            content: '';
            content: none;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        table tr th {
            text-align: left;
            font-weight: 900;
            padding: 10px;
        }

        table table tr th,
        table table tr td {
            padding: 5px;
        }

        .email-items .table tr {
            border-bottom: 1px solid #e5e5e5;
        }

        img {
            display: block
        }

        html {
            padding: 0px;
            margin: 0px;
        }

        body {
            font-family: Helvetica, Arial, sans-serif;
            font-size: 12px;
            line-height: 20px;
            padding: 20px 0px;
            margin: 0px;
            background-color: #eaeaea;
            color: #333;
        }

        html * {
            font-family: Helvetica, Arial, sans-serif;
        }

        #email-body {
            max-width: 600px;
            width: 100%;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
        }

        .title-h1,
        .title-h2,
        .title-h3,
        .title-h4 {
            font-weight: 900;
        }

        strong {
            font-weight: 900;
        }

        .title-h1 {
            font-size: 24px;
        }

        .title-h2 {
            font-size: 20px;
        }

        .title-h3 {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .email-items-values {
            text-align: right;
        }

        .email-header {
            padding: 30px 20px;
        }

        .email-content {
            padding: 20px;
        }

        .align-center {
            text-align: center;
        }

        .btn {
            padding: 10px 20px;
            background-color: #1976d2;
            color: #fff;
            font-weight: bold;
            display: block;
            width: 160px;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
        }

        .margin-top-10 {
            margin-top: 10px;
        }

        .margin-top-20 {
            margin-top: 20px;
        }

        .margin-top-30 {
            margin-top: 30px;
        }

        .margin-top-40 {
            margin-top: 40px;
        }

        .margin-bottom-10 {
            margin-bottom: 10px;
        }

        .margin-bottom-20 {
            margin-bottom: 20px;
        }

        .margin-bottom-30 {
            margin-bottom: 30px;
        }

        .margin-bottom-40 {
            margin-bottom: 40px;
        }

        .text {
            margin-bottom: 10px;
        }

        .text.text--small {
            font-size: 11px;
        }

        .block {
            background-color: #e5e5e5;
            padding: 20px;
            display: inline-block;
        }

        .block-featured {
            background-color: #f5f5f5;
        }

        .block-featured-secundary {
            background-color: #1976d2;
            padding: 20px;
            color: #fff;
            font-size: 16px;
            font-weight: 900;
        }

        .color-featured {
            color: #1976d2;
        }

        a.link {
            color: #1976d2;
        }

        .text--gray {
            color: #999;
        }

        center {
            display: block;
            width: 100%;
        }

        .email-items table+table tr td {
            width: 50%;
        }

        @media (max-width: 767px) {
            .email-items table+table td table {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <center>
        <table id="email-body" align="center" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td>
                    <div class="email-header">
                        <div class="email-logo">

                            <a href="/" title="">
                                <img width="auto" height="auto" src="{{ bagisto_asset('themes/velocity/assets/images/emails/logo.jpg') }}" alt="" border="0" />
                            </a>

                        </div>
                    </div>
                    <div class="email-content">
                        <div class="title-h1 margin-bottom-40">
                            Confirmação de pedido
                        </div>
                        <div class="subtitle margin-bottom-20">
                            <div class="text">
                                <strong class="title-h3">Olá, <span class="color-featured">Rafael</span></strong> <br />
                                Obrigado por comprar com a gente. <br />
                                Agora estamos aguardando a confirmação do pagamento.
                            </div>
                        </div>
                    </div>
                    <div class="email-status">
                        <div>
                            <center>
                                <img src="{{ bagisto_asset('themes/velocity/assets/images/emails/status-1.jpg') }}" alt="status" border="0" />
                            </center>
                        </div>
                    </div>
                    <div class="email-content-secundary email-content align-center">
                        <center>
                            <div class="actions margin-bottom-20">
                                <a href="/" class="btn">Acompanhar pedido</a>
                            </div>
                            <div class="text">
                                O numero do seu pedido é
                                <strong>11234561-05</strong><br />
                                realizado em 11/05/2017
                            </div>
                        </center>
                    </div>
                    <div class="email-infos email-content block-featured">
                        <div class="info info--address">
                            <div class="title-h4">
                                Endereço
                            </div>
                            <div class="text">
                                Tatiane paula<br />
                                Rua Paulino Nascimento, 350 - CEP 06720-456 <br />
                                Jardim Elias Cotia - SP <br />
                            </div>
                        </div>
                        <div class="info info--payment">
                            <div class="title-h4">
                                Forma de pagamento
                            </div>
                            <div class="text">
                                Nome da Promissória R$ 109,99 (Parcelamento: 1x)
                            </div>
                        </div>
                    </div>
                    <div class="email-items email-content">
                        <table width="100%" class="table">
                            <tr>
                                <th colspan="2">
                                    Items
                                </th>
                            </tr>
                            <tr>
                                <td valign="top" align="left">
                                    <img src="https://via.placeholder.com/80x80" alt="" border="0" />
                                </td>
                                <td valign="top" align="left">
                                    <div class="text margin-top-10">
                                        <strong>Produto Variação Cor e Tam SKU Variação</strong> <br />
                                        <span>Entrega Agendada</span> <br />
                                        <span>1 unidade(s)</span> <br />
                                        <strong class="color-featured">R$ 109,99</strong>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <table width="100%">
                            <tr class="norow">
                                <td colspan="2" align="right">
                                    <table width="50%" class="table">
                                        <tr>
                                            <td valign="top" align="right" width="50%">
                                                Frete
                                            </td>
                                            <td valign="top" align="right" width="50%">

                                                <strong>R$ 109,99</strong>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="top" align="right" width="50%">
                                                Desconto
                                            </td>
                                            <td valign="top" align="right" width="50%">

                                                <strong>- R$ 19,99</strong>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="top" align="right" width="50%" class="color-featured">
                                                Valor total
                                            </td>
                                            <td valign="top" align="right" width="50%" class="color-featured">

                                                <strong class="title-h3">R$ 109,99</strong>

                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="email-content email-content-ternary block-featured">
                        <div class="text text--small">
                            <strong>Sobre sua compra:</strong> <br />
                        </div>
                        <div class="text text--small">
                            A partir deste momento não será possível alterar o endereço de entrega, incluir ou
                            substituir produtos do pedido, ou mudar os serviços de entrega e a modalidade de pagamento
                            selecionada.
                            Para sua segurança, você poderá receber um contato telefônico para confirmar alguns dados
                            de seu pedido. Na necessidade da confirmação de dados, o prazo para entrega poderá sofrer
                            alteração. Para tanto, mantenha seu(s) telefone(s) de contato atualizado(s) em nosso site.
                        </div>
                        <div class="text text--small">
                            O envio de produtos para pedidos com mais de uma unidade só será atendido se estiver de
                            acordo com a nossa politica de Vendas, bem como poderá ser enviado em momentos distintos.
                        </div>
                        <div class="text text--small">
                            A Loja não envia e-mails sem autorização prévia do cliente nem envia arquivos executáveis
                            por e-mail. Caso suspeite de alguma mensagem eletrônica, entre em contato com a nossa
                            Central de Atendimento.
                        </div>
                        <div class="text text--small">
                            Para saber mais sobre a nossa Política de vendas.
                        </div>
                        <div class="text text--small">
                            Consulte nosso contrato de compra e venda.
                        </div>
                    </div>
                    <div class="email-contact-us">
                        <div class="block-featured-secundary align-center">
                            <center>
                                Dúvidas? Entre em contato com agente: (11) 94164-4545
                            </center>
                        </div>
                    </div>
                    <div class="email-footer email-content">
                        <div class="footer--content margin-bottom-20">
                            <center>
                                <div class="text">
                                    <strong class="color-featured">Nossas redes sociais</strong>
                                </div>
                                <table width="320">
                                    <tr>
                                        <td align="center">
                                            <a href="" title="Facebook">
                                                <img width="32px" heigh="32px" src="{{ bagisto_asset('themes/velocity/assets/images/emails/facebook.png') }}" alt="status" border="0" />
                                            </a>
                                        </td>
                                        <td align="center">
                                            <a href="" title="Instagram">
                                                <img width="32px" heigh="32px" src="{{ bagisto_asset('themes/velocity/assets/images/emails/instagram.png') }}" alt="status" border="0" />
                                            </a>
                                        </td>
                                        <td align="center">
                                            <a href="" title="Youtube">
                                                <img width="32px" heigh="32px" src="{{ bagisto_asset('themes/velocity/assets/images/emails/youtube.png') }}" alt="status" border="0" />
                                            </a>
                                        </td>
                                        <td align="center">
                                            <a href="" title="Twitter">
                                                <img width="32px" heigh="32px" src="{{ bagisto_asset('themes/velocity/assets/images/emails/twitter.png') }}" alt="status" border="0" />
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </center>
                        </div>
                        <div class="footer--content margin-bottom-20">
                            <center>
                                <div class="text">
                                    <strong class="color-featured">Nossas formas de pagamento</strong>
                                </div>

                                <img src="{{ bagisto_asset('themes/velocity/assets/images/emails/payments-email.jpg') }}" alt="status" border="0" />
                            </center>
                        </div>
                        <div class="footer--content">
                            <div class="text text--small text--gray">
                                <center>
                                    @2019 Loja<br />
                                    Obrigado por comprar com agente :)
                                </center>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </center>
    <div class="text text--small text--gray align-center">
        <center>
            <div class="email-content">
                Atenção: Esta é uma mensagem automática, não é necessário respondê-la.
            </div>
        </center>
    </div>
</body>

</html>